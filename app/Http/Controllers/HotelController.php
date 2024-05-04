<?php

namespace App\Http\Controllers;

use App\Charts\HotelRevenue;
use App\Models\Address;
use App\Models\Hotel;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels = Hotel::with('address')->get();
        return view('hotels.index', compact('hotels'));
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
        $hotelValidatation = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'stars' => 'nullable|integer|min:0',
            'average_fee' => 'nullable|numeric|min:0',
            'floor_number' => 'nullable|integer|min:0',
        ]);

        $addressValidations = $request->validate([
            'street_name' => 'required|string|max:255',
            'house_number' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
        ]);

        
        $newHotel = Hotel::create($hotelValidatation);
        $addressValidations['id'] = $newHotel->id;
        Address::create($addressValidations);

        return redirect()->route('hotels.index')->with('success', 'Hotel created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Hotel $hotel)
    {
        $chart_options = [
            'chart_title' => 'Users by months',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
        ];
        $chart1 = new LaravelChart($chart_options);

        $chart = new HotelRevenue();

        return view('hotels.show', ['hotel' => $hotel, 'chart' => $chart]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hotel $hotel)
    {
        return view('hotels.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hotel $hotel)
    {

        $hotelValidatation = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'email' => 'nullable|email|max:255',
            'stars' => 'nullable|integer|min:0',
            'average_fee' => 'nullable|numeric|min:0',
            'floor_number' => 'nullable|integer|min:0',
        ]);

        $addressValidations = $request->validate([
            'street_name' => 'required|string|max:255',
            'house_number' => 'required|string|max:10',
            'city' => 'required|string|max:255',
            'zip_code' => 'required|string|max:255',
        ]);

        $hotel->update($hotelValidatation);
        $address = $hotel->address;
        $address->update($addressValidations);
        return redirect()->route('hotels.index')->with('success', 'Hotel updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hotel $hotel)
    {
        $hotel->delete();
        return redirect()->route('hotels.index')->with('success', 'Hotel deleted successfully');

    }
}
