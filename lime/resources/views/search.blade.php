@extends('layouts.app')
@section('content')
<div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 ">

            <h1 class="text-2xl font-bold mb-4">Search Results</h1>

            <h2 class="text-lg font-bold mb-2">Customers</h2>
            @if(!empty($customers))
            @if(count($customers) > 0)
                <ul class="list-disc pl-4 mb-4">
                    @foreach($customers as $customer)
                        <li>{{ $customer->first_name }} {{ $customer->last_name }}</li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500">No customers found.</p>
            @endif
        @else
            <p class="text-gray-500">Customers not available.</p>
        @endif

        <h2 class="text-lg font-bold mb-2">Tickets</h2>
        @if(!empty($tickets))
            @if(count($tickets) > 0)
                <ul class="list-disc pl-4 mb-4">
                    @foreach($tickets as $ticket)
                        <li>{{ $ticket->title }}</li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500">No tickets found.</p>
            @endif
        @else
            <p class="text-gray-500">Tickets not available.</p>
        @endif

        <h2 class="text-lg font-bold mb-2">Payments</h2>
        @if(!empty($payments))
            @if(count($payments) > 0)
                <ul class="list-disc pl-4 mb-4">
                    @foreach($payments as $payment)
                        <li>{{ $payment->transaction_code }}</li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-500">No payments found.</p>
            @endif
        @else
            <p class="text-gray-500">Payments not available.</p>
        @endif
</div>