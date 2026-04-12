<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [ProductController::class, 'index'])->name('home');


Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');


Route::prefix('admin')->group(function(){
    Route::resource('products', ProductController::class);
});


Route::get('/demo', function () {
    $products = [];
    
  
    $brandName = " "; 
    $baseUrl = "https://Gadget.com"; 

    for ($i = 1; $i <= 100; $i++) {
        $type = $i % 4;

        switch ($type) {
            case 0:
                $category = "Laptop";
                $name = "Premium Laptop - " . $brandName;
                $imageUrl = "https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=500";
                $price = rand(45000, 95000);
                break;

            case 1:
                $category = "Keyboard";
                $name = "RGB Keyboard - " . $brandName;
                $imageUrl = "https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?w=500";
                $price = rand(1500, 5500);
                break;

            case 2:
                $category = "Mouse";
                $name = "Wireless Mouse - " . $brandName;
                $imageUrl = "https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=500";
                $price = rand(800, 3500);
                break;

            default:
                $category = "Monitor";
                $name = "4K Monitor - " . $brandName;
                $imageUrl = "https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=500";
                $price = rand(12000, 35000);
                break;
        }

        $products[] = (object) [
            'name' => $name,
            'price' => $price,
            'description' => "Official $category from $brandName. Visit: $baseUrl",
            'image' => $imageUrl,
            'url' => $baseUrl . "/product/item-" . $i 
        ];
    }

    return view('Show', compact('products', 'brandName'));
});