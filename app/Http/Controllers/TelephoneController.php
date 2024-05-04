<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Telephone;
use Illuminate\Http\Request;

class TelephoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $hotelId)
    {
        $telephones = Telephone::where('id_hotel', $hotelId)->get();

        return view('hotels.telephone.index', compact($telephones));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotels.telephone.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'number' => 'required|string|max:12',
            'id_hotel' => 'required|exists:hotels,id',
        ]);

        Telephone::create($validatedData);

        return redirect('hotels.telephone.index')->with('success', 'Telephone number created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Telephone $telephone)
    {
        return view('hotels.telephone.show', compact($telephone));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Telephone $telephone)
    {
        return view('hotels.telephone.edit', compact($telephone));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Telephone $telephone)
    {
        $validatedData = $request->validate([
            'number' => 'required|string|max:12',
        ]);

        $telephone->update($validatedData);

        return redirect('hotels.telephone.index')->with('success', 'Telephone number updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Telephone $telephone)
    {
        $telephone->delete();
        return redirect('hotels.telephone.index')->with('success', 'Telephone number deleted successfully');
    }
}
