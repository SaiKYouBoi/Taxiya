<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Trip;
use Illuminate\Http\Request;

class searchController extends Controller
{
public function displaySearch(Request $request)
{
    $cities = City::all();

    // If no search parameters, just show the search form
    if (!$request->hasAny(['departure_city_id', 'arrival_city_id', 'date', 'seats']))
        return view('travler.search_trip', ['cities' => $cities, 'trips' => collect([])]);

    $validated = $request->validate(
    [
        'departure_city_id' => 'required|exists:cities,id',
        'arrival_city_id'   => 'required|exists:cities,id|different:departure_city_id',
        'date'              => 'required|date|after_or_equal:today',
        'seats'             => 'required|integer|min:1|max:6',
    ]
    ,
    [
        'arrival_city_id.different' => 'Arrival city cannot be the same as departure.',
        'date.after_or_equal' => 'You cannot search for trips in the past.',
        'seats.min' => 'miniment places is 1',
        'seats.max' => 'maximent places is 6',
    ]);

    $query = Trip::with(['departureCity', 'arrivalCity', 'taxi.Driver']);

    $query->where('status', 'waiting');
    $query->where('departure_city_id', $request->departure_city_id);
    $query->where('arrival_city_id', $request->arrival_city_id);
    $query->whereDate('departure_datetime', $request->date);
    $query->where('available_seats', '>=', $request->seats);
    if ($request->filled('min_price'))
        $query->where('base_price', '>=', $request->min_price);
    if ($request->filled('max_price'))
        $query->where('base_price', '<=', $request->max_price);

    if ($request->filled('premium_only')) {
        $query->whereHas('seats', function($q)
        {
            $q->whereIn('seat_number', [1, 2])
              ->where('status', 'available');
        }, '>=', $request->seats);
    }

    $trips = $query->orderBy('departure_datetime', 'asc')->get();
    return view('travler.search_trip', compact('cities', 'trips'));
}}
