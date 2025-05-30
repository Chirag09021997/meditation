<x-app-layout>
    @php
        $totalPrice = $totalDiscount = $discountToAmount = $totalDeliveryCharge = 0;
    @endphp
    <x-head-lable backhref="{{ route('order.index') }}">
        {{ __('Order Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <section class=" py-4 antialiased dark:bg-gray-900 ">
            <div class="mx-auto px-4 2xl:px-0">
                <div class="mx-2">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Order Details</h2>

                    <div class="md:grid grid-flow-col gap-2">
                        <div class="mt-3 space-y-2 border-b border-t border-gray-200 py-4 dark:border-gray-700 sm:mt-4">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Billing information
                            </h4>
                            <dl>
                                <dt class="text-base font-medium text-gray-900 dark:text-white">
                                    Name : {{ $order?->orderAddress?->b_fname }} {{ $order?->orderAddress?->b_lname }}
                                </dt>
                                <dt class="text-base font-medium text-gray-900 dark:text-white">
                                    Email : {{ $order?->orderAddress?->b_email }}</dt>
                                <dt class="text-base font-medium text-gray-900 dark:text-white">
                                    Mo : {{ $order?->orderAddress?->b_phone }}</dt>
                                <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">
                                    {{ $order?->orderAddress?->b_address }},</dd>
                                <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">
                                    {{ $order?->orderAddress?->b_address2 }}</dd>
                                <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">
                                    {{ $order?->orderAddress?->b_city }}, {{ $order?->orderAddress?->b_state }} </dd>
                                <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">
                                    {{ $order?->orderAddress?->b_country }}, {{ $order?->orderAddress?->b_zipcode }}
                                </dd>
                            </dl>
                        </div>

                        <div class="mt-3 space-y-2 border-b border-t border-gray-200 py-4 dark:border-gray-700 sm:mt-4">
                            <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Shipping information
                            </h4>

                            <dl>
                                <dt class="text-base font-medium text-gray-900 dark:text-white">
                                    Name : {{ $order?->orderAddress?->s_fname }} {{ $order?->orderAddress?->s_lname }}
                                </dt>
                                <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">
                                    {{ $order?->orderAddress?->s_address }},</dd>
                                <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">
                                    {{ $order?->orderAddress?->s_address2 }}</dd>
                                <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">
                                    {{ $order?->orderAddress?->s_city }}, {{ $order?->orderAddress?->s_state }} </dd>
                                <dd class="mt-1 text-base font-normal text-gray-500 dark:text-gray-400">
                                    {{ $order?->orderAddress?->s_country }}, {{ $order?->orderAddress?->s_zipcode }}
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="mt-6 sm:mt-8">
                        <h4 class="text-lg font-semibold text-gray-900 dark:text-white">Item information</h4>
                        <div class="relative overflow-x-auto border-b border-gray-200 dark:border-gray-800">
                            <table class="w-full text-left font-medium text-gray-900 dark:text-white md:table-fixed">
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                                    @foreach ($order?->orderItem as $item)
                                        @php
                                            $totalPrice += $item->price * $item->quantity;
                                            $discountToAmount=(($item->price *$item->discount)/100);
                                            $totalDiscount += ($item->price * $item->discount)/ 100;
                                            $totalDeliveryCharge += $item->delivery_charge;
                                        @endphp
                                        <tr>
                                            <td class="whitespace-nowrap py-4 md:w-[384px]">
                                                <div class="flex items-center gap-4">
                                                    <a href="{{ route('store.show', $item->store_id) }}"
                                                        class="flex items-center aspect-square w-10 h-10 shrink-0">
                                                        <img class="h-auto w-full max-h-full "
                                                            src="{{ $item->store->product_thumb }}" alt="imac image" />
                                                    </a>
                                                    <div>
                                                        <a href="{{ route('store.show', $item->store_id) }}"
                                                            class="hover:underline">
                                                            <span
                                                                class="block text-left">{{ $item->store->product_name }}</span>
                                                        </a>
                                                        <span class="block text-sm text-gray-600"><del
                                                                class="me-2">{{$order->symbol}}{{ $item->price }}</del>
                                                            {{$order->symbol}}{{ number_format($item->price - $discountToAmount, 2) }}</span>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="p-4 text-base font-normal text-gray-900 dark:text-white">
                                                x{{ $item->quantity }}</td>

                                            <td
                                                class="p-4 text-right text-base font-bold text-gray-900 dark:text-white">
                                                {{$order->symbol}}{{ number_format(($item->price - $discountToAmount) * $item->quantity, 2) }}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div class="mt-4 space-y-6">
                            <h4 class="text-xl font-semibold text-gray-900 dark:text-white">Order summary</h4>

                            <div class="space-y-4">
                                <div class="space-y-2">
                                    @php
                                     if ($order?->coupon_type == "Percentage") {
                                        $couponDiscount = ( (($totalPrice - $totalDiscount) + $totalDeliveryCharge)* $order->coupon_value)/100;
                                    }else{
                                         $couponDiscount = $order->coupon_value;
                                    }
                                    @endphp
                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-gray-500 dark:text-gray-400">Original price</dt>
                                        <dd class="text-base font-medium text-gray-900 dark:text-white">
                                            {{$order->symbol}}{{ number_format($totalPrice, 2) }}</dd>
                                    </dl>
 <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-gray-500 dark:text-gray-400">Savings</dt>
                                        <dd class="text-base font-medium text-green-500">
                                            - {{$order->symbol}}{{ number_format($totalDiscount, 2) }}</dd>
                                    </dl>
                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-gray-500 dark:text-gray-400">Delivery Charges</dt>
                                        <dd class="text-base font-medium text-gray-900 dark:text-white">
                                            + {{$order->symbol}}{{ number_format($totalDeliveryCharge, 2) }}</dd>
                                    </dl>

                                   

                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-gray-500 dark:text-gray-400">Coupon code :
                                            <b>{{ $order?->coupon_code }}</b>
                                        </dt>
                                        <dd class="text-base font-medium text-green-500 dark:text-white">
                                            - {{$order->symbol}}{{ number_format($couponDiscount, 2) }}
                                        </dd>
                                    </dl>
                                </div>

                                <dl
                                    class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                                    <dt class="text-lg font-bold text-gray-900 dark:text-white">Total</dt>
                                    <dd class="text-lg font-bold text-gray-900 dark:text-white">
                                        {{$order->symbol}}{{ number_format((($totalPrice - $totalDiscount) + $totalDeliveryCharge) - $couponDiscount, 2) }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
