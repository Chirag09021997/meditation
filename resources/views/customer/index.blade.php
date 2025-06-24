<x-app-layout>
    <x-head-lable href="{{ route('customer.create') }}">
        {{ __('Customers List') }}
    </x-head-lable>

    <div class="p-4">
        <div class="overflow-x-auto">
            <table id="customers-table" class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="text-center">Actions</th>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Profile</th>
                        <th>Country</th>
                        <th>Purchase Plan Name</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- Info Modal -->
    <div id="infoModal" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg w-[95%] sm:w-[480px] p-6 relative">
            <button class="absolute top-2 right-3 text-gray-500 hover:text-black" onclick="closeInfoModal()">✖</button>
            <h2 class="text-xl font-semibold mb-4">Customer Info</h2>

            <div id="infoContent" class="text-sm text-gray-800 max-h-[70vh] overflow-y-auto">
                <div id="basicInfo"></div>

                <!-- Dropdown -->
                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Meditation Report</label>
                    <select id="reportRange" class="border border-gray-300 rounded px-2 py-1 text-sm w-full">
                        <option value="7" selected>Last 7 Days</option>
                        <option value="15">Last 15 Days</option>
                        <option value="30">Last 30 Days</option>
                        <option value="all">All Time</option>
                    </select>
                </div>

                <!-- Tracking Data -->
                <div id="trackingData" class="mt-3 text-gray-700">Loading report...</div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#customers-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('customer.data') }}',
                columns: [
                    { data: 'action', searchable: false, sortable: false, orderable: false },
                    { data: 'DT_RowIndex', searchable: false, sortable: false },
                    { data: 'name', name: 'name' },
                    { data: 'email', name: 'email' },
                    { data: 'profile', name: 'profile' },
                    { data: 'country_name', name: 'country_name' },
                    { data: 'purchase_plan_name', name: 'purchase_plan_name' }
                ]
            });

            $('#customers-table_length, #customers-table_info').addClass('my-2');
        });

        // SweetAlert delete confirmation
        $(document).on('click', '.delete_row', function (e) {
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
            }, function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        url: url,
                        type: "Delete",
                        data: {
                            "_token": "{{ csrf_token() }}",
                        }
                    }).done(function (data) {
                        swal({
                            title: "Deleted!",
                            text: "Record has been successfully deleted..",
                            type: "success",
                            showCancelButton: false,
                            timer: 500
                        });

                        $('#customers-table').DataTable().ajax.reload();
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

        // Info Modal Functions
        function closeInfoModal() {
            document.getElementById('infoModal').classList.add('hidden');
        }

        function openInfoModal(data) {
            // Save customer ID globally
            window.currentCustomerId = data.id;

            // Render basic info
            let info = `
                <p><strong>Name:</strong> ${data.name}</p>
                <p><strong>Email:</strong> ${data.email}</p>
                <p><strong>Mobile:</strong> ${data.mobile_no}</p>
                <p><strong>Country:</strong> ${data.country_name}</p>
                <p><strong>DOB:</strong> ${data.dob}</p>
                <p><strong>Category:</strong> ${data.business_category}</p>
                <p><strong>Plan:</strong> ${data.purchase_plan_name || '-'}</p>
            `;
            document.getElementById('basicInfo').innerHTML = info;

            // Set default dropdown value
            document.getElementById('reportRange').value = "7";

            // Load tracking data
            loadTrackingReport(data.id, 7);

            // Show modal
            document.getElementById('infoModal').classList.remove('hidden');
        }

        $(document).on('click', '.open-info-modal', function () {
            const customerId = $(this).data('id');
            $.ajax({
                url: '/customer/' + customerId,
                method: 'GET',
                success: function (res) {
                    res.id = customerId;
                    openInfoModal(res);
                },
                error: function () {
                    alert('Something went wrong!');
                }
            });
        });

        $(document).on('change', '#reportRange', function () {
            const range = $(this).val();
            loadTrackingReport(window.currentCustomerId, range);
        });

        function loadTrackingReport(customerId, range) {
            $('#trackingData').html("Loading...");

            $.ajax({
                url: `/customer/${customerId}/tracking?range=${range}`,
                method: 'GET',
                success: function (data) {
                    if (data.length > 0) {
                        let html = `
                    <div class="mt-2 border border-gray-300 rounded">
                        <div class="flex bg-gray-100 font-medium text-gray-700 text-sm px-3 py-2 border-b">
                            <div class="w-1/2">Date</div>
                            <div class="w-1/2">Meditation Time</div>
                        </div>
                `;

                        data.forEach(row => {
                            let listen = Math.round(row.listening_time / 60);
                            let total = Math.round(row.total_time / 60);
                            html += `
                        <div class="flex px-3 py-2 border-b last:border-b-0 text-sm">
                            <div class="w-1/2 text-gray-800">${row.date}</div>
                            <div class="w-1/2 text-gray-800">${listen} min / ${total} min</div>
                        </div>
                    `;
                        });

                        html += `</div>`;
                        $('#trackingData').html(html);
                    } else {
                        $('#trackingData').html("<p class='text-sm text-gray-600 mt-2'>No meditation data found.</p>");
                    }
                },
                error: function () {
                    $('#trackingData').html("<p class='text-red-600 text-sm'>Failed to load data.</p>");
                }
            });
        }

    </script>
</x-app-layout>