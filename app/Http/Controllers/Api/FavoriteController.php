<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\MeditationAudio;
use App\Models\Music;
use App\Models\WorkShop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FavoriteController extends Controller
{

    public function getFavorite(Request $request)
    {
        $rules =  [
            'customer_id' => 'required|integer|exists:customers,id'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 200);
        }
        $validator->validated();
        $customersFavorites = Favorite::where('customer_id', $request->customer_id)
            ->get()
            ->groupBy('type')
            ->map(function ($items) {
                return $items->pluck('type_id')->all();
            });
        $response = ['meditation_audio' => [], 'music' => [], 'work_shops' => []];
        foreach ($customersFavorites as $key => $favorite) {
            switch ($key) {
                case 'meditation_audio':
                    $response[$key] = MeditationAudio::whereIn('id', $favorite)->select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view', 'status')->get();
                    break;
                case 'music':
                    $response[$key] = Music::whereIn('id', $favorite)->select('id', 'name', 'short_description', 'description', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view', 'status')->get();
                    break;
                case 'work_shops':
                    $response[$key] = WorkShop::whereIn('id', $favorite)->select('id', 'name', 'short_description', 'description', 'thumb_image',  'video_url', 'premium_type', 'second', 'total_view', 'status')->get();
                    break;
                default:
                    break;
            }
        }
        return $this->sendResponse($response, 'Customer Favorite List successfully.');
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

        $favoriteCheck = Favorite::where('customer_id', $request->customer_id)->where('type', $request->type)->where('type_id', $request->type_id)->first();
        if ($favoriteCheck) {
            $favoriteCheck->delete();
            return $this->sendResponse([], 'UnFavorite successfully');
        }
        Favorite::create($validatedData);
        return $this->sendResponse([], 'Favorite successfully.');
    }
}
