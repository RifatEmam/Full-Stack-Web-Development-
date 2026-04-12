@extends('app')

@section('title', 'Rifat Gadget Gallary')

@section('content')
<div class="row">
    @foreach($products as $product)
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" style="height: 200px; object-fit: cover;">
            
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="text-success fw-bold">Price: ৳{{ $product->price }}</p>
                <p class="card-text text-muted small">{{ $product->description }}</p>
                <button class="btn btn-primary w-100">Add to Cart</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection