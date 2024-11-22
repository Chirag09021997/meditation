<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MeditationAudio;
use App\Models\Music;
use App\Models\Recent;
use App\Models\WorkShop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RecentController extends Controller
{
    public function getRecent(Request $request)
    {
        $rules =  [
            'customer_id' => 'required|integer|exists:customers,id'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 200);
        }
        $validator->validated();
        $customersRecent = Recent::where('customer_id', $request->customer_id)
            ->latest()
            ->get()
            ->groupBy('type')
            ->map(function ($items) {
                return $items->pluck('type_id')->take(20);
            });
        $mergedResponse = [];
        foreach ($customersRecent as $key => $favorite) {
            Recent::where('customer_id', $request->customer_id)
                ->where('type', $key)
                ->whereNotIn('type_id', $favorite)
                ->delete();
            switch ($key) {
                case 'meditation_audio':
                    $mergedResponse[] = MeditationAudio::whereIn('id', $favorite)->select('id', 'name', 'short_description', 'description', 'audio_thumb as thumb', 'created_at', DB::raw("'meditation_audio' as type"))->get()->toArray();
                    break;
                case 'music':
                    $mergedResponse[] = Music::whereIn('id', $favorite)->select('id', 'name', 'short_description', 'description', 'audio_thumb as thumb', 'created_at', DB::raw("'music' as type"))->get()->toArray();
                    break;
                case 'work_shops':
                    $mergedResponse[] = WorkShop::whereIn('id', $favorite)->select('id', 'name', 'short_description', 'description', 'thumb_image as thumb', 'created_at', DB::raw("'work_shops' as type"))->get()->toArray();
                    break;
                default:
                    break;
            }
        }
        $response = array_merge(...$mergedResponse);
        usort($response, function ($a, $b) {
            return strtotime($b['created_at']) - strtotime($a['created_at']);
        });
        return $this->sendResponse($response, 'Customer Recent List successfully.');
    }

    public function store(Request $request)
    {
        $rules =  [
            'customer_id' => 'required|integer|exists:customers,id',
            'type' => 'required|string|in:meditation_audio,music,work_shops',
            'type_id' => 'required|integer',
        ];
        $validator = Validator::make($request->all(), $rules);
        $tableMap = [
            'meditation_audio' => 'meditation_audio',
            'music' => 'music',
            'work_shops' => 'work_shops'
        ];

        if (isset($tableMap[$request->type])) {
            $validator->addRules(['type_id' => 'exists:' . $tableMap[$request->type] . ',id']);
        }
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 200);
        }
        $validatedData = $validator->validated();
        Recent::create($validatedData);
        return $this->sendResponse([], 'Recent created successfully.');
    }
}
