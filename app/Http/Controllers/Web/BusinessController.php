<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Http\Requests\StoreBusinessRequest;
use App\Http\Requests\UpdateBusinessRequest;
use Yajra\DataTables\Facades\DataTables;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('business.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('business.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBusinessRequest $request)
    {
        $validated = $request->validated();
        Business::create($validated);
        return redirect()->route('business.index')->with('success', 'Business created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Business $business)
    {
        return view('business.show', compact('business'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Business $business)
    {
        return view('business.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBusinessRequest $request, Business $business)
    {
        $validated = $request->validated();
        $business->update($validated);
        return redirect()->route('business.index')->with('success', 'Business updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Business $business)
    {
        $business->delete();
        echo 1;
    }

    public function getData()
    {
        $business = Business::select(['id', 'name', 'status'])->orderByDesc('created_at');
        return DataTables::of($business)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('business.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('business.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('business.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('business.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->rawColumns(['action', 'status'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(Business $business)
    {
        $business->status = ($business->status == 'Active') ? 'Inactive' : 'Active';
        $business->save();
        echo  1;
    }
}
