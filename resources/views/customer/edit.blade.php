<x-app-layout>
    <x-head-lable backhref="{{ route('customer.index') }}">
        {{ __('Customers Edit') }}
    </x-head-lable>

    <form method="POST" action="{{ route('customer.update', $customer->id) }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-2 sm:p-4 ">
        @csrf
        @method('PUT')
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $customer->name)"
                    placeholder="Enter name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $customer->email)"
                    placeholder="Enter email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- country_name -->
            <div class="mt-4">
                <x-input-label for="country_name" :value="__('Country Name')" />
                <x-text-input id="country_name" class="block mt-1 w-full" type="text" name="country_name"
                    placeholder="Enter country name" :value="old('country_name', $customer->country_name)" />
                <x-input-error :messages="$errors->get('country_name')" class="mt-2" />
            </div>

            <!-- mobile_no -->
            <div class="mt-4">
                <x-input-label for="mobile_no" :value="__('Mobile No')" />
                <x-text-input id="mobile_no" class="block mt-1 w-full" type="text" name="mobile_no"
                    placeholder="Enter mobile no" :value="old('mobile_no', $customer->mobile_no)" />
                <x-input-error :messages="$errors->get('mobile_no')" class="mt-2" />
            </div>

            <!-- business_category -->
            <div class="mt-4">
                <x-input-label for="business_category" :value="__('Business Category')" />
                <x-text-input id="business_category" class="block mt-1 w-full" type="text" name="business_category"
                    placeholder="Enter business category" :value="old('business_category', $customer->business_category)" />
                <x-input-error :messages="$errors->get('business_category')" class="mt-2" />
            </div>

            <!-- dob -->
            <div class="mt-4">
                <x-input-label for="dob" :value="__('DOB')" />
                <x-text-input id="dob" class="block mt-1 w-full" type="date" name="dob"
                    placeholder="Enter dob" :value="old('dob', $customer->dob)" />
                <x-input-error :messages="$errors->get('dob')" class="mt-2" />
            </div>

            <!-- profile -->
            <div class="mt-4">
                <x-input-label for="profile" :value="__('Profile')" />
                <x-text-input id="profile"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="profile" accept="image/*" />
                <x-input-error :messages="$errors->get('profile')" class="mt-2" />
                <img src="{{ $customer->profile }}" alt="profile" class="w-16 my-2">
            </div>

        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('customer.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Update') }}</button>
        </div>
    </form>
</x-app-layout>
