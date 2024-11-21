<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;  // Assuming you're storing the data in a 'Product' model

class SellerController extends Controller
{
    public function store(Request $request)
    {
        // Validate form input
        $validatedData = $request->validate([
            'productType' => 'required|string',
            'productName' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'productImage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('productImage')) {
            $imagePath = $request->file('productImage')->store('product_images', 'public');
        } else {
            $imagePath = null;  // In case there's no image uploaded
        }

        // Store the data in the database
        $product = Product::create([
            'productType' => $validatedData['productType'],
            'productName' => $validatedData['productName'],
            'quantity' => $validatedData['quantity'],
            'price' => $validatedData['price'],
            'productImage' => $imagePath,
        ]);

        // Return a success response or redirect
        return redirect()->back()->with('success', 'Product listing created successfully!');
    }
    
}
