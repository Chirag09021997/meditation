<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderAddress;
use App\Models\OrderItems;
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
        $order = Order::with('customer', 'orderAddress', 'orderItem.store')->findOrFail($id);
        return view('order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $order = Order::with('customer', 'orderAddress', 'orderItem.store')->findOrFail($id);
        return view('order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::findOrFail($id);
        $validated = $request->validate([
            // Billing Information
            'b_fname' => 'required|string|max:255',
            'b_lname' => 'required|string|max:255',
            'b_email' => 'required|email|max:255',
            'b_phone' => 'required|string|max:15',
            'b_address' => 'required|string|max:255',
            'b_address2' => 'nullable|string|max:255',
            'b_city' => 'required|string|max:255',
            'b_state' => 'required|string|max:255',
            'b_country' => 'required|string|max:255',
            'b_zipcode' => 'required|string|max:255',

            // Shipping Information
            's_fname' => 'nullable|string|max:255',
            's_lname' => 'nullable|string|max:255',
            's_address' => 'nullable|string|max:255',
            's_address2' => 'nullable|string|max:255',
            's_city' => 'nullable|string|max:255',
            's_state' => 'nullable|string|max:255',
            's_country' => 'nullable|string|max:255',
            's_zipcode' => 'nullable|string|max:255',

            // Order Information
            'store_id' => 'required|array|min:1',
            'store_id.*' => 'exists:stores,id',
            'price' => 'required|array|min:1',
            'price.*' => 'numeric|min:0',
            'discount' => 'required|array|min:1',
            'discount.*' => 'numeric|min:0',
            'quantity' => 'required|array|min:1',
            'quantity.*' => 'integer|min:1'
        ]);

        // Update order address
        OrderAddress::where('order_id', $id)->update([
            'b_fname' => $validated['b_fname'],
            'b_lname' => $validated['b_lname'],
            'b_email' => $validated['b_email'],
            'b_phone' => $validated['b_phone'],
            'b_address' => $validated['b_address'],
            'b_address2' => $validated['b_address2'],
            'b_city' => $validated['b_city'],
            'b_state' => $validated['b_state'],
            'b_country' => $validated['b_country'],
            'b_zipcode' => $validated['b_zipcode'],
            's_fname' => $validated['s_fname'],
            's_lname' => $validated['s_lname'],
            's_address' => $validated['s_address'],
            's_address2' => $validated['s_address2'],
            's_city' => $validated['s_city'],
            's_state' => $validated['s_state'],
            's_country' => $validated['s_country'],
            's_zipcode' => $validated['s_zipcode']
        ]);

        // Update or create order items
        foreach ($validated['store_id'] as $index => $storeId) {
            OrderItems::updateOrCreate(
                ['order_id' => $id, 'store_id' => $storeId],
                [
                    'quantity' => $validated['quantity'][$index],
                    'price' => $validated['price'][$index],
                    'discount' => $validated['discount'][$index],
                ]
            );
        }
        return redirect()->route('order.index')->with('success', 'Order Updated SuccessFully.');
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
        $order = Order::with(['customer:id,name'])->select(['id', 'customer_id', 'payment_option', 'coupon_code',  'status'])->orderByDesc('created_at');
        return DataTables::of($order)
            ->addColumn('action', function ($data) {
                $viewLink = '<a href="' . route('order.show', $data->id) . '" title="View" class="text-blue-800 cursor-pointer"><i class="far fa-eye"></i></a>';
                $updateLink = '<a href="' . route('order.edit', $data->id) . '" title="Update" class="text-green-600 cursor-pointer px-2"><i class="far fa-edit"></i></a>';
                $deleteLink = '<a data-value="' . route('order.destroy', $data->id) . '" title="Delete" class="delete_row text-red-600 cursor-pointer"><i class="far fa-trash-alt"></i></a>';
                return "<div class='flex justify-center'> $viewLink  $updateLink  $deleteLink </div>";
            })
            ->addColumn('customer_name', function ($data) {
                return $data->customer ? $data->customer->name : '';
            })
            ->editColumn('status', function ($data) {
                $statusOptions = ['Pending', 'Shipping', 'Complete'];
                $statusDropdown = '<select class="status-change rounded-sm" data-order-id="' . $data->id . '">';
                foreach ($statusOptions as  $statusValue) {
                    $selected = ($data->status == $statusValue) ? 'selected' : '';
                    $statusDropdown .= '<option value="' . $statusValue . '" ' . $selected . '>' . $statusValue . '</option>';
                }
                $statusDropdown .= '</select>';
                return $statusDropdown;
            })
            ->rawColumns(['action', 'customer_name', 'status'])
            ->addIndexColumn()
            ->toJson();
    }
}
