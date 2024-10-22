<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\WorkShop;
use App\Http\Requests\StoreWorkShopRequest;
use App\Http\Requests\UpdateWorkShopRequest;
use Yajra\DataTables\Facades\DataTables;

class WorkShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('workshop.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('workshop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkShopRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_image')) {
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/workshop', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }
        if ($request->hasFile('video_upload') && $request->video_url == "") {
            $video = $request->file('video_upload');
            $fileName = time() . '_' . str_replace(' ', '_', $video->getClientOriginalName());
            $filePath = $video->storeAs('public/uploads/workshop', $fileName);
            $validated['video_url'] = config('app.url') . "/" . str_replace('public/', 'storage/', $filePath);
        }
        if ($validated['second'] == null) {
            unset($validated['second']);
        }
        WorkShop::create($validated);
        return redirect()->route('workshop.index')->with('success', 'Workshop created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkShop $workshop)
    {
        return view('workshop.show', compact('workshop'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkShop $workshop)
    {
        return view('workshop.edit', compact('workshop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkShopRequest $request, WorkShop $workshop)
    {
        $validated = $request->validated();

        // Handle thumbnail image upload
        if ($request->hasFile('thumb_image')) {
            // Delete old thumbnail if exists
            if ($workshop->thumb_image != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $workshop->thumb_image));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Store new thumbnail
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/workshop', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }

        if ($request->hasFile('video_upload')) {
            if ($workshop->video_url != null) {
                $videoPath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $workshop->video_url));
                if (file_exists($videoPath)) {
                    unlink($videoPath);
                }
            }
            $video = $request->file('video_upload');
            $fileName = time() . '_' . str_replace(' ', '_', $video->getClientOriginalName());
            $filePath = $video->storeAs('public/uploads/workshop', $fileName);
            $validated['video_url'] = config('app.url') . "/" . str_replace('public/', 'storage/', $filePath);
        } elseif ($request->filled('video_url')) {
            $validated['video_url'] = $request->video_url;
        } else {
            unset($validated['video_url']);
        }
        if ($validated['second'] == null) {
            unset($validated['second']);
        }
        $workshop->update($validated);
        return redirect()->route('workshop.index')->with('success', 'Workshop updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkShop $workshop)
    {
        $workshop->delete();
        echo 1;
    }

    public function getData()
    {
        $WorkShop = WorkShop::select(['id', 'name', 'thumb_image',  'video_url', 'premium_type', 'total_view', 'status']);

        return DataTables::of($WorkShop)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('workshop.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('workshop.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('workshop.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('workshop.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->editColumn('thumb_image', function ($data) {
                return '<img src="' . $data->thumb_image . '" alt="" class="w-8 mx-auto" />';
            })
            ->editColumn('premium_type', function ($data) {
                return $data->premium_type == 0 ? false : true;
            })
            ->rawColumns(['action', 'status', 'thumb_image', 'premium_type'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(WorkShop $workshop)
    {
        $workshop->status = ($workshop->status == 'Active') ? 'Inactive' : 'Active';
        $workshop->save();
        echo  1;
    }
}
