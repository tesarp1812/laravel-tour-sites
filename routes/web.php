<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(MainController::class)->group(function () {
    Route::get('/umkm', 'showProduct');
    Route::get('/trips', 'showTrips');
    Route::post('/orders', 'store');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate');
    Route::post('/logout', 'logout');
});

Route::controller(AdminController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard', 'dashboard');
    Route::get('/admin-umkm', 'umkm');
    Route::get('/admin-trips', 'trips');
});

Route::get('/', function () {
    return view('index');
});

Route::get('sejarah', function () {
    return view('sejarah');
});

Route::get('contact', function () {
    return view('contact');
});




