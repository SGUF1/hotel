<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {

        $hotels = Hotel::count();
        $users = User::count();
        $admins = Admin::count();
        if (Auth::check()) {
            $admin = Auth::user();
            if ($admin->id_role == 1) {
                return view('index', ['numberOfHotels' => $hotels, 'numberOfUsers' => $users, 'numberOfAdmins' => $admins]);
            } else {
                return view('index', ['numberOfHotels' => $hotels, 'numberOfUsers' => $users]); // da cambiare per i singoli robi

            }
            } else
                return view('login');
    }
}
