<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::findOrFail($id);
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::findOrFail($id);
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        echo 1;
    }

    public function getData()
    {
        $order = Order::with(['customer:id,name', 'coupon:id,coupon_code'])->select(['id', 'customer_id', 'payment_option', 'coupon_id',  'status'])->orderByDesc('created_at');
        return DataTables::of($order)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('order.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('order.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('order.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->addColumn('coupon_code', function ($data) {
                return $data->coupon ? $data->coupon->coupon_code : '';
            })
            ->addColumn('customer_name', function ($data) {
                return $data->customer ? $data->customer->name : '';
            })
            ->rawColumns(['action', 'coupon_code', 'customer_name'])
            ->addIndexColumn()
            ->toJson();
    }
}
