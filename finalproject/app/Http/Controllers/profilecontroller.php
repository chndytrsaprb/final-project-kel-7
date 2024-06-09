<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::all();
        return view('profile.index', ["profile" => $profile]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profile.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone_number' => 'required',
            'address' => 'required',
            'user' => 'required',
        ]);

        $profile = new Profile;

        $profile->phone_number = $request->phone_number;
        $profile->address = $request->address;
        $profile->user = $request->user;

        $profile->save();

        return redirect('/profile');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profile = Profile::find($id);
        return view('profile.show', ['profile' => $profile]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profile = Profile::find($id);
        return view('profile.edit', ['profile' => $profile]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'phone_number' => 'required',
            'address' => 'required',
            'user' => 'required',
        ]);

        $profile = Profile::find($id);

        $profile->phone_number = $request['phone_number'];
        $profile->address = $request['address'];
        $profile->user = $request['user'];

        $profile->save();

        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::find($id);
        $profile->delete();
        return redirect('/profile');
    }
}