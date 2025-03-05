<x-app-layout>
    <x-head-lable backhref="{{ route('slider.index') }}">
        {{ __('Slider Edit') }}
    </x-head-lable>

    <form method="POST" action="{{ route('slider.update', $sliderItem->id) }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-2 sm:p-4 ">
        @csrf
        @method('PUT')
        <div class="grid md:grid-cols-2 gap-4">
            <!-- title -->
            <div class="mt-4">
                <div class="flex items-center space-x-1">
                    <x-input-label for="title" :value="__('Title')" />
                </div>
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $sliderItem->title)" placeholder="Enter title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <!-- background -->
            <div class="mt-4">
                <div class="flex items-center space-x-1">
                    <x-input-label for="background" :value="__('Background')" />
                    <span class="text-red-500">*</span>
                </div>
                <x-text-input id="background"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="background" accept="image/*" :value="old('background')" />
                <x-input-error :messages="$errors->get('background')" class="mt-2" />
                <img src="{{ $sliderItem->background }}" alt="background" class="w-16 h-16">
            </div>

            {{-- text_align --}}
            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700" for="name">
                    Select text align :
                </label>
                <select id="text_align" name="text_align"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Left" {{ old('text_align', $sliderItem->text_align ?? '') == 'Left' ? 'selected' : '' }}>Left</option>
                    <option value="Right" {{ old('text_align', $sliderItem->text_align ?? '') == 'Right' ? 'selected' : '' }}>Right</option>
                </select>
            </div>

            <!-- sub_description -->
            <div class="mt-4">
                <div class="flex items-center space-x-1">
                    <x-input-label for="sub_description" :value="__('Short Description')" />
                </div>
                <textarea id="sub_description" name="sub_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter sub description...">{{ old('sub_description', $sliderItem->sub_description) }}</textarea>
                <x-input-error :messages="$errors->get('sub_description')" class="mt-2" />
            </div>
        </div>

        <!-- description -->
        <div class="mt-4">

            <div class="flex items-center space-x-1">
                <x-input-label for="description" :value="__('Description')" />
            </div>
            <textarea id="description" name="description" rows="4"
                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                placeholder="Enter description...">{{ old('description', $sliderItem->description) }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('slider.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Update') }}</button>
        </div>
    </form>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            height: 300,
        });
    </script>
</x-app-layout>