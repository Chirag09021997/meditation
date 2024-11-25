<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TrackMeditation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function reportMeditation(Request $request)
    {
        $rules =  [
            'customer_id' => 'required|integer|exists:customers,id',
            'short' => 'nullable|string|in:today,yesterday,week,month,6months,year,all'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors()->all(), 200);
        }

        $validatedData = $validator->validated();
        $short = $validatedData['short'] ?? 'all';
        $startDate = null;
        $endDate = now();

        switch ($short) {
            case 'today':
                $startDate = now()->toDateString();
                break;
            case 'yesterday':
                $startDate = now()->subDay()->toDateString();
                break;
            case 'week':
                $startDate = now()->startOfWeek(Carbon::SUNDAY)->toDateString();
                $endDate = now()->endOfWeek(Carbon::SATURDAY)->toDateString();
                break;
            case 'month':
                $startDate = now()->startOfMonth()->toDateString();
                break;
            case '6months':
                $startDate = now()->subMonths(6)->toDateString();
                break;
            case 'year':
                $startDate = now()->startOfYear()->toDateString();
                break;
            case 'all':
            default:
                $firstRecord = TrackMeditation::where('customer_id', $request->customer_id)
                    ->orderBy('created_at', 'asc')
                    ->first();
                $startDate = $firstRecord ? $firstRecord->created_at->toDateString() :  now()->toDateString();
                break;
        }

        if (in_array($short, ['today', 'yesterday', 'week', 'month'])) {
            $dates = collect();
            $currentDate = Carbon::parse($startDate);
            while ($currentDate <= $endDate) {
                $dates->push($currentDate->toDateString());
                $currentDate->addDay();
            }

            $trackQuery = TrackMeditation::where('customer_id', $request->customer_id)
                ->whereBetween('created_at', [$startDate, $endDate]);

            $trackData = $trackQuery
                ->selectRaw('DATE(created_at) as date, SUM(listening_time) as listening_time_sum, SUM(total_time) as total_time_sum')
                ->groupBy('date')
                ->orderBy('date', 'desc')
                ->get();

            $formattedData = $dates->map(function ($date) use ($trackData) {
                $record = $trackData->firstWhere('date', $date);
                return [
                    'date' => Carbon::parse($date)->format('d-m-Y'),
                    'listening_time' => $record->listening_time_sum ?? 0,
                    'total_time' => $record->total_time_sum ?? 0,
                    'day_name' => Carbon::parse($date)->format('D')
                ];
            });
        } else {
            $months = collect();
            $currentDate = Carbon::parse($startDate)->startOfMonth();
            while ($currentDate <= $endDate) {
                $months->push($currentDate->format('Y-m'));
                $currentDate->addMonth();
            }

            $trackQuery = TrackMeditation::where('customer_id', $request->customer_id)
                ->whereBetween('created_at', [$startDate, $endDate]);

            $trackData = $trackQuery
                ->selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month, SUM(listening_time) as listening_time_sum, SUM(total_time) as total_time_sum')
                ->groupBy('month')
                ->orderBy('month', 'desc')
                ->get();

            $formattedData = $months->map(function ($month) use ($trackData, $startDate) {
                $record = $trackData->firstWhere('month', $month);
                return [
                    'date' => Carbon::parse($month)->format('m-Y'),
                    'listening_time' => $record->listening_time_sum ?? 0,
                    'total_time' => $record->total_time_sum ?? 0,
                    'day_name' => Carbon::parse($month)->format('F Y'),
                ];
            });
        }
        return $this->sendResponse($formattedData, 'Report Meditation retrieved successfully.');
    }

    public function  getUserCategoryList($customerId)
    {
        if ($customerId === null) {
            return $this->sendError('Validation Error.', 'customerId required', 200);
        }
        $trackMeditations = TrackMeditation::with('meditationAudio.meditationType')
            ->where('customer_id', $customerId)
            ->get();
        $result = [];

        foreach ($trackMeditations as $track) {
            $meditationType = $track?->meditationAudio?->meditationType;
            $meditationTypeName = $meditationType?->name;
            $meditationTypeId = $meditationType?->id;
            if ($meditationTypeName === null) {
                continue;
            }
            $listeningTime = (int) $track->listening_time;
            if (isset($result[$meditationTypeId])) {
                $result[$meditationTypeId]['listening_time'] += $listeningTime;
            } else {
                $result[$meditationTypeId] = [
                    'id' => $meditationTypeId,
                    'category_name' => $meditationTypeName,
                    'listening_time' => $listeningTime,
                ];
            }
        }
        $result = array_values($result);
        return $this->sendResponse($result, 'Get user-categories data successfully.');
    }
}
