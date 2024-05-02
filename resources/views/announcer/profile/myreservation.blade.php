<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head');
</head>

<body class="bg-gray-100">


    @include('components.prsonav');
    @include('components.asidebar');


<section id="reservation" style="visibility: visible"
        class="flex flex-wrap md:flex-row justify-center items-center py-20 ml-40 sm:py-10 md:py-12 lg:py-20 my-auto">
        @foreach ($reservations as $reservation)
                 @foreach($reservation->reservations as $res)
                    <div class="flex flex-col  md:flex-row bg-white shadow-lg rounded-lg m-4 w-full md:max-w-6xl">
                <div class="w-full md:w-1/2 bg-cover" style="background-image: url('{{ $res->announcement->getFirstMediaUrl('images') }}')">
                </div>
                <div class="w-full gap-5 p-4 flex flex-row">
                  <div class="part1">
                    <h1 class="text-gray-900 font-bold text-2xl mb-2">{{ $res->announcement->car->model }}</h1>
                    <p class="text-gray-600 text-sm mb-2">Price: ${{ $res->announcement->price }}</p>
                    <p class="text-gray-600 text-sm mb-2">isaccepted: {{ $res->status }}</p>
                    <p class="text-gray-600 text-sm mb-2">City: {{ $res->announcement->city }}</p>
                    <p class="text-gray-600 text-sm mb-2">Id Card: {{ $res->identification_card }}</p>
                  </div>
                  <div class="part2">
                    <p class="text-gray-600 text-sm mb-2">Licence: {{ $res->licence }}</p>
                    <p class="text-gray-600 text-sm mb-2">Licence Year: {{ $res->licenceDate }}</p>
                    <p class="text-gray-600 text-sm mb-2">Pickup-D: {{ $res->pickupDate }}</p>
                    <p class="text-gray-600 text-sm mb-2">Dropoff-D: {{ $res->dropofDate }}</p>
                    <p class="text-gray-600 text-sm mb-2">Pickup-L: {{ $res->pickupLocation }}</p>
                    <p class="text-gray-600 text-sm mb-2">Dropoff-L: {{ $res->dropofLocation }}</p>
                  </div>
                  <div class="part3 mt-4">

                        <form action="{{ route('reservations.destroy',$res->id) }}" method="post">
                            @method('DELETE')
                            <button class="bg-red-400 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center mr-2">
                            Cancel Reservation
                            </button>
                        </form>

                        <form action="{{ route('accepteReservation',$res->id) }}" method="POST">
                            @method('PUT')
                            <button class="bg-green-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center mr-2">
                                Accepte Reservation
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        @endforeach
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

