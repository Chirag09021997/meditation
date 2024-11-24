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
            'customer_id' => 'required|integer|exists:customers,id',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation Error.',
                'errors' => $validator->errors()->all()
            ], 422);
        }
        $customersRecent = Recent::where('customer_id', $request->customer_id)
            ->latest()
            ->take(20)
            ->get();
        $mergedResponse = [];
        foreach ($customersRecent as $favorite) {
            switch ($favorite->type) {
                case 'meditation_audio':
                    $item = MeditationAudio::select('id', 'name', 'short_description', 'description', 'audio_thumb as thumb',  'premium_type', 'created_at', DB::raw("'meditation_audio' as type"))
                        ->find($favorite->type_id);
                    if ($item && $item->thumb) {
                        $item->thumb = config('app.url') . "/" . $item->thumb;
                    }
                    $item['recent_id'] = $favorite->id;
                    $mergedResponse[] = $item;
                    break;
                case 'music':
                    $item = Music::select('id', 'name', 'short_description', 'description', 'audio_thumb as thumb', 'premium_type',  'created_at', DB::raw("'music' as type"))
                        ->find($favorite->type_id);
                    if ($item && $item->thumb) {
                        $item->thumb = config('app.url') . "/" . $item->thumb;
                    }
                    $item['recent_id'] = $favorite->id;
                    $mergedResponse[] = $item;
                    break;
                case 'work_shops':
                    $item = WorkShop::select('id', 'name', 'short_description', 'description', 'thumb_image as thumb', 'premium_type',  'created_at', DB::raw("'work_shops' as type"))->find($favorite->type_id);
                    if ($item && $item->thumb) {
                        $item->thumb = config('app.url') . "/" . $item->thumb;
                    }
                    $item['recent_id'] = $favorite->id;
                    $mergedResponse[] = $item;
                    break;
                default:
                    break;
            }
        }
        return $this->sendResponse($mergedResponse, 'Customer Recent List successfully retrieved.');
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
        Recent::where('customer_id', $request->customer_id)
            ->where('type', $request->type)
            ->where('type_id', $request->type_id)
            ->delete();
        Recent::create($validatedData);
        return $this->sendResponse([], 'Recent created successfully.');
    }
}
