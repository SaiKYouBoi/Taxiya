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
Route::get('/create-trip', function () {
    return view('driver.create_trip');
});


Route::get('/trip-managment', [DriverController::class, 'dashboard'])->name('driver.trip_managment');

Route::post('/Mybookings/{id}/cancel', [MyBookingController::class, 'cancel'])->name('mybookings.cancel');


// @if($booking->status !== 'cancelled')
//     <form action="{{ route('mybookings.cancel', $booking->id) }}" method="POST"
//           onsubmit="return confirm('Êtes-vous sûr de vouloir annuler votre réservation ?')">
//         @csrf
//         @method('PATCH')

//         <button type="submit"
//                 class="flex items-center gap-2 px-4 py-2 bg-red-50 text-red-600 hover:bg-red-100 rounded-lg font-medium transition-all">
//             <span class="material-icons-outlined text-sm">close</span>
//             Annuler ma place
//         </button>
//     </form>
// @else
//     <span class="text-gray-400 italic text-sm">Cette réservation est annulée</span>
// @endif


// @php
//     $departureTime = \Carbon\Carbon::parse($booking->trip->date_time);
//     $canCancel = now()->diffInHours($departureTime, false) >= 24;
// @endphp

// @if($booking->status !== 'cancelled' && $canCancel)
//     @elseif($booking->status !== 'cancelled' && !$canCancel)
//     <span class="text-orange-500 text-xs">Annulation non autorisée (-24h)</span>
// @endif



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

