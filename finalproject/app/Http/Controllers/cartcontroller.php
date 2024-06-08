<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class cartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = Cart::all();
        return view('cart.index', ["cart" => $cart]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cart.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user' => 'required',
        ]);

        $cart = new Cart;

        $cart->user = $request->user;

        $cart->save();

        return redirect('/cart');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cart = Cart::find($id);
        return view('cart.show', ['cart' => $cart]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cart = Cart::find($id);
        return view('cart.edit', ['cart' => $cart]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'user' => 'required',
        ]);

        $cart = Cart::find($id);

        $cart->user = $request->user;

        $cart->save();

        return redirect('/cart');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect('/cart');
    }
}