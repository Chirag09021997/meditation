<x-app-layout>
    <x-head-lable backhref="{{ route('meditation-audio.index') }}">
        {{ __('Meditation Audio Create') }}
    </x-head-lable>
    <form method="POST" action="{{ route('meditation-audio.store') }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-5">
        @csrf
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
            <div class="flex items-center space-x-1">
                    <x-input-label for="name" :value="__('Name')" />
                    <span class="text-red-500">*</span>
                </div>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    placeholder="Enter name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- meditation_type_id -->
            <div class="mt-4">
                <x-input-label for="meditation_type_id" :value="__('Select Meditation Type')" />
                <select id="meditation_type_id" name="meditation_type_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach ($meditationTypes as $type)
                        <option value="{{ $type->id }}" @selected(old('meditation_type_id') == $type->id)>
                            {{ $type->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('meditation_type_id')" class="mt-2" />
            </div>

            <!-- total_view -->
            <div class="mt-4">
                <x-input-label for="total_view" :value="__('Total View')" />
                <x-text-input id="total_view" class="block mt-1 w-full" type="number" name="total_view"
                    :value="old('total_view')" placeholder="Enter total view" step="0.01" min="0" />
                <x-input-error :messages="$errors->get('total_view')" class="mt-2" />
            </div>

            <!-- audio_thumb -->
            <div class="mt-4">
            <div class="flex items-center space-x-1">
                    <x-input-label for="audio_thumb" :value="__('Audio Thumb (1600x1100 / 16:11)')" />
                    <span class="text-red-500">*</span>
                </div>
                <x-text-input id="audio_thumb"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="audio_thumb" accept="image/*" />
                <x-input-error :messages="$errors->get('audio_thumb')" class="mt-2" />
            </div>

              <!-- inner_thumb -->
            <div class="mt-4">
            <div class="flex items-center space-x-1">
                    <x-input-label for="inner_thumb" :value="__('Inner Thumb (400x480)')" />
                    <span class="text-red-500">*</span>
                </div>
                <x-text-input id="inner_thumb"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="inner_thumb" accept="image/*" />
                <x-input-error :messages="$errors->get('inner_thumb')" class="mt-2" />
            </div>

            <!-- audio_upload -->
            <div class="mt-4">
            <div class="flex items-center space-x-1">
                    <x-input-label for="audio_upload" :value="__('Audio Upload')" />
                    <span class="text-red-500">*</span>
                </div>
                <x-text-input id="audio_upload"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="audio_upload" accept=".mp3,.wav,.ogg" />
                <x-input-error :messages="$errors->get('audio_upload')" class="mt-2" />
            </div>

            <!-- premium_type -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Select Premium Type')" />
                <select id="premium_type" name="premium_type"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="1" @selected(old('premium_type') == '1')>true</option>
                    <option value="0" @selected(old('premium_type') == '0')>false</option>
                </select>
            </div>

            <!-- Premium Plans -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Select Premium Plans')" />
                <select multiple id="premium_plan" name="premium_plan[]"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option disabled>Choose premium plans</option>
                    @foreach ($premiumPlans as $plan)
                        <option value="{{ $plan->id }}" @selected(old('premium_plan[]') == $plan->id)>
                            {{ $plan->name }}</option>
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
                        <option value="{{ $interest->id }}" @selected(old('interest_type[]') == $interest->id)>
                            {{ $interest->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description" name="short_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter short description...">{{ old('short_description') }}</textarea>
                <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
            </div>

            <!-- description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <textarea id="description" name="description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter description...">{{ old('description') }}</textarea>
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
        </div>
        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('meditation-audio.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Submit') }}</button>
        </div>
    </form>
</x-app-layout>
