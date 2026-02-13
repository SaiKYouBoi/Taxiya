<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Booking;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show($bookingId)
    {
        $booking = Booking::with(['trip.departureCity', 'trip.arrivalCity', 'seats'])->findOrFail($bookingId);
        return view('travler.payment', compact('booking'));
    }

    public function store(Request $request, $bookingId)
    {
        $validated = $request->validate([
            'payment_method' => 'required|in:card,cash',
            'amount' => 'required|numeric|min:0',
        ]);

        $booking = Booking::findOrFail($bookingId);

        Payment::create([
            'booking_id' => $bookingId,
            'amount' => $validated['amount'],
            'method' => $validated['payment_method'],
            'payment_date' => now(),
        ]);

        $booking->update(['status' => 'confirmed']);

        return redirect()->route('booking.success')->with('success', 'Payment completed successfully!');
    }
}
