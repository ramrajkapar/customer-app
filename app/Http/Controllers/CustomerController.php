<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function dashboard()
    {
        return view('customer.dashboard');
    }
    public function index()
    {
        return view('customer.index');
    }

    public function storeCustomers(Request $request)
    {
        // dd($request->all());
        Customer::create($request->all());
    }
}
