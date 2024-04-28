<!DOCTYPE html>
<html lang="en">
<head>
    @extends('includes.head')
</head>
<body>
    <div class="max-w-md mx-auto mt-24">
        <form class="p-4" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold mb-2">{{ __('E-Mail Address') }}</label>
                <input type="email" id="email" name="email" class="w-full py-2 px-3 border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-blue-500" value="{{ $email ?? old('email') }}">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold mb-2">{{ __('Password') }}</label>
                <input type="password" id="password" name="password" class="w-full py-2 px-3 border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-blue-500" placeholder="Enter your password">
            </div>

            <div class="mb-4">
                <label for="password-confirm" class="block text-gray-700 font-bold mb-2">{{ __('Confirm Password') }}</label>
                <input type="password" id="password" name="password_confirmation" class="w-full py-2 px-3 border border-gray-400 rounded-md shadow-sm focus:outline-none focus:border-blue-500" placeholder="Enter your password">
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800 transition duration-150 ease-in-out">{{ __('Reset Password') }}</button>
        </form>
    </div>
</body>
</html>
