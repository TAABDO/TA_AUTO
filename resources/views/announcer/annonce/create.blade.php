<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    {{--  <link href="{{ asset('roussource') }}" rel="stylesheet">  --}}
    <link rel="stylesheet" href="{{ asset('cssN.css/announce.css') }}">

    <title>Admin Panel</title>
</head>

<body class="bg-gray-200">

    @include('components.prsonav');
    @include('components.asidebar');

    {{--  <!--sidenav -->
    <div class="fixed left-0 top-0 w-64 h-full bg-[#f8f4f3] p-4 z-50 sidebar-menu transition-transform">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">

            <h2 class="font-bold text-2xl"><span class="bg-[#f84525] text-white px-2 rounded-md">TA-AUTO</span></h2>
        </a>
        <ul class="mt-4">
            <span class="text-gray-400 font-bold">ADMIN</span>
            <li class="mb-1 group">
                <a href=""
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href=""
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class='bx bx-user mr-3 text-lg'></i>
                    <span class="text-sm">Cars</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ route('announce.create') }}"
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class='bx bx-list-ul mr-3 text-lg'></i>
                    <span class="text-sm">Announcment</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href=""
                            class="text-gray-900 text-sm flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('announce.create') }}"
                            class="text-gray-900 text-sm flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create
                            Announcement</a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group">
                <a href=" "
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class='bx bx-list-ul mr-3 text-lg'></i>
                    <span class="text-sm">Blog</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href=""
                            class="text-gray-900 text-sm flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">
                            My Blog</a>
                    </li>
                    <li class="mb-4">
                        <a href="{{ route('blog.create') }}"
                            class="text-gray-900 text-sm flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create
                            My Blog</a>
                    </li>
                </ul>
            </li>
            <hr>
            <hr>
            <li>

                <a href="{{ route('AnnouncerProfile.index') }}"
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="fa-solid fa-user"></i>
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
    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
    <!-- end sidenav -->  --}}

    {{--  <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main z-0">  --}}
        <!-- navbar -->

        <!-- end navbar -->

        <!-- cars Announcement -->
        <div class="container mx-auto mt-2">
            <div class="flex items-center py-2 overflow-x-auto whitespace-nowrap">
                <a href="#" class="font-medium text-gray-700 dark:text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-800">
                    /
                </span>

                <a href="#" class="font-medium text-gray-700 dark:text-gray-800 hover:underline">
                    Account
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-800">
                    /
                </span>

                <a href="#" class="font-medium text-gray-700 dark:text-gray-800 hover:underline">
                    Profile
                </a>

                <span class="mx-5 text-gray-500 dark:text-gray-800">
                    /
                </span>

                <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline">
                    Settings
                </a>
            </div>
            <div class="form">
                <form id="signUpForm" action="{{ route('announce.store') }}" method="POST" class="max-w-md" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" id="title" name="title" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <input type="text" id="description" name="description" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <input type="text" id="city" name="city" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <input type="number" id="price" name="price" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                        <select name="type" id="type" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                                <option value="rentel">Rentel</option>
                                <option value="sale">Sale</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="model" class="block text-sm font-medium text-gray-700">Model</label>
                        <input type="text" id="model" name="model" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="seat" class="block text-sm font-medium text-gray-700">Seat</label>
                        <input type="number" id="seat" name="seat" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="color" class="block text-sm font-medium text-gray-700">Color</label>
                        <input type="text" id="color" name="color" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
                        <input type="text" id="year" name="year" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="condition" class="block text-sm font-medium text-gray-700">Car Condition</label>
                        <select name="condition" id="condition" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                            <option value="new">new</option>
                            <option value="used">used</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="transmission" class="block text-sm font-medium text-gray-700">Transmission</label>
                        <select name="transmission" id="transmission" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                            <option value="manual">Manual</option>
                            <option value="automatic">Automatic</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="fuel_type" class="block text-sm font-medium text-gray-700">Fuel Type</label>
                        <select name="fuel_type" id="fuel_type" class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                            <option value="petrol">Petrol</option>
                            <option value="diesel">Diesel</option>
                            <option value="electric">Electric</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="engine_capacity" class="block text-sm font-medium text-gray-700">Engine Capacity</label>
                        <input type="number" id="engine_capacity" name="engine_capacity" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="km" class="block text-sm font-medium text-gray-700">Kilometrage</label>
                        <input type="number" id="km" name="km" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="brand_id" class="block text-sm font-medium text-gray-700">Brand</label>
                        <select name="brand_id" id="brand_id">
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class=" step rounded-md border border-indigo-500 bg-gray-50 p-4 shadow-md w-36">
                        <label for="upload" class="flex flex-col items-center gap-2 cursor-pointer">
                         <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 fill-white stroke--500" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                         </svg>
                         <span class="text-gray-600 font-medium">Upload file</span>
                        </label>
                       <input id="upload" type="file" name="images[]" multiple class="hidden" />
                     </div>
                    <!-- start previous / next buttons -->
                    <div class="form-footer">
                        <button type="submit">Submit</button>
                    </div>
                    <!-- end previous / next buttons -->
                </form>

            </div>
        </div>
        <!-- End Content -->
    </main>

    <footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800 z-10">
        <div class="w-full mx-auto max-w-screen-xl p-4 pl-44 md:flex md:items-center md:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">TA-AUTO™</a>. All Rights Reserved.
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

    {{--  <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>  --}}


    <script src="{{ asset('js/announce.js') }}"></script>


</body>

</html>
