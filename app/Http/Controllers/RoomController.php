<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
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
    public function create(Hotel $hotel)
    {
        return view('rooms.create', compact('hotel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Hotel $hotel)
    {
        $validatedData = $request->validate([
            'number' => 'required|integer',
            'room_fee' => 'required|numeric',
            'floor_number' => 'required|integer',
        ]);

        $quantityData = $request->validate([
            'quantity_room' => 'required|integer',
        ]);

        $validatedData['id_hotel'] = $hotel->id;
        for ($i = 0; $i < $quantityData['quantity_room']; $i++) {
            $roomData = $validatedData;
            $roomData['number'] += $i;
            Room::create($roomData);
        }

        return redirect()->route('hotels.show', $hotel)->with('success', 'Rooms created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
