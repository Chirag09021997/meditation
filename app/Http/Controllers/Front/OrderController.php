<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class OrderController extends Controller
{
    public function index()
    {
        $user = Auth::guard('customer')->user();
        $orders = Order::with(['orderItem', 'orderAddress'])
            ->where('customer_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();
        $ordersList = [];
        foreach ($orders as $order) {
            $totalPrice = 0;
            $totalDiscount = 0;
            $discount = 0;
            
            $totalDeliveryCharge = 0;
            foreach ($order?->orderItem as $item) {
                $price = $item->price * $item->quantity;
                $totalPrice += $price;
                $discount = ($price * $item->discount) /100;
                $totalDiscount += $discount;
                $totalDeliveryCharge +=$item->delivery_charge;
            }

            $curruntBill = $totalPrice-$totalDiscount;
            $curruntBillAddDeliveryCarge=$curruntBill + $totalDeliveryCharge;
            if($order->coupon_type == "Percentage"){
                $copenCodeAmount = ($curruntBillAddDeliveryCarge * $order->coupon_value)/100 ;
            }else{
                $copenCodeAmount = $order->coupon_value;
            }

            $totalPrice = $curruntBillAddDeliveryCarge-$copenCodeAmount;
            
            $ordersList[] = [
                'id' => $order->id,
                'date' => $order->created_at->format('d-m-Y'),
                'final_price' => $totalPrice,
                'symbol' => $order->symbol,
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
        $totalPrice = $totalDiscount = $grandDiscount =$deleveryCharge= 0;
        foreach ($order?->orderItem as $item) {
            $totalPrice += $item->price * $item->quantity;
            $price = $item->price * $item->quantity;
            $deleveryCharge += $item->delivery_charge * $item->quantity;
            $totalDiscount = ($price*$item->discount) /100;
            $grandDiscount += $totalDiscount;
        }
        $order['total_price'] = $totalPrice;
        $order['total_discount'] = $grandDiscount;
        $order['delevery_charge'] = $deleveryCharge;
        $coupenDiscount=0;
        $priceTotal=($totalPrice - $grandDiscount)+$deleveryCharge;

        if($order->coupon_type == 'Percentage'){
            $coupenDiscount = ($priceTotal*$order->coupon_value)/100;
        }else{
            $coupenDiscount = $order->coupon_value;
        }


        $order['coupon_discount'] = $coupenDiscount;
        $order['final_price'] = $priceTotal-$coupenDiscount;
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
        $order = Order::findOrFail($id);
        $validatedData = $request->validate([
            'b_fname' => 'required|string|max:255',
            'b_lname' => 'required|string|max:255',
            'b_country' => 'required|string|max:2',
            'b_address' => 'required|string|max:255',
            'b_address2' => 'required|string|max:255',
            'b_city' => 'required|string|max:255',
            'b_state' => 'required|string|max:255',
            'b_zipcode' => 'required|string|max:10',
            'b_phone' => 'required|string|max:15',
            'b_email' => 'required|email|max:255',
            's_fname' => 'nullable|string|max:255',
            's_lname' => 'nullable|string|max:255',
            's_country' => 'nullable|string|max:2',
            's_address' => 'nullable|string|max:255',
            's_address2' => 'nullable|string|max:255',
            's_city' => 'nullable|string|max:255',
            's_state' => 'nullable|string|max:255',
            's_zipcode' => 'nullable|string|max:10',
            'cartItems' => 'required|array',
            'cartItems.*.store_id' => 'required|exists:stores,id',
            'cartItems.*.quantity' => 'required|integer|min:1',
            'coupon_code' => 'nullable|string|exists:coupon_systems,coupon_code',
        ]);
        $orderAddressData = $request->only([
            'b_fname',
            'b_lname',
            'b_country',
            'b_address',
            'b_address2',
            'b_city',
            'b_state',
            'b_zipcode',
            'b_phone',
            'b_email',
            's_fname',
            's_lname',
            's_country',
            's_address',
            's_address2',
            's_city',
            's_state',
            's_zipcode'
        ]);
        $order->orderAddress->update($orderAddressData);
        $existingCartItemIds = $order->orderItem()->pluck('store_id')->toArray();
        $newCartItemIds = collect($validatedData['cartItems'])->pluck('store_id')->toArray();
        $itemsToRemove = array_diff($existingCartItemIds, $newCartItemIds);
        if ($itemsToRemove) {
            $order->orderItem()->whereIn('store_id', $itemsToRemove)->delete();
        }
        foreach ($validatedData['cartItems'] as $item) {
            $order->orderItem()->updateOrCreate(
                ['store_id' => $item['store_id']],
                ['quantity' => $item['quantity']]
            );
        }
        return redirect()->route('user.order.show', $id)->with('success', 'Order Update Successfully');
    }
}
