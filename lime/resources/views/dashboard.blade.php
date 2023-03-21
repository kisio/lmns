@extends('layouts.app')
@section('content')


<div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">

    <h1 class="text-2xl font-bold mb-4">Search Results</h1>

    @if(!empty($customers))
    <h2 class="text-lg font-bold mb-2">Customers</h2>
    @if(count($customers) > 0)
        <ul>
            @foreach($customers as $customer)
                <li>{{ $customer->first_name }} {{ $customer->last_name }}</li>
            @endforeach
        </ul>
    @else
        <p>No customers found.</p>
    @endif
@endif


@if(!empty($Payments))
<h2 class="text-lg font-bold mb-2">Payments</h2>
@if(count($Payments) > 0)
    <ul>
        @foreach($Payments as $payment)
            <li>{{ $payment->first_name }} {{ $customer->last_name }}</li>
        @endforeach
    </ul>
@else
    <p>No customers found.</p>
@endif
@endif


@if(!empty($Tickets))
<h2 class="text-lg font-bold mb-2">Tickets</h2>
@if(count($Tickets) > 0)
    <ul>
        @foreach($Tickets as $ticket)
            <li>{{ $ticket->title }} {{ $ticket->description }}</li>
        @endforeach
    </ul>
@else
    <p>No customers found.</p>
@endif
@endif

@endsection
