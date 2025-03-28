<x-app-layout>
    <x-head-lable backhref="{{ route('event.index') }}">
        {{ __('Event Show') }}
    </x-head-lable>

    <div class="border-4 border-white rounded-lg p-2 sm:p-4">
        <div class="grid md:grid-cols-2 gap-4">
            <!-- name -->
            <div class="mt-4">
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" :value="old('name', $event->name)" disabled />
            </div>

            <!-- total_joining -->
            <div class="mt-4">
                <x-input-label for="total_joining" :value="__('Total Joining')" />
                <x-text-input id="total_joining" class="block mt-1 w-full" type="number" :value="old('total_joining', $event->total_joining)" />
            </div>

            <!-- starting_date -->
            <div class="mt-4">
                <x-input-label for="starting_date" :value="__('Starting Date')" />
                <x-text-input id="starting_date" class="block mt-1 w-full" type="text" :value="old('starting_date', \Carbon\Carbon::parse($event->starting_date)->format('d-m-Y H:i:s'))" />
            </div>

            <!-- thumb_image -->
            <div class="mt-4">
                <x-input-label for="thumb_image" :value="__('Thumb Image')" />
                <img src="{{ $event->thumb_image }}" alt="thumb upload" class="w-16 my-2">
            </div>

            <!-- location -->
            <div class="mt-4">
                <x-input-label for="location" :value="__('Location')" />
                <x-text-input id="location" class="block mt-1 w-full" type="text" :value="old('location', $event->location)" />
            </div>

            <!-- is_paid -->
            <div class="mt-4">
                <x-input-label for="is_paid" :value="__('Select is paid')" />
                <x-text-input id="is_paid" class="block mt-1 w-full" type="text" :value="old('is_paid', $event->is_paid)" />
            </div>

            <!-- fees -->
            <div class="mt-4" id="fees-container">
                <x-input-label for="fees" :value="__('Fees')" />
                <x-text-input id="fees" class="block mt-1 w-full" type="number" :value="old('fees', $event->fees)" />
            </div>

            <!-- short_description -->
            <div class="mt-4">
                <x-input-label for="short_description" :value="__('Short Description')" />
                <textarea id="short_description" name="short_description" rows="4"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                    placeholder="Enter short description...">{{ old('short_description', $event->short_description) }}</textarea>
            </div>
        </div>

        <!-- description -->
        <div class="mt-4">
            <x-input-label for="description" :value="__('Description')" />
            <textarea id="description" name="description" rows="4"
                class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200"
                placeholder="Enter description...">{{ old('description', $event->description) }}</textarea>
        </div>
    </div>

    <x-head-lable>
        {{ __('Event Customers') }}
    </x-head-lable>
    <div class="p-4">
        <div class="overflow-x-auto">
            <table id="event-table" class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Total Person</th>
                        <th>Total Fees</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            height: 300,
        });

        $(document).ready(function() {
            $('#event-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('customer-event-join.list', $event->id) }}",
                columns: [{
                        data: 'DT_RowIndex',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'person'
                    },
                    {
                        data: 'custom'
                    },
                    {
                        data: 'name',
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'mobile'
                    },
                    {
                        data: 'address'
                    },
                ]
            });

            $('#event-table_length, #event-table_info').addClass('my-2')
        });
    </script>
</x-app-layout>
