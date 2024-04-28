<?php

namespace App\Http\Controllers\client;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ClientProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('Client.clientProfile', compact('user'));
    }

    public function Show($id)
    {
        $user = User::findOrFail($id);
        $userReservations = $user->reservations;

        return view('admin.profile.update', compact('user', 'userReservations'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.profile.update', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {

        $user = User::findOrFail($id);
        if (!$user) {
                return redirect()->route('login');
           }
        $data = $request->all();
        if ($request->hasFile('profile')) {
            $user->clearMediaCollection('profile');
            $user->addMediaFromRequest('profile')->toMediaCollection('profile');
        }
        $user->update($data);

        return redirect()->route('ClientProfile.index', compact('user'));
    }


}
