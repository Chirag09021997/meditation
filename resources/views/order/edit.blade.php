<x-app-layout>
    <x-head-lable backhref="{{ route('order.index') }}">
        {{ __('Order Edit') }}
    </x-head-lable>

    <form method="POST" action="{{ route('order.update', $order->id) }}">
        @csrf
        @method('PUT')
        <div class="border-4 border-white rounded-lg p-2 sm:p-4 ">
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

        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('order.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Update') }}</button>
        </div>
    </form>
</x-app-layout>
