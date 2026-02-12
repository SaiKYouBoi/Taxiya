<?php
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
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

Route::get('/confirm-booking', function () {
    return view('travler.confirm_booking');
});

Route::get('/payment', function () {
    return view('travler.payment');
});

Route::get('/trip-managment', [DriverController::class, 'dashboard'])->name('driver.trip_managment');

Route::post('/bookings/{id}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

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
});

require __DIR__.'/auth.php';
