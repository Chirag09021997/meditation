<x-app-layout>
    <x-head-lable backhref="{{ route('contact-us.index') }}">
        {{ __('Contact Us Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $contactUs->name)"
                    disabled />
                </select>
            </div>

            <!-- email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email', $contactUs->email)"
                    disabled />
                </select>
            </div>

            <!-- mobile_no -->
            <div class="mt-4">
                <x-input-label for="mobile_no" :value="__('Mobile No')" />
                <x-text-input id="mobile_no" class="block mt-1 w-full" type="text" name="mobile_no" :value="old('mobile_no', $contactUs->mobile_no)"
                    disabled />
                </select>
            </div>

            <!-- subject -->
            <div class="mt-4">
                <x-input-label for="subject" :value="__('Subject')" />
                <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject" :value="old('subject', $contactUs->subject)"
                    disabled />
                </select>
            </div>

            <!-- message -->
            <div class="mt-4">
                <x-input-label for="message" :value="__('Message')" />
                <textarea id="message" name="message" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    disabled>{{ old('message', $contactUs->message) }}</textarea>
            </div>
        </div>
    </div>
</x-app-layout>
