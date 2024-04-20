<!DOCTYPE html>
<html lang="zxx">

{{--  @extends('includes.head')  --}}

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car-Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    {{--  @extends('includes.head')  --}}

</head>

<body class="bg-gray-100">
    <!-- Navigation -->
    <x-navbar />

    {{--  <section class="flex flex-col justify-center justify-content-around pt-40">
            <div class="flex flex-row justify-evenly ">

                <div class="rounded-lg overflow-hidden">
                        <img class="w-[70%] h-auto border rounded-lg shadow-lg" src="{{ $announcement->getFirstMediaUrl('images') }}" alt="Car Images">
                </div>
                 <div class="flex flex-wrap w-50 gap-2 overflow-x-auto justify-center  border mt-4">
                        @foreach ($announcement->getMedia('images') as $image)
                        <img class="w-44 h-40 object-cover rounded-lg shadow-lg" src="{{ $image->getUrl() }}"alt="Car Image">
                        @endforeach
                </div>

            </div>

            <div class="flex flex-col h-full justify-between">
                <div>
                    <h2 class="text-2xl font-semibold mb-2 text-gray-800">{{ $cars->model }}</h2>
                    <div class="flex flex-col space-y-4">
                        <div class="flex flex-wrap gap-8">
                            <div>
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Price:</span>
                                <span
                                    class="text-xl text-gray-600 dark:text-gray-700">${{ $cars->announcement->price }}</span>
                            </div>
                            <div>
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Year:</span>
                                <span class="text-xl text-gray-600 dark:text-gray-700">{{ $cars->year }}</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Availability:</span>
                            <span class="text-xl text-gray-600 dark:text-gray-700 bg-green-300 rounded-lg p-1">
                                {{ $cars->announcement->situation }}
                            </span>
                        </div>
                        <div class="flex flex-wrap gap-8">
                            <div>
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Color:</span>
                                <span class="text-xl text-gray-600 dark:text-gray-700">{{ $cars->color }}</span>
                            </div>
                            <div>
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">City:</span>
                                <span
                                    class="text-xl text-gray-600 dark:text-gray-700 rounded-lg p-1">{{ $cars->announcement->city }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Contact Info:</span>
                    @if ($cars->announcement->type == 'rentel')
                        <button id="openModal" class="btn-reserve">Reserve Now <i
                                class="fa-solid fa-car-side ml-3"></i></button>
                    @else
                        <button id="">
                            <a href="" class="btn-call">Call The Owner <i
                                    class="fa-solid fa-car-side ml-3"></i></a>
                        </button>
                    @endif
                    <a href="" class="btn-message">Send Message <i class="fa-solid fa-car-side ml-3"></i></a>
                </div>
            </div>

        </div>

    </section>  --}}
    <section class="flex flex-col justify-center pt-40 bg-white">
        <div class="flex flex-col justify-evenly items-center">

            <div class="flex flex-row justify-evenly items-top">
                <div class="w-[50%]">
                    <img class="w-[100%] h-auto border rounded-lg shadow-lg shadow-lg transition-transform transform hover:scale-105"
                        src="{{ $announcement->getFirstMediaUrl('images') }}" alt="Car Images">
                </div>
                <div class="flex flex-col h-full justify-between">
                    <div>
                        <h2 class="text-2xl font-semibold mb-2 text-gray-800">{{ $cars->model }}</h2>
                        <div class="flex flex-col space-y-4">
                            <div class="flex flex-wrap gap-8">
                                <div>
                                    <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Price:</span>
                                    <span
                                        class="text-xl text-gray-600 dark:text-gray-700">${{ $cars->announcement->price }}</span>
                                </div>
                                <div>
                                    <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Year:</span>
                                    <span class="text-xl text-gray-600 dark:text-gray-700">{{ $cars->year }}</span>
                                </div>
                            </div>
                            <div>
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Availability:</span>
                                <span class="text-xl text-gray-600 dark:text-gray-700 bg-green-300 rounded-lg p-1">
                                    {{ $cars->announcement->situation }}
                                </span>
                            </div>
                            <div class="flex flex-wrap gap-8">
                                <div>
                                    <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Color:</span>
                                    <span class="text-xl text-gray-600 dark:text-gray-700">{{ $cars->color }}</span>
                                </div>
                                <div>
                                    <span class="text-xl font-bold text-gray-700 dark:text-gray-700">City:</span>
                                    <span
                                        class="text-xl text-gray-600 dark:text-gray-700 rounded-lg p-1">{{ $cars->announcement->city }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Contact Info:</span>
                        @if ($cars->announcement->type == 'rentel')
                            <button id="openModal" class="btn-reserve">Reserve Now <i
                                    class="fa-solid fa-car-side ml-3"></i></button>
                        @else
                            <button id="">
                                <a href="" class="btn-call">Call The Owner <i
                                        class="fa-solid fa-car-side ml-3"></i></a>
                            </button>
                        @endif
                        <a href="" class="btn-message">Send Message <i class="fa-solid fa-car-side ml-3"></i></a>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap w-50 gap-2x justify-center mt-4">
                @foreach ($announcement->getMedia('images') as $image)
                    <img class="w-44 h-40 object-cover rounded-lg shadow-lg transition-transform transform hover:scale-105"
                        src="{{ $image->getUrl() }}"alt="Car Image">
                @endforeach
            </div>

        </div>
    </section>
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
        <div
            class="flex flex-wrap justify-center mx-auto pt-10 bg-white rounded-lg shadow-lg lg:w-100 md:w-4/6 xl:shadow-small-blue">
            <!-- Add your car details here -->
        </div>
    </div>
    </div>
    </header>

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
                            <div class="label-date bg-gray-100 Text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">
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

    <div id="modal" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
        <!-- Modal content -->
        <div class="bg-white p-8 rounded-lg w-[50%]">
            <!-- Close button -->
            <button id="closeModal"
                class="absolute top-0 right-0 p-2 text-gray-600 hover:text-gray-900 focus:outline-none">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>

            <!-- Form -->
            <form id="bookingForm" action="{{ route('reservations.store') }}" method="POST" class="space-y-4">
                @csrf
                @method('POST')
                <!-- Form fields -->
                <div class="flex flex-col gap-4">
                    <div class="flex flex-row gap-3">
                        <div class="flex flex-col gap-4">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Name" class="input">
                        </div>

                        <div class="flex flex-col gap-4">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" placeholder="Email" class="input">
                        </div>
                    </div>

                    <div class="flex flex-row gap-3">
                        <div class="flex flex-col gap-4">
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" id="phone" placeholder="Phone" class="input">
                        </div>

                        <div class="flex flex-col gap-4">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" placeholder="Address"
                                class="input">
                        </div>
                    </div>

                    <div class="flex flex-row gap-3">
                        <div class="flex flex-col gap-4">
                            <label for="identification_card">Identification Card</label>
                            <input type="text" name="identification_card" id="identification_card"
                                placeholder="Identification Card (HH456798)" class="input">
                        </div>
                    </div>

                    <div class="flex flex-row gap-3">
                        <div class="flex flex-col gap-4">
                            <label for="licence">Licence</label>
                            <input type="text" name="licence" id="licence" placeholder="Licence (44/444444)"
                                class="input">
                        </div>
                        <div class="flex flex-col gap-4">
                            <label for="licenceDate">Licence Date</label>
                            <input type="date" name="licenceDate" id="licenceDate" placeholder="Licence Date"
                                class="input">
                        </div>
                    </div>

                    <div class="flex flex-row gap-3">
                        <div class="flex flex-col gap-4">
                            <label for="pickupDate">Pickup Date</label>
                            <input type="date" name="pickupDate" id="pickupDate" placeholder="Pickup Date"
                                class="input">
                        </div>
                        <div class="flex flex-col gap-4">
                            <label for="dropofDate">Drop-off Date</label>
                            <input type="date" name="dropofDate" id="dropofDate" placeholder="Drop-off Date"
                                class="input">
                        </div>
                    </div>

                    <div class="flex flex-row gap-3">
                        <div class="flex flex-col gap-4">
                            <label for="dropofLocation">Drop-off Location</label>
                            <input type="text" name="dropofLocation" id="dropofLocation"
                                placeholder="Drop-off Location" class="input">
                        </div>
                        <div class="flex flex-col gap-4">
                            <label for="pickupLocation">Pickup Location</label>
                            <input type="text" name="pickupLocation" id="pickupLocation"
                                placeholder="Pickup Location" class="input">
                        </div>
                    </div>
                    <div>
                        <input type="hidden" name="announcement_id" value="{{ $announcement->id }}">
                    </div>

                    <!-- Submit button -->
                    <button type="submit"
                        class="btn bg-blue-500 text-white w-full py-2 rounded-lg hover:bg-blue-600">Submit</button>
            </form>
        </div>
    </div>
    <script>
        // Get modal and trigger button elements
        const modal = document.getElementById('modal');
        const openModalBtn = document.getElementById('openModal');
        const closeModalBtn = document.getElementById('closeModal');

        // Add event listener to open modal button
        openModalBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        // Add event listener to close modal button
        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        // Close modal when clicking outside the modal content
        window.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });

        // Handle form submission
    </script>
</body>

</html>
