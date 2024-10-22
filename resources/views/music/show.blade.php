<x-app-layout>
    <x-head-lable backhref="{{ route('music.index') }}">
        {{ __('Music Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" :value="old('name', $music->name)" disabled />
            </div>

            <!-- total_view -->
            <div class="mt-4">
                <x-input-label for="total_view" :value="__('Total View')" />
                <x-text-input id="total_view" class="block mt-1 w-full" type="number" :value="old('total_view', $music->total_view)" disabled />
            </div>

            <!-- audio_thumb -->
            <div class="mt-4">
                <x-input-label for="audio_thumb" :value="__('Audio Thumb')" />
                <img src="{{ $music->audio_thumb }}" alt="thumb upload" class="w-16 my-2">
            </div>

            <!-- audio_upload -->
            <div class="mt-4">
                <x-input-label for="audio_upload" :value="__('Audio Upload')" />
                @if ($music->audio_upload)
                    <audio controls class="w-full my-2">
                        <source src="{{ $music->audio_upload }}" type="audio/mpeg">
                    </audio>
                @endif
            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description" name="short_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    disabled>{{ old('short_description', $music->short_description) }}</textarea>
            </div>

            <!-- description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <textarea id="description" name="description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    disabled>{{ old('description', $music->description) }}</textarea>
            </div>

            <!-- premium_type -->
            <div class="mt-4">
                <x-input-label for="premium_type" :value="__('Select Premium Type')" />
                <x-text-input id="premium_type" class="block mt-1 w-full" type="text" :value="$music->premium_type == 0 ? 'false' : 'true'" disabled />
            </div>

        </div>
    </div>
</x-app-layout>
