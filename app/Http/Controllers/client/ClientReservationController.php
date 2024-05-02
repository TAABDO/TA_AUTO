<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Reservation;

// use Illuminate\Support\Facades\Auth;

class ClientReservationController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $reservations = $user->reservations->load('announcement');

        return view('Client.clientReservations', compact('reservations'));
    }

    public function show()
    {

    }

    public function create()
    {
        $user = auth()->user();
        $reservations = $user->reservations->load('announcement');

        return view('Client.clientReservations', compact('reservations'));
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->back();
    }
}
