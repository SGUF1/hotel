<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hotels.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|string|exists:hotels,id',
            'street_name' => 'required|string|max:255',
            'house_number' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
        ]);

        Address::create($validatedData);
        return redirect('hotels.index')->with('success', 'Address created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        return view('hotels.show', compact($address));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        return view('hotels.edit', compact($address));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        $validatedData = $request->validate([
            'street_name' => 'required|string|max:255',
            'house_number' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
        ]);
        return redirect('hotels.index')->with('success', 'Address updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        $address->delete();
        return redirect('hotels.index')->with('success', 'Address deleted successfully');
    }
}
