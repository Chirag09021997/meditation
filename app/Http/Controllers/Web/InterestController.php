<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Interest;
use App\Http\Requests\StoreInterestRequest;
use App\Http\Requests\UpdateInterestRequest;
use Yajra\DataTables\Facades\DataTables;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('interest.index');
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('interest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInterestRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_image')) {
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/interest', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }
        Interest::create($validated);
        return redirect()->route('interest.index')->with('success', 'Interest created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Interest $interest)
    {
        return view('interest.show', compact('interest'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interest $interest)
    {
        return view('interest.edit', compact('interest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInterestRequest $request, Interest $interest)
    {
        $validated = $request->validated();
        if ($request->hasFile('thumb_image')) {
            if ($interest->thumb_image != null) {
                $imagePath = storage_path(str_replace(config('app.url') . '/storage', 'app/public', $interest->thumb_image));
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $image = $request->file('thumb_image');
            $fileName = time() . '_' . str_replace(' ', '_', $image->getClientOriginalName());
            $filePath = $image->storeAs('public/uploads/interest', $fileName);
            $validated['thumb_image'] = str_replace('public/', 'storage/', $filePath);
        }
        $interest->update($validated);
        return redirect()->route('interest.index')->with('success', 'Interest updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interest $interest)
    {
        $interest->delete();
        echo 1;
    }
    
    public function getData()
    {
        $interest = Interest::select(['id', 'name', 'thumb_image', 'status'])->orderByDesc('created_at');

        return DataTables::of($interest)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('interest.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('interest.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('interest.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('interest.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->rawColumns(['action', 'status'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(Interest $interest)
    {
        $interest->status = ($interest->status == 'Active') ? 'Inactive' : 'Active';
        $interest->save();
        echo  1;
    }

}
