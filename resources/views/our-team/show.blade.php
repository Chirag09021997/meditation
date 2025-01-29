<x-app-layout>
    <x-head-lable backhref="{{ route('our-team.index') }}">
        {{ __('Our Team Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $ourTeam->name)" />
            </div>

            <!-- post -->
            <div class="mt-4">
                <x-input-label for="post" :value="__('Post')" />
                <x-text-input id="post" class="block mt-1 w-full" type="text" name="post"
                    :value="old('post', $ourTeam->post)" />
            </div>

            <!-- email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email', $ourTeam->email)" />
            </div>

            <!-- speciality -->
            <div class="mt-4">
                <x-input-label for="speciality" :value="__('Speciality')" />
                <x-text-input id="speciality" class="block mt-1 w-full" type="text" name="speciality"
                    :value="old('speciality', $ourTeam->speciality)" />
            </div>

            <!-- experience -->
            <div class="mt-4">
                <x-input-label for="experience" :value="__('Experience')" />
                <x-text-input id="experience" class="block mt-1 w-full" type="text" name="experience"
                    :value="old('experience', $ourTeam->experience)" />
            </div>

            <!-- phone_no -->
            <div class="mt-4">
                <x-input-label for="phone_no" :value="__('Phone No')" />
                <x-text-input id="phone_no" class="block mt-1 w-full" type="text" name="phone_no"
                    :value="old('phone_no', $ourTeam->phone_no)" />
            </div>

            <!-- trainers_skill -->
            <div class="mt-4">
                <x-input-label for="trainers_skill" :value="__('Trainers Skill')" />
                <x-text-input id="trainers_skill" class="block mt-1 w-full" type="text" name="trainers_skill"
                    :value="old('trainers_skill', $ourTeam->trainers_skill)" />
            </div>

            <!-- facebook_url -->
            <div class="mt-4">
                <x-input-label for="facebook_url" :value="__('Facebook Url')" />
                <x-text-input id="facebook_url" class="block mt-1 w-full" type="text" name="facebook_url"
                    :value="old('facebook_url', $ourTeam->facebook_url)" />
            </div>

            <!-- twitter_url -->
            <div class="mt-4">
                <x-input-label for="twitter_url" :value="__('Twitter Url')" />
                <x-text-input id="twitter_url" class="block mt-1 w-full" type="text" name="twitter_url"
                    :value="old('twitter_url', $ourTeam->twitter_url)" />
            </div>

            <!-- google_url -->
            <div class="mt-4">
                <x-input-label for="google_url" :value="__('Google Url')" />
                <x-text-input id="google_url" class="block mt-1 w-full" type="text" name="google_url"
                    :value="old('google_url', $ourTeam->google_url)" />
            </div>

            <!-- instagram_url -->
            <div class="mt-4">
                <x-input-label for="instagram_url" :value="__('Instagram Url')" />
                <x-text-input id="instagram_url" class="block mt-1 w-full" type="text" name="instagram_url"
                    :value="old('instagram_url', $ourTeam->instagram_url)" />
            </div>

            <!-- youtube_url -->
            <div class="mt-4">
                <x-input-label for="youtube_url" :value="__('Youtube Url')" />
                <x-text-input id="youtube_url" class="block mt-1 w-full" type="text" name="youtube_url"
                    :value="old('youtube_url', $ourTeam->youtube_url)" />
            </div>

            <!-- profile -->
            <div class="mt-4">
                <x-input-label for="profile" :value="__('Profile')" />
                <img src="{{ $ourTeam->profile }}" alt="profile" class="w-20 my-2">
            </div>
        </div>

        <!-- about -->
        <div class="mt-4">
            <x-input-label for="about" :value="__('About')" />
            <textarea id="about" name="about" rows="4"
                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                placeholder="Enter about...">{{ old('about', $ourTeam->about) }}</textarea>
            <x-input-error :messages="$errors->get('about')" class="mt-2" />
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('about', {
            height: 300,
        });
    </script>
</x-app-layout>
