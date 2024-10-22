<x-app-layout>
    <x-head-lable backhref="{{ route('coupon-system.index') }}">
        {{ __('Coupon System Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">

            <!-- type -->
            <div class="mt-4">
                <x-input-label for="type" :value="__('Select Type')" />
                <x-text-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type', $couponSystem->type)"
                    disabled />
                </select>
            </div>

            <!-- coupon_code -->
            <div class="mt-4">
                <x-input-label for="coupon_code" :value="__('Coupon Code')" />
                <x-text-input id="coupon_code" class="block mt-1 w-full" type="text" name="coupon_code"
                    :value="old('coupon_code', $couponSystem->coupon_code)" placeholder="Enter coupon code" disabled />
            </div>

            <!-- value -->
            <div class="mt-4">
                <x-input-label for="value" :value="__('Value')" />
                <x-text-input id="value" class="block mt-1 w-full" type="number" name="value" :value="old('value', $couponSystem->value)"
                    placeholder="Enter value" step="0.01" min="0" disabled />
            </div>

            <!-- start_date -->
            <div class="mt-4">
                <x-input-label for="start_date" :value="__('Start Date')" />
                <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date"
                    :value="old('start_date', $couponSystem->start_date)" disabled />
            </div>

            <!-- end_date -->
            <div class="mt-4">
                <x-input-label for="end_date" :value="__('End Date')" />
                <x-text-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" :value="old('end_date', $couponSystem->end_date)"
                    placeholder="Enter end date" disabled />
            </div>

        </div>
    </div>
</x-app-layout>
