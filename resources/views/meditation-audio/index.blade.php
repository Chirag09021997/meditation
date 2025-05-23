<x-app-layout>
    <x-head-lable href="{{ route('meditation-audio.create') }}">
        {{ __('Meditation Audio List') }}
    </x-head-lable>

    <div class="p-4">
        <div class="overflow-x-auto">
            <table id="meditation-audio-table" class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="text-center">Actions</th>
                        <th>#</th>
                        <th>Meditation Type Name</th>
                        <th>Name</th>
                        <th>Total View</th>
                        <th>Audio Thumb</th>
                        <th>Premium Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#meditation-audio-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('meditation-audio.data') }}',
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
                        data: 'meditation_type_name',
                    },
                    {
                        data: 'name',
                    },
                    {
                        data: 'total_view'
                    },
                    {
                        data: 'audio_thumb'
                    },
                    {
                        data: 'premium_type'
                    },
                    {
                        data: 'status'
                    },
                ]
            });

            $('#meditation-audio-table_length, #meditation-audio-table_info').addClass('my-2')
        });

        // SweetAlert for delete confirmation
        $(document).on('click', '.delete_row', function(e) {
            e.preventDefault();
            const url = $(this).data('value');
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this record!",
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

                            $('#meditation-audio-table').DataTable().row($(this).parents('tr'))
                                .remove().draw();
                        });

                    } else {
                        swal({
                            title: "Cancelled",
                            text: "Your record is safe!",
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
                    $('#meditation-audio-table').DataTable().ajax.reload(null, false);
                }
            });
        });
    </script>
</x-app-layout>
