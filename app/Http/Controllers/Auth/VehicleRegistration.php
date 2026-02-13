<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Taxi;
use Illuminate\Http\Request;


class VehicleRegistration extends Controller
{

    public function create()
    {
        return view('auth.user_info');
    }

    public function store(Request $request)
    {
        $request->validate([
            'plate_number' => ['required', 'digits_between:1,5'],
            'plate_letter' => ['required', 'string', 'max:2'],
            'plate_region' => ['required', 'integer'],
            'model' => ['required', 'string', 'max:100'],
            'vehicule_make' => ['required', 'string', 'max:100'],
            'year_manufacture' => ['required', 'digits:4', 'integer', 'min:1980', 'max:' . date('Y')],
            'taxi_number' => ['required', 'integer', 'unique:taxis,taxi_number'],
        ]);
        
        $licensePlate = $request->plate_number . '-' .
            $request->plate_letter . '-' .
            $request->plate_region;



        $taxi = Taxi::create([
            'license_plate' => $licensePlate,
            'model' => $request->model,
            'vehicule_make' => $request->vehicule_make,
            'year_manufacture' => $request->year_manufacture,
            'taxi_number' => $request->taxi_number,
            'user_id' => auth()->id(),
        ]);

        return redirect(route('driver.trip_managment', absolute: false));
    }
}