<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head');
</head>

<body class="bg-gray-100">


    @include('components.prsonav');
    @include('components.asidebar');

    <section class="car spad bg-gray-100 pt-[5em] flex flex-col justify-center">

        <div class="text-center">
            <div class="section-title">
                <h2 class="text-3xl font-bold text-gray-800">My Announcements</h2>
            </div>
        </div>
        <div class="flex flex-wrap justify-end sm:justify-center gap-10 pt-[5rem] pb-[5rem] ">
            @foreach ($announcements as $announcement)
                <div class="w-full sm:w-auto md:w-auto lg:w-auto">
                    <div
                        class="bg-white rounded-lg overflow-hidden shadow-lg shadow-lg transition-transform transform hover:scale-105">
                        <div class="relative">
                            <div class="car__item__pic__slider owl-carousel">
                                {{--  <img src="img/cars/car-1.jpg" class="w-full" alt="Car 1">  --}}
                                <img src="{{ $announcement->getFirstMediaUrl('images') }}"
                                    class="rounded-t-lg w-full h-40" alt="Car 1">
                            </div>
                            <span
                                class="car-option sale absolute top-0 right-0 bg-red-500 text-white py-1 px-2 rounded-bl-lg">
                                For {{ $announcement->type }}
                            </span>
                        </div>
                        <div class="p-4">
                            <div class="label-date bg-gray-100 Text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">
                                <span>
                                    {{ $announcement->car->year }}
                                </span>

                            </div>
                            <h5 class="text-xl font-semibold mt-2"><a href="#"
                                    class="text-gray-800 hover:text-red-500"> {{ $announcement->car->model }}
                                </a></h5>
                            <ul class="text-gray-600 mt-2 flex flex-row justify-evenly">
                                <li>
                                    <span>{{ $announcement->car->km }}</span> mi |
                                </li>
                                <li>{{ $announcement->car->transmission }} | </li>
                                <li><span>{{ $announcement->car->engine_capacity }}</span> hp |</li>
                            </ul>
                        </div>
                        <div class="findcar__item__price mt-4 p-2 bg-gray-100 border-top flex flex-row gap-5">
                            <h6 class="text-lg font-semibold bg-green-300 p-2 rounded-full shadow-lg">
                                {{ $announcement->situation }}
                            </h6>
                            <h6 class="text-lg font-semibold p-2">${{ $announcement->price }}<span
                                    class="text-sm">/Month</span>
                            </h6>
                        </div>
                        <div class="p-4">
                            <a href="{{ route('car.details', $announcement->id) }}"
                                class="text-white bg-blue-700 w-10 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
        <div class="w-full mx-auto max-w-screen-xl p-4 pl-44 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a
                    href="https://flowbite.com/" class="hover:underline">TA-AUTO™</a>. All Rights Reserved.
            </span>
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Home</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Cars</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Blogs</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
    </footer>

</body>

</html>
