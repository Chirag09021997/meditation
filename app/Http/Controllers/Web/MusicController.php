<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Music;
use App\Http\Requests\StoreMusicRequest;
use App\Http\Requests\UpdateMusicRequest;
use Yajra\DataTables\Facades\DataTables;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('music.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('music.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMusicRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('audio_thumb')) {
            $image = $request->file('audio_thumb');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/music', $fileName);
            $validated['audio_thumb'] = str_replace('public/', 'storage/', $filePath);
        }
        if ($request->hasFile('audio_upload')) {
            $image = $request->file('audio_upload');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/music', $fileName);
            $validated['audio_upload'] = str_replace('public/', 'storage/', $filePath);
        }
        Music::create($validated);
        return redirect()->route('music.index')->with('success', 'Music created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Music $music)
    {
        return view('music.show', compact('music'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Music $music)
    {
        return view('music.edit', compact('music'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMusicRequest $request, Music $music)
    {
        $validated = $request->validated();
        if ($request->hasFile('audio_thumb')) {
            if ($music->audio_thumb != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $music->audio_thumb));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('audio_thumb');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/music', $fileName);
            $validated['audio_thumb'] = str_replace('public/', 'storage/', $filePath);
        }
        if ($request->hasFile('audio_upload')) {
            if ($music->audio_upload != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $music->audio_upload));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('audio_upload');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/music', $fileName);
            $validated['audio_upload'] = str_replace('public/', 'storage/', $filePath);
        }
        $music->update($validated);
        return redirect()->route('music.index')->with('success', 'Music updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Music $music)
    {
        $music->delete();
        echo 1;
    }


    public function getData()
    {
        $music = Music::select(['id', 'name', 'audio_thumb', 'audio_upload', 'premium_type', 'total_view', 'status']);

        return DataTables::of($music)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('music.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('music.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('music.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('music.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->editColumn('audio_thumb', function ($data) {
                return '<img src="' . $data->audio_thumb . '" alt="' . $data->name . '" class="w-8" />';
            })
            ->editColumn('premium_type', function ($data) {
                return $data->premium_type == 0 ? false : true;
            })
            ->rawColumns(['action', 'status', 'audio_thumb', 'premium_type'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(Music $music)
    {
        $music->status = ($music->status == 'Active') ? 'Inactive' : 'Active';
        $music->save();
        echo  1;
    }
}
