<x-app-layout>
    @php
        $totalPrice = $totalDiscount = 0;
    @endphp
    <x-head-lable backhref="{{ route('order.index') }}">
        {{ __('Order Edit') }}
    </x-head-lable>

    <form method="POST" action="{{ route('order.update', $order->id) }}">
        @csrf
        @method('PUT')
        <div class="border-4 border-white rounded-lg p-2 sm:p-4 my-2">
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
                <table class="w-full text-left font-medium text-gray-900 dark:text-white md:table-fixed">
                    <thead>
                        <tr>
                            <th>Img</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Quantity</th>
                            <th>Final Price</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                </table>
                @foreach ($order?->orderItem as $item)
                    @php
                        $totalPrice += $item->price * $item->quantity;
                        $totalDiscount += $item->discount * $item->quantity;
                    @endphp
                    <div class="grid grid-cols-6 gap-4 py-4 border-b border-gray-300">
                        <!-- Image and Item Name -->
                        <div class="flex items-center space-x-4">
                            <a href="{{ route('store.show', $item->store_id) }}" class="flex-shrink-0">
                                <img class="h-16 w-16 object-cover" src="{{ $item->store->product_thumb }}"
                                    alt="Product Image" />
                            </a>
                            <div>
                                <a href="{{ route('store.show', $item->store_id) }}"
                                    class="text-blue-600 hover:underline">
                                    <span class="block text-left">{{ $item->store->product_name }}</span>
                                </a>
                                <input type="hidden" name="store_id[]" id="store_id"
                                    value="{{ $item->store_id }}">
                            </div>
                        </div>
                        <!-- Price -->
                        <div class="text-base font-normal text-gray-900 dark:text-white">
                            <input type="number" name="price[]" id="price" value="{{ $item->price }}"
                                onchange="updateFinalPrice(this)"
                                class="form-input w-full px-3 py-2 border rounded-md" />
                        </div>
                        <!-- Discount -->
                        <div class="text-base font-normal text-gray-900 dark:text-white">
                            <input type="number" name="discount[]" id="discount" value="{{ $item->discount }}"
                                onchange="updateFinalPrice(this)"
                                class="form-input w-full px-3 py-2 border rounded-md" />
                        </div>
                        <!-- Quantity -->
                        <div class="text-base font-normal text-gray-900 dark:text-white">
                            <input type="number" name="quantity[]" id="quantity" value="{{ $item->quantity }}"
                                onchange="updateFinalPrice(this)"
                                class="form-input w-full px-3 py-2 border rounded-md" />
                        </div>
                        <!-- Final Price -->
                        <div class="text-right text-base font-bold text-gray-900 dark:text-white final-price">
                            ${{ number_format(($item->price - $item->discount) * $item->quantity, 2) }}
                        </div>
                        <!-- Delete Button -->
                        <div class="text-center">
                            <button type="button" onclick="deleteItem(this)"
                                class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                                Delete
                            </button>
                        </div>
                    </div>
                @endforeach
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
        function updateFinalPrice(element) {
            let row = element.closest('.grid');
            let price = parseFloat(row.querySelector('[name="price[]"]').value);
            let discount = parseFloat(row.querySelector('[name="discount[]"]').value);
            let quantity = parseInt(row.querySelector('[name="quantity[]"]').value);
            let finalPrice = (price - discount) * quantity;
            row.querySelector('.final-price').innerText = "$" + finalPrice.toFixed(2);
        }

        // Delete the item row
        function deleteItem(button) {
            let row = button.closest('.grid');
            row.remove();
        }
    </script>
</x-app-layout>
