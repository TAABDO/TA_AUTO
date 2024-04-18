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

<body id="carList">
    {{--  ========================================================================================= header ===========================  --}}
    <x-navbar />

    <header class="header pt-[7rem]">
        <section class="bg-cover bg-center bg-no-repeat bg-opacity-50 relative h-[40%]"
            style="background-image: url('{{ URL::asset('img/imagesPFR/AudiR.jpg') }}');">
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

    <section class="w-full overflow-hidden mt-10">
        <div
            class="absolute top-[60%] left-[5%] car spad bg-gray-800 p-10 flex flex-wrap justify-center z-10 rounded-[20px] shadow-lg">
            <div class="container mx-auto flex flex-col justify-center">
                <div class="text-center">
                    <div class="section-title">
                        <span class="text-red-500 font-semibold">Best Vehicle Offers</span>
                        <h2 class="text-3xl font-bold text-gray-200">Best Vehicle Offers</h2>
                    </div>
                </div>
                <form id="filterForm" action="{{ route('car.filterCar') }}" method="GET"
                    class="w-full max-w-lg mx-auto mt-5">

                    @method('GET')
                    <div class="select-list mb-4 flex flex-col gap-3">
                        <div class="select-list-item">
                            <p class="text-gray-500">Select Year</p>
                            <select name="year" class="w-full border rounded p-2 mb-2">
                                <option data-display="">Select Year</option>
                                <option class="text-gray-500" value="2024">2024</option>
                                <option class="text-gray-500" value="2019">2019</option>
                                <option class="text-gray-500" value="2018">2018</option>
                                <option class="text-gray-500" value="2017">2017</option>
                            </select>
                        </div>
                        <div class="select-list-item">
                            <p class="text-gray-500">Select Transmission</p>
                            <select name="transmission" class="w-full border rounded p-2 mb-2">
                                @foreach ($cars as $car)
                                    <option class="text-gray-500" value="{{ $car->transmission }}">
                                        {{ $car->transmission }}
                                    </option>
                                @endforeach
                                {{--  <option data-display="">Select transmission</option>
                                <option class="text-gray-500" value="automatic">automatic</option>
                                <option class="text-gray-500" value="manual">manual</option>  --}}
                            </select>
                        </div>
                        <div class="select-list-item">
                            <p class="text-gray-500">Select Model</p>
                            <select name="model" class="w-full border rounded p-2 mb-2">
                                @foreach ($cars as $car)
                                    <option class="text-gray-500" value="{{ $car->model }}">
                                        {{ $car->model }}
                                    </option>
                                @endforeach
                                {{--  <option class="text-gray-500" value=""></option>
                                <option class="text-gray-500" value="Mercedes-EQ EQS Sedan">Mercedes-EQ EQS Sedan</option>
                                <option class="text-gray-500" value="audi">audi</option>
                                <option class="text-gray-500" value="BMW">BMW</option>  --}}
                            </select>
                        </div>
                        <div class="select-list-item">
                            <p class="text-gray-500">Price</p>
                            <input type="text" class ="w-32 border rounded p-2 mb-2" name="price" id="price"
                                value="" placeholder="8000 $">
                        </div>
                        <div class="select-list-item">
                            <button type="submit"
                                class="py-2.5 px-5 mt-6 text-sm font-medium text-gray-900 focus:outline-none
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

    <div class="flex flex-wrap justify-end sm:justify-center gap-10 pl-[20rem] pt-[5rem] pb-[5rem] ">
        @foreach ($cars as $car)
            <div class="w-full sm:w-auto md:w-auto lg:w-auto">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <div class="relative">
                            <div class="car__item__pic__slider owl-carousel">
                                <img src="img/cars/car-1.jpg" class="w-full" alt="Car 1">
                                {{--  <img src="{{ $car->announcement->getFirstMediaUrl('images') }}" class="w-[20%]" alt="Car 1">  --}}
                            </div>
                            <span
                                class="car-option sale absolute top-0 right-0 bg-red-500 text-white py-1 px-2 rounded-bl-lg">
                                For {{ $car->announcement->type }}
                            </span>
                        </div>
                        <div class="p-4">
                            <div class="label-date bg-gray-100 Text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">
                                <span>
                                    {{ $car->year }}
                                </span>

                            </div>
                            <h5 class="text-xl font-semibold mt-2"><a href="#"
                                    class="text-gray-800 hover:text-red-500"> {{ $car->model }}
                                </a></h5>
                            <ul class="text-gray-600 mt-2 flex flex-row justify-evenly">
                                <li><span>{{ $car->km }}</span> mi | </li>
                                <li>{{ $car->transmission }} | </li>
                                <li><span>{{ $car->engine_capacity }}</span> hp |</li>
                            </ul>
                        </div>
                        <div class="car__item__price mt-4 p-2 bg-gray-100 border-top flex flex-row gap-5">
                            <h6 class="text-lg font-semibold bg-green-300 p-2 rounded-full shadow-lg">
                                {{ $car->announcement->situation }}
                            </h6>
                            <h6 class="text-lg font-semibold p-2">${{ $car->announcement->price }}<span
                                    class="text-sm">/Month</span>
                            </h6>
                        </div>
                        <div class="p-4">
                            <a href="{{ route('car.details', $car->id) }}"
                                class="text-white bg-blue-700 w-10 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div>
        <nav class="mb-4 flex justify-center space-x-4" aria-label="Pagination">

            <span class="rounded-lg border border-teal-500 px-2 py-2 text-gray-700">
                <span class="sr-only">Previous</span>
                <svg class="mt-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </span>

            <span class="rounded-lg border border-teal-500 bg-teal-500 px-4 py-2 text-white">1</span>

            <a class="rounded-lg border border-teal-500 px-4 py-2 text-gray-700" href="/page/2">2
            </a>

            <a class="rounded-lg border border-teal-500 px-4 py-2 text-gray-700" href="/page/3">3
            </a>

            <a class="rounded-lg border border-teal-500 px-2 py-2 text-gray-700" href="/page/2">
                <span class="sr-only">Next</span>
                <svg class="mt-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </a>

        </nav>
    </div>
 </div>
    <!-- Cards -->
    {{--  ========================================================================================= header ===========================  --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#filterForm').submit(function(event) {
                // Prevent default form submission
                event.preventDefault();

                // Serialize form data
                var formData = $(this).serialize();

                // Make AJAX request
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'GET',
                    data: formData,
                    success: function(response) {
                        // Update the car list section with the filtered results
                        $('#carList').html(response);
                    },
                });
            });
        });
    </script>
</body>

</html>
