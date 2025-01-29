<x-app-layout>
    <x-head-lable backhref="{{ route('our-team.index') }}">
        {{ __('Our-Team Create') }}
    </x-head-lable>

    <form method="POST" action="{{ route('our-team.store') }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-5">
        @csrf
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    placeholder="Enter name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    placeholder="Enter email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- post -->
            <div class="mt-4">
                <x-input-label for="post" :value="__('Post')" />
                <x-text-input id="post" class="block mt-1 w-full" type="text" name="post" :value="old('post')"
                    placeholder="Enter post" required />
                <x-input-error :messages="$errors->get('post')" class="mt-2" />
            </div>

            <!-- profile -->
            <div class="mt-4">
                <x-input-label for="profile" :value="__('Profile')" />
                <x-text-input id="profile"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="profile" accept="image/*" :value="old('profile')" />
                <x-input-error :messages="$errors->get('profile')" class="mt-2" />
            </div>

            <!-- speciality -->
            <div class="mt-4">
                <x-input-label for="speciality" :value="__('Speciality')" />
                <x-text-input id="speciality" class="block mt-1 w-full" type="text" name="speciality"
                    :value="old('speciality')" placeholder="Enter speciality" />
                <x-input-error :messages="$errors->get('speciality')" class="mt-2" />
            </div>

            <!-- experience -->
            <div class="mt-4">
                <x-input-label for="experience" :value="__('Experience')" />
                <x-text-input id="experience" class="block mt-1 w-full" type="text" name="experience"
                    :value="old('experience')" placeholder="Enter experience" />
                <x-input-error :messages="$errors->get('experience')" class="mt-2" />
            </div>

            <!-- phone_no -->
            <div class="mt-4">
                <x-input-label for="phone_no" :value="__('Phone No')" />
                <x-text-input id="phone_no" class="block mt-1 w-full" type="text" name="phone_no" :value="old('phone_no')"
                    placeholder="Enter phone no" />
                <x-input-error :messages="$errors->get('phone_no')" class="mt-2" />
            </div>

            <!-- trainers_skill -->
            <div class="mt-4">
                <x-input-label for="trainers_skill" :value="__('Trainers Skill')" />
                <x-text-input id="trainers_skill" class="block mt-1 w-full" type="text" name="trainers_skill"
                    placeholder="Enter trainers skill" :value="old('trainers_skill')" />
                <x-input-error :messages="$errors->get('trainers_skill')" class="mt-2" />
            </div>

            <!-- facebook_url -->
            <div class="mt-4">
                <x-input-label for="facebook_url" :value="__('Facebook Url')" />
                <x-text-input id="facebook_url" class="block mt-1 w-full" type="text" name="facebook_url"
                    placeholder="Enter facebook url" :value="old('facebook_url')" />
                <x-input-error :messages="$errors->get('facebook_url')" class="mt-2" />
            </div>

            <!-- twitter_url -->
            <div class="mt-4">
                <x-input-label for="twitter_url" :value="__('Twitter Url')" />
                <x-text-input id="twitter_url" class="block mt-1 w-full" type="text" name="twitter_url"
                    placeholder="Enter twitter url" :value="old('twitter_url')" />
                <x-input-error :messages="$errors->get('twitter_url')" class="mt-2" />
            </div>

            <!-- google_url -->
            <div class="mt-4">
                <x-input-label for="google_url" :value="__('Google Url')" />
                <x-text-input id="google_url" class="block mt-1 w-full" type="text" name="google_url"
                    placeholder="Enter google url" :value="old('google_url')" />
                <x-input-error :messages="$errors->get('google_url')" class="mt-2" />
            </div>

            <!-- instagram_url -->
            <div class="mt-4">
                <x-input-label for="instagram_url" :value="__('Instagram Url')" />
                <x-text-input id="instagram_url" class="block mt-1 w-full" type="text" name="instagram_url"
                    placeholder="Enter instagram url" :value="old('instagram_url')" />
                <x-input-error :messages="$errors->get('instagram_url')" class="mt-2" />
            </div>

            <!-- youtube_url -->
            <div class="mt-4">
                <x-input-label for="youtube_url" :value="__('Youtube Url')" />
                <x-text-input id="youtube_url" class="block mt-1 w-full" type="text" name="youtube_url"
                    placeholder="Enter youtube url" :value="old('youtube_url')" />
                <x-input-error :messages="$errors->get('youtube_url')" class="mt-2" />
            </div>
        </div>

        <!-- about -->
        <div class="mt-4">
            <x-input-label for="about" :value="__('About')" />
            <textarea id="about" name="about" rows="4"
                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                placeholder="Enter about...">{{ old('about') }}</textarea>
            <x-input-error :messages="$errors->get('about')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('our-team.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Submit') }}</button>
        </div>
    </form>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('about', {
            height: 300,
        });
    </script>
</x-app-layout>
