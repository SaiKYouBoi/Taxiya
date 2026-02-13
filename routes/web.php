<?php
use App\Http\Controllers\DriverController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Auth\VehicleRegistration;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/user', function () {
//     return view('auth.login_user');
// });

Route::get('/home', function () {
    return view('home');
});

Route::get('/pending', function () {
    return view('auth.user_pending');
});

// Route::get('/taxi-info', function () {
//     return view('auth.user_info');
// })->name('taxi-info');

Route::get('/my-bookings', function () {
    return view('travler.mybookings');
});

Route::get('/search-trip', [SearchController::class, 'displaySearch'])->name('trip.search');

Route::get('/trips/{id}', [TripController::class, 'show'])->name('trips.show') ;

Route::get('/payment', function () {
    return view('travler.payment');
});

Route::get('/trip-managment', [DriverController::class, 'dashboard'])->name('driver.trip_managment');

Route::post('/bookings/{id}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

Route::get('/create-trip', function () {
    return view('driver.create_trip');
});
Route::get('/create-trip', [TripController::class, 'create']);
Route::post('/trips', [TripController::class, 'store'])->name('trips.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
});

Route::get('taxi-info', [VehicleRegistration::class, 'create'])
    ->name('taxi-info');

Route::post('taxi-info', [VehicleRegistration::class, 'store']);

require __DIR__.'/auth.php';
