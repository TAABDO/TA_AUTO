<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {

    }

public function store(Request $request)
{

   $validated = $request->validate([
        'identification_card' => 'required',
        'licence' => 'required',
        'licenceDate' => 'required|date',
        'pickupDate' => 'required',
        'dropofDate' => 'required',
        'pickupLocation' => 'required',
        'dropofLocation' => 'required',
        'announcement_id' => 'required|exists:announcements,id',
    ]);

    $announcement = Announcement::where('situation','available')->get();

    if (!$announcement) {
        return redirect()->back()->with('error', 'The specified announcement does not exist');
    }

        $reservations = Reservation::where('announcement_id', $request->announcement_id)
        ->where('dropofDate', '>', $request->pickupDate)
        ->where('pickupDate', '<', $request->dropofDate)
        ->count();

    if ($reservations > 0) {
        return redirect()->back()->with('error', 'You have already made a reservation for this car');
    }

    // Create a new reservation for the authenticated user

    $reservation = Reservation::create(array_merge($request->all(), ['user_id' => Auth::id()]));

    if (!$reservation) {
        return redirect()->back()->with('error', 'Reservation not created');
    }

    return redirect()->back()->with('success', 'Reservation created successfully');
}

}




