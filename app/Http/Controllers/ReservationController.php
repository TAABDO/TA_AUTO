<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //


    public function index()
    {
        return view('reservation');
    }

    public function store(Request $request)
    {

         // Get the authenticated user
        $user = auth()->user();

        // Create a new reservation for the authenticated user
        $reservation = $user->reservations()->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'cine'
            'licence' => $request->licence,
            'licenceDate' => $request->licenceDate,
            'pickupDate' => $request->date,
            'dropofDate' => $request->packup,
            'pickupLocation' => $request->location,
            'dropofLocation' => $request->location,
            'car_id' => $request->car_id,

        ]);

        // Return the created reservation
        return $reservation;
    }


}
