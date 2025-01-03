<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\MeditationAudio;
use App\Http\Requests\StoreMeditationAudioRequest;
use App\Http\Requests\UpdateMeditationAudioRequest;
use App\Models\Interest;
use App\Models\MeditationType;
use App\Models\PremiumPlan;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class MeditationAudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('meditation-audio.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $premiumPlans = PremiumPlan::all();
        $interestList = Interest::all();
        $meditationTypes = MeditationType::all();
        return view('meditation-audio.create', compact('premiumPlans','interestList', 'meditationTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMeditationAudioRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('audio_thumb')) {
            $image = $request->file('audio_thumb');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/meditation-audio', $fileName);
            $validated['audio_thumb'] = str_replace('public/', 'storage/', $filePath);
        }
        if ($request->hasFile('audio_upload')) {
            $image = $request->file('audio_upload');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/meditation-audio', $fileName);
            $validated['audio_upload'] = str_replace('public/', 'storage/', $filePath);
        }
        DB::transaction(function () use ($validated, $request) {
            $meditationAudio = MeditationAudio::create($validated);
            if ($request->has('premium_plan')) {
                $meditationAudio->premiumPlans()->attach($request->input(key: 'premium_plan'));
            }
            if ($request->has('interest_type')) {
                $meditationAudio->interestType()->attach($request->input('interest_type'));
            }
        });
        return redirect()->route('meditation-audio.index')->with('success', 'Meditation Audio created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(MeditationAudio $meditationAudio)
    {
        $oldPremiumPlans = $meditationAudio->premiumPlans->pluck('name')->toArray();
        $oldInterest = $meditationAudio->interestType->pluck('name')->toArray();
        return view('meditation-audio.show', compact('meditationAudio', 'oldPremiumPlans','oldInterest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MeditationAudio $meditationAudio)
    {
        $premiumPlans = PremiumPlan::all();
        $oldPremiumPlans = $meditationAudio->premiumPlans->pluck('id')->toArray();
        $oldInterest = $meditationAudio->interestType->pluck('id')->toArray();
        $meditationTypes = MeditationType::all();
        $interestList = Interest::all();
        return view('meditation-audio.edit', compact('meditationAudio', 'premiumPlans', 'oldPremiumPlans','oldInterest', 'meditationTypes','interestList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMeditationAudioRequest $request, MeditationAudio $meditationAudio)
    {
        $validated = $request->validated();
        if ($request->hasFile('audio_thumb')) {
            if ($meditationAudio->audio_thumb != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $meditationAudio->audio_thumb));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('audio_thumb');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/meditation-audio', $fileName);
            $validated['audio_thumb'] = str_replace('public/', 'storage/', $filePath);
        }
        if ($request->hasFile('audio_upload')) {
            if ($meditationAudio->audio_upload != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $meditationAudio->audio_upload));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('audio_upload');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/meditation-audio', $fileName);
            $validated['audio_upload'] = str_replace('public/', 'storage/', $filePath);
        }
        $meditationAudio->update($validated);
        if ($request->has('premium_plan')) {
            $meditationAudio->premiumPlans()->sync($request->input('premium_plan'));
        }
        if ($request->has('interest_type')) {
            $meditationAudio->interestType()->sync($request->input('interest_type'));
        }
        return redirect()->route('meditation-audio.index')->with('success', 'Meditation Audio updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MeditationAudio $meditationAudio)
    {
        $meditationAudio->delete();
        echo 1;
    }


    public function getData()
    {
        $meditationAudio = MeditationAudio::with('meditationType')->select(['id', 'name', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view', 'status', 'meditation_type_id'])->orderByDesc('created_at');

        return DataTables::of($meditationAudio)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('meditation-audio.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('meditation-audio.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('meditation-audio.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('meditation-audio.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->editColumn('audio_thumb', function ($data) {
                return '<img src="' . $data->audio_thumb . '" alt="" class="w-8 mx-auto" />';
            })
            ->editColumn('premium_type', function ($data) {
                return $data->premium_type == 0 ? false : true;
            })
            ->addColumn('meditation_type_name', function ($data) {
                return isset($data->meditationType) ? $data->meditationType->name : "";
            })
            ->rawColumns(['action', 'status', 'audio_thumb', 'premium_type', 'meditation_type_name'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(MeditationAudio $meditationAudio)
    {
        $meditationAudio->status = ($meditationAudio->status == 'Active') ? 'Inactive' : 'Active';
        $meditationAudio->save();
        echo  1;
    }
}
