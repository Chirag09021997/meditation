<x-app-layout>
    <x-head-lable backhref="{{ route('premium-plan.index') }}">
        {{ __('PremiumPlan Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" :value="old('name', $premiumPlan->name)" />
            </div>

            <!-- total_amount -->
            <div class="mt-4">
                <x-input-label for="total_amount" :value="__('Total Amount')" />
                <x-text-input id="total_amount" class="block mt-1 w-full" type="number" :value="old('total_amount', $premiumPlan->total_amount)" />
            </div>

            <!-- discount -->
            <div class="mt-4">
                <x-input-label for="discount" :value="__('Discount')" />
                <x-text-input id="discount" class="block mt-1 w-full" type="number" :value="old('discount', $premiumPlan->discount)" />
            </div>

            <!-- total_user -->
            <div class="mt-4">
                <x-input-label for="total_user" :value="__('Total User')" />
                <x-text-input id="total_user" class="block mt-1 w-full" type="number" :value="old('total_user', $premiumPlan->total_user)" />
            </div>

            <!-- total_payable_amount -->
            <div class="mt-4">
                <x-input-label for="total_payable_amount" :value="__('Total Payable Amount')" />
                <x-text-input id="total_payable_amount" class="block mt-1 w-full" type="number" :value="old('total_payable_amount', $premiumPlan->total_payable_amount)" />
            </div>

            <!-- thumb_upload -->
            <div class="mt-4">
                <x-input-label for="thumb_upload" :value="__('Thumb Upload')" />
                <img src="{{ $premiumPlan->thumb_upload }}" alt="thumb upload" class="w-16 my-2">

            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description" name="short_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">{{ old('short_description', $premiumPlan->short_description) }}</textarea>
            </div>

            <!-- description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <textarea id="description" name="description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">{{ old('description', $premiumPlan->description) }}</textarea>
            </div>

            <!-- is_free -->
            <div class="mt-4">
                <x-input-label for="is_free" :value="__('Is Free')" />
                <x-text-input id="is_free" class="block mt-1 w-full" type="text" :value="old('is_free', $premiumPlan->is_free)" />
            </div>
        </div>
    </div>
</x-app-layout>
