<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TrackMeditation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrackingController extends Controller
{
    public function trackMeditation(Request $request)
    {
        $rules =  [
            'customer_id' => 'required|integer|exists:customers,id',
            'meditation_audio_id' => 'required|integer|exists:meditation_audio,id',
            'listening_time' => 'required|integer',
            'total_time' => 'required|integer',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 200);
        }
        $validator->validated();
        $track = TrackMeditation::where('customer_id', $request->customer_id)
            ->where('meditation_audio_id', $request->meditation_audio_id)
            ->whereDate('created_at', now()->toDateString())
            ->first();
        if ($track) {
            $track->increment('listening_time', $request->listening_time);
            $track->total_time = $request->total_time;
            $track->save();
        } else {
            $track =  TrackMeditation::create([
                'customer_id' => $request->customer_id,
                'meditation_audio_id' => $request->meditation_audio_id,
                'listening_time' => $request->listening_time,
                'total_time' => $request->total_time,
            ]);
        }
        return $this->sendResponse($track, 'Track Meditation added successfully.');
    }
}
