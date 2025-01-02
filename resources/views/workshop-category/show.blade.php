<x-app-layout>
    <x-head-lable backhref="{{ route('workshop-category.index') }}">
        {{ __('Workshop Category Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" :value="old('name', $workshopCategory->name)" />
            </div>

            <!-- thumb_image -->
            <div class="mt-4">
                <x-input-label for="thumb_image" :value="__('Thumb Image')" />
                <img src="{{ $workshopCategory->thumb_image }}" alt="thumb upload" class="w-16 my-2">
            </div>
        </div>
    </div>
</x-app-layout>
