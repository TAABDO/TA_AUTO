<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {

        return view('auth.register');

    }
    // ====================== register user ========================

    public function regesterUser(Request $request)
{
    $request->validate([
        'fullname' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
    ]);

    $user = new User();
    $user->fullname = $request->fullname;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $save = $user->save();

    if ($save) {
        $user->roles()->attach([3]);
        event(new Registered($user));

        return redirect()->route('login')->with('success', 'User created successfully');
    } else {
        return back()->with('fail', 'Something went wrong');
    }
}
    // =========== login user ===========

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                if ($user->roles()->exists() && $user->roles()->first()->name === 'Admin') {
                    return redirect()->route('Admin.index');
                } elseif ($user->roles()->exists() && $user->roles()->first()->name === 'Client') {
                    return redirect()->route('home');
                } elseif ($user->roles()->exists() && $user->roles()->first()->name === 'Announcer') {
                    return redirect()->route('seller');
                } else {
                    return back()->with('fail', 'No role found for this user');
                }
            } else {
                return back()->with('fail', 'Password is incorrect');
            }
        } else {
            return back()->with('fail', 'No user found for this email');
        }
    }

    public function logout()
    {
        if (session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect()->route('login');
        }
    }

















}

