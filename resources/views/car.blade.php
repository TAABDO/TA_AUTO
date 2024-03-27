<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title> Home </title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;display=swap" rel="stylesheet">

</head>

<body>
        <nav class="bg-white dark:bg-white-700 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-200">
            <nav class="bg-gray-600 border-gray-200 dark:bg-gray-800">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                    <div class="flex items-center space-x-6 rtl:space-x-reverse">
                        <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline">(555)
                            412-1234</a>
                        <a href="#"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                        bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                        focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                        dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Login</a>
                    </div>
                </div>

            </nav>
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-gray-600">TA-AUTO</span>
                </a>
                @auth
                    {{-- User Authenticated --}}
                    <div class="flex items-center md:order-2 space-x-3 gap-10 md:space-x-0 rtl:space-x-reverse">
                        <!-- Search Bar -->
                        {{--  <div class="relative">
                            <input type="text" placeholder="Search"
                                class="block w-64 py-2 px-4 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-gray-800 dark:text-white dark:placeholder-gray-500 dark:border-gray-600">
                            <button type="button"
                                class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500 focus:outline-none">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </button>
                        </div>  --}}
                        <!-- User Profile Dropdown -->
                        <div class="relative">
                            {{--  <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                                data-dropdown-placement="bottom">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                                    alt="user photo">
                            </button>  --}}
                            <!-- Dropdown menu -->
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="user-dropdown">
                                <!-- Dropdown Content -->
                            </div>
                        </div>
                        <!-- Mobile Menu Toggle -->
                        {{--  <button data-collapse-toggle="navbar-user" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100
                            focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="navbar-user" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>  --}}
                    </div>
                @else
                    {{-- User Not Authenticated --}}
                    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                        <!-- Authentication Links -->
                        <a href="{{ route('login') }}"><button type="button"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                            bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                            focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                            dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Login</button></a>
                        <a href="{{ route('register') }}"> <button type="button"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                            bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                            focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                            dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Register</button></a>
                        <!-- Mobile Menu Toggle -->
                        <button data-collapse-toggle="navbar-sticky" type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="navbar-sticky" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 1h15M1 7h15M1 13h15" />
                            </svg>
                        </button>
                    </div>
                @endauth

                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml-20"
                    id="navbar-cta">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                        <li>
                            <a href="{{ route('home') }}" class="block py-2 px-3 md:p-0 text-gray-700 rounded hover:bg-gray-100 "
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('car.index') }}"
                                class="block py-2 px-3 md:p-0 text-gray-700 rounded hover:bg-gray-100 ">Cars</a>
                        </li>
                        <li>
                            <a href="{{ route('Blog.Blog') }}"
                                class="block py-2 px-3 md:p-0 text-gray-700 rounded hover:bg-gray-100 ">blog</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 md:p-0 text-gray-700 rounded hover:bg-gray-100">Service
                                Micanique</a>
                        </li>
                        <li>
                            <a href="{{ route('contact.contact') }}"
                                class="block py-2 px-3 md:p-0 text-gray-700 rounded hover:bg-gray-100">Contact</a>
                        </li>
                    </ul>
                </div>
                {{-- Mobile Menu --}}
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                    id="navbar-sticky">
                    <!-- Mobile Menu Content -->

                </div>
            </div>
        </nav>
    {{--  ========================================================================================= header ===========================  --}}


<header class="header pt-[8rem]">
    <section class="bg-cover bg-center bg-no-repeat bg-opacity-50 relative h-[40%]" style="background-image: url('{{ URL::asset('img/imagesPFR/AudiR.jpg') }}');">
        <div class="absolute inset-0 bg-gray-900 bg-opacity-75"></div>
        <div class="container mx-auto py-32 px-6 text-center relative">
            <h1 class="text-4xl sm:text-5xl font-bold text-white">Cars Section</h1>
            <div class="text-gray-300 text-xl mt-4">
                <a href="{{ route('car.index') }}" class="hover:text-red-500">Home</a>
                <span class="mx-2">&rsaquo;</span>
                <span class="text-red-500">Cars</span>
            </div>
        </div>
    </section>
</header>

{{--  ++++++++++++++++++++++++++++++++++++++++++++++++++++++ Filter Section ========================  --}}

    {{--  <section class="w-full overflow-hidden rounded-bottom">  --}}
        {{--  <div class="w-full mx-auto shadow-lg">
            <!-- User Profile Image -->
            <div class="w-full mx-auto flex justify-center bg-blue-100 shadow-lg">  --}}
                {{--  <div class="tab-content bg-white bg-transparent h-75 w-full rounded-lg shadow-lg">
                    <div class="tab-pane flex flex-col gap-4 justify-center items-center" id="tabs-2" role="tabpanel">
                        <div class="hero__tab__form flex flex-col justify-center gap-10 p-4 h-[10rem] w-[70%] bg-gray-800 mb-20 shadow-lg">
                            <h2 class="text-xl text-black-50 font-semibold text-gray-200">Buy Your Dream Car </h2>

                            <form>
                                <div class="select-list mb-4 flex flex-wrap gap-3">
                                    <div class="select-list-item">
                                        <p class="text-gray-500">Select Year</p>
                                        <select class="w-full border rounded p-2 mb-2">
                                            <option data-display="">Select Year</option>
                                            <option class="text-gray-500" value="2020">2020</option>
                                            <option class="text-gray-500" value="2019">2019</option>
                                            <option class="text-gray-500" value="2018">2018</option>
                                            <option class="text-gray-500" value="2017">2017</option>
                                        </select>
                                    </div>
                                    <div class="select-list-item">
                                        <p class="text-gray-500">Select Brand</p>
                                        <select class="w-full border rounded p-2 mb-2">
                                            <option data-display=" ">Select Brand</option>
                                            <option class="text-gray-500"value="Acura">Acura</option>
                                            <option class="text-gray-500" value="Audi">Audi</option>
                                            <option class="text-gray-500" value="Bentley">Bentley</option>
                                            <option class="text-gray-500" value="BMW">BMW</option>
                                            <option class="text-gray-500" value="Bugatti">Bugatti</option>
                                        </select>
                                    </div>
                                    <div class="select-list-item">
                                        <p class="text-gray-500">Select Model</p>
                                        <select class="w-full border rounded p-2 mb-2">
                                            <option data-display=" ">Select Model</option>
                                            <option class="text-gray-500" value="Q3">Q3</option>
                                            <option class="text-gray-500" value="A4">A4</option>
                                            <option class="text-gray-500" value="AVENTADOR">AVENTADOR</option>
                                        </select>
                                    </div>
                                    <div class="select-list-item">
                                        <p class="text-gray-500">Price</p>
                                        <input type="text" class ="w-32 border rounded p-2 mb-2" name="price"
                                            id="price" value="" placeholder="8000 $">
                                    </div>
                                    <div class="select-list-item">
                                        <button type="submit"
                                            class="py-2.5 px-5  mt-6 text-sm font-medium text-gray-900 focus:outline-none
                                           bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                                           focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                                           dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                            Searching
                                        </button>
                                    </div>
                                </div>
                                <!-- Other form elements -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {{--  </section>  --}}

    <section class="w-full overflow-hidden mt-10">
                    <div class="tab-pane flex flex-col gap-4 justify-center items-center" id="tabs-2" role="tabpanel">
                        <div class="hero__tab__form flex flex-col justify-center gap-10 p-4 h-[10rem] w-[70%] bg-gray-800 mb-20 shadow-lg">
                            <h2 class="text-xl text-black-50 font-semibold text-gray-200">Buy Your Dream Car </h2>
                            <form>
                                <div class="select-list mb-4 flex flex-wrap gap-3">
                                    <div class="select-list-item">
                                        <p class="text-gray-500">Select Year</p>
                                        <select class="w-full border rounded p-2 mb-2">
                                            <option data-display="">Select Year</option>
                                            <option class="text-gray-500" value="2020">2020</option>
                                            <option class="text-gray-500" value="2019">2019</option>
                                            <option class="text-gray-500" value="2018">2018</option>
                                            <option class="text-gray-500" value="2017">2017</option>
                                        </select>
                                    </div>
                                    <div class="select-list-item">
                                        <p class="text-gray-500">Select Brand</p>
                                        <select class="w-full border rounded p-2 mb-2">
                                            <option data-display=" ">Select Brand</option>
                                            <option class="text-gray-500"value="Acura">Acura</option>
                                            <option class="text-gray-500" value="Audi">Audi</option>
                                            <option class="text-gray-500" value="Bentley">Bentley</option>
                                            <option class="text-gray-500" value="BMW">BMW</option>
                                            <option class="text-gray-500" value="Bugatti">Bugatti</option>
                                        </select>
                                    </div>
                                    <div class="select-list-item">
                                        <p class="text-gray-500">Select Model</p>
                                        <select class="w-full border rounded p-2 mb-2">
                                            <option data-display=" ">Select Model</option>
                                            <option class="text-gray-500" value="Q3">Q3</option>
                                            <option class="text-gray-500" value="A4">A4</option>
                                            <option class="text-gray-500" value="AVENTADOR">AVENTADOR</option>
                                        </select>
                                    </div>
                                    <div class="select-list-item">
                                        <p class="text-gray-500">Price</p>
                                        <input type="text" class ="w-32 border rounded p-2 mb-2" name="price"
                                            id="price" value="" placeholder="8000 $">
                                    </div>
                                    <div class="select-list-item">
                                        <button type="submit"
                                            class="py-2.5 px-5  mt-6 text-sm font-medium text-gray-900 focus:outline-none
                                           bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                                           focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                                           dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                            Searching
                                        </button>
                                    </div>
                                </div>
                                <!-- Other form elements -->
                            </form>
                        </div>
                    </div>
    </section>

        {{--  ===================================== cards =============  --}}

        <div class="flex flex-row gap-4 justify-center items-center">
            <!-- FullName -->
            <div class="col-span-1 mix">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="relative">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-2.jpg" class="w-full" alt="Car 1">
                        </div>
                        <span class="car-option sale absolute top-0 right-0 bg-red-500 text-white py-1 px-2 rounded-bl-lg">
                            For Sale
                        </span>
                    </div>
                    <div class="p-4">
                        <div class="label-date bg-gray-100 text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">
                            2023</div>
                        <h5 class="text-xl font-semibold mt-2"><a href="#"
                                class="text-gray-800 hover:text-red-500">Porsche Cayenne Turbo S</a></h5>
                        <ul class="text-gray-600 mt-2 flex flex-row justify-evenly">
                            <li><span>35,000</span> mi | </li>
                            <li>Auto | </li>
                            <li><span>700</span> hp |</li>
                        </ul>
                        <div class="car__item__price mt-4 p-2 bg-gray-100 border-top flex flex-row gap-5">
                            <h6 class="text-lg font-semibold bg-green-300 p-2 rounded-full shadow-lg">available
                            </h6>
                            <h6 class="text-lg font- p-2">$218<span class="text-sm">/Month</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 mix">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="relative">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-1.jpg" class="w-full" alt="Car 1">
                        </div>
                        <span
                            class="car-option sale absolute top-0 right-0 bg-red-500 text-white py-1 px-2 rounded-bl-lg">For
                            Sale</span>
                    </div>
                    <div class="p-4">
                        <div class="label-date bg-gray-100 Text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">
                            2017</div>
                        <h5 class="text-xl font-semibold mt-2"><a href="#"
                                class="text-gray-800 hover:text-red-500">Porsche Cayenne Turbo S</a></h5>
                        <ul class="text-gray-600 mt-2 flex flex-row justify-evenly">
                            <li><span>35,000</span> mi | </li>
                            <li>Auto | </li>
                            <li><span>700</span> hp |</li>
                        </ul>
                        <div class="car__item__price mt-4 p-2 bg-gray-100 border-top flex flex-row gap-5">
                            <h6 class="text-lg font-semibold bg-green-300 p-2 rounded-full shadow-lg">available
                            </h6>
                            <h6 class="text-lg font-semibold p-2">$218<span class="text-sm">/Month</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 mix">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="relative">
                        <div class="car__item__pic__slider">
                            <img src="img/cars/car-1.jpg" class="w-full" alt="Car 1">
                        </div>
                        <span
                            class="car-option sale absolute top-0 right-0 bg-blue-500 text-white py-1 px-2 rounded-bl-lg">For
                            Rente</span>
                    </div>
                    <div class="p-4">
                        <div class="label-date bg-gray-100 Text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">
                            2016</div>
                        <h5 class="text-xl font-semibold mt-2"><a href="#"
                                class="text-gray-800 hover:text-red-500">Porsche Cayenne Turbo S</a></h5>
                        <ul class="text-gray-600 mt-2 flex flex-row justify-evenly">
                            <li><span class="text-gray-900">35,000</span> mi | </li>
                            <li>Auto | </li>
                            <li><span>700</span> hp |</li>
                        </ul>
                        <div class="car__item__price mt-4 p-2 bg-gray-100 border-top flex flex-row gap-5">
                            <h6 class="text-lg font-semibold bg-green-300 p-2 rounded-full shadow-lg">available
                            </h6>
                            <h6 class="text-lg font-red-600 p-2">$218<span class="text-sm">/Month</span></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards -->

        </div>
        </div>
    </section>
    {{--  ========================================================================================= header ===========================  --}}


    {{--  <section class="car spad">  --}}

</body>

</html>
