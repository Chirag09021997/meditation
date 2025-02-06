<x-app-layout>
    <x-head-lable>
        {{ __('Setting') }}
    </x-head-lable>

    <form method="POST" action="{{ config('app.url') }}/setting" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-2 sm:p-4 ">
        @csrf
        @method('PUT')
        <div class="grid md:grid-cols-2 gap-4">

            <!-- address -->
            <div class="mt-4">
                <x-input-label for="address" :value="__('Address')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address', $settings['address'] ?? '')"
                    placeholder="Enter address" />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- mobile_no -->
            <div class="mt-4">
                <x-input-label for="mobile_no" :value="__('Mobile Number')" />
                <x-text-input id="mobile_no" class="block mt-1 w-full" type="text" name="mobile_no" :value="old('mobile_no', $settings['mobile_no'] ?? '')"
                    placeholder="Enter mobile no" />
                <x-input-error :messages="$errors->get('mobile_no')" class="mt-2" />
            </div>

            <!-- mail -->
            <div class="mt-4">
                <x-input-label for="mail" :value="__('Mail')" />
                <x-text-input id="mail" class="block mt-1 w-full" type="email" name="mail" :value="old('mail', $settings['mail'] ?? '')"
                    placeholder="Enter mail" />
                <x-input-error :messages="$errors->get('mail')" class="mt-2" />
            </div>

            <!-- facebook_url -->
            <div class="mt-4">
                <x-input-label for="facebook_url" :value="__('Facebook Url')" />
                <x-text-input id="facebook_url" class="block mt-1 w-full" type="text" name="facebook_url"
                    :value="old('facebook_url', $settings['facebook_url'] ?? '')" placeholder="Enter facebook url" />
                <x-input-error :messages="$errors->get('facebook_url')" class="mt-2" />
            </div>

            <!-- twitter_url -->
            <div class="mt-4">
                <x-input-label for="twitter_url" :value="__('Twitter Url')" />
                <x-text-input id="twitter_url" class="block mt-1 w-full" type="text" name="twitter_url"
                    :value="old('twitter_url', $settings['twitter_url'] ?? '')" placeholder="Enter twitter url" />
                <x-input-error :messages="$errors->get('twitter_url')" class="mt-2" />
            </div>

            <!-- google_url -->
            <div class="mt-4">
                <x-input-label for="google_url" :value="__('Google Url')" />
                <x-text-input id="google_url" class="block mt-1 w-full" type="text" name="google_url"
                    :value="old('google_url', $settings['google_url'] ?? '')" placeholder="Enter google url" />
                <x-input-error :messages="$errors->get('google_url')" class="mt-2" />
            </div>

            <!-- instagram_url -->
            <div class="mt-4">
                <x-input-label for="instagram_url" :value="__('Instagram Url')" />
                <x-text-input id="instagram_url" class="block mt-1 w-full" type="text" name="instagram_url"
                    :value="old('instagram_url', $settings['instagram_url'] ?? '')" placeholder="Enter instagram url" />
                <x-input-error :messages="$errors->get('instagram_url')" class="mt-2" />
            </div>

            <!-- pinterest_url -->
            <div class="mt-4">
                <x-input-label for="pinterest_url" :value="__('Pinterest Url')" />
                <x-text-input id="pinterest_url" class="block mt-1 w-full" type="text" name="pinterest_url"
                    :value="old('pinterest_url', $settings['pinterest_url'] ?? '')" placeholder="Enter pinterest url" />
                <x-input-error :messages="$errors->get('pinterest_url')" class="mt-2" />
            </div>

            <!-- youtube_url -->
            <div class="mt-4">
                <x-input-label for="youtube_url" :value="__('Youtube Url')" />
                <x-text-input id="youtube_url" class="block mt-1 w-full" type="text" name="youtube_url"
                    :value="old('youtube_url', $settings['youtube_url'] ?? '')" placeholder="Enter youtube url" />
                <x-input-error :messages="$errors->get('youtube_url')" class="mt-2" />
            </div>

            <!-- map_url -->
            <div class="mt-4">
                <x-input-label for="map_url" :value="__('Map Url')" />
                <textarea id="map_url" name="map_url" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter short description...">{{ old('map_url', $settings['map_url'] ?? '') }}</textarea>
                <x-input-error :messages="$errors->get('map_url')" class="mt-2" />
            </div>

            <!-- about_thumb -->
            <div class="mt-4">
                <x-input-label for="about_thumb" :value="__('About Thumb')" />
                <x-text-input id="about_thumb"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="about_thumb" accept="image/*" />
                <x-input-error :messages="$errors->get('about_thumb')" class="mt-2" />
                <img src="{{ config('app.url') . '/' . ($settings['about_thumb'] ?? 'default-image.jpg') }}"
                    alt="About thumb" class="w-16 my-2">
            </div>

        </div>
        <div class="flex items-center justify-end mt-4">
            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Update') }}</button>
        </div>
    </form>
</x-app-layout>
