<x-tap-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Orders') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto p-8">
                    <div class="flex justify-between items-center mb-6">
                        <h1 class="text-2xl font-semibold text-gray-700 dark:text-gray-200">Orders</h1>
                    </div>

                    <div class="shadow-md rounded-md overflow-x-auto">
                        <table id="orders-table" class="min-w-full table-auto w-full border-collapse">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-4 py-2 text-left">SL</th>
                                    <th class="px-4 py-2 text-left">Customer</th>
                                    <th class="px-4 py-2 text-left">Plan</th>
                                    <th class="px-4 py-2 text-left">Payment Status</th>
                                    <th class="px-4 py-2 text-left">Delivery Status</th>
                                    <th class="px-4 py-2 text-left">Expiry Date</th>
                                    <th class="px-4 py-2 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800">
                                <!-- DataTable will populate this -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include DataTables Dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <script>
        $(document).ready(function() {
            $('#orders-table').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                ajax: {
                    url: '{{ route('orders.data') }}', // Backend route to fetch data
                    type: 'GET',
                },
                columns: [
                    { data: 'id', name: 'id' }, // SL
                    { data: 'user.name', name: 'user.name' }, // Customer Name
                    { data: 'plan.name', name: 'plan.name' }, // Plan
                    { data: 'payment_status', name: 'payment_status' }, // Payment Status
                    
                    {
                        data: 'delivery_status',
                        render: function(data) {
                            let icons = {
                                'yet_to_deliver': '<i class="fas fa-clock text-yellow-500 mr-2"></i> Yet to Deliver',
                                'in_transit': '<i class="fas fa-shipping-fast text-blue-500 mr-2"></i> Shipped',
                                'delivered': '<i class="fas fa-check-circle text-green-500 mr-2"></i> Delivered',
                                'unknown': '<i class="fas fa-question-circle text-gray-500 mr-2"></i> Unknown Status'
                            };
                            return icons[data] || icons['unknown'];
                        }
                    },
                    {
                        data: 'expiry_date',
                        render: function(data) {
                            return data ? new Date(data).toISOString().split('T')[0] : 'N/A';
                        }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        render: function(data) {
                            return data; // Renders the HTML for actions
                        }
                    }
                ],
                order: [[0, 'asc']], // Default order by SL
                columnDefs: [
                    { className: 'text-center', targets: [6] } // Center-align the actions column
                ]
            });
        });

        function confirmDelete() {
            return confirm("Are you sure you want to delete this order?");
        }
    </script>
</x-tap-layout>
