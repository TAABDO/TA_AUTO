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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    @include('components.prsonav');
    @include('components.asidebar');


    <div class="flex flex-row bg-gray-800">
        <!-- Sidebar -->
        {{--  <div class="fixed left-0 top-0 w-64 h-full bg-[#f8f4f3] p-4 z-50 sidebar-menu transition-transform">
            <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">

                <h2 class="font-bold text-2xl"><span class="bg-[#f84525] text-white px-2 rounded-md">TA-AUTO</span></h2>
            </a>
            <ul class="mt-4">
                <span class="text-gray-400 font-bold">Client</span>
                <li class="mb-1 group">
                    <a href=""
                        class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                        <i class="fa-solid fa-chart-pie mr-3 text-lg"></i>
                        <span class="text-sm">Dashboard</span>
                    </a>
                </li>
                <li class="mb-1 group">
                    <a href="{{ route('ClientReservations.create') }}"
                        class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <i class='bx bx-user mr-3 text-lg'></i>
                        <span class="text-sm">My Reservation</span>
                        <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                    </a>
                </li>

                <li class="mb-1 group">
                    <a href=""
                        class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <i class='bx bx-user mr-3 text-lg'></i>
                        <span class="text-sm">My Announcement</span>
                        <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                    </a>
                </li>
                <li class="mb-1 group">
                    <a href=""
                        class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                        <i class='bx bx-user mr-3 text-lg'></i>
                        <span class="text-sm">My blogs </span>
                        <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                    </a>
                </li>
                <hr>
                <hr>
                <li>
                    <a href="{{ route('ClientProfile.index') }}"
                        class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                        <i class="fa-solid fa-circle-user"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap hover:">Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>  --}}
        <!-- Content -->

        <div class="py-10 ml-20 sm:py-10 md:py-12 lg:py-20 my-auto flex-grow dark:bg-gray-100">
            <div class="max-w-screen-lg mx-auto flex flex-col md:flex-row justify-center gap-4">
                <div
                    class="lg:w-4/4 md:w-full sm:w-full xs:w-full mx-auto shadow-2xl p-4 rounded-xl self-center dark:bg-gray-100/40">
                    <div class="the form section">
                        <h1
                            class="text-3xl md:text-2xl sm:text-xl xs:text-xl font-serif font-extrabold mb-2 dark:text-gray-800">
                            Profile
                        </h1>
                        <h2 class="text-gray-500 text-sm mb-4 dark:text-gray-400">Update Profile</h2>

                        <form action="{{ route('ClientProfile.update', $user->id) }}" method="POST"
                            class="md:w-4/4 pt-4 md:pt-0" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <!-- Cover Image -->
                            <div
                                class="w-full rounded-sm bg-[url('https://images.unsplash.com/photo-1449844908441-8829872d2607?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw2fHxob21lfGVufDB8MHx8fDE3MTA0MDE1NDZ8MA&ixlib=rb-4.0.3&q=80&w=1080')] bg-cover bg-center bg-no-repeat items-center">
                                <!-- Profile Image -->
                                <div class="mx-auto flex justify-center w-[141px] h-[141px] bg-blue-300/20 rounded-full bg-cover bg-center bg-no-repeat"
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
                            <h2 class="text-center mt-1 font-semibold dark:text-gray-300">Upload Profile and Cover
                                Image
                            </h2>
                            <div
                                class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                                <div class="w-full  mb-4 mt-6">
                                    <label for="" class="mb-2 dark:text-gray-800">FullName</label>
                                    <input type="text" name="fullname"
                                        class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800"
                                        value="{{ $user->fullname }}">
                                </div>
                                <div class="w-full  mb-4 mt-6">
                                    <label for="" class="dark:text-gray-800">Email</label>
                                    <input type="text" name="email"
                                        value="{{ $user->email }}"class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                                </div>
                            </div>
                            <div
                                class="flex lg:flex-row md:flex-col sm:flex-col xs:flex-col gap-2 justify-center w-full">
                                <div class="w-full  mb-4 lg:mt-6">
                                    <label for="" class="dark:text-gray-800">Address</label>
                                    <input type="text" name="address" value="{{ $user->address }}"
                                        class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                                </div>
                                <div class="w-full  mb-4 lg:mt-6">
                                    <label for="" class="dark:text-gray-800">Phone</label>
                                    <input type="text" name="phone" value="{{ $user->phone }}"
                                        class="mt-2 p-4 w-full border-2 rounded-lg dark:text-gray-200 dark:border-gray-600 dark:bg-gray-800">
                                </div>
                            </div>
                            <button type="submit"
                                class="w-full p-4 w-full rounded-lg bg-blue-500 mt-4 text-white text-lg font-semibold">update
                                profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>
