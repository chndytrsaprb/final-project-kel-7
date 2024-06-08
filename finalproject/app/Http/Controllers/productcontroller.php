<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index', ["product" => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image_url' => 'required',
        ]);

        $product = new Product;

        $product->category = $request->category;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image_url = $request->image_url;

        $product->save();

        return redirect('/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image_url' => 'required',
        ]);

        $product = Product::find($id);

        $product->category = $request->category;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image_url = $request->image_url;

        $product->save();

        return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product');
    }
}