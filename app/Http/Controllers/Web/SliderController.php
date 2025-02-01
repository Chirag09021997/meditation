<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\SliderItem;
use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('slider.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('background')) {
            $image = $request->file('background');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/slider', $fileName);
            $validated['background'] = str_replace('public/', 'storage/', $filePath);
        }
        SliderItem::create($validated);
        return redirect()->route('slider.index')->with('success', 'Our Team created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SliderItem $sliderItem)
    {
        return view('slider.show', compact('sliderItem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SliderItem $sliderItem)
    {
        return view('slider.edit', compact('sliderItem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, SliderItem $sliderItem)
    {
        $validated = $request->validated();
        if ($request->hasFile('background')) {
            if ($sliderItem->background != null) {
                $basePath = str_replace(config('app.url') . '/storage', 'app/public', $sliderItem->background);
                $imagePath = storage_path($basePath);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('background');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/customer', $fileName);
            $validated['background'] = str_replace('public/', 'storage/', $filePath);
        }
        $sliderItem->update($validated);
        return redirect()->route('slider.index')->with('success', 'Our Team updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SliderItem $sliderItem)
    {
        $sliderItem->delete();
        echo 1;
    }

    public function getData()
    {
        $slider = SliderItem::select('id', 'title', 'sub_description', 'description', 'background', 'text_align')->orderByDesc('created_at');
        return DataTables::of($slider)
            ->addColumn('action', function ($data) {
                $viewLink = $updateLink = $deleteLink = '';
                $viewLink = '<a href="' . route('slider.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('slider.edit', $data->id)  . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value = "' . route('slider.destroy', $data->id)  . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('background', function ($data) {
                return '<img src="' . $data->background . '" alt="" class="w-8 mx-auto" />';
            })
            ->rawColumns(['action', 'background'])
            ->addIndexColumn()
            ->toJson();
    }
}
