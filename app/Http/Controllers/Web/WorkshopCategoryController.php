<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\WorkshopCategory;
use App\Http\Requests\StoreWorkshopCategoryRequest;
use App\Http\Requests\UpdateWorkshopCategoryRequest;
use Yajra\DataTables\Facades\DataTables;

class WorkshopCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('workshop-category.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('workshop-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkshopCategoryRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_image')) {
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/workshop-category', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }
        WorkshopCategory::create($validated);
        return redirect()->route('workshop-category.index')->with('success', 'Workshop Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkshopCategory $workshopCategory)
    {
        return view('workshop-category.show', compact('workshopCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkshopCategory $workshopCategory)
    {
        return view('workshop-category.edit', compact('workshopCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkshopCategoryRequest $request, WorkshopCategory $workshopCategory)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_image')) {
            if ($workshopCategory->thumb_image != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $workshopCategory->thumb_image));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/workshop-category', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }
        $workshopCategory->update($validated);
        return redirect()->route('workshop-category.index')->with('success', 'Workshop category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WorkshopCategory $workshopCategory)
    {
        $workshopCategory->delete();
        echo 1;
    }


    public function getData()
    {
        $workshopCategory = WorkshopCategory::select(['id', 'name', 'thumb_image', 'status'])->orderByDesc('created_at');
        return DataTables::of($workshopCategory)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('workshop-category.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('workshop-category.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('workshop-category.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('workshop-category.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->editColumn('thumb_image', function ($data) {
                return $data->thumb_image ? '<img src="' . $data->thumb_image . '" alt="img" class="w-8 mx-auto" />' : '';
            })
            ->rawColumns(['action', 'status', 'thumb_image'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(WorkshopCategory $workshopCategory)
    {
        $workshopCategory->status = ($workshopCategory->status == 'Active') ? 'Inactive' : 'Active';
        $workshopCategory->save();
        echo  1;
    }
}
