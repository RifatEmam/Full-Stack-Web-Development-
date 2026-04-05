<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Home Page - All Products
    public function index()
    {
        $products = [
            ['id'=>1,'name'=>'Laptop','price'=>50000],
            ['id'=>2,'name'=>'Phone','price'=>20000],
            ['id'=>3,'name'=>'Watch','price'=>5000],
        ];
        return view('products.index', compact('products'));
    }

    // Single Product Page
    public function show($id)
    {
        $product = ['id'=>$id, 'name'=>'Sample Product '.$id, 'price'=>1000*$id];
        return view('products.show', compact('product'));
    }

    // Admin CRUD
    public function create(){ return view('products.create'); }
    public function store(Request $request){ return redirect()->route('products.index'); }
    public function edit($id){ return view('products.edit', compact('id')); }
    public function update(Request $request, $id){ return redirect()->route('products.index'); }
    public function destroy($id){ return redirect()->route('products.index'); }
}