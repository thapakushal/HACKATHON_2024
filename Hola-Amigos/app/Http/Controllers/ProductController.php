<?php

namespace App\Http\Controllers;

use App\Models\Product;  // Assuming the 'Product' model exists

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products from the database
        $products = Product::all();

        // Pass products to the view
        return view('products', compact('products'));
    }
}
