<x-app-layout>
    <x-head-lable backhref="{{ route('workshop.index') }}">
        {{ __('WorkShop Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" :value="old('name', $workshop->name)" disabled />
            </div>

            <!-- total_view -->
            <div class="mt-4">
                <x-input-label for="total_view" :value="__('Total View')" />
                <x-text-input id="total_view" class="block mt-1 w-full" type="number" :value="old('total_view', $workshop->total_view)" disabled />
            </div>

            <!-- thumb_image -->
            <div class="mt-4">
                <x-input-label for="thumb_image" :value="__('Thumb Image')" />
                <img src="{{ $workshop->thumb_image }}" alt="thumb image" class="w-16 my-2">
            </div>

            <!-- video_upload  or video_url-->
            <div class="mt-4">
                <x-input-label for="thumb_image" :value="__('Video Url')" />
                @if ($workshop->video_url)
                    <video width="640" height="360" controls class="my-2">
                        <source src="{{ $workshop->video_url }}" type="video/mp4">
                        <source src="{{ $workshop->video_url }}" type="video/webm">
                    </video>
                @endif
            </div>

            <!-- premium_type -->
            <div class="mt-4">
                <x-input-label for="premium_type" :value="__('Select Premium Type')" />
                <x-text-input id="premium_type" class="block mt-1 w-full" type="text" :value="$workshop->premium_type == 0 ? 'false' : 'true'" disabled />
            </div>

            <!-- second -->
            <div class="mt-4">
                <x-input-label for="second" :value="__('Second')" />
                <x-text-input id="second" class="block mt-1 w-full" type="number" :value="old('second', $workshop->second)" disabled />
            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description" name="short_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    disabled>{{ old('short_description', $workshop->short_description) }}</textarea>
            </div>

            <!-- description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <textarea id="description" name="description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    disabled>{{ old('description', $workshop->description) }}</textarea>
            </div>

        </div>
    </div>
</x-app-layout>
