<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        return view('admin.profile.profile', compact('user'));
    }

    public function Show($id)
    {
        $user = User::findOrFail($id);
        // $users = Auth::user();

        return view('admin.profile.update', compact('user'));
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
                //Redirect to login page or show an error message
                return redirect()->route('login');
           }
        // $data = $request->validate([

        //     'fullname' => 'sometimes|string|max:255',
        //     'email' => 'sometimes|string|email|max:255|unique:users,email,' . $user->id,
        //     'password' => 'sometimes|string|min:8|max:255',
        //     'address' => 'nullable|string|max:255',
        //     'phone' => 'nullable|string|max:20',
        //     'status' => 'sometimes|string|in:active,inactive,pending',
        //     'agence_id' => 'sometimes|integer|exists:agences,id',
        //     'profile' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg',
            
        // ]);

        $data = $request->all();
        if ($request->hasFile('profile')) {
            $user->clearMediaCollection('profile');
            $user->addMediaFromRequest('profile')->toMediaCollection('profile');
        }

        $user->update($data);

        return redirect()->route('profile.index', compact('user'));
    }
    
}
