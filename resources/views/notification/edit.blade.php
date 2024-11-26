<x-app-layout>
    <x-head-lable backhref="{{ route('notification.index') }}">
        {{ __('Notification Edit') }}
    </x-head-lable>

    <form method="POST" action="{{ route('notification.update', $notification->id) }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-2 sm:p-4 ">
        @csrf
        @method('PUT')
        <div class="grid md:grid-cols-2 gap-4">
            <!-- title -->
            <div class="mt-4">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $notification->title)"
                    placeholder="Enter title" required autofocus />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <!-- image -->
            <div class="mt-4">
                <x-input-label for="image" :value="__('Image Upload')" />
                <x-text-input id="image"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="image" accept="image/*" />
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                <img src="{{ $notification->image }}" alt="image upload" class="w-16 my-2">
            </div>

            <!-- short_desc -->
            <div class="mt-4">
                <x-input-label for="short_desc" :value="__('Short Description')" />
                <textarea id="short_desc" name="short_desc" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter short description...">{{ old('short_desc', $notification->short_desc) }}</textarea>
                <x-input-error :messages="$errors->get('short_desc')" class="mt-2" />
            </div>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('notification.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Update') }}</button>
        </div>
    </form>
</x-app-layout>
