<?php

use App\Http\Controllers\Admin\DriverValidationController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Auth\VehicleRegistration;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyBookingController;

Route::middleware(['auth', 'driver', 'hasTaxi', 'isValidated'])->group(function () {
    Route::get('/create-trip', [TripController::class, 'create'])->name('trips.create');
    Route::get('/trip-managment', [DriverController::class, 'dashboard'])->name('driver.trip_managment');
    Route::post('/trips', [TripController::class, 'store'])->name('trips.store');

});

Route::get('/pending', function () {
    return view('auth.user_pending');
})->middleware(['auth','driver','noValidation'])->name('pending_validation');


Route::middleware(['auth', 'admin'])->group(function () {

    Route::post('/drivers/{driver}/approve', [DriverValidationController::class, 'approve'])
        ->name('drivers.approve');

    Route::post('/drivers/{driver}/reject', [DriverValidationController::class, 'reject'])
        ->name('drivers.reject');

    Route::get('/admin/driver-validation', [DriverValidationController::class, 'validation'])->name('admin.driver.validation');

});

Route::middleware(['auth', 'traveler'])->group(function () {

    Route::get('/search-trip', [SearchController::class, 'displaySearch'])->name('trip.search');
    Route::get('/search-trip/{id}', [SearchController::class, 'show'])->name('search.show');

    Route::get('/trips/{id}', [TripController::class, 'show'])->name('trips.show');

    Route::get('/payment/{booking}', [\App\Http\Controllers\PaymentController::class, 'show'])->name('payment.show');
    Route::post('/payment/{booking}', [\App\Http\Controllers\PaymentController::class, 'store'])->name('payment.store');

    Route::post('/bookings/{id}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

    Route::get('/payment', function () {
        return view('travler.payment');
    });

    Route::post('/mybookings/{id}/cancel', [MyBookingController::class, 'cancelBooking'])
        ->name('mybookings.cancel');

    Route::get('/mybookings', [MyBookingController::class, 'myBookings'])
        ->name('mybookings.index');

    Route::post('/mybookings/{id}/cancel', [MyBookingController::class, 'cancelBooking'])
        ->name('mybookings.cancel');

    Route::get('/mybookings', [MyBookingController::class, 'myBookings'])
        ->name('mybookings.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

    Route::post('/mybookings/{id}/cancel', [MyBookingController::class, 'cancelBooking'])
        ->name('mybookings.cancel');

    Route::get('/mybookings', [MyBookingController::class, 'myBookings'])
        ->name('mybookings.index');

    Route::patch('/driver/trips/{trip}/cancel', [DriverController::class, 'cancel'])
        ->name('driver.trips.cancel');

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/', function () {
        return view('home');
    })->name('home');
});

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified', 'traveler'])->name('dashboard');


Route::get('taxi-info', [VehicleRegistration::class, 'create'])
    ->middleware(['auth', 'driver','noTaxi'])->name('taxi-info');

Route::post('taxi-info', [VehicleRegistration::class, 'store'])->middleware(['auth', 'driver']);


require __DIR__ . '/auth.php';
