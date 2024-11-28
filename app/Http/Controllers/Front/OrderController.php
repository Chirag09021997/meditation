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

    public function show(string $id)
    {
        $user = Auth::guard('customer')->user();
        $order = Order::with(['orderItem', 'orderAddress'])->where('customer_id', $user->id)->findOrFail($id);
        $totalPrice = $totalDiscount = 0;
        foreach ($order?->orderItem as $item) {
            $totalPrice += $item->price * $item->quantity;
            $totalDiscount += $item->discount * $item->quantity;
        }
        $order['total_price'] = $totalPrice;
        $order['total_discount'] = $totalDiscount;
        $order['final_price'] = $totalPrice - $totalDiscount;
        return view('frontend.order-show', compact('order'));
    }

    public function edit(string $id)
    {
        $user = Auth::guard('customer')->user();
        $order = Order::with(['orderItem', 'orderAddress'])->where('customer_id', $user->id)->findOrFail($id);
        $totalPrice = $totalDiscount = 0;
        foreach ($order?->orderItem as $item) {
            $totalPrice += $item->price * $item->quantity;
            $totalDiscount += $item->discount * $item->quantity;
        }
        $order['total_price'] = $totalPrice;
        $order['total_discount'] = $totalDiscount;
        $order['final_price'] = $totalPrice - $totalDiscount;
        $jsonPath = public_path('assets/country.json');
        $countries = json_decode(file_get_contents($jsonPath), true);
        return view('frontend.order-edit', compact('order', 'countries'));
    }

    public function update(Request $request, string $id)
    {
        return redirect()->route('user.orders')->with('success', 'Order Update Successfully');
    }
}
