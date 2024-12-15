<x-tap-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Update Order') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto p-8">
                    <h1 class="text-2xl font-semibold text-gray-700 dark:text-gray-200 mb-6">Edit Order</h1>

                    <!-- Laravel Collective Form -->
                    {!! Form::model($order, ['route' => ['orders.update', $order->id], 'method' => 'PUT']) !!}

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Delivery Method -->
                        <div class="form-group">
                            {!! Form::label('delivery_method', 'Delivery Method', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::select('delivery_method', [
                                'by_air' => 'By Air',
                                'by_road' => 'By Road',
                                'by_ship' => 'By Ship'
                            ], null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Delivery Status -->
                        <div class="form-group">
                            {!! Form::label('delivery_status', 'Delivery Status', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::select('delivery_status', [
                                'yet_to_deliver' => 'Yet to Deliver',
                                'in_transit' => 'In Transit',
                                'delivered' => 'Delivered'
                            ], null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Flight Number -->
                        <div class="form-group">
                            {!! Form::label('flight_number', 'Flight Number', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::text('flight_number', null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Departure Date -->
                        <div class="form-group">
                            {!! Form::label('departure_date', 'Departure Date', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::date('departure_date', null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Vehicle Number -->
                        <div class="form-group">
                            {!! Form::label('vehicle_number', 'Vehicle Number', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::text('vehicle_number', null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Driver Name -->
                        <div class="form-group">
                            {!! Form::label('driver_name', 'Driver Name', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::text('driver_name', null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Estimated Arrival -->
                        <div class="form-group">
                            {!! Form::label('estimated_arrival', 'Estimated Arrival', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::date('estimated_arrival', null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Home Delivery -->
                        <div class="form-group">
                            {!! Form::label('home_delivery', 'Home Delivery', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::select('home_delivery', [
                                'yes' => 'Yes',
                                'no' => 'No'
                            ], null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Home Address -->
                        <div class="form-group">
                            {!! Form::label('home_address', 'Home Address', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::text('home_address', null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Ship Name -->
                        <div class="form-group">
                            {!! Form::label('ship_name', 'Ship Name', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::text('ship_name', null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Port of Origin -->
                        <div class="form-group">
                            {!! Form::label('port_of_origin', 'Port of Origin', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::text('port_of_origin', null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Port of Destination -->
                        <div class="form-group">
                            {!! Form::label('port_of_destination', 'Port of Destination', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::text('port_of_destination', null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- By Agency -->
                        <div class="form-group">
                            {!! Form::label('by_agency', 'By Agency', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::select('by_agency', [
                                'yes' => 'Yes',
                                'no' => 'No'
                            ], null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Agency Name -->
                        <div class="form-group">
                            {!! Form::label('agency_name', 'Agency Name', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::text('agency_name', null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Agency Contact -->
                        <div class="form-group">
                            {!! Form::label('agency_contact', 'Agency Contact', ['class' => 'block text-gray-700 dark:text-gray-200']) !!}
                            {!! Form::text('agency_contact', null, ['class' => 'w-full p-2 border border-gray-300 rounded-md']) !!}
                        </div>

                        <!-- Submit Button -->
                        <div class="col-span-2">
                            {!! Form::submit('Update Order', ['class' => 'w-full p-3 bg-blue-600 text-white rounded-md hover:bg-blue-700']) !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</x-tap-layout>