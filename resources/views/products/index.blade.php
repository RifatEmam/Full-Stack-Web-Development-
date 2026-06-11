@extends('layouts.app')

@section('title','Home | E-Shop')

@section('content')
<h1 class="mb-4">Our Products</h1>
<div class="row">@extends('app')

@section('title', 'Rifat Gadget Gallary | Laptops')

@section('content')
<div class="row">
    @php
       
        $products_pool = [
            [
                'name' => 'HP Pavilion 15 Core i5 13th Gen Laptop', 
                'price' => 76500, 
                'desc' => 'Intel Core i5-1335U Processor, 16GB DDR4 RAM, 512GB PCIe NVMe M.2 SSD, 15.6" FHD Display, Windows 11.',
                'photo_id' => 'photo-1588872657578-7efd1f1555ed'
            ],
            [
                'name' => 'ASUS Vivobook 16X Ryzen 5 Laptop', 
                'price' => 68000, 
                'desc' => 'AMD Ryzen 5 5600H Processor, 8GB DDR4 RAM, 512GB NVMe SSD, 16" WUXGA Anti-Glare Display, AMD Radeon Graphics.',
                'photo_id' => 'photo-1496181130204-755241524eab'
            ],
            [
                'name' => 'Apple MacBook Air 13.6-Inch M2 Chip', 
                'price' => 128000, 
                'desc' => 'Apple M2 chip with 8‑core CPU and 8‑core GPU, 8GB Unified Memory, 256GB SSD Storage, Liquid Retina Display.',
                'photo_id' => 'photo-1517336714731-489689fd1ca8'
            ],
            [
                'name' => 'Lenovo IdeaPad Slim 3 Core i3 12th Gen', 
                'price' => 49500, 
                'desc' => 'Intel Core i3-1215U Processor, 8GB DDR4 RAM, 512GB NVMe M.2 SSD, 14" FHD Display, Backlit Keyboard.',
                'photo_id' => 'photo-1603302576837-37561b2e2302'
            ],
            [
                'name' => 'Dell Inspiron 15 3530 Core i5 Laptop', 
                'price' => 74000, 
                'desc' => 'Intel Core i5-1335U 13th Gen, 8GB DDR4 RAM, 512GB SSD, 15.6" FHD 120Hz Display, Carbon Black.',
                'photo_id' => 'photo-1593642632823-8f785ba67e45'
            ],
            [
                'name' => 'Acer Aspire 3 Core i3 11th Gen Laptop', 
                'price' => 43500, 
                'desc' => 'Intel Core i3-1115G4 Processor, 8GB DDR4 RAM, 256GB PCIe NVMe SSD, 15.6" FHD Acer ComfyView LED Display.',
                'photo_id' => 'photo-1541807084-5c52b6b3adef'
            ],
            [
                'name' => 'ASUS TUF Gaming A15 Gaming Laptop', 
                'price' => 115000, 
                'desc' => 'AMD Ryzen 7 7735HS, 16GB DDR5 RAM, 512GB NVMe SSD, RTX 4050 6GB Graphics, 15.6" FHD 144Hz Display.',
                'photo_id' => 'photo-1607604276583-eef5d076aa5f'
            ],
            [
                'name' => 'HP Victus 15 Core i5 Gaming Laptop', 
                'price' => 96000, 
                'desc' => 'Intel Core i5-12450H, 16GB DDR4 RAM, 512GB Gen4 NVMe SSD, GTX 1650 4GB Graphics, 15.6" FHD 144Hz Display.',
                'photo_id' => 'photo-1525547719571-a2d4ac8945e2'
            ],
            [
                'name' => 'Lenovo Yoga Slim 6 Core i7 Touch Laptop', 
                'price' => 135000, 
                'desc' => 'Intel Core i7-1340P, 16GB LPDDR5 RAM, 1TB NVMe SSD, 14" 2.2K IPS Touchscreen Display, Intel Iris Xe Graphics.',
                'photo_id' => 'photo-1544244015-0df4b3ffc6b0'
            ],
            [
                'name' => 'MSI Modern 14 Ryzen 5 Slim Laptop', 
                'price' => 58500, 
                'desc' => 'AMD Ryzen 5 7530U Processor, 8GB DDR4 RAM, 512GB NVMe PCIe Gen3 SSD, 14" FHD IPS-Level Panel.',
                'photo_id' => 'photo-1499955085172-a104c9463ece'
            ]
        ];
    @endphp

    
    @for ($i = 0; $i < 100; $i++)
        @php
            $pool_index = $i % count($products_pool);
            $current_item = $products_pool[$pool_index];
            
           
            $image_url = "https://images.unsplash.com/" . $current_item['photo_id'] . "?w=500&h=350&fit=crop&q=80&sig=" . $i;
        @endphp

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 border-0" style="border-radius: 8px; overflow: hidden;">
                <img src="{{ $image_url }}" class="card-img-top" alt="{{ $current_item['name'] }}" style="height: 200px; object-fit: cover;">
                
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="card-title text-dark fw-bold" style="font-size: 1rem; line-height: 1.4; min-height: 44px;">
                            {{ $current_item['name'] }} #{{ $i + 1 }}
                        </h5>
                        
                        <p class="text-danger fw-bold mb-2" style="font-size: 1.15rem;">
                            ৳{{ number_format($current_item['price'] + ($i * 150)) }}
                        </p>
                        
                        <p class="card-text text-muted small" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; min-height: 54px;">
                            {{ $current_item['desc'] }}
                        </p>
                    </div>
                    
                    <div class="mt-3">
                        <button class="btn btn-primary w-100 fw-bold" style="background-color: #111b24; border: none;">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    @endfor
</div>
@endsection
    @foreach($products as $product)
    <div class="col-md-4 mb-3">
        <div class="card">
            @if($product->image)
                @if(str_starts_with($product->image, 'http'))
                    <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" style="height: 250px; object-fit: cover;">
                @else
                    <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 250px; object-fit: cover;">
                @endif
            @endif
            <div class="card-body text-center">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">Price: ৳{{ $product->price }}</p>
                <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">View Product</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
