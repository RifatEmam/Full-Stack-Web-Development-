<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Home Page - All Products
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

    // Admin CRUD
    public function create(){ return view('products.create'); }
    public function store(Request $request){ 
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
    public function edit($id){ 
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product')); 
    }
    public function update(Request $request, $id){ 
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
    public function destroy($id){ 
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index'); 
    }
}