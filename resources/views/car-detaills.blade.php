<!DOCTYPE html>
<html lang="zxx">

<head>

    @extends('includes.head')
    <style>
        .room-thumbnail-slides {
            position: relative;
            z-index: 1;
        }
        .room-thumbnail-slides .carousel-indicators {
            position: relative;
            margin-bottom: 0;
        }

        .room-thumbnail-slides .carousel-indicators li {
            width: 140px;
            height: 70px;
        }

        .room-thumbnail-slides .carousel-inner .carousel-item {
            height: 450px;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .room-thumbnail-slides .carousel-indicators li {
                width: 140px;
                height: 60px;
            }
        }
        @media only screen and (max-width: 767px) {
            .room-thumbnail-slides .carousel-indicators li {
                width: 140px;
                height: 30px;
            }

            .room-thumbnail-slides .carousel-inner .carousel-item {
                height: 188px;
            }
        }
        </style>


</head>

<body class="bg-gray-100">
    <!-- Navigation -->
    <x-navbar />


    <section class="flex flex-col justify-center items-center pt-28 md:pt-40 bg-white">
        <div class="flex flex-col justify-evenly items-center px-4 md:px-0">
            <div class="room-thumbnail-slides w-full flex justify-center mb-50">
                <div id="room-thumbnail--slide" class="carousel slide mx-auto w-1/2" data-ride="carousel">
                    <div class="carousel-inner ">
                            <div>
                                <img src="{{ $announcement->getFirstMediaUrl('images') }}" class="block object-cover w-[100%]"
                                    alt="" />
                            </div>
                    </div>

                    <div class="carousel-indicators mt-4 flex w-full">
                        @foreach ($announcement->getMedia('images') as $image)
                            <span class="w-full h-[10%] mx-auto">
                                <img src="{{ $image->getUrl() }}" class="block object-cover" alt="" />
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>

            @session('success')
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ $value }}</span>
                </div>
            @endsession

            @session('error')
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Error!</strong>
                    <span class="block sm:inline">{{ $value }}</span>
                </div>
            @endsession

            <div class="p-4 flex flex-col item-center md:p-8 md:w-1/2 bg-gray-100 bg-white rounded-lg shadow-2xl overflow-hidden md:overflow-visible">
                <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-gray-800">{{ $announcement->car->model }}</h2>
                <div class="flex flex-col space-y-4">
                    <div class="flex flex-wrap items-center gap-4 md:gap-8">
                        <div>
                            <span class="text-lg md:text-xl font-bold text-gray-700">Price:</span>
                            <span class="text-lg md:text-xl text-gray-600">${{ $announcement->price }}</span>
                        </div>
                        <div>
                            <span class="text-lg md:text-xl font-bold text-gray-700">Model Year:</span>
                            <span class="text-lg md:text-xl text-gray-600">{{ $announcement->car->year }}</span>
                        </div>
                    </div>
                    <div>
                        <span class="text-lg md:text-xl font-bold text-gray-700">Availability:</span>
                        <span class="text-lg md:text-xl text-gray-600 bg-green-300 rounded-lg p-1">
                            {{ $announcement->situation }}
                        </span>
                    </div>
                    <div class="flex flex-wrap items-center gap-4 md:gap-8">
                        <div>
                            <span class="text-lg md:text-xl font-bold text-gray-700">Color:</span>
                            <span class="text-lg md:text-xl text-gray-600">{{ $announcement->car->color }}</span>
                        </div>
                        <div>
                            <span class="text-lg md:text-xl font-bold text-gray-700">City:</span>
                            <span
                                class="text-lg md:text-xl text-gray-600 rounded-lg p-1">{{ $announcement->city }}</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    @auth
                        <span class="text-lg font-bold text-gray-700">Contact Info:</span>
                        @if ($announcement->type == 'rentel')
                            <button id="openModal"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center mt-2 md:mt-4">
                                Reserve Now <i class="fa-solid fa-car-side ml-2"></i>
                            </button>
                        @else
                            <button id="" class="mt-2 md:mt-4">
                                <a href=""
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                    Call The Owner <i class="fa-solid fa-car-side ml-2"></i>
                                </a>
                            </button>
                        @endif
                        <a href=""
                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center mt-2 md:mt-4">
                            Send Message <i class="fa-solid fa-car-side ml-2"></i>
                        </a>
                    @endauth
                </div>
            </div>

        </div>
    </section>
    <!-- Car Description -->
    <div class="description bg-white p-6 rounded-lg shadow-md max-w">
        <h2>
            <span class="text-3xl font-bold text-gray-800 pl-14">Car Description : </span>
        </h2>
        <p class="text-gray-700 pl-14 p-10">{{ $announcement->description }}</p>
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
    <section class="car spad bg-gray-100 pt-[10em] flex flex-col justify-center">

        <div class="text-center">
            <div class="section-title">
                <h2 class="text-3xl font-bold text-gray-800">Best Vehicle Offers</h2>
            </div>
        </div>
        <div class="flex flex-wrap justify-end sm:justify-center gap-10 pt-[5rem] pb-[5rem] ">
            @foreach ($announcementcars as $announcementcar)
                <div class="w-full sm:w-auto md:w-auto lg:w-auto">
                    <div
                        class="bg-white rounded-lg overflow-hidden shadow-lg shadow-lg transition-transform transform hover:scale-105">
                        <div class="relative">
                            <div class="car__item__pic__slider owl-carousel">
                                {{--  <img src="img/cars/car-1.jpg" class="w-full" alt="Car 1">  --}}
                                <img src="{{ $announcementcar->getFirstMediaUrl('images') }}"
                                    class="rounded-t-lg w-full h-40" alt="Car 1">
                            </div>
                            <span
                                class="car-option sale absolute top-0 right-0 bg-red-500 text-white py-1 px-2 rounded-bl-lg">
                                For {{ $announcementcar->type }}
                            </span>
                        </div>
                        <div class="p-4">
                            <div class="label-date bg-gray-100 Text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">
                                <span>
                                    {{ $announcementcar->car->year }}
                                </span>

                            </div>
                            <h5 class="text-xl font-semibold mt-2"><a href="#"
                                    class="text-gray-800 hover:text-red-500"> {{ $announcementcar->car->model }}
                                </a></h5>
                            <ul class="text-gray-600 mt-2 flex flex-row justify-evenly">
                                <li>
                                    <span class="icon">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_2880_5319)">
                                                <path
                                                    d="M18 10.6482C18 12.6227 17.3716 14.497 16.1827 16.0687C15.9482 16.379 15.5071 16.4391 15.1978 16.2052C14.8881 15.971 14.827 15.53 15.0612 15.2203C16.0638 13.895 16.5938 12.3139 16.5938 10.6482C16.5938 6.45117 13.1947 3.05859 9 3.05859C4.8024 3.05859 1.40625 6.45378 1.40625 10.6482C1.40625 12.3139 1.9362 13.895 2.93871 15.2203C3.17299 15.53 3.11188 15.971 2.8022 16.2052C2.49239 16.4395 2.05156 16.3784 1.81714 16.0687C0.628418 14.497 0 12.6227 0 10.6482C0 5.67361 4.02814 1.65234 9 1.65234C13.9746 1.65234 18 5.67636 18 10.6482ZM13.4551 6.41368C13.7296 6.6882 13.7296 7.13342 13.4551 7.40794L11.1632 9.69983C11.3519 10.0477 11.4593 10.4459 11.4593 10.8686C11.4593 12.2248 10.356 13.3279 9 13.3279C7.64388 13.3279 6.54071 12.2248 6.54071 10.8686C6.54071 9.51265 7.64388 8.40935 9 8.40935C9.42284 8.40935 9.82095 8.51674 10.1688 8.70543L12.4607 6.41354C12.7354 6.13902 13.1804 6.13902 13.4551 6.41368ZM10.053 10.8688C10.053 10.2881 9.58063 9.81573 9 9.81573C8.41937 9.81573 7.94696 10.2881 7.94696 10.8688C7.94696 11.4494 8.41937 11.9218 9 11.9218C9.58063 11.9218 10.053 11.4494 10.053 10.8688Z"
                                                    fill="#050B20" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_2880_5319">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span>{{ $announcementcar->car->km }}</span> mi |
                                </li>
                                <li>{{ $announcementcar->car->transmission }} | </li>
                                <li><span>{{ $announcementcar->car->engine_capacity }}</span> hp |</li>
                            </ul>
                        </div>
                        <div class="findcar__item__price mt-4 p-2 bg-gray-100 border-top flex flex-row gap-5">
                            <h6 class="text-lg font-semibold bg-green-300 p-2 rounded-full shadow-lg">
                                {{ $announcementcar->situation }}
                                <span class="icon">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2880_5323)">
                                            <path
                                                d="M10.6875 3.375C10.6875 3.06432 10.4357 2.8125 10.125 2.8125H4.5C4.18932 2.8125 3.9375 3.06432 3.9375 3.375V7.875C3.9375 8.18568 4.18932 8.4375 4.5 8.4375H10.125C10.4357 8.4375 10.6875 8.18568 10.6875 7.875V3.375ZM9.5625 7.3125H5.0625V3.9375H9.5625V7.3125Z"
                                                fill="#050B20" />
                                            <path
                                                d="M17.14 3.98858L14.8967 2.86358C14.6182 2.72405 14.2843 2.8375 14.1453 3.11516C14.0064 3.39311 14.1206 3.73096 14.3986 3.86993L15.2529 4.29669C15.2301 4.35786 15.2005 4.42255 15.2005 4.49177C15.2005 5.22415 15.75 5.84269 16.3125 6.0756V12.9293C16.3125 13.2394 16.0601 13.4918 15.75 13.4918C15.4399 13.4918 15.1875 13.2394 15.1875 12.9293V8.42927C15.1875 7.07115 14.0625 5.93497 12.9375 5.67362V2.24177C12.9375 1.00114 11.955 0 10.7144 0H3.96436C2.72373 0 1.6875 1.00114 1.6875 2.24177V14.8315L0.873422 15.2386C0.682805 15.3339 0.5625 15.5286 0.5625 15.7418V17.4293C0.5625 17.7399 0.841219 18 1.15186 18H13.5269C13.8375 18 14.0625 17.7399 14.0625 17.4293V15.7418C14.0625 15.5286 13.9422 15.3339 13.7516 15.2386L12.9375 14.8315V6.84545C13.5 7.07836 14.0625 7.6969 14.0625 8.42927V12.9293C14.0625 13.8598 14.8194 14.6168 15.75 14.6168C16.6806 14.6168 17.4375 13.8598 17.4375 12.9293V4.49177C17.4375 4.27862 17.3306 4.08389 17.14 3.98858ZM12.9375 16.875H1.6875V16.0895L2.50158 15.6824C2.6922 15.5871 2.8125 15.3924 2.8125 15.1792V2.24174C2.8125 1.6213 3.34389 1.125 3.96436 1.125H10.7144C11.3348 1.125 11.8125 1.6213 11.8125 2.24177V15.1793C11.8125 15.3924 11.9328 15.5872 12.1234 15.6825L12.9375 16.0895V16.875Z"
                                                fill="#050B20" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2880_5323">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </span>
                            </h6>
                            <h6 class="text-lg font-semibold p-2">${{ $announcementcar->price }}<span
                                    class="text-sm">/Month</span>
                            </h6>
                        </div>
                        <div class="p-4">
                            <a href="{{ route('car.details', $announcementcar->id) }}"
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
            <h2>Your informations will be protected by the low!</h2>
            <!-- Form -->
            <form id="bookingForm" action="{{ route('reservations.store') }}" method="POST" class="space-y-4">
                @csrf
                @method('POST')
                <!-- Form fields -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex flex-col">
                        <label for="identification_card" class="text-sm">Identification Card</label>
                        <input type="text" name="identification_card" id="identification_card"
                            placeholder="Identification Card (HH456798)" class="border rounded-md px-3 py-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="licence" class="text-sm">Licence</label>
                        <input type="text" name="licence" id="licence" placeholder="Licence (44/444444)"
                            class="border rounded-md px-3 py-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="licenceDate" class="text-sm">Licence Date</label>
                        <input type="date" name="licenceDate" id="licenceDate" placeholder="Licence Date"
                            class="border rounded-md px-3 py-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="pickupDate" class="text-sm">Pickup Date</label>
                        <input type="datetime-local" id="pickupDate" name="pickupDate"
                            class="border rounded-md px-3 py-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="dropofDate" class="text-sm">Drop-off Date</label>
                        <input type="datetime-local" name="dropofDate" id="dropofDate" placeholder="Drop-off Date"
                            class="border rounded-md px-3 py-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="dropofLocation" class="text-sm">Drop-off Location</label>
                        <input type="text" name="dropofLocation" id="dropofLocation"
                            placeholder="Drop-off Location" class="border rounded-md px-3 py-2">
                    </div>
                    <div class="flex flex-col">
                        <label for="pickupLocation" class="text-sm">Pickup Location</label>
                        <input type="text" name="pickupLocation" id="pickupLocation"
                            placeholder="Pickup Location" class="border rounded-md px-3 py-2">
                    </div>
                </div>
                <input type="hidden" name="announcement_id" value="{{ $announcement->id }}">
                <!-- Submit button -->
                <button type="submit"
                    class="btn bg-blue-500 text-white w-full py-2 rounded-lg hover:bg-blue-600">Reserve</button>
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
