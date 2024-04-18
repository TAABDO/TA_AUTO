<!DOCTYPE html>
<html lang="zxx">

{{--  @extends('includes.head')  --}}

<head>
    {{--  <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car-Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;display=swap" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @extends('includes.head')

</head>

<body class="bg-gray-100">

    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Navigation -->
    <x-navbar />

    <main>
        <section class="flex flex-col justify-center rounded-lg shadow-lg gap-10 pt-40">
            <div class="flex flex-wrap justify-center gap-1">
                <!-- Car Images -->
                <div class="bg-gray-100 dark:bg-white rounded-lg shadow-lg py-8">
                    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex flex-col md:flex-row ">
                            <div class="w-[55em] h-[36em] flex flex-col rounded-lg shadow-lg bg-white lg:w-3/4 lg:p-4">
                                <div class="rounded-lg overflow-hidden">
                                    <img class="w-[50em] h-[25em] border rounded-lg shadow-lg"
                                        src="{{ $announcement->getFirstMediaUrl('images') }}" alt="images">
                                    <div class="flex gap-3 overflow-x-auto justify-center rounded-lg shadow-lg border">
                                        @foreach ($announcement->getMedia('images') as $image)
                                            <img class="w-36 h-32 object-cover rounded-lg shadow-lg"
                                                src="{{ $image->getUrl() }}" alt="Image">
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <div class="md:flex-1 pt-5 pl-2 ">
                                <h2 class="text-2xl font-semibold mb-2">{{ $cars->model }}</h2>
                                <div class="flex flex-col mb-4">
                                    <div class=" flex flex-wrap gap-8 mr-4 mb-4">
                                        <div>
                                            <span
                                                class="text-xl font-bold text-gray-700 dark:text-gray-700">Price:</span>
                                            <span
                                                class="text-xl text-gray-600 dark:text-gray-700">{{ $cars->announcement->price }}<b>$</b>
                                            </span>
                                        </div>
                                        <div>
                                            <span
                                                class="text-xl font-bold text-gray-700 dark:text-gray-700">Year:</span>
                                            <span class="text-xl text-gray-600 dark:text-gray-700">{{ $cars->year }}
                                            </span>
                                        </div>

                                    </div>
                                    <div>
                                        <span
                                            class="text-xl font-bold text-gray-700 dark:text-gray-700">Availability:</span>
                                        <span
                                            class="text-xl text-gray-600 dark:text-gray-700 bg-green-300  rounded-lg p-1">
                                            {{ $cars->announcement->situation }}</span>
                                    </div>
                                </div>
                                <div class="flex flex-wrap gap-8 mr-4 mb-4">
                                    <div class="mb-4">
                                        <span class="text-xl font-bold text-gray-700 dark:text-gray-700"> Color:</span>
                                        <span
                                            class="text-xl text-gray-600 dark:text-gray-700">{{ $cars->color }}</span>
                                    </div>
                                    <div class="mb-4">
                                        <span class="text-xl font-bold text-gray-700 dark:text-gray-700">city:</span>
                                        <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Casa</span>
                                    </div>
                                </div>
                                <div>

                                    <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Contact
                                        Info:</span>
                                    @if ($cars->announcement->type == 'rentel')
                                    <button onclick="">
                                        <a href=""
                                            class="animate-bounce focus:animate-none hover:animate-none inline-flex text-md font-medium bg-indigo-900 mt-3 px-4 py-2 rounded-lg tracking-wide text-white">
                                            <span class="ml-2">Reserve Now <i class="fa-solid fa-car-side"></i></span>
                                        </a>
                                    </button>

                                    @else
                                    <button onclick="popup()">
                                        <a href=""
                                            class="animate-bounce focus:animate-none hover:animate-none inline-flex text-md font-medium bg-indigo-900 mt-3 px-4 py-2 rounded-lg tracking-wide text-white">
                                            <span class="ml-2">Call The Owner <i class="fa-solid fa-car-side"></i></span>
                                        </a>
                                    <button onclick="">
                                    @endif
                                    <a href=""
                                        class="animate-bounce focus:animate-none hover:animate-none inline-flex text-md font-medium bg-indigo-900 mt-3 px-4 py-2 rounded-lg tracking-wide text-white">
                                        <span class="ml-2">Send Message <i class="fa-solid fa-car-side"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Car Description -->

                    <div class="description bg-white p-6 rounded-lg shadow-md max-w">
                        <h2>
                            <span class="text-3xl font-bold text-gray-800 pl-14">Car Description : </span>
                        </h2>
                        <p class="text-gray-700 pl-14 p-10">{{ $cars->announcement->description }}</p>
                    </div>

                    <!-- Car Details -->
                    <div class="container flex-row justify-center bg-danger mx-auto mt-12">

                        <h2>
                            <span class="text-3xl font-bold text-gray-800 pl-20">Car Details : </span>
                        </h2>

                        <div class="flex flex-wrap justify-center mx-auto pt-10 bg-white rounded-lg shadow-lg lg:w-100 md:w-4/6 xl:shadow-small-blue">

                            <div class="flex flex-col justify-center p-5 w-1/2 text-center border lg:w-2/4">
                                <div>
                                    <img src="{{ URL::asset('img/.png') }}" class="h-16 w-16" alt="">
                                </div>
                                <div>
                                    <p class="pt-4 text-sm font-medium capitalize font-body text-re-900 lg:text-lg md:text-base md:pt-6">
                                        Fuel-Type : {{ $cars->fuel_type }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col justify-center p-5 w-1/2 text-center border lg:w-2/4">
                                <div>
                                    <img src="{{ URL::asset('img/feature/feature-2.png') }}" class="h-16 w-16" alt="">
                                </div>
                                <div>
                                    <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                                        Transmission : {{ $cars->transmission }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col justify-center p-5 w-1/2 text-center border lg:w-2/4">
                                <div>
                                    <img src="{{ URL::asset('img/feature/feature-3.png') }}" class="h-16 w-16" alt="">
                                    <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                                        Engine-Capacity : {{ $cars->engine_capacity }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col justify-center p-5 w-1/2 text-center border lg:w-2/4">
                                <div>
                                    <img src="{{ URL::asset('img/feature/feature-4.png') }}" class="h-16 w-16" alt="">
                                    <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                                        Current-Mileage : {{ $cars->km }} km
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col justify-center p-5 w-1/2 text-center border lg:w-2/4">
                                <div>
                                    <img src="{{ URL::asset('img/feature/feature-5.png') }}" class="h-16 w-16" alt="">
                                    <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                                        Current-Color : {{ $cars->color }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col justify-center p-5 w-1/2 text-center border lg:w-2/4">
                                <div>
                                    <img src="{{ URL::asset('img/feature/feature-6.png') }}" class="h-16 w-16" alt="">
                                </div>
                                <div>
                                    <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                                        Year-Model : {{ $cars->year }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col justify-center p-5 w-1/2 text-center border lg:w-2/4">
                                <div>
                                    <img src="{{ URL::asset('img/feature/feature-7.png') }}" class="h-16 w-16"
                                        alt="">
                                </div>
                                <div>
                                    <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                                        Car-Condition : {{ $cars->condition }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex flex-col justify-center p-5 w-1/2 text-center border lg:w-2/4">
                                <div>
                                    {{--  <img src="{{ URL::asset('img/feature/feature-8.png') }}" class="ml-10" alt="">  --}}
                                    <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                                        Car-Brand : {{ $cars->brand->name }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="car spad bg-gray-100 pt-[10em] flex flex-col justify-center">

            <div class="text-center">
                <div class="section-title">
                    <h2 class="text-3xl font-bold text-gray-800">Best Vehicle Offers</h2>
                </div>
            </div>
            <div class="flex flex-wrap justify-end sm:justify-center gap-10 pt-[5rem] pb-[5rem] ">
                @foreach ($findcars as $findcar)
                    <div class="w-full sm:w-auto md:w-auto lg:w-auto">
                        <div
                            class="bg-white rounded-lg overflow-hidden shadow-lg shadow-lg transition-transform transform hover:scale-105">
                            <div class="relative">
                                <div class="car__item__pic__slider owl-carousel">
                                    {{--  <img src="img/cars/car-1.jpg" class="w-full" alt="Car 1">  --}}
                                    <img src="{{ $findcar->announcement->getFirstMediaUrl('images') }}"
                                        class="rounded-t-lg w-full h-40" alt="Car 1">
                                </div>
                                <span
                                    class="car-option sale absolute top-0 right-0 bg-red-500 text-white py-1 px-2 rounded-bl-lg">
                                    For {{ $findcar->announcement->type }}
                                </span>
                            </div>
                            <div class="p-4">
                                <div
                                    class="label-date bg-gray-100 Text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">
                                    <span>
                                        {{ $findcar->year }}
                                    </span>

                                </div>
                                <h5 class="text-xl font-semibold mt-2"><a href="#"
                                        class="text-gray-800 hover:text-red-500"> {{ $findcar->model }}
                                    </a></h5>
                                <ul class="text-gray-600 mt-2 flex flex-row justify-evenly">
                                    <li><span>{{ $findcar->km }}</span> mi | </li>
                                    <li>{{ $findcar->transmission }} | </li>
                                    <li><span>{{ $findcar->engine_capacity }}</span> hp |</li>
                                </ul>
                            </div>
                            <div class="findcar__item__price mt-4 p-2 bg-gray-100 border-top flex flex-row gap-5">
                                <h6 class="text-lg font-semibold bg-green-300 p-2 rounded-full shadow-lg">
                                    {{ $findcar->announcement->situation }}
                                </h6>
                                <h6 class="text-lg font-semibold p-2">${{ $findcar->announcement->price }}<span
                                        class="text-sm">/Month</span>
                                </h6>
                            </div>
                            <div class="p-4">
                                <a href="{{ route('car.details', $findcar->id) }}"
                                    class="text-white bg-blue-700 w-10 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main>

    <footer class="footer bg-gradient-to-b from-gray-800 to-gray-900 text-white py-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
            <div class="footer__contact mb-8 md:mb-0">
                <h2 class="text-3xl mb-4">Contact Us Now!</h2>
                <div class="flex flex-col md:flex-row">
                    <div class="option__item mr-4 mb-4 md:mb-0"><i class="fa fa-phone"></i> (+12) 345 678 910</div>
                    <div class="option__item email"><i class="fa fa-envelope-o"></i> <a
                            href="mailto:info@example.com">info@example.com</a></div>
                </div>
            </div>
            <div class="footer__about mb-8 md:mb-0">
                <div class="footer__logo mb-4">
                    <img src="img/footer-logo.png" alt="Footer Logo">
                </div>
                <p class="mb-4">Any questions? Let us know in store at 625 Gloria Union, California, United Stated or
                    call us on (+1) 96 123 8888</p>
                <div class="footer__social">
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="google"><i class="fa fa-google"></i></a>
                    <a href="#" class="skype"><i class="fa fa-skype"></i></a>
                </div>
            </div>
            <div class="footer__links flex flex-col md:flex-row justify-between md:justify-start">
                <div class="footer__widget mr-8 mb-8 md:mb-0">
                    <h5 class="mb-4">Information</h5>
                    <ul>
                        <li><a href="#">Purchase</a></li>
                        <li><a href="#">Payment</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Return</a></li>
                    </ul>
                </div>
                <div class="footer__widget mb-8 md:mb-0">
                    <h5 class="mb-4">Vehicle Types</h5>
                    <ul>
                        <li><a href="#">Hatchback</a></li>
                        <li><a href="#">Sedan</a></li>
                        <li><a href="#">SUV</a></li>
                        <li><a href="#">Crossover</a></li>
                    </ul>
                </div>
                <div class="footer__widget">
                    <h5 class="mb-4">Top Brands</h5>
                    <ul>
                        <li><a href="#">Abarth</a></li>
                        <li><a href="#">Acura</a></li>
                        <li><a href="#">Alfa Romeo</a></li>
                        <li><a href="#">Audi</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">BMW</a></li>
                        <li><a href="#">Chevrolet</a></li>
                        <li><a href="#">Ferrari</a></li>
                        <li><a href="#">Honda</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container mx-auto mt-8">
            <p class="text-center">&copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> All rights reserved | This template is made with <i class="fa fa-heart"
                    aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank"
                    class="text-red-500">Colorlib</a>
            </p>
        </div>
    </footer>
</body>

</html>
