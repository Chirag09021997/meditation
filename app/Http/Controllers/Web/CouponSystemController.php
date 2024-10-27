<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CouponSystem;
use App\Http\Requests\StoreCouponSystemRequest;
use App\Http\Requests\UpdateCouponSystemRequest;
use Yajra\DataTables\Facades\DataTables;

class CouponSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('coupon-system.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('coupon-system.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCouponSystemRequest $request)
    {
        $validated = $request->validated();
        CouponSystem::create($validated);
        return redirect()->route('coupon-system.index')->with('success', 'Coupon System created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(CouponSystem $couponSystem)
    {
        return view('coupon-system.show', compact('couponSystem'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CouponSystem $couponSystem)
    {
        return view('coupon-system.edit', compact('couponSystem'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCouponSystemRequest $request, CouponSystem $couponSystem)
    {
        $validated = $request->validated();
        $couponSystem->update($validated);
        return redirect()->route('coupon-system.index')->with('success', 'Coupon System updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CouponSystem $couponSystem)
    {
        $couponSystem->delete();
        echo 1;
    }

    public function getData()
    {
        $couponSystem = CouponSystem::select(['id', 'type', 'coupon_code', 'value', 'start_date', 'end_date', 'status'])->orderByDesc('created_at');

        return DataTables::of($couponSystem)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('coupon-system.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('coupon-system.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('coupon-system.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->editColumn('status', function ($data) {
                $checked = ($data->status == 'Active') ? 'checked' : '';
                return '<input type="checkbox" data-url="' . route('coupon-system.changeStatus', $data->id) . '" ' . $checked . ' class="changeStatus">';
            })
            ->rawColumns(['action', 'status'])
            ->addIndexColumn()
            ->toJson();
    }

    public function changeStatus(CouponSystem $couponSystem)
    {
        $couponSystem->status = ($couponSystem->status == 'Active') ? 'Inactive' : 'Active';
        $couponSystem->save();
        echo  1;
    }
}
