<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customer_dashboard extends Controller
{
    public function index()
    {
        
        return view('customer_dashboard');
    }
}
