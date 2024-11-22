<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyCheckoutController extends Controller
{
    public function showProduct($id)
    {
        $product = Product::find($id);  // Fetch product data based on ID
        
        return view('profile.buy', compact('product'));
    }

    public function checkout(Request $request)
    {
        // Storing flash data in the session
        session()->flash('productName', $request->input('productName'));
        session()->flash('weight', $request->input('weight'));
        session()->flash('pricePerKg', $request->input('pricePerKg'));

        return redirect()->route('checkout');
    }
}
