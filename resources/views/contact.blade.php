<!DOCTYPE html>
<html lang="zxx">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

    <nav
        class="bg-white dark:bg-white-700 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-200">
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

    {{--  +++++++++++++++++++++++++++++++++ header-picture ======  --}}

    {{--  <header class="header mt-20">
        <div class="relative ">
            <div class="absolute inset-0 bg-gray-900 bg-opacity-75"></div>
            <img class="bg-gray-100 opacity-30 h-[35rem] w-[100%]" src="{{ URL::asset('img/imagesPFR/Audi3d.jpg') }}"
                alt="Car">
            <div class="col-lg-12 text-center absolute top-[43%] left-[43%]">
                <h1 class=" text-4xl text-gray-800 sm:text-5xl font-bold title-font mb-4">Contact Us</h1>

                <div class="breadcrumb__links">
                    <a href="{{ route('car.index') }}"><i class="fa fa-home font-bold text-xl"></i> Home > </a>
                    <span class="font-bold text-xl text-red-500"> Contact Us</span>
                </div>
            </div>
        </div>
    </header>  --}}

    <header class="header pt-[3rem]">
        <section class="bg-cover bg-center bg-no-repeat bg-opacity-50 relative mt-20" style="background-image: url('{{ URL::asset('img/imagesPFR/Audi3d.jpg') }}');">
            <div class="absolute inset-0 bg-gray-900 bg-opacity-75"></div>
            <div class="container mx-auto py-32 px-6 text-center relative">
                <h1 class="text-4xl sm:text-5xl font-bold text-white">Contact Us</h1>
                <div class="text-gray-300 text-xl mt-4">
                    <a href="{{ route('car.index') }}" class="hover:text-red-500">Home</a>
                    <span class="mx-2">&rsaquo;</span>
                    <span class="text-red-500">Contact Us</span>
                </div>
            </div>
        </section>
    </header>

    {{--  ======================================== contact section ==============  --}}

    <section class="contact spad mt-20">
        <div class="max-w-screen-lg mx-auto p-5">
            <div class="grid grid-cols-1 md:grid-cols-12 border">
                <div class="bg-gray-900 md:col-span-4 p-10 text-white">
                    <p class="mt-4 text-sm leading-7 font-regular uppercase">
                        Contact
                    </p>
                    <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight">
                        Get In <span class="text-indigo-600">Touch</span>
                    </h3>
                    <p class="mt-4 leading-7 text-gray-200">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industrys standard dummy text ever since the 1500s.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industrys standard dummy text ever since the 1500s.
                    </p>

                    <div class="flex items-center mt-5">
                        <span class="text-sm">+93 749 99 65 50</span>
                    </div>
                    <div class="flex items-center mt-5">
                        <span class="text-sm">24/7</span>
                    </div>

                </div>
                <form class="md:col-span-8 p-10">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name">
                                First Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" type="text" placeholder="Jane">
                            <p class="text-red-500 text-xs italic hidden">Please fill out this field.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Last Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white "
                                id="grid-last-name" type="text" placeholder="Doe">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Email Address
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-email" type="email" placeholder="********@*****.**">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Your Message
                            </label>
                            <textarea rows="10"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                        </div>
                        <div class="flex justify-between w-full px-3">
                            <button
                                class="shadow bg-indigo-600 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded"
                                type="submit">
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{--  =========================================== footer ==================  --}}
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="bg-gray-900">
            <div class="max-w-screen-lg py-10 px-4 sm:px-6 text-gray-100 sm:flex justify-between mx-auto">
                <div class="p-5 sm:w-2/12 border-r">
                    <div class="text-sm uppercase text-indigo-600 font-bold">Menu</div>
                    <ul>
                        <li class="my-2">
                            <a class="hover:text-indigo-600" href="#">Home</a>
                        </li>
                        <li class="my-2">
                            <a class="hover:text-indigo-600" href="#">Services</a>
                        </li>
                        <li class="my-2">
                            <a class="hover:text-indigo-600" href="#">Products</a>
                        </li>
                        <li class="my-2">
                            <a class="hover:text-indigo-600" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
                <div class="p-5 sm:w-7/12 border-r text-center">
                    <h3 class="font-bold text-2xl text-gray-100 mb-4">TA-AUTO</h3>
                    <p class="text-gray-100 text-sm mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.</p>
                </div>
                <div class="p-5 sm:w-3/12">
                    <div class="text-sm uppercase text-gray-100 font-bold">Contact Us</div>
                    <ul>
                        <li class="my-2">
                            <a class="hover:text-gray-100" href="#">contact@company.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex py-5 m-auto text-gray-100 text-sm flex-col items-center border-t max-w-screen-xl">
                <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                    <a href="#" class="w-6 mx-1">

                    </a>
                    <a href="#" class="w-6 mx-1">

                    </a>
                    <a href="#" class="w-6 mx-1">

                    </a>
                    <a href="#" class="w-6 mx-1">

                    </a>
                    <a href="#" class="w-6 mx-1">

                    </a>
                </div>
                <div class="my-5">© Copyright 2023. All Rights Reserved.</div>
            </div>
        </div>
    </footer>

    </body>
</html>
