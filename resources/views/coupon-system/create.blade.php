<x-app-layout>
    <x-head-lable backhref="{{ route('coupon-system.index') }}">
        {{ __('Coupon System Create') }}
    </x-head-lable>
    <form method="POST" action="{{ route('coupon-system.store') }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-5">
        @csrf
        <div class="grid md:grid-cols-2 gap-4">
            <!-- type -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Select Type')" />
                <select id="type" name="type"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Percentage" @selected(old('type') == 'Percentage')>Percentage</option>
                    <option value="Amount" @selected(old('type') == 'Amount')>Amount</option>
                </select>
            </div>

            <!-- coupon_code -->
            <div class="mt-4">
                <x-input-label for="coupon_code" :value="__('Coupon Code')" />
                <x-text-input id="coupon_code" class="block mt-1 w-full" type="text" name="coupon_code"
                    :value="old('coupon_code')" placeholder="Enter coupon code" required autofocus />
                <x-input-error :messages="$errors->get('coupon_code')" class="mt-2" />
            </div>

            <!-- value -->
            <div class="mt-4">
                <x-input-label for="value" :value="__('Value')" />
                <x-text-input id="value" class="block mt-1 w-full" type="number" name="value" :value="old('value')"
                    placeholder="Enter value" step="0.01" min="0" required />
                <x-input-error :messages="$errors->get('value')" class="mt-2" />
            </div>

            <!-- start_date -->
            <div class="mt-4">
                <x-input-label for="start_date" :value="__('Start Date')" />
                <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date"
                    :value="old('start_date')" placeholder="Enter start date" required />
                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
            </div>

            <!-- end_date -->
            <div class="mt-4">
                <x-input-label for="end_date" :value="__('End Date')" />
                <x-text-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" :value="old('end_date')"
                    placeholder="Enter end date" required />
                <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
            </div>

        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('coupon-system.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Submit') }}</button>
        </div>
    </form>
</x-app-layout>
