<?php

namespace App\Http\Controllers;

use App\Models\Product; // Import the Product model

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products from the database
        $products = Product::all();

        // Pass products data to the view
        return view('components.products', compact('products'));
    }
}
