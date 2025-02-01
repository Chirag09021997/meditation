<x-app-layout>
    <x-head-lable backhref="{{ route('event.index') }}">
        {{ __('Event Create') }}
    </x-head-lable>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <form method="POST" action="{{ route('event.store') }}" enctype="multipart/form-data"
        class="border-4 border-white rounded-lg p-5">
        @csrf

        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    placeholder="Enter name" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- total_joining -->
            <div class="mt-4">
                <x-input-label for="total_joining" :value="__('Total Joining')" />
                <x-text-input id="total_joining" class="block mt-1 w-full" type="number" name="total_joining"
                    :value="old('total_joining')" placeholder="Enter total joining" />
                <x-input-error :messages="$errors->get('total_joining')" class="mt-2" />
            </div>

            <!-- starting_date -->
            <div class="mt-4">
                <x-input-label for="starting_date" :value="__('Starting Date')" />
                <x-text-input id="starting_date" class="block mt-1 w-full" type="text" name="starting_date"
                    :value="old('starting_date')" placeholder="Enter starting date" />
                <x-input-error :messages="$errors->get('starting_date')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="end_date" :value="__('End Date')" />
                <x-text-input id="end_date" class="block mt-1 w-full" type="text" name="end_date"
                    :value="old('end_date')" placeholder="Enter End date" />
                <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="end_date" :value="__('Duration')" />
                <x-text-input id="duration" class="block mt-1 w-full" type="text" name="duration"
                    :value="old('duration')" placeholder="Enter Duration" />
                <x-input-error :messages="$errors->get('duration')" class="mt-2" />
            </div>

            <!-- thumb_image -->
            <div class="mt-4">
                <x-input-label for="thumb_image" :value="__('Thumb Image')" />
                <x-text-input id="thumb_image"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="thumb_image" accept="image/*" />
                <x-input-error :messages="$errors->get('thumb_image')" class="mt-2" />
            </div>

            <!-- location -->
            <div class="mt-4">
                <x-input-label for="location" :value="__('Location')" />
                <x-text-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')"
                    placeholder="Enter location" />
                <x-input-error :messages="$errors->get('location')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="language" :value="__('Language')" />
                <x-text-input id="language" class="block mt-1 w-full" type="text" name="language" :value="old('language')"
                    placeholder="Enter Language" />
                <x-input-error :messages="$errors->get('language')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="question" :value="__('Question')" />
                <textarea id="question" name="question" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter question ...">{{ old('question') }}</textarea>
                <x-input-error :messages="$errors->get('question')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="event_image" :value="__('Event Image')" />
                <x-text-input id="event_image"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="event_image" accept="image/*" />
                <x-input-error :messages="$errors->get('event_image')" class="mt-2" />
            </div>

            <!-- is_paid -->
            <div class="mt-4">
                <x-input-label for="is_paid" :value="__('Select is paid')" />
                <select id="is_paid" name="is_paid"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="On" @selected(old('is_paid') == 'On')>On</option>
                    <option value="Off" @selected(old('is_paid') == 'Off')>Off</option>
                </select>
            </div>

            <!-- fees -->
            <div class="mt-4" id="fees-container">
                <x-input-label for="fees" :value="__('Fees')" />
                <x-text-input id="fees" class="block mt-1 w-full" type="number" name="fees" :value="old('fees')"
                    placeholder="Enter fees" step="0.01" min="0" />
                <x-input-error :messages="$errors->get('fees')" class="mt-2" />
            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description" name="short_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter short description...">{{ old('short_description') }}</textarea>
                <x-input-error :messages="$errors->get('short_description')" class="mt-2" />
            </div>
        </div>

        <h2 class="mt-3">Include</h2>

        <div class="grid md:grid-cols-3 gap-4" id="include">
                <div class="mt-4" id="include">
                    <x-input-label for="include-text" :value="__('Title')" />
                    <x-text-input id="include_title[]" class="block mt-1 w-full" type="text" name="include_title[]" 
                        placeholder="Enter Title" step="0.01" min="0" />
                    <x-input-error :messages="$errors->get('include-title')" class="mt-2" />
                </div>
                <div class="mt-4" id="include-description">
                    <x-input-label for="include-description" :value="__('Description')" />
                    <x-text-input id="include_description[]" class="block mt-1 w-full" type="text" name="include_description[]"
                        placeholder="Enter Title" step="0.01" min="0" />
                    <x-input-error :messages="$errors->get('include-description')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="include_image" :value="__('Image')" />
                    <x-text-input id="include_image"
                        class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                        type="file" name="include_image[]" accept="image/*"  />
                    <x-input-error :messages="$errors->get('include_image')" class="mt-2" />
                </div>
        </div>
        <button id="add-include" class="mt-3 text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Add') }}</button>

        <h2>Teaching</h2>

        <div class="grid md:grid-cols-3 gap-4" id="teaching">
                <div class="mt-4" id="teaching_title">
                    <x-input-label for="include-text" :value="__('Title')" />
                    <x-text-input id="teaching_title[]" class="block mt-1 w-full" type="text" name="teaching_title[]" 
                        placeholder="Enter Title" step="0.01" min="0" />
                    <x-input-error :messages="$errors->get('teaching_title')" class="mt-2" />
                </div>
                <div class="mt-4" id="teaching-description">
                    <x-input-label for="teaching-description" :value="__('Description')" />
                    <x-text-input id="teaching_description[]" class="block mt-1 w-full" type="text" name="teaching_description[]"
                        placeholder="Enter Title" step="0.01" min="0" />
                    <x-input-error :messages="$errors->get('teaching-description')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="teaching_image" :value="__('Image')" />
                    <x-text-input id="teaching_image"
                        class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                        type="file" name="teaching_image[]" accept="image/*"  />
                    <x-input-error :messages="$errors->get('teaching_image')" class="mt-2" />
                </div>
        </div>

        <button id="add-teaching" class="mt-3 text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Add') }}</button>

        <!-- description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" name="description" rows="4"
                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                placeholder="Enter description...">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>
        

        <div class="mt-4">
            <x-input-label for="curriculum" :value="__('Curriculum')" />
            <textarea id="curriculum" name="curriculum" rows="4"
                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                placeholder="Enter Curriculum...">{{ old('curriculum') }}</textarea>
            <x-input-error :messages="$errors->get('curriculum')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-200 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 "
                href="{{ route('event.index') }}">
                {{ __('Cancel') }}
            </a>

            <button type="submit"
                class="text-white hover:text-blue-900 bg-blue-900 border border-blue-300 focus:outline-none hover:bg-blue-100 focus:ring-4 focus:ring-blue-100 font-medium rounded-full text-sm px-5 py-2.5 me-2 mb-2 ">{{ __('Submit') }}</button>
        </div>
    </form>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            height: 300,
        });
        CKEDITOR.replace('question', {
            height: 200,
        });
        CKEDITOR.replace('curriculum', {
            height: 200,
        });
        $(function() {
            $('input[name="starting_date"]').daterangepicker({
                singleDatePicker: true,
                timePicker: true,
                timePickerIncrement: 1,
                timePicker24Hour: true,
                locale: {
                    format: 'DD-MM-YYYY HH:mm:ss'
                }
            });

         

            $('form').on('submit', function(e) {
                e.preventDefault();
                var startingDateDisplay = $('input[name="starting_date"]').val();
                var startingDate = moment(startingDateDisplay, 'DD-MM-YYYY HH:mm:ss').format(
                    'YYYY-MM-DD HH:mm:ss');
                $('input[name="starting_date"]').val(startingDate);

                this.submit();
            });
        });

        $(document).on('click', '#add-include', function(e) {
            e.preventDefault();
            $("#include").append(
                        `<div class="mt-4" id="include-title">
                    <x-input-label for="include-text" :value="__('Title')" />
                    <x-text-input id="include_title[]" class="block mt-1 w-full" type="text" name="include_title[]" :value="old('title')"
                        placeholder="Enter Title" step="0.01" min="0" />
                    <x-input-error :messages="$errors->get('include-title')" class="mt-2" />
                </div>
                <div class="mt-4" id="include-description">
                    <x-input-label for="include-description" :value="__('Description')" />
                    <x-text-input id="include_description[]" class="block mt-1 w-full" type="text" name="include_description[]" :value="old('title')"
                        placeholder="Enter Title" step="0.01" min="0" />
                    <x-input-error :messages="$errors->get('include-description')" class="mt-2" />
                </div>

                <div class="mt-4">
                <x-input-label for="include_image" :value="__('Image')" />
                <x-text-input id="include_image"
                    class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                    type="file" name="include_image[]" accept="image/*" />
                <x-input-error :messages="$errors->get('include_image')" class="mt-2" />
                `);
        });

        $(document).on('click', '#add-teaching', function(e) {
            e.preventDefault();
            $("#teaching").append(
                        `<div class="mt-4" id="teaching_title">
                    <x-input-label for="include-text" :value="__('Title')" />
                    <x-text-input id="teaching_title[]" class="block mt-1 w-full" type="text" name="teaching_title[]" 
                        placeholder="Enter Title" step="0.01" min="0" />
                    <x-input-error :messages="$errors->get('teaching_title')" class="mt-2" />
                </div>
                <div class="mt-4" id="teaching-description">
                    <x-input-label for="teaching-description" :value="__('Description')" />
                    <x-text-input id="teaching_description[]" class="block mt-1 w-full" type="text" name="teaching_description[]"
                        placeholder="Enter Title" step="0.01" min="0" />
                    <x-input-error :messages="$errors->get('teaching-description')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="teaching_image" :value="__('Image')" />
                    <x-text-input id="teaching_image"
                        class="block mt-1 w-full cursor-pointer text-md p-2 text-gray-900 border border-gray-300 rounded-lg bg-white"
                        type="file" name="teaching_image[]" accept="image/*"  />
                    <x-input-error :messages="$errors->get('teaching_image')" class="mt-2" />
                </div>
                `);
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
