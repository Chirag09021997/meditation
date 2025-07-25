<x-app-layout>
    <x-head-lable backhref="{{ route('workshop.index') }}">
        {{ __('Work Shop Edit') }}
    </x-head-lable>

    <form method="POST" action="{{ config('app.url') }}/workshop/{{ $workshop->id }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-2 sm:p-4 ">
        @csrf
        @method('PUT')
        <div class="grid md:grid-cols-2 gap-4">

            <!-- name -->
            <div class="mt-4">
            <div class="flex items-center space-x-1">
                    <x-input-label for="name" :value="__('Name')" />
                    <span class="text-red-500">*</span>
                </div>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $workshop->name)"
                    placeholder="Enter name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- total_view -->
            <div class="mt-4">
                <x-input-label for="total_view" :value="__('Total View')" />
                <x-text-input id="total_view" class="block mt-1 w-full" type="number" name="total_view"
                    :value="old('total_view', $workshop->total_view)" placeholder="Enter total view" step="0.01" min="0" />
                <x-input-error :messages="$errors->get('total_view')" class="mt-2" />
            </div>

            <!-- thumb_image -->
            <div class="mt-4">
            <div class="flex items-center space-x-1">
                    <x-input-label for="thumb_image" :value="__('Thumb Image (1600x1100 / 16:11)')" />
                    <span class="text-red-500">*</span>
                </div>
                <x-text-input id="thumb_image"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="thumb_image" accept="image/*" />
                <x-input-error :messages="$errors->get('thumb_image')" class="mt-2" />
                <img src="{{ $workshop->thumb_image }}" alt="thumb image" class="w-16 my-2">
            </div>

            <!-- hi_video_upload or hi_video_url-->
            <div class="mt-4">
                <x-input-label for="hi_video_upload" :value="__('Hindi Video Upload')" />
                <x-text-input id="hi_video_upload"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="hi_video_upload" accept="video/*" />
                <x-input-error :messages="$errors->get('hi_video_upload')" class="mt-2" />

                <p class="text-center">Or</p>

                <!-- hi_video_url -->
                <x-input-label for="hi_video_url" :value="__('Hindi Video Url')" />
                <x-text-input id="hi_video_url" class="block mt-1 w-full" type="text" name="hi_video_url"
                    :value="old('hi_video_url')" placeholder="Enter video url" />
                <x-input-error :messages="$errors->get('hi_video_url')" class="mt-2" />
                @if ($workshop->hi_video_url)
                    <video width="640" height="360" controls class="my-2">
                        <source src="{{ $workshop->hi_video_url }}" type="video/mp4">
                        <source src="{{ $workshop->hi_video_url }}" type="video/webm">
                    </video>
                @endif
            </div>

            <!-- en_video_upload or en_video_url-->
            <div class="mt-4">
                <x-input-label for="en_video_upload" :value="__('English Video Upload')" />
                <x-text-input id="en_video_upload"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="en_video_upload" accept="video/*" />
                <x-input-error :messages="$errors->get('en_video_upload')" class="mt-2" />

                <p class="text-center">Or</p>

                <!-- en_video_url -->
                <x-input-label for="en_video_url" :value="__('English Video Url')" />
                <x-text-input id="en_video_url" class="block mt-1 w-full" type="text" name="en_video_url"
                    :value="old('en_video_url')" placeholder="Enter video url" />
                <x-input-error :messages="$errors->get('en_video_url')" class="mt-2" />
                @if ($workshop->en_video_url)
                    <video width="640" height="360" controls class="my-2">
                        <source src="{{ $workshop->en_video_url }}" type="video/mp4">
                        <source src="{{ $workshop->en_video_url }}" type="video/webm">
                    </video>
                @endif
            </div>

            <!-- premium_type -->
            <div class="mt-4">
                <x-input-label for="premium_type" :value="__('Select Premium Type')" />
                <select id="premium_type" name="premium_type"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="1" @selected(old('premium_type', $workshop->premium_type) == '1')>true</option>
                    <option value="0" @selected(old('premium_type', $workshop->premium_type) == '0')>false</option>
                </select>
            </div>

            <!-- second -->
            <div class="mt-4">
                <x-input-label for="second" :value="__('Second')" />
                <x-text-input id="second" class="block mt-1 w-full" type="number" name="second" :value="old('second', $workshop->second)"
                    placeholder="Enter second" min="0" />
                <x-input-error :messages="$errors->get('second')" class="mt-2" />
            </div>

            <!-- workshop_category -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Select Workshop Category')" />
                <select multiple id="workshop_category" name="workshop_category[]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option disabled>Choose workshop category</option>
                    @foreach ($workshopCategory as $workshop)
                        <option value="{{ $workshop->id }}" @selected(in_array($workshop->id, $oldWorkshopCategory))>
                            {{ $workshop->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Interest -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Select Interest')" />
                <select multiple id="interest_type" name="interest_type[]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option disabled>Choose interest type</option>
                    @foreach ($interestList as $interest)
                        <option value="{{ $interest->id }}" @selected(in_array($interest->id, $oldInterestList))>
                            {{ $interest->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description" name="short_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter short description...">{{ old('short_description', $workshop->short_description) }}</textarea>
                <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
            </div>

            <!-- description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <textarea id="description" name="description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter description...">{{ old('description', $workshop->description) }}</textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>

        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('workshop.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Update') }}</button>
        </div>
    </form>
</x-app-layout>
