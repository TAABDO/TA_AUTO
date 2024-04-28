<?php

namespace App\Http\Controllers\Announcer;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AnnoucerProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('announcer.profile.announcerProfile', compact('user'));

    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        if (! $user) {
            return redirect()->route('login');
        }

        $data = $request->all();
        if ($request->hasFile('profile')) {
            $user->clearMediaCollection('profile');
            $user->addMediaFromRequest('profile')->toMediaCollection('profile');
        }
        $user->update($data);

        return redirect()->route('AnnouncerProfile.index', compact('user'));
    }
}
