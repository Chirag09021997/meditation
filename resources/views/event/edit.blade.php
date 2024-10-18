<x-app-layout>
    <x-head-lable>
        {{ __('Event Edit') }}
    </x-head-lable>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <form method="POST" action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-2 sm:p-4 ">
        @csrf
        @method('PUT')
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $event->name)"
                    placeholder="Enter name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- total_joining -->
            <div class="mt-4">
                <x-input-label for="total_joining" :value="__('Total Joining')" />
                <x-text-input id="total_joining" class="block mt-1 w-full" type="number" name="total_joining"
                    :value="old('total_joining', $event->total_joining)" placeholder="Enter total joining" />
                <x-input-error :messages="$errors->get('total_joining')" class="mt-2" />
            </div>

            <!-- starting_date -->
            <div class="mt-4">
                <x-input-label for="starting_date" :value="__('Starting Date')" />
                <x-text-input id="starting_date" class="block mt-1 w-full" type="text" name="starting_date"
                    :value="old('starting_date', $event->starting_date)" placeholder="Enter starting date" />
                <x-input-error :messages="$errors->get('starting_date')" class="mt-2" />
            </div>

            <!-- thumb_image -->
            <div class="mt-4">
                <x-input-label for="thumb_image" :value="__('Thumb Image')" />
                <x-text-input id="thumb_image"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="thumb_image" accept="image/*" />
                <x-input-error :messages="$errors->get('thumb_image')" class="mt-2" />
                <img src="{{ $event->thumb_image }}" alt="thumb upload" class="w-16 my-2">
            </div>

            <!-- location -->
            <div class="mt-4">
                <x-input-label for="location" :value="__('Location')" />
                <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location', $event->location)"
                    placeholder="Enter location" />
                <x-input-error :messages="$errors->get('location')" class="mt-2" />
            </div>

            <!-- is_paid -->
            <div class="mt-4">
                <x-input-label for="is_paid" :value="__('Select is paid')" />
                <select id="is_paid" name="is_paid"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="On" @selected(old('is_paid', $event->is_paid) == 'On')>On</option>
                    <option value="Off" @selected(old('is_paid', $event->is_paid) == 'Off')>Off</option>
                </select>
            </div>

            <!-- fees -->
            <div class="mt-4" id="fees-container">
                <x-input-label for="fees" :value="__('Fees')" />
                <x-text-input id="fees" class="block mt-1 w-full" type="number" name="fees" :value="old('fees', $event->fees)"
                    placeholder="Enter fees" step="0.01" min="0" />
                <x-input-error :messages="$errors->get('fees')" class="mt-2" />
            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description" name="short_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter short description...">{{ old('short_description', $event->short_description) }}</textarea>
                <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
            </div>
        </div>

        <!-- description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" name="description" rows="4"
                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                placeholder="Enter description...">{{ old('description', $event->description) }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('event.index') }}">
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
        $(function() {
            $('input[name="starting_date"]').daterangepicker({
                singleDatePicker: true,
                timePicker: true,
                timePickerIncrement: 1,
                timePicker24Hour: true,
                locale: {
                    format: 'YYYY-MM-DD HH:mm:ss'
                }
            }, function(start) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD HH:mm:ss'));
            });
        });
        $(document).ready(function() {
            function toggleFeesVisibility() {
                if ($('#is_paid').val() === 'On') {
                    $('#fees-container').show();
                } else {
                    $('#fees-container').hide();
                }
            }
            toggleFeesVisibility();
            $('#is_paid').change(function() {
                toggleFeesVisibility();
            });
        });
    </script>
</x-app-layout>
