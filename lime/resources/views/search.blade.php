<!-- resources/views/search.blade.php -->

<h1>Search Results</h1>

<h2>Customers</h2>
@if(count($customers) > 0)
    <ul>
        @foreach($customers as $customer)
            <li>{{ $customer->first_name }} {{ $customer->last_name }}</li>
        @endforeach
    </ul>
@else
    <p>No customers found.</p>
@endif

<h2>Tickets</h2>
@if(count($tickets) > 0)
    <ul>
        @foreach($tickets as $ticket)
            <li>{{ $ticket->title }}</li>
        @endforeach
    </ul>
@endif
