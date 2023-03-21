<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Payment;
use App\Models\Ticket;


class HomeController extends Controller
{
    //
    public function index(Request $request){
        // Get all the records from the 'Customers' table
        
        // $customers = Customer::get();
        // // Get all the records from the 'Tickets' table
        // $payments = Payment::get();
    
        // // Get all the records from the 'Payments' table
        // $tickets = Ticket::get();
    
        // // Pass the records to the 'dashboard' view
        return view('index');
    }
    

    public function search(Request $request)
    {
        $query = $request->input('query');
    
        $customers = Customer::where('first_name', 'LIKE', "%$query%")
            ->orWhere('last_name', 'LIKE', "%$query%")
            ->orWhere('username', 'LIKE', "%$query%")
            ->get();
    
        $tickets = Ticket::where('title', 'LIKE', "%$query%")
            ->orWhere('description', 'LIKE', "%$query%")
            ->get();
    
        $payments = Payment::where('transaction_code', 'LIKE', "%$query%")
            ->orWhere('first_name', 'LIKE', "%$query%")
            ->orWhere('last_name', 'LIKE', "%$query%")
            ->orWhere('account_number', 'LIKE', "%$query%")
            ->orWhere('transaction_code', 'LIKE', "%$query%")
            ->get();
    
        $search_results = [
            'customers' => $customers,
            'tickets' => $tickets,
            'payments' => $payments,
        ];
    
        return view('dashboard', compact('search_results'));
    }
}