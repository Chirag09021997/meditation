<x-app-layout>
    <x-head-lable href="{{ route('event.create') }}">
        {{ __('Event List') }}
    </x-head-lable>

    <div class="p-4">
        <div class="overflow-x-auto">
            <table id="event-table" class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="text-center">Actions</th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Thumb Image</th>
                        <th>Starting Date</th>
                        <th>Location</th>
                        <th>Is Paid</th>
                        <th>Fees</th>
                        <th>Status</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#event-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('event.data') }}',
                columns: [{
                        data: 'action',
                        searchable: false,
                        sortable: false,
                        orderable: false
                    },
                    {
                        data: 'DT_RowIndex',
                        searchable: false,
                        sortable: false
                    },
                    {
                        data: 'name',
                    },
                    {
                        data: 'thumb_image'
                    },
                    {
                        data: 'starting_date'
                    },
                    {
                        data: 'location'
                    },
                    {
                        data: 'is_paid'
                    },
                    {
                        data: 'fees'
                    },
                    {
                        data: 'status'
                    },
                ]
            });

            $('#event-table_length, #event-table_info').addClass('my-2')
        });

        // SweetAlert for delete confirmation
        $(document).on('click', '.delete_row', function(e) {
            e.preventDefault();
            const url = $(this).data('value');
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this imaginary file!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#EF5350",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel pls!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            url: url,
                            type: "Delete",
                            data: {
                                "_token": "{{ csrf_token() }}",
                            }
                        }).done(function(data) {
                            swal({
                                title: "Deleted!",
                                text: "Record has been successfully deleted..",
                                type: "success",
                                showCancelButton: false,
                                timer: 500
                            });

                            $('#event-table').DataTable().row($(this).parents('tr'))
                                .remove().draw();
                        });

                    } else {
                        swal({
                            title: "Cancelled",
                            text: "Your imaginary file is safe :)",
                            confirmButtonColor: "#2196F3",
                            type: "error"
                        });
                    }
                });
        });

        $(document).on('click', '.changeStatus', function(e) {
            e.preventDefault();
            const url = $(this).data('url');
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function(response) {
                    $('#event-table').DataTable().ajax.reload(null, false);
                }
            });
        });
    </script>
</x-app-layout>
