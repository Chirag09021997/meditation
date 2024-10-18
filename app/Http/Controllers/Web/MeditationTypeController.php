<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\MeditationType;
use App\Http\Requests\StoreMeditationTypeRequest;
use App\Http\Requests\UpdateMeditationTypeRequest;
use Yajra\DataTables\Facades\DataTables;

class MeditationTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('meditation-type.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meditation-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMeditationTypeRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_image')) {
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/meditation-type', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }
        MeditationType::create($validated);
        return redirect()->route('meditation-type.index')->with('success', 'Meditation Type created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(MeditationType $meditationType)
    {
        return view('meditation-type.show', compact('meditationType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MeditationType $meditationType)
    {
        return view('meditation-type.edit', compact('meditationType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMeditationTypeRequest $request, MeditationType $meditationType)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_image')) {
            if ($meditationType->thumb_image != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $meditationType->thumb_image));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/meditation-type', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }
        $meditationType->update($validated);
        return redirect()->route('meditation-type.index')->with('success', 'Meditation Type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MeditationType $meditationType)
    {
        $meditationType->delete();
        echo 1;
    }

    public function getData()
    {
        $meditationType = MeditationType::select(['id', 'name', 'thumb_image', 'status']);

        return DataTables::of($meditationType)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('meditation-type.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('meditation-type.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('meditation-type.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('meditation-type.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->rawColumns(['action', 'status'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(MeditationType $meditationType)
    {
        $meditationType->status = ($meditationType->status == 'Active') ? 'Inactive' : 'Active';
        $meditationType->save();
        echo  1;
    }
}
