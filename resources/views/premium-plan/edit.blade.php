<x-app-layout>
    <x-head-lable backhref="{{ route('premium-plan.index') }}">
        {{ __('Premium Plan Edit') }}
    </x-head-lable>

    <form method="POST" action="{{ route('premium-plan.update', $premiumPlan->id) }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-2 sm:p-4 ">
        @csrf
        @method('PUT')
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $premiumPlan->name)"
                    placeholder="Enter name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- total_amount -->
            <div class="mt-4">
                <x-input-label for="total_amount" :value="__('Total Amount')" />
                <x-text-input id="total_amount" class="block mt-1 w-full" type="number" name="total_amount"
                    :value="old('total_amount', $premiumPlan->total_amount)" placeholder="Enter total amount" step="0.01" min="0" />
                <x-input-error :messages="$errors->get('total_amount')" class="mt-2" />
            </div>

            <!-- discount -->
            <div class="mt-4">
                <x-input-label for="discount" :value="__('Discount')" />
                <x-text-input id="discount" class="block mt-1 w-full" type="number" name="discount" :value="old('discount', $premiumPlan->discount)"
                    placeholder="Enter discount" step="0.01" min="0" />
                <x-input-error :messages="$errors->get('discount')" class="mt-2" />
            </div>

            <!-- total_user -->
            <div class="mt-4">
                <x-input-label for="total_user" :value="__('Total User')" />
                <x-text-input id="total_user" class="block mt-1 w-full" type="number" name="total_user"
                    :value="old('total_user', $premiumPlan->total_user)" placeholder="Enter total user" />
                <x-input-error :messages="$errors->get('total_user')" class="mt-2" />
            </div>

            <!-- total_payable_amount -->
            <div class="mt-4">
                <x-input-label for="total_payable_amount" :value="__('Total Payable Amount')" />
                <x-text-input id="total_payable_amount" class="block mt-1 w-full" type="number"
                    name="total_payable_amount" :value="old('total_payable_amount', $premiumPlan->total_payable_amount)" placeholder="Enter total payable amount" />
                <x-input-error :messages="$errors->get('total_payable_amount')" class="mt-2" />
            </div>

            <!-- thumb_upload -->
            <div class="mt-4">
                <x-input-label for="thumb_upload" :value="__('Thumb Upload')" />
                <x-text-input id="thumb_upload"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="thumb_upload" accept="image/*" />
                <x-input-error :messages="$errors->get('thumb_upload')" class="mt-2" />
                <img src="{{ $premiumPlan->thumb_upload }}" alt="thumb upload" class="w-16 my-2">

            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description" name="short_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter short description...">{{ old('short_description', $premiumPlan->short_description) }}</textarea>
                <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
            </div>

            <!-- description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <textarea id="description" name="description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter description...">{{ old('description', $premiumPlan->description) }}</textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <!-- is_free -->
            <div class="mt-4">
                <x-input-label for="is_free" :value="__('Select Is Free')" />
                <select id="is_free" name="is_free"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="0" @selected(old('is_free', $premiumPlan->is_free) == 0)>False</option>
                    <option value="1" @selected(old('is_free', $premiumPlan->is_free) == 1)>True</option>
                </select>
                <x-input-error :messages="$errors->get('is_free')" class="mt-2" />
            </div>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('premium-plan.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Update') }}</button>
        </div>
    </form>
</x-app-layout>
