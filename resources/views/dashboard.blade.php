@extends('layouts.app')
@section('content')
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 text-stone-900 w-full ">
        <h1 class="text-2xl font-bold mb-4">ALL Results</h1>
     @if(count($search_results ?? []) > 0)
            <h2 class="text-lg font-bold mb-2">Customers</h2>
        @if(!empty($search_results['customers']))
            <table class="table-auto w-full border-separate border border-slate-500">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-separate border border-slate-500">First Name</th>
                        <th class="px-4 py-2 border-separate border border-slate-500">Last Name</th>
                        <th class="px-4 py-2 border-separate border border-slate-500">Username</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach($search_results['customers'] as $customer)
                        <tr>
                            <td class="border px-4 py-2 border-separate border border-slate-500">{{ $customer->first_name }}</td>
                            <td class="border px-4 py-2 border-separate border border-slate-500">{{ $customer->last_name }}</td>
                            <td class="border px-4 py-2 border-separate border border-slate-500">{{$customer->username}}</td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p class="text-gray-500">No customers found.</p>
        @endif
        
        @if(!empty($search_results['tickets']))
        <h2 class="text-lg font-bold mb-2">Tickets</h2>
        <div class="overflow-x-auto">
            <table class="w-full table-auto border-separate border border-slate-500">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-separate border border-slate-500">Title</th>
                        <th class="px-4 py-2 border-separate border border-slate-500">Description</th>
                        <th class="px-4 py-2 border-separate border border-slate-500">Username</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($search_results['tickets'] as $ticket)
                        <tr>
                            <td class="border px-4 py-2 border-separate border border-slate-500">{{ $ticket->title }}</td>
                            <td class="border px-4 py-2 border-separate border border-slate-500">{{ $ticket->description }}</td>
                            <td class="border px-4 py-2 border-separate border border-slate-500">{{ $ticket->customer->username }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-gray-500">No tickets found.</p>
    @endif
    @if(!empty($search_results['payments']))
    <h2 class="text-lg font-bold mb-2">Payments</h2>
    <div class="overflow-x-auto">
        <table class="w-full table-auto border-separate border border-slate-500">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-separate border border-slate-500">Customer ID</th>
                    <th class="px-4 py-2 border-separate border border-slate-500">First Name</th>
                    <th class="px-4 py-2 border-separate border border-slate-500">Last Name</th>
                    <th class="px-4 py-2 border-separate border border-slate-500">Transaction Code</th>
                    <th class="px-4 py-2 border-separate border border-slate-500">Amount</th>
                    <th class="px-4 py-2 border-separate border border-slate-500">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($search_results['payments'] as $payment)
                    <tr>
                        <td class="border px-4 py-2 border-separate border border-slate-500">{{ $payment->customer_id }}</td>
                        <td class="border px-4 py-2 border-separate border border-slate-500">{{ $payment->first_name }}</td>
                        <td class="border px-4 py-2 border-separate border border-slate-500">{{ $payment->last_name }}</td>
                        <td class="border px-4 py-2 border-separate border border-slate-500">{{ $payment->transaction_code }}</td>
                        <td class="border px-4 py-2 border-separate border border-slate-500">{{ $payment->amount }}</td>
                        <td class="border px-4 py-2 border-separate border border-slate-500">{{ $payment->transaction_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p class="text-gray-500">No payments found.</p>
@endif
@endif
    </div>
@endsection

