@extends('layouts.app')

@section('title','Home | E-Shop')

@section('content')
<h1 class="mb-4">Our Products</h1>
<div class="row">
    @foreach($products as $product)
    <div class="col-md-4 mb-3">
        <div class="card">
            @if($product->image)
            <img src="{{ asset('storage/'.$product->image) }}" class="card-img-top" alt="{{ $product->name }}">
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