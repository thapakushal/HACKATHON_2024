<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Returning the 'contact' view instead of 'index'
        return view('contact');
    }
}
