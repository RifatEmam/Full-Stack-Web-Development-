<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Frontend Home Page
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Single Product Page
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Admin: create form
    public function create()
    {
        return view('products.create');
    }

    // Admin: store product
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'description'=>'nullable',
            'image'=>'nullable|image'
        ]);

        $path = null;
        if($request->hasFile('image')){
            $path = $request->file('image')->store('products','public');
        }

        Product::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'image'=>$path
        ]);

        return redirect()->route('products.index');
    }

    // Admin: edit form
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Admin: update product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name'=>'required',
            'price'=>'required|numeric',
            'description'=>'nullable',
            'image'=>'nullable|image'
        ]);

        if($request->hasFile('image')){
            $product->image = $request->file('image')->store('products','public');
        }

        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index');
    }

    // Admin: delete
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}