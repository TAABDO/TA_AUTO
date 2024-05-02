

<nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-200">
        <div class="nav-top bg-gray-800 border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-evenly items-center py-2.5 px-5 me-2 mb-2 mx-auto max-w-screen-xl">
                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    <a href="" class="text-sm text-white dark:text-white hover:underline">
                        <i class="fa-regular fa-phone-rotary">(+212) 598712-1234</i>
                       </a>
                       <a href=""><i class="fa-brands fa-facebook fa-xl" style="color: #e46f6d;"></i></a>
                       <a href=""><i class="fa-brands fa-instagram fa-xl" style="color: #e46f6d;"></i></a>
                       <a href=""><i class="fa-brands fa-twitter fa-xl" style="color: #e46f6d;"></i></a>
                </div>
                <div>
                    <h3 id="timezone" class="text-bold text-white dark:text-white hover:underline">                           <i class="fa-regular fa-phone-rotary">(+212) 598712-1234</i>
                    </h3>
                    <script>
                        var time = new Date();
                        var hours = time.getHours();
                        var minutes = time.getMinutes();
                        var seconds = time.getSeconds();
                        var ampm = hours >= 12 ? 'PM' : 'AM';
                        hours = hours % 12;
                        hours = hours ? hours : 12;
                        hours = hours < 10 ? '0' + hours : hours;
                        minutes = minutes < 10 ? '0' + minutes : minutes;
                        seconds = seconds < 10 ? '0' + seconds : seconds;
                        var strTime = hours + ':' + minutes + ':' + seconds + ' ' + ampm;
                        document.getElementById('timezone').innerHTML = strTime;

                    </script>
                </div>
            </div>
        </div>

        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-3">
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img class="w-14 h-14 rounded-full" src="{{ asset('img/imagesPFR/ta-auto-high-resolution-logo.png') }}" alt="logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-gray-600">TA-AUTO</span>
            </a>
            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                @auth
                    <button type="button"
                        class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                        id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                        data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full border-7 hover:border-10"
                            src="{{ Auth::user()->getFirstMediaUrl('profile') }}" alt="user photo">
                    </button>
                @else
                <div class="flex flex-row-reverse gap-10">
                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                        <ul
                            class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:border-gray-700">
                            <li>
                                <a href="{{ route('home') }}"
                                    class="block py-2 px-3 text-gray-700 bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                    aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('announce.index') }}"
                                    class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Car</a>
                            </li>
                            <li>
                                <a href="{{ route('blogs') }}"
                                    class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('contact.contact') }}"
                                    class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <a href="{{ route('login') }}"><button type="button"
                                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
           bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
        focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
        dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Login</button>
                            </a>
                            <a href="{{ route('register') }}"> <button type="button"
                                    class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
         bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
        focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
        dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Register</button>
                            </a>
                    </div>
                </div>
                @endauth

                                             {{--  =========  --}}
                @auth
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">

                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->fullname }}</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        @if (Auth::user()->roles()->First()->name == 'Admin')
                            <li>
                                <a href="{{ route('Admin.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>
                        @elseif(Auth::user()->roles()->First()->name == 'Client')
                            <li>
                                <a href="{{ route('ClientProfile.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                            </li>
                        @elseif(Auth::user()->roles()->First()->name == 'Announcer')
                            <li>
                                <a href="{{ route('AnnouncerProfile.index') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">DashAnnouncer</a>
                            </li>
                        @endif
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <input type="submit"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 dark:text-gray-200 dark:hover:text-white"
                                    value="logout ">
                            </form>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="navbar-user" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-user" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:border-gray-700">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 px-3 text-gray-700 bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('announce.index') }}"
                            class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Car</a>
                    </li>
                    <li>
                        <a href="{{ route('blogs') }}"
                            class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('contact.contact') }}"
                            class="block py-2 px-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-gray-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        @endauth
    </nav>
