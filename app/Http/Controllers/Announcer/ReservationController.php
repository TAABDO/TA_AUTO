<?php

namespace App\Http\Controllers\Announcer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    public function index()
    {

        $user = Auth::user();
        $reservations= $user->announcements->with('reservation')->get();
        return view('announcer.profile.myreservation',compact('reservations'));
    }

    // public function accepteReservation(Request $request, $id)
// {
//     $reservation = Reservation::findOrFail($id);
//     if($reservation->status == 'confirmed'){
//         return redirect()->route('AnnouncerProfile.index')->with('error','Reservation already accepted');
//     }
//     else{
//         $reservation->update(['status' => 'confirmed']);
//         return redirect()->route('Profile.index');
//     }
//     return redirect()->route('AnnouncerProfile.index');
// }

// public function destroy($id)
// {
//     $reservation = Reservation::findOrFail($id);
//     $reservation->delete();
//     return redirect()->route('AnnouncerProfile.index');
// }
}
