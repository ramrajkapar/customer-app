<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}