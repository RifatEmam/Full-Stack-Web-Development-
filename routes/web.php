<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'index'])->name('home');


Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');


Route::prefix('admin')->group(function(){
    Route::resource('products', ProductController::class);
});


Route::get('/demo', function () {
    $products = [
        (object) [
            'name' => 'Premium Quality Laptop',
            'price' => '75000',
            'description' => 'High-performance laptop for your business.',
            'image' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=500'
        ],
        (object) [
            'name' => 'Wireless Mouse',
            'price' => '1200',
            'description' => 'Ergonomic wireless mouse with smooth tracking.',
            'image' => 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=500'
        ],
        (object) [
            'name' => 'Mechanical Keyboard',
            'price' => '4500',
            'description' => 'RGB backlit mechanical keyboard for typing speed.',
            'image' => 'https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?w=500'
        ],
    ];

    return view('Show', compact('products'));
});