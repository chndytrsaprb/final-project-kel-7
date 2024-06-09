<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caritem;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caritem = Caritem::all();
        return view('caritem.index', ["caritem" => $caritem]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('caritem.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'cart' => 'required',
            'product' => 'required',
            'quantity' => 'required',
        ]);

        $caritem = new Caritem;

        $caritem->cart = $request->cart;
        $caritem->product = $request->product;
        $caritem->quantity = $request->quantity;

        $caritem->save();

        return redirect('/caritem');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $caritem = Caritem::find($id);
        return view('caritem.show', ['caritem' => $caritem]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $caritem = Caritem::find($id);
        return view('caritem.edit', ['caritem' => $caritem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'cart' => 'required',
            'product' => 'required',
            'quantity' => 'required',
        ]);

        $caritem = Caritem::find($id);

        $caritem->cart = $request->cart;
        $caritem->product = $request->product;
        $caritem->quantity = $request->quantity;

        $caritem->save();

        return redirect('/caritem');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $caritem = Caritem::find($id);
        $caritem->delete();
        return redirect('/caritem');
    }
}