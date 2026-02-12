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
        $seat = Seat::findOrFail($request->seat_id);
        
        // Calculate price with surcharge for seats 1 and 2
        $price = $seat->price;
        if (in_array($seat->seat_number, [1, 2])) {
            $price = $price * 1.2;
        }
        
        // Create booking
        $booking = Booking::create([
            'user_id' => auth()->id(),
            'trip_id' => $seat->trip_id,
            'qr_code' => Str::uuid(),
            'total_price' => $price,
            'status' => 'pending',
        ]);
        
        // Update seat status
        $seat->update(['is_booked' => true]);
        
        // Send email
        Mail::to(auth()->user()->email)->send(new BookingConfirmation($booking));
        
        return redirect()->back()->with('success', 'Booking created successfully!');
    }
}
