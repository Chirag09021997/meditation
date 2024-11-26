<x-app-layout>
    <x-head-lable backhref="{{ route('notification.index') }}">
        {{ __('Notification Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- title -->
            <div class="mt-4">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" :value="old('title', $notification->title)" />
            </div>

            <!-- image_upload -->
            <div class="mt-4">
                <x-input-label for="image_upload" :value="__('Image Upload')" />
                <img src="{{ $notification->image }}" alt="image upload" class="w-16 my-2">

            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description" name="short_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">{{ old('short_description', $notification->short_desc) }}</textarea>
            </div>
        </div>
    </div>
</x-app-layout>
