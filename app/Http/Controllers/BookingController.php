<?php

namespace App\Http\Controllers;

use App\Mail\BookingConfirmation;
use App\Models\Booking;
use App\Models\Seat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
<<<<<<< HEAD
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

        DB::beginTransaction();

        try {
            $seats = Seat::with('trip')->whereIn('id', $seatIds)->lockForUpdate()->get();

            // Double-check all seats are available
            foreach ($seats as $seat) {
                if ($seat->is_booked) {
                    DB::rollBack();
                    return redirect()->back()->with('error', "Seat {$seat->seat_number} is already booked!");
                }
            }

            $trip = $seats->first()->trip;

            // Check available seats
            if ($trip->available_seats < count($seatIds)) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Not enough available seats!');
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
                'trip_id' => $trip->id,
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

            // Atomic decrement
            $trip->decrement('available_seats', count($seatIds));

            Mail::to(auth()->user()->email)->send(new BookingConfirmation($booking));

            DB::commit();

            return redirect()->back()->with('success', 'Booking created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Booking failed: ' . $e->getMessage());
        }
    }
}
=======

 



}
>>>>>>> 146ce31 (Added bookings controller changes to match bookings logic)
