<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Closure;

class AuthManager extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }
        return view('login');
    }

    public function register()
    {

        return view('registration');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required'
        ]);


        $credentials = $request->only('username', 'password');


        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }

        return redirect()->route('login')->with('error', 'Login details are not valid');
    }

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }

        return redirect()->route('login');
    }

    public function registrationPost(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:admins',
            'id_role' => 'nullable|exists:roles,id',
            'id_hotel' => 'nullable|exists:hotels,id',
            'password' => 'required'
        ]);

        $validatedData['password'] = Hash::make($request->password);
        $validatedData['id_role'] = 1;
        $admin = Admin::create($validatedData);

        if (!$admin) {
            return redirect()->route('register')->with('error', 'Creation failed, try again');
        }

        return redirect()->route('login')->with('success', 'Admin created successfully');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
}
