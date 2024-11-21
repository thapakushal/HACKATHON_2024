<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Https\Controllers\IndexController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('index');
});


// Route::get('/', [IndexController::class,'index'])->name('index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('/about', [AboutController::class, 'index'])->name('about');


Route::get('/contact', [ContactController::class, 'index'])->name('contact');




Route::post('/datasubmit', [SellerController::class, 'store'])->name('datasubmit');


// Route::get('/products', [SellerController::class, 'index'])->name('products.index');


Route::get('/products', [ProductController::class, 'index'])->name('products.index');