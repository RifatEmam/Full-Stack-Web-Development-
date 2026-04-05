<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'index'])->name('home');


Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');


Route::prefix('admin')->group(function(){
    Route::resource('products', ProductController::class);
});


Route::get('/demo', function () {
    $product = (object) [
        'name' => 'Premium Quality Laptop',
        'price' => '75000',
        'description' => 'This is a high-performance laptop perfect for your business and personal needs. Order now for the best price!',
    ];

    return view('Show', compact('product'));
});