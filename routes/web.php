<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(MainController::class)->group(function () {
    Route::get('/', 'index');
    Route::post('/orders', 'store');
});