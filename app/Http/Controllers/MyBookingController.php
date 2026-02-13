<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Carbon\Carbon;

class MyBookingController extends Controller
{
        public function cancelBooking($id)
{
     $booking = Booking::where('id', $id)
                      ->where('user_id', auth()->id())
                      ->firstOrFail();

    $now = Carbon::now();
    $departure = Carbon::parse($booking->trip->date_time);

     if ($now->diffInHours($departure, false) < 24) {
        return back()->with('error', 'Annulation impossible : moins de 24h avant le départ.');
    }

     $booking->status = 'cancelled';
    $booking->save();
    $seatsCount = $booking->bookingSeats()->count();

     $booking->trip->increment('available_seats', $seatsCount);

     if($booking->payment) {
        $booking->payment->update(['status' => 'refunded',
        'amount_refunded' => $booking->payment->amount]);

    }

    return back()->with('success', 'Votre réservation a été annulée.');
}




    public function myBookings(Request $request) {
    if (!auth()->check()) {
        return redirect()->route('login');
    }

     $query = auth()->user()->bookings()
     ->with(['trip.taxi.driver', 'trip.departureCity', 'trip.arrivalCity']);
     if ($request->has('status')) {
        $status = $request->status;
        if ($status == 'upcoming') {
             $query->where('status', 'confirmed')
                  ->whereHas('trip', function($q) {
                      $q->where('departure_datetime', '>', now());
                  });
        } elseif ($status == 'completed') {
             $query->where('status', 'confirmed')
                  ->whereHas('trip', function($q) {
                      $q->where('departure_datetime', '<=', now());
                  });
        } elseif ($status == 'cancelled') {
             $query->where('status', 'cancelled');
        }
    }

    $bookings = $query->latest()->get();

    return view('travler.mybookings', compact('bookings'));
}
}
