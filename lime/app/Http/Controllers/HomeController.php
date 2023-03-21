<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Payments;
use App\Models\Tickets;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function index(Request $request){
        // Get all the records from the 'Customers' table
        
        $customers = Customers::get();
        // Get all the records from the 'Tickets' table
        $payments = Payments::get();
    
        // Get all the records from the 'Payments' table
        $tickets = Tickets::get();
    
        // Pass the records to the 'dashboard' view
        return view('dashboard',compact('customers','payments','tickets'));
    }
    

 public function search(Request $request)
     {
        $query = $request->input('query');

        $customers = Customers::where('first_name', 'LIKE', "%$query%")
        ->orWhere('last_name', 'LIKE', "%$query%")
        ->orWhere('username', 'LIKE', "%$query%")
        ->get();

        $tickets = Tickets::where('title', 'LIKE', "%$query%")
        ->orWhere('description', 'LIKE', "%$query%")
        ->get();

        $payments = Payments::where('transaction_code', 'LIKE', "%$query%")
            ->orWhere('first_name', 'LIKE', "%$query%")
            ->orWhere('last_name', 'LIKE', "%$query%")
            ->orWhere('account_number', 'LIKE', "%$query%")
            ->get();

        return view('search', compact('customers', 'tickets', 'payments'));
     }

}
// laravel index view controller?