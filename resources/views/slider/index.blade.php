<x-app-layout>
    <x-head-lable href="{{ route('slider.create') }}">
        {{ __('Slider List') }}
    </x-head-lable>

    <div class="p-4">
        <div class="overflow-x-auto">

            <table id="slider-table" class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="text-center">Actions</th>
                        <th>#</th>
                        <th>Title</th>
                        <th>Background</th>
                        <th>Text Align</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    {{-- 'id', 'title', 'sub_description', 'description', 'background', 'text_align' --}}
    <script>
        $(document).ready(function() {
            $('#slider-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('slider.data') }}',
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
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'background',
                        name: 'background'
                    },
                    {
                        data: 'text_align',
                        name: 'text_align'
                    },
                ]
            });

            $('#slider-table_length, #slider-table_info').addClass('my-2')
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

                            $('#slider-table').DataTable().row($(this).parents('tr'))
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
    </script>
</x-app-layout>
