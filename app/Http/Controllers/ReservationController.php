<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Announcement;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function index()
    {
        return view('reservation');
    }

    // public function create()
    // {
    //     // Get the announcement ID from the request
    //     $announcementId = $request->input('announcement_id');

    //     // Retrieve the announcement from the database
    //     $announcement = Announcement::find($announcementId);

    //     // Redirect to the reservation details page
    //     return view('car-detaills', compact('announcement'));
    // }

public function store(Request $request)
{
    // dd($request);
    $validated = $request->validate([
        'fullname' => 'sometimes',
        'email' => 'sometimes|email',
        'phone' => 'sometimes',
        'address' => 'sometimes',
        'identification_card' => 'sometimes',
        'licence' => 'sometimes',
        'licenceDate' => 'sometimes|date',
        'pickupDate' => 'sometimes|date',
        'dropofDate' => 'sometimes|date',
        'pickupLocation' => 'sometimes',
        'dropofLocation' => 'sometimes',
        'announcement_id' => 'sometimes',
    ]);

    $user = auth()->user();

        if ($user === null) {
            return redirect('login');
        }


        if($user->reservations()->where('announcement_id', $validated['announcement_id'])->exists()){
            return view('announcer.profile.myreservation')->with('error','You have already made a reservation for this car');
        }

        // Create a new reservation for the authenticated user
        $reservations = $user->reservations()->create($validated);

        if(!$reservations){
            return view('car-detaills')->with('error','Reservation not created');
        }

    return view('reservation',compact('reservations','user'));
}

public function acceptereservation($id)
{
    $reservation = Reservation::findOrFail($id);
    $reservation->status = 'accepted';
    $reservation->save();

    return redirect()->route('reservations.show', $reservation->id);

}
}
