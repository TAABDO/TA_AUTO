<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body class="h-screen bg-gray-200 dark:bg-gray-900 flex flex-col items-center justify-center">
    <div class="font-light text-4xl flex float-xl-left px-10 pb-10 font-bold text-red">
        <h2 class="text-white font-italic">TA-AUTO</h2>
    </div>
    <div class="w-full lg:w-2/3 flex rounded-lg"
        style="box-shadow: 4px 6px 6px 4px rgba(9, 9, 9, 0.2), 2px 2px 2px 0 rgba(250, 193, 193, 0.19) !important;">
        <div class="w-full lg:w-6/12 bg-white dark:bg-gray-800 p-5 rounded-lg lg:rounded-r-none">
            <h3 class="py-4 text-2xl text-center text-gray-800 dark:text-white">Login!</h3>
            <form action="{{ route('loginUser') }}" method="POST"
                class="px-8 pt-6 pb-8 mb-4 bg-white dark:bg-gray-800 rounded">

                @csrf
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white" for="email">
                        Email
                    </label>
                    <input
                        class="w-full rounded-lg px-4 py-2 text-sm text-gray-800 dark:text-white bg-gray-200 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded focus:outline-none focus:border-blue-500"
                        id="email" name="email" type="email" placeholder="Email" />

                        <span class="text-xs italic text-red-500">
                            @error('email'){{ $message }}@enderror
                        </span>
                    </div>
                <div class="mb-6">
                    <label class="block mb-2 text-sm font-semibold text-gray-700 dark:text-white" for="password">
                        Password
                    </label>
                    <input
                        class="w-full rounded-lg px-4 py-2 text-sm text-gray-800 dark:text-white bg-gray-200 dark:bg-gray-800 border border-gray-300 dark:border-gray-600 rounded focus:outline-none focus:border-blue-500"
                        id="password" name="password" type="password" placeholder="******************" />
                    <span class="text-xs italic text-red-500">
                        @error('password'){{ $message }}@enderror
                    </span>
                </div>
                <div class="mb-6 text-center">
                    <button type="submit"
                        class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-lg hover:bg-blue-700 dark:bg-blue-700 dark:text-white dark:hover:bg-blue-900 focus:outline-none focus:shadow-outline shadow-xl shadow-gray-900/75">
                        Login
                    </button>
                </div>
                <hr class="mb-6 border-t" />
                <div class="text-center">
                    <a class="inline-block text-sm text-blue-500 dark:text-blue-500 align-baseline hover:text-blue-800"
                    href="{{route('password.forget')}}">
                        Forgot Password?
                    </a>
                </div>
   <div>


   </div>

            </form>
        </div>
        <div class="hidden lg:block lg:w-6/12 bg-cover rounded-r-lg bg-gray-900 opacity-65 flex items-center justify-center"
            style="background-image: url('{{ URL::asset('img/imagesPFR/pexels-leo-arslan-9392194.jpg') }}');">

            <div class="flex flex-col items-center justify-center pt-20">
                <h2 class="text-4xl text-gray-800 font-bold "> You Wana Be One of US !</h2>
                <a class="mt-8 inline-flex items-center justify-center rounded-xl bg-blue-600 py-3 px-6 font-dm text-base font-medium text-white shadow-xl
                shadow-gray-900/75 transition-transform duration-200 ease-in-out hover:scale-[1.02]"
                    href="{{ route('register') }}">
                    Regeter Now
                </a>
            </div>

        </div>
    </div>
</body>


</html>
