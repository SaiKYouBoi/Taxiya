<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyBookingController extends Controller
{
        public function cancelBooking($id)
{
     $booking = Booking::where('id', $id)
                      ->where('traveler_id', auth()->id())
                      ->firstOrFail();

    $now = Carbon::now();
    $departure = Carbon::parse($booking->trip->date_time);

     if ($now->diffInHours($departure, false) < 24) {
        return back()->with('error', 'Annulation impossible : moins de 24h avant le départ.');
    }

     $booking->status = 'cancelled';
    $booking->save();

     $booking->trip->increment('available_seats', $booking->seats_count);

     if($booking->payment) {
        $booking->payment->update(['status' => 'refunded',
        'amount_refunded' => $booking->payment->amount]);

    }

    return back()->with('success', 'Votre réservation a été annulée.');
}

    public function myBookings(Request $request){
        $query=auth()->user()->bookings()->with('trip');


    }
}
