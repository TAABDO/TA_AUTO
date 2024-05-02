<?php

namespace App\Http\Controllers\Announcer;

use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AnnouncerReservationController extends Controller
{

    public function index()
{
    $user = Auth::user();

    // Eager load the announcements with their reservations
    $reservations = $user->announcements()->with('reservations')->get();

    return view('announcer.profile.myreservation', compact('reservations'));
}

public function Allannouncement()
{
    $user = Auth::user();

    // Eager load the announcements with their reservations
    $announcements = $user->announcements()->get();

    return view('announcer.profile.allAnnouncement', compact('announcements'));

}

    public function accepteReservation(Request $request, $id)
{
    $reservation = Reservation::findOrFail($id);
    if($reservation->status == 'confirmed'){
        return redirect()->route('AnnouncerProfile.index')->with('error','Reservation already accepted');
    }
    else{
        $reservation->update(['status' => 'confirmed']);
        return redirect()->route('AnnouncerProfile.index');
    }
    return redirect()->route('AnnouncerProfile.index');
}

public function destroy($id)
{

    $reservation = Reservation::findOrFail($id);
    $reservation->delete();
    return redirect()->route('AnnouncerProfile.index');
}
}
