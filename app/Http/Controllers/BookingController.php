<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Seat;
use App\Mail\BookingConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function DriverBookings(){
     $driver = auth()->user()->load(['taxi.trips.bookings.traveler']);

     $trips = $driver->taxi ? $driver->taxi->trips : collect();

    return view('driver.bookings', compact('trips'));
     }
    public function store(Request $request)
    {
        $seatIds = json_decode($request->seat_ids, true);

        if (empty($seatIds)) {
            return redirect()->back()->with('error', 'Please select at least one seat');
        }

        $seats = Seat::with('trip')->whereIn('id', $seatIds)->get();

        // Double-check all seats are available
        foreach ($seats as $seat) {
            if ($seat->is_booked) {
                return redirect()->back()->with('error', "Seat {$seat->seat_number} is already booked!");
            }
        }

        // Calculate total price with RB-501 surcharge
        $totalPrice = 0;
        foreach ($seats as $seat) {
            $price = $seat->trip->base_price;
            if (in_array($seat->seat_number, [1, 2])) {
                $price *= 1.2;
            }
            $totalPrice += $price;
        }

        // Create booking
        $booking = Booking::create([
            'user_id' => auth()->id(),
            'trip_id' => $seats->first()->trip_id,
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        // Reserve all seats
        foreach ($seats as $seat) {
            $price = $seat->trip->base_price;
            if (in_array($seat->seat_number, [1, 2])) {
                $price *= 1.2;
            }
            $seat->update(['status' => 'reserved']);
            $booking->bookingSeats()->create([
                'seat_id' => $seat->id,
                'price' => $price
            ]);
        }

        Mail::to(auth()->user()->email)->send(new BookingConfirmation($booking));

        return redirect()->back()->with('success', 'Booking created successfully!');
    }
    }
