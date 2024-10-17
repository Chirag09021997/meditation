<x-app-layout>
    <x-head-lable>
        {{ __('Customers Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $customer->name)" />
            </div>

            <!-- email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email', $customer->email)" />
            </div>

            <!-- country_name -->
            <div class="mt-4">
                <x-input-label for="country_name" :value="__('Country Name')" />
                <x-text-input id="country_name" class="block mt-1 w-full" type="text" name="country_name"
                    :value="old('country_name', $customer->country_name)" />
            </div>

            <!-- mobile_no -->
            <div class="mt-4">
                <x-input-label for="mobile_no" :value="__('Mobile No')" />
                <x-text-input id="mobile_no" class="block mt-1 w-full" type="text" name="mobile_no"
                    :value="old('mobile_no', $customer->mobile_no)" />
            </div>

            <!-- business_category -->
            <div class="mt-4">
                <x-input-label for="business_category" :value="__('Business Category')" />
                <x-text-input id="business_category" class="block mt-1 w-full" type="text" name="business_category"
                    :value="old('business_category', $customer->business_category)" />
            </div>

            <!-- dob -->
            <div class="mt-4">
                <x-input-label for="dob" :value="__('DOB')" />
                <x-text-input id="dob" class="block mt-1 w-full" type="date" name="dob"
                    :value="old('dob', $customer->dob)" />
            </div>

            <!-- profile -->
            <div class="mt-4">
                <x-input-label for="profile" :value="__('Profile')" />
                <img src="{{ $customer->profile }}" alt="profile" class="w-20 my-2">
            </div>
        </div>
    </div>
</x-app-layout>
