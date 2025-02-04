<x-app-layout>
    <x-head-lable backhref="{{ route('slider.index') }}">
        {{ __('Slider Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- title -->
            <div class="mt-4">
                <x-input-label for="title" :value="__('Title')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title', $sliderItem->title)"
                    placeholder="Enter title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>

            <!-- background -->
            <div class="mt-4">
                <x-input-label for="background" :value="__('Background')" />
                <img src="{{ $sliderItem->background }}" alt="background" class="w-16 h-16">
            </div>

            {{-- text_align --}}
            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700" for="name">
                    Select text align :
                </label>
                <select id="text_align" name="text_align"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Left" @selected($sliderItem->text_align == 'Left')>Left</option>
                    <option value="Right" @selected($sliderItem->text_align == 'Right')>Right</option>
                </select>
            </div>

            <!-- sub_description -->
            <div class="mt-4">
                <x-input-label for="sub_description" :value="__('Short Description')" />
                <textarea id="sub_description" name="sub_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter sub description...">{{ old('sub_description', $sliderItem->sub_description) }}</textarea>
            </div>
        </div>

        <!-- description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" name="description" rows="4"
                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                placeholder="Enter description...">{{ old('description', $sliderItem->description) }}</textarea>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            height: 300,
        });
    </script>
</x-app-layout>
