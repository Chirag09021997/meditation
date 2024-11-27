<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::guard('customer')->user();
        $orders = Order::with(['orderItem', 'orderAddress'])->where('customer_id', $user->id)->get();
        $ordersList = [];
        foreach ($orders as $order) {
            $totalPrice = $totalDiscount = 0;
            foreach ($order?->orderItem as $item) {
                $totalPrice += $item->price * $item->quantity;
                $totalDiscount += $item->discount * $item->quantity;
            }
            $ordersList[] = [
                'id' => $order->id,
                'date' =>  $order->created_at->format('d-m-Y'),
                'final_price' => $totalPrice - $totalDiscount,
                'status' => $order->status
            ];
        }
        return view('frontend.order-list', compact('ordersList'));
    }

    public function cancelOrder(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
        ]);
        $order = Order::findOrFail($request->order_id);
        if ($order->status == 'Pending') {
            $order->update(['status' => 'Cancel']);
        }
        return redirect()->back()->with('success', 'Order Cancel Successfully');
    }
}
