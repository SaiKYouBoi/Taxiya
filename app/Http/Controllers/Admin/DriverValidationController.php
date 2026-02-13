<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DriverValidationController extends Controller
{
    public function validation()
    {
        $drivers = User::with('taxi')
            ->where('role', 'driver')
            ->where('is_validated', false) 
            ->latest()
            ->get();

        return view('admin.drivervalidation', compact('drivers'));
    }
}
