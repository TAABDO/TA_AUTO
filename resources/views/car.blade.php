<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('includes.head')
    <title> Cars </title>
</head>

<body>
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

    <section class="w-full overflow-hidden mt-5">
        <div
            class="absolute top-[50%] left-[5%] car spad bg-gray-800 p-10 flex flex-wrap justify-center z-10 rounded-[20px] shadow-2xl">
            <div class="container mx-auto flex flex-col justify-center">
                <div class="text-center">
                    <div class="section-title">
                        <span class="text-red-500 font-semibold">Best Vehicle Offers</span>
                        <h2 class="text-3xl font-bold text-gray-200">Best Vehicle Offers</h2>
                    </div>
                </div>
                <div class="select-list mb-4 flex flex-col gap-3">
                    <div class="select-list-item">
                        <p class="text-gray-500">Select Model Year</p>
                        <select name="year" class="w-full border rounded p-2 mb-2" id="year">
                            <option data-display="" value="">Select Model Year</option>
                            <option class="text-gray-500" value="2024">2024</option>
                            <option class="text-gray-500" value="2023">2023</option>
                            <option class="text-gray-500" value="2022">2022</option>
                            <option class="text-gray-500" value="2021">2021</option>
                            <option class="text-gray-500" value="2020">2020</option>
                            <option class="text-gray-500" value="2019">2019</option>
                        </select>
                    </div>
                    <div class="select-list-item">
                        <p class="text-gray-500">Select Transmission</p>
                        <select name="transmission" class="w-full border rounded p-2 mb-2" id="transmission">
                            <option data-display="" value="">Select Transmission</option>
                            <option class="text-gray-500" value="manual">Manual</option>
                            <option class="text-gray-500" value="automatic">Automatic</option>
                        </select>
                    </div>

                    <div class="select-list mb-4 flex flex-col gap-3">
                        <!-- Other select fields -->
                        <div class="select-list-item">
                            <p class="text-gray-500">Select Color</p>
                            <select name="color" class="w-full border rounded p-2 mb-2" id="color">
                                <option data-display="" value="">Select Color</option>
                                @foreach ($announcements as $announcement)
                                    <option class="text-gray-500" value="{{ $announcement->car->color }}">
                                        {{ $announcement->car->color }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="select-list-item">
                            <p class="text-gray-500">Select Fuel_Type</p>
                            <select name="fuel_type" class="w-full border rounded p-2 mb-2" id="fuel_type">
                                <option data-display="" value="">Select Fuel_Type</option>
                                <option class="text-gray-500" value="diesel">Diesel</option>
                                <option class="text-gray-500" value="Petrol">Petrol</option>
                                <option class="text-gray-500" value="electric">electric</option>
                            </select>
                        </div>
                    </div>
                    <div class="select-list-item">
                        <p class="text-gray-500">Select Model</p>
                        <select name="model" class="w-full border rounded p-2 mb-2" id="model">
                            <option data-display="" value="">Select Model</option>
                            @foreach ($announcements as $announcement)
                                <option class="text-gray-500" value="{{ $announcement->car->model }}">
                                    {{ $announcement->car->model }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="select-list-item">
                        <button type="submit" onclick="filter()"
                            class="py-2.5 px-5 mt-6 text-sm font-medium text-gray-900 focus:outline-none
                                           bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                                           focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                                           dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Filter
                        </button>
                    </div>
                </div>
                <script></script>
                <!-- Other form elements -->
            </div>
        </div>
    </section>

    <div id="filterCar">

    </div>

    {{--  ===================================== cards =============  --}}
    <div class="flex flex-col">
        <div class="flex flex-col md:flex-row gap-3 pl-[8rem] pt-[5rem]">
            <div class="flex flex-col md:flex-row gap-3 pl-[20rem]">
                <select id="filterType" name="type" onchange="filter()"
                    class="w-full h-10 border-2 border-gray-800 focus:outline-none focus:border-gray-800 text-sky-500 rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
                    <option value="" selected="">All</option>
                    <option value="rentel">Rentel</option>
                    <option value="sale">Sale</option>
                </select>
            </div>
        </div>
        <div class="flex flex-wrap justify-end sm:justify-center gap-10 pl-[20rem] pt-[3rem] pb-[5rem] " id="carList">

        </div>
    </div>
    {{--  <div>
        {{ $announcements->links() }}
    </div>  --}}
    </div>
    <!-- Cards -->
    {{--  ========================================================================================= header ===========================  --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function filter() {
            var year = document.getElementById('year').value;
            var transmission = document.getElementById('transmission').value;
            var color = document.getElementById('color').value;
            var fuel_type = document.getElementById('fuel_type').value;
            var model = document.getElementById('model').value;
            var type = document.getElementById('filterType').value;

            // Make AJAX request
            $.ajax({
                url: 'filtercar',
                type: 'POST',
                data: {
                    year: year,
                    transmission: transmission,
                    color: color,
                    fuel_type: fuel_type,
                    model: model,
                    type: type
                },
                  headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add your CSRF token here
                },
                success: function(response) {
                    // Update the car list section with the filtered results
                    $('#carList').html(response);
                },
            });
        }

        $(document).ready(function() {
            filter()
        });
    </script>



    {{--  =================== color for rentel and for sale =====================  --}}
    <script>
        if (document.getElementById('car-option').innerText === 'For sale') {
            document.querySelector('.car-option').style.background == 'red';

        } else {
            document.querySelector('.car-option').style.background == 'rgb(92, 249, 155)';
        }
    </script>
    {{--  =================== price ====  --}}
    <script>
        function updatePrice(value) {
            document.getElementById("minPrice").textContent = "$" + value;
        }
    </script>
</body>

</html>
