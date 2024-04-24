<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100">



    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
     </button>

     <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
           <a href="https://flowbite.com/" class="flex items-center ps-2.5 mb-5">
              <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 me-3 sm:h-7" alt="Flowbite Logo" />
              <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
           </a>
           <ul class="space-y-2 font-medium">
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                       <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                       <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                    </svg>
                    <span class="ms-3">Dashboard</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                       <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">My Announcement</span>
                    <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                       <path d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">My Reservation</span>
                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                       <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">My Profile</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                       <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap"></span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                 </a>
              </li>
              <li>
                 <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                       <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                       <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                       <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                    </svg>
                    <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                 </a>
              </li>
           </ul>
        </div>
     </aside>

      <div class="p-4 sm:ml-64 ">
       {{--  <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <div class="py-10 sm:py-10 md:py-12 lg:py-20 my-auto flex-grow dark:bg-gray-800">
                <div class="max-w-screen-lg mx-auto flex flex-col md:flex-row justify-center gap-4">  --}}
         <div class="flex flex-col sm:flex-col md:flex-wrap lg:flex-row gap-10">
          <div class="lg:w-2/4 md:w-full sm:w-full xs:w-full mx-auto shadow-2xl p-4 rounded-xl self-center dark:bg-gray-800">
                <div class="formsection">
                            <h1 class="text-3xl md:text-2xl sm:text-xl xs:text-xl font-serif font-extrabold mb-2 dark:text-white">
                                Profile
                            </h1>
                            <h2 class="text-gray-500 text-sm mb-4 dark:text-gray-400">Update Profile</h2>

                            <form action="{{ route('profile.update', $user->id) }}" method="POST" class="md:w-4/4 pt-4 md:pt-0" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <!-- Cover Image -->
                                <div
                                    class="w-full rounded-sm items-center">
                                    <!-- Profile Image -->
                                    <div class="mx-auto flex justify-center w-[141px] h-[141px] bg-blue-300/20 rounded-lg bg-cover bg-center bg-no-repeat"
                                        style="background-image: url('{{ $user->getFirstMediaUrl('profile') }}')">

                                        <div class="bg-white/90 rounded-full w-6 h-6 text-center ml-28 mt-4">
                                            <input type="file" name="profile" id="profile" hidden required>
                                            <label for="profile">
                                                <svg data-slot="icon" class="w-6 h-5 text-blue-700" fill="none"
                                                    stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Profile Image -->
                                <div class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">

                                    <div class="w-full mb-4 mt-6">
                                        <label for="" class="dark:text-white">FullName</label>
                                        <input type="text" name="fullname"
                                            value="{{ $user->fullname }}" class="mt-2 text-xl p-4 w-full h-14 text-center border-2 rounded-lg rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent bg-white rounded-md shadow-lg z-10">
                                    </div>

                                    <div class="w-full mb-4 mt-6">
                                        <label for="" class="dark:text-white">Email</label>
                                        <input type="text" name="email"
                                            value="{{ $user->email }}" class="mt-2 text-xl p-4 w-full h-14 text-center border-2 rounded-lg rounded-md px-2 py-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent bg-white rounded-md shadow-lg z-10">
                                    </div>
                                </div>
                                <div
                                    class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                                    <div class="w-full mb-4 lg:mt-6">
                                        <label for="" class="dark:text-white">Address</label>
                                        <input type="text" name="address" value="{{ $user->address }}"
                                        class="mt-2 text-xl p-4 w-full h-14 border-2 rounded-lg rounded-md px-2 text-center py-1 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent bg-white rounded-md shadow-lg z-10">
                                    </div>

                                    <div class="w-full  mb-4 lg:mt-6">
                                        <label for="" class="dark:text-white">Phone</label>
                                        <input type="text" name="phone" value="{{ $user->phone }}"
                                        class="mt-2 text-xl p-4 w-full h-14 border-2 rounded-lg rounded-md px-2 py-1 text-center focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent bg-white rounded-md shadow-lg z-10">                                    </div>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="w-full p-4 w-full rounded-lg bg-blue-500 mt-4 text-white text-lg font-semibold">update
                                    profile</button>
                            </form>
                </div>

                <div class="lg:w-2/4 md:w-full sm:w-full xs:w-full mx-auto shadow-2xl p-4 rounded-xl self-center dark:bg-gray-800">
                    <h1 class="text-3xl md:text-2xl sm:text-xl xs:text-xl font-serif font-extrabold mb-2 dark:text-white">
                        My Reservation
                    </h1>

                    <div>
                        @foreach ( $reservations as $reservation)

                          <div class="h-[90%] w-[60%] flex flex-row">
                            <img src="{{ $announcement->getFirstMediaUrl('images') }}" class="h-[90%] w-[40%]" alt="">
                            <div class="">
                                <div>
                                    <div>
                                        <h2 class="text-3xl font-bold text-gray-800">{{ $reservation->announcement->car->model }}</h2>
                                    </div>
                                    <hr>
                                    <div class="flex flex-col space-y-4">
                                        <div class="flex flex-row gap-8">
                                            <div>
                                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Price:</span>
                                                <span
                                                    class="text-xl text-gray-600 dark:text-gray-700">${{ $reservation->announcement->price }}</span>
                                            </div>
                                            <div>
                                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Year:</span>
                                                <span
                                                    class="text-xl text-gray-600 dark:text-gray-700">{{ $reservation->announcement->car->year }}</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Availability:</span>
                                            <span class="text-xl text-gray-600 dark:text-gray-700 bg-green-300 rounded-lg p-1">
                                                {{ $reservation->announcement->situation }}
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap gap-8">
                                            <div>
                                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Color:</span>
                                                <span
                                                    class="text-xl text-gray-600 dark:text-gray-700">{{ $reservation->announcement->car->color }}</span>
                                            </div>
                                            <div>
                                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">City:</span>
                                                <span class="text-xl text-gray-600 dark:text-gray-700 rounded-lg p-1">
                                                    {{ $reservation->announcement->city }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="w-full md:w-1/2 p-4">
                                        <div class="text-gray-600"><span>Identification Card:</span> {{ $reservation->identification_card }}</div>
                                        <div class="text-gray-600"><span>Licence:</span> {{ $reservation->licence }}</div>
                                        <div class="text-gray-600"><span>Licence Date:</span> {{ $reservation->licenceDate }}</div>
                                        <div class="text-gray-600"><span>Pickup Date:</span> {{ $reservation->pickupDate }}</div>
                                        <div class="text-gray-600"><span>Dropoff Date:</span> {{ $reservation->dropofDate }}</div>
                                        <div class="text-gray-600"><span>Pickup Location:</span> {{ $reservation->pickupLocation }}</div>
                                        <div class="text-gray-600"><span>Dropoff Location:</span> {{ $reservation->dropofLocation }}</div>
                                        <div class="text-gray-600"><span>Status:</span> {{ $reservation->status }}</div>

                                    </div>
                                    {{-- Action Buttons --}}
                                    <div class="w-full p-4 flex gap-2">
                                        <button class="w-full bg-gray-300 px-4 py-2 rounded-md cursor-not-allowed opacity-50">
                                            Cancel Reservation
                                        </button>
                                        <button class="w-full bg-green-500 hover:bg-green-700 active:bg-green-800 px-4 py-2 rounded-md text-white">
                                            Download Reservation
                                        </button>
                                    </div>
                                </div>
                            </div>
                          <div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="lg:w-2/4 md:w-full sm:w-full xs:w-full mx-auto shadow-2xl p-4 rounded-xl self-center dark:bg-gray-800">

                <div class="car spad bg-gray-100 pt-[10em] flex flex-col justify-center">

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
                </div>
                </div>
          </div>
       </div>



       <section class="container mx-auto p-10 flex flex-row md:p-20 antialiased">

        <div class="h-[90%] w-[60%] flex flex-row">
            <img src="{{ $announcement->getFirstMediaUrl('images') }}" class="h-[90%] w-[40%]" alt="">
            <div class="">
                <div>
                    <div>
                        <h2 class="text-3xl font-bold text-gray-800">{{ $announcement->car->model }}</h2>
                    </div>
                    <hr>
                    <div class="flex flex-col space-y-4">
                        <div class="flex flex-row gap-8">
                            <div>
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Price:</span>
                                <span
                                    class="text-xl text-gray-600 dark:text-gray-700">${{ $announcement->price }}</span>
                            </div>
                            <div>
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Year:</span>
                                <span
                                    class="text-xl text-gray-600 dark:text-gray-700">{{ $announcement->car->year }}</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Availability:</span>
                            <span class="text-xl text-gray-600 dark:text-gray-700 bg-green-300 rounded-lg p-1">
                                {{ $announcement->situation }}
                            </span>
                        </div>
                        <div class="flex flex-wrap gap-8">
                            <div>
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">Color:</span>
                                <span
                                    class="text-xl text-gray-600 dark:text-gray-700">{{ $announcement->car->color }}</span>
                            </div>
                            <div>
                                <span class="text-xl font-bold text-gray-700 dark:text-gray-700">City:</span>
                                <span class="text-xl text-gray-600 dark:text-gray-700 rounded-lg p-1">
                                    {{ $announcement->city }}</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div>

        </div>

    </section>

</body>
</html>
