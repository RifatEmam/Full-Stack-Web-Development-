@extends('layouts.app')

@section('title','Add Product')

@section('content')
<h1>Add Product</h1>
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="number" name="price" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Add Product</button>
</form>
@endsection