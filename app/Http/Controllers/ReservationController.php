<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function index()
    {
        // Get the authenticated user
        $user = auth()->user();

        // Get the reservations that belong to the user and load the announcement.car relationship
        $reservations = $user->reservations()->with('announcement_id')->get();

        return view('announcer.profile.myreservation', compact('reservations'));
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

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'identification_card' => 'sometimes',
    //         'licence' => 'sometimes',
    //         'licenceDate' => 'sometimes|date',
    //         'pickupDate' => 'sometimes|date',
    //         'dropofDate' => 'sometimes|date',
    //         'pickupLocation' => 'required',
    //         'dropofLocation' => 'required',
    //         'announcement_id' => 'required',
    //     ]);

    //     $user_id = auth()->id();

    //     if ($user_id === null) {
    //         return redirect('login');
    //     }

    //     // if ($user_id->reservations()->where('announcement_id', $validated['announcement_id'])->exists()) {
    //     //     return view('announcer.profile.myreservation')->with('error', 'You have already made a reservation for this car');
    //     // }

    //     // Create a new reservation for the authenticated user
    //      $reservations = $user->reservations()->create($validated);

    //     $reservations = DB::table('reservations')
    //         ->select('reservations.*', 'announcements.*', 'cars.*')
    //         ->leftJoin('announcements', 'reservations.announcement_id', '=', 'announcements.id')
    //         ->leftJoin('cars', 'announcements.id', '=', 'cars.announcement_id')
    //         ->where('reservations.user_id', $user_id)
    //         ->get();

    //     if (!$reservations) {
    //         return view('car-detaills')->with('error', 'Reservation not created');
    //     }

    //     return view('reservation', compact('reservations', 'user_id'));
    // }



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
    //

    $user_id = auth()->id();

    if ($user_id === null) {
        return redirect('login');
    }
    // Check if the user has already made a reservation for this car
    // dd($request->announcement_id);
    // $existingReservation = Reservation::where('announcement_id', $request->announcement_id)
    //     ->where('pickupDate', $validated['announcement_id'])
    //     ->first();

        $reservations = Reservation::where('announcement_id', $request->announcement_id)
        ->where('status', 'confirmed')
        ->where(function ($query) use ($request) {
            $query->where('pickupDate', '<=', $request->pickupDate)
                  ->where('dropofDate', '>=', $request->dropofDate)
                  ->orWhere('pickupDate', '<=', $request->pickupDate)
                  ->where('dropofDate', '>=', $request->dropofDate);
        })->get();



    if ($reservations) {
        return redirect()->back()->with('error', 'You have already made a reservation for this car');
    }

    // Create a new reservation for the authenticated user

    $reservation = Reservation::create(array_merge($validated, ['user_id' => $user_id]));

    if (!$reservation) {
        return redirect()->back()->with('error', 'Reservation not created');
    }

    return redirect()->back()->with('success', 'Reservation created successfully');
}

}
