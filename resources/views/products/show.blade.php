@extends('layouts.app')

@section('title', 'Product Details | Rifat Gadget Gallery')

@section('content')
<div class="container py-5">
    @php
        // টেস্ট করার জন্য একটি রিয়েল প্রফেশনাল ল্যাপটপের ডামি ডাটা সেট করা হয়েছে
        $dummy_product = [
            'name' => 'HP Pavilion 15 Core i5 13th Gen Laptop',
            'price' => 76500,
            'image' => 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800&h=600&fit=crop&q=80',
            'description' => 'The HP Pavilion 15 Laptop packs more performance into a smaller profile, so you can get more done wherever you go. Enjoy mind-blowing entertainment with a micro-edge screen and Audio by B&O.',
            'specs' => [
                'Processor' => 'Intel Core i5-1335U 13th Gen (Up to 4.6 GHz, 10 Cores, 12 Threads)',
                'Memory' => '16GB DDR4 3200MHz RAM',
                'Storage' => '512GB PCIe NVMe M.2 SSD',
                'Graphics' => 'Intel Iris Xe Graphics',
                'Display' => '15.6" Diagonal, FHD (1920 x 1080), IPS, Micro-edge, Anti-glare',
                'Operating System' => 'Windows 11 Home Genuine',
                'Battery' => '3-cell, 41 Wh Li-ion, Up to 7 hours battery life',
                'Warranty' => '2 Years International Warranty'
            ]
        ];
    @endphp

    <div class="mb-4">
        <a href="{{ route('products.index') }}" class="btn btn-outline-dark fw-bold btn-sm">
            ← Back to Products
        </a>
    </div>

    <div class="row bg-white p-4 rounded shadow-sm">
        <div class="col-md-5 text-center mb-4 mb-md-0">
            <div class="border rounded p-3 bg-light d-flex align-items-center justify-content-center" style="min-height: 350px;">
                <img src="{{ $dummy_product['image'] }}" class="img-fluid rounded" alt="{{ $dummy_product['name'] }}" style="max-height: 350px; object-fit: contain;">
            </div>
        </div>

        <div class="col-md-7 px-md-4">
            <h2 class="fw-bold text-dark mb-2">{{ $dummy_product['name'] }}</h2>
            
            <div class="mb-3">
                <span class="badge bg-success">In Stock</span>
                <span class="badge bg-primary">Official Warranty</span>
            </div>

            <div class="p-3 bg-light rounded mb-3">
                <span class="text-muted small d-block">Price:</span>
                <span class="text-danger fw-bold h3 mb-0">৳{{ number_format($dummy_product['price']) }}</span>
            </div>

            <p class="text-muted mb-4" style="line-height: 1.6;">
                {{ $dummy_product['description'] }}
            </p>

            <div class="d-flex gap-3">
                <button class="btn btn-danger btn-lg px-5 fw-bold" style="background-color: #ef4a23; border: none;">Buy Now</button>
                <button class="btn btn-dark btn-lg px-4 fw-bold" style="background-color: #111b24;">Add to Cart</button>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12 bg-white p-4 rounded shadow-sm">
            <h4 class="fw-bold text-dark border-bottom pb-2 mb-4">Specification</h4>
            <table class="table table-striped table-bordered mb-0">
                <tbody>
                    @foreach($dummy_product['specs'] as $title => $value)
                        <tr>
                            <td class="fw-bold text-secondary" style="width: 25%;">{{ $title }}</td>
                            <td class="text-dark">{{ $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection