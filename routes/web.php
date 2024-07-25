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
    Route::get('/admin-umkm/add', 'addUmkm');
    Route::get('/admin-umkm/{id}', 'formEditUmkm');
    Route::put('/admin-umkm/{id}', 'editUmkm');
    Route::post('/admin-umkm', 'storeUmkm');
    Route::delete('/admin-umkm/{id}', 'destroyUmkm');
    
    Route::get('/admin-trips', 'trips');
    Route::post('/admin-trips', 'storeTrips');
    Route::put('/admin-trips/{id}', 'editTrips');
    Route::delete('/admin-trips/{id}', 'destroyTrips');

    Route::get('/admin-customers', 'customer');
    
});

Route::controller(AdminController::class)->group(function(){
    Route::post('/customers', 'storeCustomer');
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




