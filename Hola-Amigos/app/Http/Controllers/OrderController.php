<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:15',
            'email' => 'required|email',
            'product' => 'required|string',
            'weight' => 'required|numeric|min:0.1',
            'subtotal' => 'required|numeric|min:0',
            'delivery_charge' => 'required|numeric|min:0',
            'total' => 'required|numeric|min:0',
        ]);

        // Save order in the database
        Order::create($request->all());

        // Redirect with success message
        return redirect('/')->with('success', 'Order placed successfully!');


        
    }
}




