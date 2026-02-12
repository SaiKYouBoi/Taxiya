<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Seat;
use App\Mail\BookingConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $seat = Seat::with('trip')->findOrFail($request->seat_id);
        
        // Double-check seat is still available
        if ($seat->is_booked) {
            return redirect()->back()->with('error', 'This seat is already booked!');
        }
        
        // Calculate price with surcharge for seats 1 and 2 (RB-501)
        $price = $seat->trip->base_price;
        if (in_array($seat->seat_number, [1, 2])) {
            $price = $price * 1.2;
        }
        
        // Create booking
        $booking = Booking::create([
            'user_id' => auth()->id(),
            'trip_id' => $seat->trip_id,
            'total_price' => $price,
            'status' => 'pending',
        ]);
        
        // Set is_booked to true
        $seat->update(['status' => 'reserved']);
        
        // Send email
        Mail::to(auth()->user()->email)->send(new BookingConfirmation($booking));
        
        return redirect()->back()->with('success', 'Booking created successfully!');
    }
}
