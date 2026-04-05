@extends('app')

@section('title', $product->name)

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="bg-secondary text-white p-5 rounded">No Image Available</div>
            </div>
            <div class="col-md-6">
                <h1 class="display-5">{{ $product->name }}</h1>
                <p class="text-success h3">Price: ৳{{ $product->price }}</p>
                <hr>
                <p class="text-muted">{{ $product->description }}</p>
                <button class="btn btn-primary btn-lg mt-3">Add to Cart</button>
            </div>
        </div>
    </div>
</div>
@endsection