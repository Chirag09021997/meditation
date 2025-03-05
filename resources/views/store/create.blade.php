<x-app-layout>
    <x-head-lable backhref="{{ route('store.index') }}">
        {{ __('Store Create') }}
    </x-head-lable>

    <form method="POST" action="{{ route('store.store') }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-5">
        @csrf

        <div class="grid md:grid-cols-2 gap-4">
            <!-- product_name -->
            <div class="mt-4">
                <div class="flex items-center space-x-1">
                    <x-input-label for="product_name" :value="__('Product Name')" />
                    <span class="text-red-500">*</span>
                </div>
                <x-text-input id="product_name" class="block mt-1 w-full" type="text" name="product_name"
                    :value="old('product_name')" placeholder="Enter product name" required autofocus />
                <x-input-error :messages="$errors->get('product_name')" class="mt-2" />
            </div>

            <!-- product_thumb -->
            <div class="mt-4">
                <div class="flex items-center space-x-1">
                    <x-input-label for="product_thumb" :value="__('Product Thumb')" />
                    <span class="text-red-500">*</span>
                </div>
                <x-text-input id="product_thumb"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="product_thumb" accept="image/*" />
                <x-input-error :messages="$errors->get('product_thumb')" class="mt-2" />
            </div>

            <!-- product_photos -->
            <div class="mt-4">
                <x-input-label for="product_photos" :value="__('Product Photos (multiple)')" />
                <x-text-input id="product_photos"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="product_photos[]" accept="image/*" multiple />
                <x-input-error :messages="$errors->get('product_photos')" class="mt-2" />
            </div>

            <!-- video_preview -->
            <div class="mt-4">
                <x-input-label for="video_preview" :value="__('Video Preview')" />
                <x-text-input id="video_preview" class="block mt-1 w-full" type="text" name="video_preview"
                    :value="old('video_preview')" placeholder="Enter video preview" />
                <x-input-error :messages="$errors->get('video_preview')" class="mt-2" />
            </div>

            <!-- Total Stock (Auto-Updated) -->
            <div class="mt-4">
                <div class="flex items-center space-x-1">
                    <x-input-label for="total_stock" :value="__('Total Stock')" />
                    <span class="text-red-500">*</span>
                </div>
                <x-text-input id="total_stock" class="block mt-1 w-full" type="number" name="total_stock"
                    placeholder="Enter total stock" />
            </div>

            <!-- Total Sale -->
            <div class="mt-4">
                <x-input-label for="total_sale" :value="__('Total Sale')" />
                <x-text-input id="total_sale" class="block mt-1 w-full" type="number" name="total_sale"
                    placeholder="Enter total sale" value="0" />
                <x-input-error :messages="$errors->get('total_sale')" class="mt-2" />
            </div>

            <!-- tags -->
            <div class="mt-4">
                <x-input-label for="tags" :value="__('Tags')" />
                <x-text-input id="tags" class="block mt-1 w-full" type="text" name="tags" :value="old('tags')"
                    placeholder="Enter tags" />
                <x-input-error :messages="$errors->get('tags')" class="mt-2" />
            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description" name="short_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter short description...">{{ old('short_description') }}</textarea>
                <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
            </div>
        </div>

        <h2>Finance</h2>

        <div class="finance-row w-full grid grid-cols-1 md:grid-cols-6 gap-4 mt-4" id="include">
            <div class="mt-4 flex items-center space-x-1" id="countres">
                <x-input-label for="countres-text" :value="__('Countries')" />
                <span class="text-red-500">*</span>
            </div>
            <div class="mt-4 flex items-center space-x-1" id="price-number">
                <x-input-label for="price-number" :value="__('Product Price')" />
                <span class="text-red-500">*</span>
            </div>
            <div class="mt-4 flex items-center space-x-1" id="delevery-charges">
                <x-input-label for="delevery-charges-number" :value="__('Discount (%)')" />
                <span class="text-red-500">*</span>
            </div>
            <div class="mt-4 flex items-center space-x-1">
                <x-input-label for="include_image" :value="__('Delivery Charges')" />
                <span class="text-red-500">*</span>
            </div>
            <div class="mt-4 flex items-center space-x-1">
                <x-input-label for="include_image" :value="__('Final Price')" />
                <span class="text-red-500">*</span>
            </div>
            <div class="mt-4 flex items-center space-x-1">
                <x-input-label for="include_image" :value="__('Symbol Of Currency')" />
                <span class="text-red-500">*</span>
            </div>
        </div>


        <div class="space-y-4" id="finance">
            <!-- Rows will be added dynamically -->

        </div>



        <!-- description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" name="description" rows="4"
                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                placeholder="Enter description...">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('event.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Submit') }}</button>
        </div>
    </form>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            height: 300,
        });


        function addFinanceRow(country, symbol) {
            $("#finance").append(`
        <div class="finance-row w-full grid grid-cols-1 md:grid-cols-6 gap-4 mt-4">
    
            <!-- Country -->
            <div id="finance_country">
                <x-text-input class="block mt-1 w-full country" type="text"
                    name="finance_country[]" placeholder="Enter country" value="${country}" readonly />
                <x-input-error :messages="$errors->get('finance-country')" class="mt-2" />
            </div>

            <!-- Price -->
            <div>
                <x-text-input class="block mt-1 w-full price" type="number"
                    name="finance_price[]" placeholder="Enter price" step="0.01" min="0" required />
                <x-input-error :messages="$errors->get('finance-price')" class="mt-2" />
            </div>

            <!-- Discount -->
            <div>
                <x-text-input class="block mt-1 w-full discount" type="number"
                    name="finance_discount[]" placeholder="Enter discount (%)" step="0.01" min="0" max="100" />
                <x-input-error :messages="$errors->get('finance-discount')" class="mt-2" />
            </div>

            <!-- Delivery Charge -->
            <div>
                <x-text-input class="block mt-1 w-full delivery_charge" type="number"
                    name="finance_deliverycharge[]" placeholder="Enter delivery charge" step="0.01" min="0" />
                <x-input-error :messages="$errors->get('finance-delivery_charge')" class="mt-2" />
            </div>

            <!-- Final Price -->
            <div>
                <x-text-input class="block mt-1 w-full after_discount" type="number"
                    name="after_discount[]" placeholder="Final price" step="0.01" min="0" readonly />
                <x-input-error :messages="$errors->get('after-discount')" class="mt-2" />
            </div>

            <!-- Currency Symbol -->
            <div>
                <x-text-input class="block mt-1 w-full currency_symbol" type="text"
                    name="currency_symbol[]" placeholder="Currency Symbol" value="${symbol}" readonly />
                <x-input-error :messages="$errors->get('currency_symbol')" class="mt-2" />
            </div>

        </div>
    `);
        }

        // Function to calculate final price
        function calculateFinalPrice(row) {
            let price = parseFloat($(row).find(".price").val()) || 0;
            let discount = parseFloat($(row).find(".discount").val()) || 0;
            let deliveryCharge = parseFloat($(row).find(".delivery_charge").val()) || 0;

            // Calculate discount
            let discountedPrice = price - (price * discount / 100);

            // Final price after adding delivery charge
            let finalPrice = discountedPrice + deliveryCharge;

            // Set final price
            $(row).find(".after_discount").val(finalPrice.toFixed(2));
        }

        // Event Listener for input changes
        $(document).on("input", ".price, .discount, .delivery_charge", function () {
            let row = $(this).closest(".finance-row");
            calculateFinalPrice(row);
        });

        // Initialize default rows
        $(document).ready(function () {
            let defaultCountries = [
                { name: "India", symbol: "₹" },
                { name: "United States", symbol: "$" },
                { name: "Canada", symbol: "$" }
            ];

            // Loop through default countries and add rows
            defaultCountries.forEach(data => addFinanceRow(data.name, data.symbol));
            console.log("Sagara  ::  ");
            console.log(typeof jQuery);
        });


    </script>
</x-app-layout>