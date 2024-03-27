<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARS - Find Your Dream Car</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
        /* Add any custom styles here */
        .video-docker video {
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .video-docker::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: 1;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


    {{--  <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css">  --}}
</head>

<body class="bg-gray-100 font-sans">

    <!-- Navigation -->

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
                    <div class="relative">
                        <input type="text" placeholder="Search"
                            class="block w-64 py-2 px-4 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-gray-800 dark:text-white dark:placeholder-gray-500 dark:border-gray-600">
                        <button type="button"
                            class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500 focus:outline-none">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </div>
                    <!-- User Profile Dropdown -->
                    <div class="relative">
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                            data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                                alt="user photo">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="user-dropdown">
                            <!-- Dropdown Content -->
                        </div>
                    </div>
                    <!-- Mobile Menu Toggle -->
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

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml-20" id="navbar-cta">
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
                        <a href="{{ route('Blog.Blog') }}"
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
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <!-- Mobile Menu Content -->
            </div>
        </div>
    </nav>

    <section class="relative h-screen flex flex-row items-center justify-center text-center text-white rounded-lg">
        <div class="video-docker absolute top-0 left-0 w-full h-full overflow-hidden z-0 ">
            <video
                class="min-w-full min-h-full absolute object-cover top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
                src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerJoyrides.mp4"
                type="video/mp4" autoplay muted loop></video>
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-60"></div>
        </div>
        <div class="z-10 relative flex flex-row items-center justify-content-around gap-24">
            <div class="flex flex-col gap-10">
                <span class=""> FIND YOUR DREAM CAR </span>
                <h1 class="font-light text-6xl font-bold text-red">Porsche Cayenne S </h1>
                <h3 class="font-light text-3xl"> $399/Month </h3>
                <a href="#" title="Get quote now"
                    class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-gray-900 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                    role="button">Get it now
                </a>
            </div>

            <div class="col-lg-5">
                <div class="hero__tab">
                    <div class="nav nav-tabs flex flex-column " role="tablist">
                        <div class="nav-item">
                            <button type="button"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                            bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                            focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600
                            dark:hover:text-white dark:hover:bg-gray-700">Car
                                Rental</button>
                        </div>
                        <div class="nav-item">
                            <button type="button"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                            bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                            focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                            dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Buy
                                Car</button>
                        </div>
                    </div>
                    <div class="tab-content bg-white bg-transparent h-75 w-full rounded-lg">
                        {{--  <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="hero__tab__form p-4">
                                <h2 class="text-xl font-semibold mb-4">Find Your Dream Car</h2>
                                <form>
                                    <div class="select-list mb-4">
                                        <div class="select-list-item">
                                            <p>Select Year</p>
                                            <select class="w-full border rounded p-2">
                                                <option data-display=" ">Select Year</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                            </select>
                                        </div>
                                        <!-- Other select-list-items -->
                                    </div>
                                    <!-- Other form elements -->
                                    <button type="submit" class="site-btn bg-blue-500 text-white py-2 px-4 rounded">Searching</button>
                                </form>
                            </div>
                        </div>  --}}
                        <div class="tab-pane" id="tabs-2" role="tabpanel">
                            <div class="hero__tab__form p-4 h-auto w-100">
                                <h2 class="text-xl text-black-50 font-semibold mb-4 text-gray-800 mt-5">Buy Your Dream
                                    Car
                                </h2>
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
                                            <input type="text" class ="w-32 border rounded p-2 mb-2"
                                                name="price" id="price" value="" placeholder="8000 $">
                                        </div>
                                    </div>
                                    <!-- Other form elements -->
                                    <button type="submit"
                                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                            bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                            focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                            dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Searching</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--  <section class="hero spad set-bg" data-setbg="img/hero-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="hero__text">
                        <div class="hero__text__title">
                            <span>FIND YOUR DREAM CAR</span>
                            <h2>Porsche Cayenne S</h2>
                        </div>
                        <div class="hero__text__price">
                            <div class="car-model">Model 2019</div>
                            <h2>$399<span>/Month</span></h2>
                        </div>
                        <a href="#" class="primary-btn"><img src="img/wheel.png" alt> Test Drive</a>
                        <a href="#" class="primary-btn more-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Car
                                    Rental</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Buy Car</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="hero__tab__form">
                                    <h2>Find Your Dream Car</h2>
                                    <form>
                                        <div class="select-list">
                                            <div class="select-list-item">
                                                <p>Select Year</p>
                                                <select>
                                                    <option data-display=" ">Select Year</option>
                                                    <option value>2020</option>
                                                    <option value>2019</option>
                                                    <option value>2018</option>
                                                    <option value>2017</option>
                                                    <option value>2016</option>
                                                    <option value>2015</option>
                                                </select>
                                            </div>
                                            <div class="select-list-item">
                                                <p>Select Brand</p>
                                                <select>
                                                    <option data-display=" ">Select Brand</option>
                                                    <option value>Acura</option>
                                                    <option value>Audi</option>
                                                    <option value>Bentley</option>
                                                    <option value>BMW</option>
                                                    <option value>Bugatti</option>
                                                </select>
                                            </div>
                                            <div class="select-list-item">
                                                <p>Select Model</p>
                                                <select>
                                                    <option data-display=" ">Select Model</option>
                                                    <option value>Q3</option>
                                                    <option value>A4 </option>
                                                    <option value>AVENTADOR</option>
                                                </select>
                                            </div>
                                            <div class="select-list-item">
                                                <p>Select Mileage</p>
                                                <select>
                                                    <option data-display=" ">Select Mileage</option>
                                                    <option value>27</option>
                                                    <option value>25</option>
                                                    <option value>15</option>
                                                    <option value>10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="car-price">
                                            <p>Price Range:</p>
                                            <div class="price-range-wrap">
                                                <div class="price-range"></div>
                                                <div class="range-slider">
                                                    <div class="price-input">
                                                        <input type="text" id="amount">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="site-btn">Searching</button>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="hero__tab__form">
                                    <h2>Buy Your Dream Car</h2>
                                    <form>
                                        <div class="select-list">
                                            <div class="select-list-item">
                                                <p>Select Year</p>
                                                <select>
                                                    <option data-display=" ">Select Year</option>
                                                    <option value>2020</option>
                                                    <option value>2019</option>
                                                    <option value>2018</option>
                                                    <option value>2017</option>
                                                    <option value>2016</option>
                                                    <option value>2015</option>
                                                </select>
                                            </div>
                                            <div class="select-list-item">
                                                <p>Select Brand</p>
                                                <select>
                                                    <option data-display=" ">Select Brand</option>
                                                    <option value>Acura</option>
                                                    <option value>Audi</option>
                                                    <option value>Bentley</option>
                                                    <<option value>BMW</option>
                                                        <option value>Bugatti</option>
                                                </select>
                                            </div>
                                            <div class="select-list-item">
                                                <p>Select Model</p>
                                                <select>
                                                    <option data-display=" ">Select Model</option>
                                                    <option value>Q3</option>
                                                    <option value>A4 </option>
                                                    <option value>AVENTADOR</option>
                                                </select>
                                            </div>
                                            <div class="select-list-item">
                                                <p>Select Mileage</p>
                                                <select>
                                                    <option data-display=" ">Select Mileage</option>
                                                    <option value>27</option>
                                                    <option value>25</option>
                                                    <option value>15</option>
                                                    <option value>10</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="car-price">
                                            <p>Price Range:</p>
                                            <div class="price-range-wrap">
                                                <div class="price-range"></div>
                                                <div class="range-slider">
                                                    <div class="price-input">
                                                        <input type="text" id="amount">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="site-btn">Searching</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}
    {{--  =====================  services ========= --}}


    <section id="features" class="relative block px-6 py-10 pt-5 md:py-20 md:px-10 border-t border-b border-neutral-200">

        <div class="relative mx-auto max-w-5xl text-center">
            <span class="text-red-400 my-3 flex items-center justify-center font-medium uppercase tracking-wider">
                Why choose us
            </span>
            <h2 class="block w-full font-bold text-3xl text-gray-700 sm:text-4xl">
                What We Offers
            </h2>
            <p class="mx-auto my-4 w-full max-w-xl text-center font-medium text-gray-400">
                Our templates allow for maximum customization. No technical skills required our intuitive design tools
                let you get the job done easily.
            </p>
        </div>

        <div class="relative mx-auto max-w-5xl z-10 grid grid-cols-1 gap-10 pt-14 sm:grid-cols-2 lg:grid-cols-3">
            <div class="rounded-md border border-neutral-300 bg-gray-200 p-8 text-center shadow-md transform transition-transform hover:-translate-y-2 hover:bg-white hover:text-gray-900">
                <div class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                    <img src="img/services/services-1.png" alt>
                </div>
                <h5 class="font-bold">Rental A Cars</h5>
                <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">
                    Consectetur adipiscing elit incididunt ut labore et dolore magna aliqua. Risus commodo
                    viverra maecenas.</p>
                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
            </div>

            <div class="rounded-md border border-neutral-300 bg-gray-200 p-8 text-center shadow-md transform transition-transform hover:-translate-y-2 hover:bg-white hover:text-gray-900">
                <div class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                    <img src="img/services/services-3.png" alt>
                </div>
                <h5 class="font-bold">Car Maintenance</h5>
                <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-500">We build our templates for
                    speed in mind, for super-fast load times so your customers never waver.
                </p>
                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
            </div>

            <div class="rounded-md border border-neutral-300 bg-gray-200 p-8 text-center shadow-md transform transition-transform hover:-translate-y-2 hover:bg-white hover:text-gray-900">
                <div class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                    <img src="img/services/services-2.png" alt>
                </div>
                <h5 class="font-bold">Buying A Cars</h5>
                <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">
                    Everything you need to succeed
                    and launch your landing page, right out of the box. No need to install anything else.
                </p>
                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>

    </section>

    {{--  ============================================== feature ======  --}}

    <section class="flex flex-col bg-gray-200 md:flex-row justify-evenly items-center p-20">

        <!-- Feature Text -->
        <div class="w-full md:w-1/2 mb-8 pl-10 pr-10  flex flex-col gap-5 md:mb-0">
            <div class="feature__text">
                <span class="text-red-400 my-3 block font-medium uppercase tracking-wider">
                    Our Feature
                </span>
                <h2 class="font-bold text-3xl text-gray-700 sm:text-4xl">
                    We Are a Trusted <br> Name In Auto
                </h2>
            </div>
            <div class="feature__text__desc mt-4 text-gray-400">
                <p class="max-w-md">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,do eiusmod
                    <br>tempor incididunt ut labore et Lorem ipsum dolor sit amet,
                    <br>consectetur adipiscing elit, sed do eiusmod tempor
                    <br>incididunt ut labore et dolore magna aliqua. Quis ipsum
                    <br>suspendisse ultrices gravida . Risus commodo viverra
                    <br>maecenas accumsan lacus vel facilisis.
                    <br>
                </p>
            </div>
            <div class="feature__text__btn mt-4">
                <a href="#" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">About Us</a>

                <a href="#" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Our Partners</a>
            </div>
        </div>

        <!-- Car Image -->
        <div class="w-full md:w-1/2 mb-8 md:mb-0">
            <img src="{{ URL::asset('img/feature/car.png') }}" alt="car.png">
        </div>

        <!-- Feature Items -->
        <div class="flex flex-col md:w-1/3 md:flex-row gap-20">
            <div class="flex flex-col gap-6">
                <div class="feature__item mb-4">
                    <div class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                        <img src="{{ URL::asset('img/feature/feature-1.png') }}" alt="Engine Icon">
                    </div>
                    <h6 class="text-gray-700">Engine</h6>
                </div>
                <div class="feature__item mb-4">
                    <div class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                        <img src="{{ URL::asset('img/feature/feature-2.png') }}" alt="Turbo Icon">
                    </div>
                    <h6 class="text-gray-700">Turbo</h6>
                </div>
                <div class="feature__item mb-4">
                    <div class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                        <img src="{{ URL::asset('img/feature/feature-3.png') }}" alt="Cooling Icon">
                    </div>
                    <h6 class="text-gray-700">Cooling</h6>
                </div>
                <div class="feature__item mb-4">
                    <div class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                        <img src="{{ URL::asset('img/feature/feature-4.png') }}" alt="Suspension Icon">
                    </div>
                    <h6 class="text-gray-700">Suspension</h6>
                </div>
            </div>

            <div class="flex flex-col gap-6">
                <div class="feature__item mb-4">
                    <div class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                        <img src="{{ URL::asset('img/feature/feature-5.png') }}" alt="Electrical Icon">
                    </div>
                    <h6 class="text-gray-700">Electrical</h6>
                </div>
                <div class="feature__item mb-4 flex flex-col justify-center">
                    <div class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                        <img src="{{ URL::asset('img/feature/feature-6.png') }}" alt="Brakes Icon">
                    </div>
                    <h6 class="text-gray-700">Brakes</h6>
                </div>
                <div class="feature__item mb-4">
                    <div class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                        <img src="{{ URL::asset('img/feature/feature-6.png') }}" alt="Brakes Icon">
                    </div>
                    <h6 class="text-gray-700">Brakes</h6>
                </div>
            </div>
        </div>
    </section>
{{--  ======================================= cars ===========  --}}

<section class="car spad bg-gray-100 py-8 pt-20">
    <div class="container mx-auto">
        <div class="text-center">
            <div class="section-title">
                <span class="text-red-500 font-semibold">Best Vehicle Offers</span>
                <h2 class="text-3xl font-bold text-gray-800">Best Vehicle Offers</h2>
            </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 pt-10">
            <div class="col-span-1 mix">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="relative">
                        <div class="car__item__pic__slider owl-carousel">
                            <img src="img/cars/car-1.jpg" class="w-full" alt="Car 1">
                        </div>
                        <span class="car-option sale absolute top-0 right-0 bg-red-500 text-white py-1 px-2 rounded-bl-lg">For Sale</span>
                    </div>
                    <div class="p-4">
                        <div class="label-date bg-gray-100 text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">2023</div>
                        <h5 class="text-xl font-semibold mt-2"><a href="#" class="text-gray-800 hover:text-red-500">Porsche Cayenne Turbo S</a></h5>
                        <ul class="text-gray-600 mt-2 flex flex-row justify-evenly">
                            <li><span>35,000</span> mi  | </li>
                            <li>Auto | </li>
                            <li><span>700</span> hp |</li>
                        </ul>
                        <div class="car__item__price mt-4 p-2 bg-gray-100 border-top flex flex-row gap-5">
                            <h6 class="text-lg font-semibold bg-green-300 p-2 rounded-full shadow-lg">available</h6>
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
                        <span class="car-option sale absolute top-0 right-0 bg-red-500 text-white py-1 px-2 rounded-bl-lg">For Sale</span>
                    </div>
                    <div class="p-4">
                        <div class="label-date bg-gray-100 Text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">2017</div>
                        <h5 class="text-xl font-semibold mt-2"><a href="#" class="text-gray-800 hover:text-red-500">Porsche Cayenne Turbo S</a></h5>
                        <ul class="text-gray-600 mt-2 flex flex-row justify-evenly">
                            <li><span>35,000</span> mi  | </li>
                            <li>Auto | </li>
                            <li><span>700</span> hp |</li>
                        </ul>
                        <div class="car__item__price mt-4 p-2 bg-gray-100 border-top flex flex-row gap-5">
                            <h6 class="text-lg font-semibold bg-green-300 p-2 rounded-full shadow-lg">available</h6>
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
                        <span class="car-option sale absolute top-0 right-0 bg-blue-500 text-white py-1 px-2 rounded-bl-lg">For Rente</span>
                    </div>
                    <div class="p-4">
                        <div class="label-date bg-gray-100 Text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">2016</div>
                        <h5 class="text-xl font-semibold mt-2"><a href="#" class="text-gray-800 hover:text-red-500">Porsche Cayenne Turbo S</a></h5>
                        <ul class="text-gray-600 mt-2 flex flex-row justify-evenly">
                            <li><span class="text-gray-900">35,000</span> mi  | </li>
                            <li>Auto | </li>
                            <li><span>700</span> hp |</li>
                        </ul>
                        <div class="car__item__price mt-4 p-2 bg-gray-100 border-top flex flex-row gap-5">
                            <h6 class="text-lg font-semibold bg-green-300 p-2 rounded-full shadow-lg">available</h6>
                            <h6 class="text-lg font-red-600 p-2">$218<span class="text-sm">/Month</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- More car items -->
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4">
            <div class="flex justify-between">
                <p class="text-gray-400">&copy; 2024 CARS. All rights reserved.</p>
                <ul class="flex space-x-4">
                    <li><a href="#" class="text-gray-400 hover:text-gray-200">Terms of Service</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-gray-200">Privacy Policy</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-gray-200">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <!-- Js Plugins -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>
