<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Https\Controllers\IndexController;
use App\Http\Controllers\SellerController;



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


Route::middleware('auth')->group(function () {
    Route::get('/seller', [SellerController::class, 'index'])->name('seller.index');
    Route::post('/seller/store', [SellerController::class, 'store'])->name('seller.store');
    Route::post('/seller/order/{orderId}/status', [SellerController::class, 'updateOrderStatus'])->name('seller.updateOrderStatus');
});


Route::post('datasubmit');