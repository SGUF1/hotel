<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StatusController;
use App\Models\Hotel;
use Illuminate\Support\Facades\Route;


Route::get('/', DashboardController::class)->name('home');

Route::resource('admins', AdminController::class)->names('admins');

Route::get("/login", [AuthManager::class, 'login'])->name('login');
Route::post("/login", [AuthManager::class, 'loginPost'])->name('login.post');
Route::get("/registration", [AuthManager::class, 'register'])->name('registration');
Route::post("/registration", [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get("/logout", [AuthManager::class, 'logout'])->name('logout');


// Route ADMIN

Route::middleware([AuthManager::class])->group(function () {
    Route::resource('/hotels', HotelController::class);
    Route::resource("/roles", RoleController::class);
    Route::resource("/admins", AdminController::class);
    Route::resource("hotels/{hotel}/rooms", RoomController::class);
    Route::resource("/statuses", StatusController::class);
});
