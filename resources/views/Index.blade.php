@extends('layouts.app')

@section('title', 'Rifat Gadget Gallary | Laptops')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 text-center font-weight-bold text-dark">Our Laptops</h1>
    <div class="row">
        @php
            // বিভিন্ন ব্র্যান্ডের রিয়েল ল্যাপটপ ডাটা পুল
            $products_pool = [
                [
                    'name' => 'HP Pavilion 15 Core i5 13th Gen Laptop', 
                    'price' => 76500, 
                    'desc' => 'Intel Core i5-1335U Processor, 16GB DDR4 RAM, 512GB PCIe NVMe M.2 SSD, 15.6" FHD Display.',
                    'photo_id' => 'photo-1588872657578-7efd1f1555ed'
                ],
                [
                    'name' => 'ASUS Vivobook 16X Ryzen 5 Laptop', 
                    'price' => 68000, 
                    'desc' => 'AMD Ryzen 5 5600H Processor, 8GB DDR4 RAM, 512GB NVMe SSD, 16" WUXGA Anti-Glare Display.',
                    'photo_id' => 'photo-1496181130204-755241524eab'
                ],
                [
                    'name' => 'Apple MacBook Air 13.6-Inch M2 Chip', 
                    'price' => 128000, 
                    'desc' => 'Apple M2 chip with 8‑core CPU and 8‑core GPU, 8GB Unified Memory, 256GB SSD Storage.',
                    'photo_id' => 'photo-1517336714731-489689fd1ca8'
                ],
                [
                    'name' => 'Lenovo IdeaPad Slim 3 Core i3 12th Gen', 
                    'price' => 49500, 
                    'desc' => 'Intel Core i3-1215U Processor, 8GB DDR4 RAM, 512GB NVMe M.2 SSD, 14" FHD Display.',
                    'photo_id' => 'photo-1603302576837-37561b2e2302'
                ],
                [
                    'name' => 'Dell Inspiron 15 3530 Core i5 Laptop', 
                    'price' => 74000, 
                    'desc' => 'Intel Core i5-1335U 13th Gen, 8GB DDR4 RAM, 512GB SSD, 15.6" FHD 120Hz Display.',
                    'photo_id' => 'photo-1593642632823-8f785ba67e45'
                ]
            ];
        @endphp

        {{-- লুপ চালিয়ে ১০০টি ল্যাপটপ জেনারেট করা হচ্ছে --}}
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
</div>
@endsection