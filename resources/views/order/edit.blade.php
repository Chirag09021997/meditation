<x-app-layout>
    @php
        $totalPrice = $totalDiscount = $deleveryCharge =$grandTotal = $couponAmount = 0;
    @endphp
    <x-head-lable backhref="{{ route('order.index') }}">
        {{ __('Order Edit') }}
    </x-head-lable>

    <form method="POST" action="{{ route('order.update', $order->id) }}">
        @csrf
        @method('PUT')
        <div class="border-4 border-white rounded-lg p-2 sm:p-4 my-2">
            <div class="card-body p-4">
          

                               <div class="d-flex justify-content-between w-100">
    <p class="mb-0"><strong>Invoice Number:</strong> #{{ $order->id }}</p>
    <p class="mb-0"><strong>Invoice Date:</strong> {{ $order->created_at->format('d-m-Y') }}</p>
</div>

 @foreach ($order?->orderItem as $item)
                            @php
                                $totalPrice += $item->price * $item->quantity;
                                $totalDiscount += ($item->price * $item->discount) / 100;
                                $deleveryCharge += $item->delivery_charge*$item->quantity;
                            @endphp
              @endforeach
              @php
                $grandTotal = ($totalPrice - $totalDiscount) + $deleveryCharge;

                if ($order?->coupon_type == "Percentage") {
                    $couponAmount = ($grandTotal * $order->coupon_value)/100;
                }else{
                    $couponAmount = $order->coupon_value;
                }

             @endphp
             
      <div class="d-flex justify-content-between pt-2">
            <p class="mb-0"><strong>Total:</strong>{{ $order?->symbol. ($totalPrice-$totalDiscount) }}</p>
             <p class="mb-0"><strong>Delivery Charges:</strong>{{ $order?->symbol. $deleveryCharge }}</p>
            
             <p class="mb-0"><strong>Coupon Code:</strong>{{ $order?->symbol. $couponAmount }}</p>
            </div>
      <div class="d-flex justify-content-between pt-2">
            <p class="mb-0"><strong>Grand Total:</strong>
        
                {{ $order?->symbol}}{{$grandTotal - $couponAmount}}
            </p>
            </div>
            <h1 class="font-bold my-3 text-lg">Billing Information:</h1>
            <div class="grid md:grid-cols-2 gap-4">
                <!-- b_fname -->
                <div class="mt-1">
                    <x-input-label for="b_fname" :value="__('First Name')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="b_fname" name="b_fname" :value="old('b_fname', $order?->orderAddress?->b_fname)"
                        placeholder="Enter first name" required />
                    <x-input-error :messages="$errors->get('b_fname')" class="mt-2" />
                </div>

                <!-- b_lname -->
                <div class="mt-1">
                    <x-input-label for="b_lname" :value="__('Last Name')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="b_lname" name="b_lname"
                        :value="old('b_lname', $order?->orderAddress?->b_lname)" placeholder="Enter last name" />
                    <x-input-error :messages="$errors->get('b_lname')" class="mt-2" />
                </div>

                <!-- b_email -->
                <div class="mt-1">
                    <x-input-label for="b_email" :value="__('Email')" />
                    <x-text-input type="email" class="block mt-1 w-full" id="b_email" name="b_email"
                        :value="old('b_email', $order?->orderAddress?->b_email)" placeholder="Enter email" />
                    <x-input-error :messages="$errors->get('b_email')" class="mt-2" />
                </div>

                <!-- b_phone -->
                <div class="mt-1">
                    <x-input-label for="b_phone" :value="__('Phone No')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="b_phone" name="b_phone"
                        :value="old('b_phone', $order?->orderAddress?->b_phone)" placeholder="Enter phone no" />
                    <x-input-error :messages="$errors->get('b_phone')" class="mt-2" />
                </div>

                <!-- b_address -->
                <div class="mt-1">
                    <x-input-label for="b_address" :value="__('Address')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="b_address" name="b_address"
                        :value="old('b_address', $order?->orderAddress?->b_address)" placeholder="Enter address" />
                    <x-input-error :messages="$errors->get('b_address')" class="mt-2" />
                </div>

                <!-- b_address2 -->
                <div class="mt-1">
                    <x-input-label for="b_address2" :value="__('Address 2')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="b_address2" name="b_address2"
                        :value="old('b_address2', $order?->orderAddress?->b_address2)" placeholder="Enter address 2" />
                    <x-input-error :messages="$errors->get('b_address2')" class="mt-2" />
                </div>

                <!-- b_city -->
                <div class="mt-1">
                    <x-input-label for="b_city" :value="__('City')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="b_city" name="b_city"
                        :value="old('b_city', $order?->orderAddress?->b_city)" placeholder="Enter city" />
                    <x-input-error :messages="$errors->get('b_city')" class="mt-2" />
                </div>

                <!-- b_state -->
                <div class="mt-1">
                    <x-input-label for="b_state" :value="__('State')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="b_state" name="b_state"
                        :value="old('b_state', $order?->orderAddress?->b_state)" placeholder="Enter state" />
                    <x-input-error :messages="$errors->get('b_state')" class="mt-2" />
                </div>

                <!-- b_country -->
                <div class="mt-1">
                    <x-input-label for="b_country" :value="__('Country')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="b_country" name="b_country"
                        :value="old('b_country', $order?->orderAddress?->b_country)" placeholder="Enter city" />
                    <x-input-error :messages="$errors->get('b_country')" class="mt-2" />
                </div>

                <!-- b_zipcode -->
                <div class="mt-1">
                    <x-input-label for="b_zipcode" :value="__('Zipcode')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="b_zipcode" name="b_zipcode"
                        :value="old('b_zipcode', $order?->orderAddress?->b_zipcode)" placeholder="Enter state" />
                    <x-input-error :messages="$errors->get('b_zipcode')" class="mt-2" />
                </div>
            </div>
        </div>

        <div class="border-4 border-white rounded-lg p-2 sm:p-4 my-2">
            <h1 class="font-bold my-3 text-lg">Shipping Information:</h1>
            <div class="grid md:grid-cols-2 gap-4">
                <!-- s_fname -->
                <div class="mt-1">
                    <x-input-label for="s_fname" :value="__('First Name')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="s_fname" name="s_fname"
                        :value="old('s_fname', $order?->orderAddress?->s_fname)" placeholder="Enter first name" required />
                    <x-input-error :messages="$errors->get('s_fname')" class="mt-2" />
                </div>

                <!-- s_lname -->
                <div class="mt-1">
                    <x-input-label for="s_lname" :value="__('Last Name')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="s_lname" name="s_lname"
                        :value="old('s_lname', $order?->orderAddress?->s_lname)" placeholder="Enter last name" />
                    <x-input-error :messages="$errors->get('s_lname')" class="mt-2" />
                </div>

                <!-- s_address -->
                <div class="mt-1">
                    <x-input-label for="s_address" :value="__('Address')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="s_address" name="s_address"
                        :value="old('s_address', $order?->orderAddress?->s_address)" placeholder="Enter address" />
                    <x-input-error :messages="$errors->get('s_address')" class="mt-2" />
                </div>

                <!-- s_address2 -->
                <div class="mt-1">
                    <x-input-label for="s_address2" :value="__('Address 2')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="s_address2" name="s_address2"
                        :value="old('s_address2', $order?->orderAddress?->s_address2)" placeholder="Enter address 2" />
                    <x-input-error :messages="$errors->get('s_address2')" class="mt-2" />
                </div>

                <!-- s_city -->
                <div class="mt-1">
                    <x-input-label for="s_city" :value="__('City')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="s_city" name="s_city"
                        :value="old('s_city', $order?->orderAddress?->s_city)" placeholder="Enter city" />
                    <x-input-error :messages="$errors->get('s_city')" class="mt-2" />
                </div>

                <!-- s_state -->
                <div class="mt-1">
                    <x-input-label for="s_state" :value="__('State')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="s_state" name="s_state"
                        :value="old('s_state', $order?->orderAddress?->s_state)" placeholder="Enter state" />
                    <x-input-error :messages="$errors->get('s_state')" class="mt-2" />
                </div>

                <!-- s_country -->
                <div class="mt-1">
                    <x-input-label for="s_country" :value="__('Country')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="s_country" name="s_country"
                        :value="old('s_country', $order?->orderAddress?->s_country)" placeholder="Enter city" />
                    <x-input-error :messages="$errors->get('s_country')" class="mt-2" />
                </div>

                <!-- s_zipcode -->
                <div class="mt-1">
                    <x-input-label for="s_zipcode" :value="__('Zipcode')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="s_zipcode" name="s_zipcode"
                        :value="old('s_zipcode', $order?->orderAddress?->s_zipcode)" placeholder="Enter state" />
                    <x-input-error :messages="$errors->get('s_zipcode')" class="mt-2" />
                </div>
            </div>
        </div>

        <div class="border-4 border-white rounded-lg p-4 my-2">
            <h1 class="font-bold text-lg my-3">Order Information:</h1>
            <div class="relative overflow-x-auto border-b border-gray-200 dark:border-gray-800">
                <table id="order-table" class="w-full text-left font-medium text-gray-900 dark:text-white">
                    <thead>
                        <tr>
                            <th class="p-2">Img</th>
                            <th class="p-2">Store Name</th>
                            <th class="p-2">Price</th>
                            <th class="p-2">Discount(%)</th>
                            <th class="p-2">Quantity</th>
                            <th class="p-2">Final Price</th>
                            <th class="p-2">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order?->orderItem as $item)
                            @php
                                $totalPrice += $item->price * $item->quantity;
                                $totalDiscount += $item->discount * $item->quantity;
                            @endphp
                            <tr class="py-4 border-b border-gray-300">
                                <!-- Image -->
                                <td class="p-2">
                                    <div class="flex items-center space-x-4">
                                        <a href="{{ route('store.show', $item->store_id) }}" class="flex-shrink-0">
                                            <img class="h-16 w-16 object-cover"
                                                src="{{ $item->store->product_thumb }}" alt="Product Image" />
                                        </a>
                                    </div>
                                </td>
                                <!-- Item Name -->
                                <td class="p-2 text-base font-normal text-gray-900 dark:text-white">
                                    <a href="{{ route('store.show', $item->store_id) }}"
                                        class="text-blue-600 hover:underline">
                                        <span class="block text-left">{{ $item->store->product_name }}</span>
                                    </a>
                                    <input type="hidden" name="store_id[]" value="{{ $item->store_id }}">
                                </td>
                                <!-- Price -->
                                <td class="p-2 text-base font-normal text-gray-900 dark:text-white">
                                    <input type="number" name="price[]" value="{{ $item->price }}"
                                        onchange="updateFinalPrice(this)"
                                        class="form-input w-full px-3 py-2 border rounded-md" />
                                </td>
                                <!-- Discount -->
                                <td class="p-2 text-base font-normal text-gray-900 dark:text-white">
                                    <input type="number" name="discount[]" value="{{ $item->discount }}"
                                        onchange="updateFinalPrice(this)"
                                        class="form-input w-full px-3 py-2 border rounded-md" />
                                </td>
                                <!-- Quantity -->
                                <td class="p-2 text-base font-normal text-gray-900 dark:text-white">
                                    <input type="number" name="quantity[]" value="{{ $item->quantity }}"
                                        onchange="updateFinalPrice(this)"
                                        class="form-input w-full px-3 py-2 border rounded-md" />
                                </td>
                                <!-- Final Price -->
                                <td
                                    class="p-2 text-right text-base font-bold text-gray-900 dark:text-white final-price">
                                    {{$order?->symbol}}{{ number_format((($item->price - (($item->price *$item->discount)/100))) * $item->quantity, 2) }}
                                </td>
                                <!-- Delete Button -->
                                <td class="p-2 text-center">
                                    <button type="button" onclick="deleteItem(this)"
                                        class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="border-4 border-white rounded-lg p-2 sm:p-4 my-2">
            <h1 class="font-bold my-3 text-lg">Applied Coupon Information:</h1>
            <div class="grid md:grid-cols-2 gap-4">
                <!-- type -->
                <div class="mt-4">
                    <x-input-label for="name" :value="__('Select Type')" />
                    <select id="type" name="type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="Percentage" @selected(old('type', $order->type) == 'Percentage')>Percentage</option>
                        <option value="Amount" @selected(old('type', $order->type) == 'Amount')>Amount</option>
                    </select>
                </div>

                <!-- coupon_code -->
                <div class="mt-1">
                    <x-input-label for="coupon_code" :value="__('Coupon Code')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="coupon_code" name="coupon_code"
                        :value="old('coupon_code', $order?->coupon_code)" placeholder="Enter coupon code" />
                    <x-input-error :messages="$errors->get('coupon_code')" class="mt-2" />
                </div>

                <!-- coupon_value -->
                <div class="mt-1">
                    <x-input-label for="coupon_value" :value="__('Coupon Value')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="coupon_value" name="coupon_value"
                        :value="old('coupon_value', $order?->coupon_value)" placeholder="Enter coupon value" />
                    <x-input-error :messages="$errors->get('coupon_value')" class="mt-2" />
                </div>

                <!-- note -->
                <div class="mt-1">
                    <x-input-label for="note" :value="__('Note')" />
                    <x-text-input type="text" class="block mt-1 w-full" id="note" name="note"
                        :value="old('note', $order?->note)" placeholder="Enter note" />
                    <x-input-error :messages="$errors->get('note')" class="mt-2" />
                </div>
            </div>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('order.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Update') }}</button>
        </div>
    </form>
    <script>
       function updateFinalPrice(input) {
        const row = input.closest('tr');

        const price = parseFloat(row.querySelector('input[name="price[]"]').value) || 0;
        const discount = parseFloat(row.querySelector('input[name="discount[]"]').value) || 0;
        const quantity = parseInt(row.querySelector('input[name="quantity[]"]').value) || 1;

        const discountedPrice = price - (price * discount / 100);
        const finalPrice = discountedPrice * quantity;

        const finalPriceElement = row.querySelector('.final-price');
        const symbol = finalPriceElement.getAttribute('data-symbol') || '₹';

        finalPriceElement.textContent = symbol + finalPrice.toFixed(2);

        // Optional: update total at the bottom
        updateGrandTotal();
    }
    function updateGrandTotal() {
        let grandTotal = 0;
        document.querySelectorAll('tr').forEach(row => {
            const priceInput = row.querySelector('input[name="price[]"]');
            const discountInput = row.querySelector('input[name="discount[]"]');
            const quantityInput = row.querySelector('input[name="quantity[]"]');

            if (priceInput && discountInput && quantityInput) {
                const price = parseFloat(priceInput.value) || 0;
                const discount = parseFloat(discountInput.value) || 0;
                const quantity = parseInt(quantityInput.value) || 1;

                const discountedPrice = price - (price * discount / 100);
                grandTotal += discountedPrice * quantity;
                
            }
        });

        const totalDisplay = document.getElementById('grand-total');
        if (totalDisplay) {
            totalDisplay.textContent = grandTotal.toFixed(2);
        }
    }

        // Delete the item row
        function deleteItem(button) {
            let row = button.closest('.grid');
            row.remove();
        }

        $(document).ready(function() {
            $('#order-table').DataTable({
                responsive: true,
                pageLength: 5,
                lengthChange: false,
                autoWidth: false,
                columnDefs: [{
                    targets: [5],
                    orderable: false,
                }, ],
            });
            $('#order-table').on('input', '[name="price[]"], [name="discount[]"], [name="quantity[]"]', function() {
                updateFinalPrice(this);
            });
        });
    </script>
</x-app-layout>
