<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <title>Register</title>
</head>

<body class="h-screen bg-gray-200 dark:bg-gray-900 flex flex-col items-center justify-center">
    <div class="font-light text-4xl flex float-xl-left px-10 pb-10 font-bold text-red">
        <h2 class="text-white font-italic">TA-AUTO</h2>
    </div>
    <div
        class="w-full lg:w-3/4 flex rounded-lg"style="box-shadow: 4px 6px 6px 4px rgba(9, 9, 9, 0.2), 2px 2px 2px 0 rgba(250, 193, 193, 0.19) !important;">
        <div class="hidden lg:block lg:w-6/12 bg-cover rounded-l-lg bg-gray-200 opacity-60"
            style="background-image: url('{{ URL::asset('img/imagesPFR/login3.jpg') }}');">
            <div class="flex flex-col items-center justify-center pt-20">
                <h2 class="text-4xl text-gray-10 font-bold "> You Are One of US !</h2>
                <a class="mt-8 inline-flex items-center justify-center rounded-xl bg-blue-600 py-3 px-6 font-dm text-base font-medium text-white shadow-xl
                shadow-gray-300/75 transition-transform duration-200 ease-in-out hover:scale-[1.02]"
                    href="{{ route('login') }}">
                    LOGIN
                </a>
            </div>
        </div>
        <div class="w-full lg:w-6/12 bg-white dark:bg-gray-700 p-5 rounded-lg lg:rounded-l-none">
            <h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Create an Account!</h3>
            <form action="{{ route('regesterUser') }}" method="POST"
                class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">
                @csrf

                @if (Session::has('success'))
                    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                        <p>{{ Session::get('success') }}</p>
                    </div>
                @endif
                @if(Session::has('fail'))
                <div class="bg-red border-1-4 border-red-500 text-green-700 p-4" role="alert">
                    <p>{{ Session::get('fail') }}</p>
                </div>
                @endif
                <div class="mb-4 md:flex md:justify-between">

                    <div class="mb-4 md:mr-2 md:mb-0">
                        <label class="block mb-2 text-sm font-bold text-gray-800 font-bold dark:text-white" for="name">
                            Fullname
                        </label>
                        <input
                            class="w-full px-6 py-2 text-sm leading-tight text-gray-600 font-bold border rounded shadow"
                            id="fullname" name="fullname" type="text" value="{{ old('fullname') }}"
                            placeholder="fullname" />
                        <span class="text-xs italic text-red-500">
                            @error('fullname')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="md:ml-2">
                        <label class="block mb-2 text-sm font-bold text-gray-800 dark:text-white" for="email">
                            Email
                        </label>
                        <input
                            class="w-full px-6 py-2 mb-3 text-sm leading-tight text-gray-600 font-bold border rounded shadow "
                            id="email" name="email" type="email" value="{{ old('email') }}"
                            placeholder="Email" />
                        <span class="text-xs italic text-red-500">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="mb-4 md:flex md:justify-between">
                    <div class="mb-4 md:mr-2 md:mb-0">
                        <label class="block mb-2 text-sm font-bold text-gray-700 dark:text-white" for="password">
                            Password
                        </label>
                        <input
                            class="w-full px-6 py-2 mb-3 text-sm text-gray-600 font-bold border rounded shadow"
                            id="password" name="password" value="{{ old('password') }}" type="password"
                            placeholder="******************" />
                        <span class="text-xs italic text-red-500">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="mb-6 text-center">
                    <button
                        class="w-full px-4 py-2 font-bold text-white shadow-xl shadow-gray-900/75 bg-blue-500 rounded-lg
                        hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none
                        focus:shadow-outline"
                        type="submit">
                        Register Account
                    </button>
                </div>
                <hr class="mb-6 border-t" />
                <div class="text-center">
                    <a class="inline-block text-sm text-blue-500 dark:text-blue-500 align-baseline hover:text-blue-800"
                        href="#">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
