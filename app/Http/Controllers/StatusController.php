<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = Status::all();

        return view('statuses.index', compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'nullable|string',
            'color' => 'required|string|max:15',
        ]);

        Status::create($validatedData);
        return redirect()->route('statuses.index')->with('success', 'Status created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        return view('statuses.show', compact($status));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        return view('statuses.edit', compact('status'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'description' => 'nullable|string',
            'color' => 'required|string|max:15',
        ]);

        $status->update($validatedData);

        return redirect()->route('statuses.index')->with('success', 'Status updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        $status->delete();
        return redirect()->route('statuses.index')->with('success', 'Status deleted successfully');
    }
}
