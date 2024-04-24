<?php

namespace App\Http\Controllers\Announcer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnoucerProfileController extends Controller
{
public function index()
{
    $user = Auth::user();


    return view('announcer.profile.profileUser');

}
public function accepteReservation(Request $request, $id)
{
    $reservation = Reservation::findOrFail($id);
    if($reservation->status == 'confirmed'){
        return redirect()->route('profile.index')->with('error','Reservation already accepted');
    }
    else{
        $reservation->update(['status' => 'active']);
        return redirect()->route('profile.index');
    }
    return redirect()->route('profile.index');
}

public function destroy($id)
{
    $reservation = Reservation::findOrFail($id);
    $reservation->delete();
    return redirect()->route('profile.index');
}




}
