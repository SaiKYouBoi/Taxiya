<?php

namespace App\Http\Controllers;

use App\Models\Trip;

class TripController extends Controller
{
    public function show($id)
    {
        $trip = Trip::with('seats')->findOrFail($id);
        return view('travler.confirm_booking', compact('trip'));
    }
}
