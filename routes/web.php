<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('sejarah', function () {
    return view('sejarah');
});

Route::get('contact', function () {
    return view('contact');
});