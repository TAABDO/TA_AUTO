<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use app\Http\Controllers\ForgotPasswordController;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class ForgetPasswordController extends Controller
{
    // Show the form to request a password reset link
    public function index()
    {
        return view('auth.forgetPassword');
    }

    // Handle the request to send a password reset link
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => ($status)])
            : back()->withErrors(['email' => ($status)]);
    }

    // Show the form to reset the password
    public function showResetForm(Request $request, $token)
    {
        return view('auth.resetPassword', ['token' => $token, 'email' => $request->email]);
    }

    // Handle the password reset request
    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->save();
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with(['status' => ($status)])
            : back()->withErrors(['email' => [($status)]]);
    }
}
