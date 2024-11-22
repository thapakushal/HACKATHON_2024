<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address', 'phone', 'email', 'product', 
        'weight', 'price_per_kg', 'subtotal', 
        'delivery_charge', 'total', 'payment_method'
    ];
    
}
