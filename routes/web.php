<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('auth.login_user');
});

Route::get('/pending', function () {
    return view('auth.user_pending');
});

Route::get('/userinfo', function () {
    return view('auth.user_info');
});

Route::get('/search-trip', function () {
    return view('travler.search_trip');
});

Route::get('/trips/{id}', [TripController::class, 'show'])->name('trips.show') ;

Route::get('/payment', function () {
    return view('travler.payment');
});

Route::get('/trip-managment', function () {
    return view('driver.trip_managment');
});

Route::get('/create-trip', function () {
    return view('driver.create_trip');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
});

require __DIR__.'/auth.php';
