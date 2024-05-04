<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $admins = Admin::with('role')->get();
        $roles = Role::all();
        // dd($admins[0]->id);
        $admin = Auth::user();
        if ($admin->id_role == 1)
            return view('admins.index', ['admins' => $admins, 'roles' => $roles]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admins.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'nullable|string|max:10000',
            'id_role' => 'required|exists:roles,id',
            'email' => 'nullable|email|max:255',
            'id_hotel' => 'nullable|exists:hotels,id',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['id_role'] = 1;
        Admin::create($validatedData);

        return redirect()->route('admins.index')->with('success', 'Admin created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        return view('admins.show', ['admin' => $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        $roles = Role::all();
        return view('admins.edit', compact('admin', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'id_role' => 'required|exists:roles,id',
            'email' => 'nullable|email|max:255',
            'id_hotel' => 'nullable|exists:hotels,id',
        ]);

        $admin->update($validatedData);

        return redirect()->route('admins.index')->with('success', 'Admin updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->route('admins.index')->with('success', 'Admin deleted successfully');
    }
}
