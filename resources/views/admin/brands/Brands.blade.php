<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Brand</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    {{--  <link href="{{ asset('roussource') }}" rel="stylesheet"></head>  --}}
<body class="bg-gray-200 py-20">

{{--  ======================== start dashborard =========  --}}

<div class="fixed left-0 top-0 w-64 h-full bg-[#f8f4f3] p-4 z-50 sidebar-menu transition-transform">
    <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">

        <h2 class="font-bold text-2xl"><span class="bg-[#f84525] text-white px-2 rounded-md">TA-AUTO</span></h2>
    </a>
    <ul class="mt-4">
        <span class="text-gray-400 font-bold">ADMIN</span>
        <li class="mb-1 group">
            <a href=""
                class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                <i class="fa-solid fa-chart-pie mr-3 text-lg"></i>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href=""
                class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class='bx bx-user mr-3 text-lg'></i>
                <span class="text-sm">Users</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="{{ route('brands.index') }}"
                class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class='bx bx-list-ul mr-3 text-lg'></i>
                <span class="text-sm">Brands</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href=""
                        class="text-gray-900 text-sm flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">All</a>
                </li>
                <li class="mb-4">
                    <a href="{{ route('brands.create') }}"
                        class="text-gray-900 text-sm flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create
                        Brand</a>
                </li>
            </ul>
        </li>
        <li class="mb-1 group">
            <a href="{{ route('brands.index') }}"
                class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                <i class="fa-brands fa-blogger mr-3 text-lg"></i>
                <span class="text-sm">Blog</span>
                <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
            </a>
            <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                <li class="mb-4">
                    <a href=""
                        class="text-gray-900 text-sm flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Blogs</a>
                </li>
                <li class="mb-4">
                    <a href=""
                        class="text-gray-900 text-sm flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Create
                        Blog</a>
                </li>
                <li class="mb-4">
                    <a href=""
                        class="text-gray-900 text-sm flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Update
                        Blog</a>
                </li>
            </ul>
        </li>
        <hr>
        <hr>
        <li>

            <a href="{{ route('profile.index') }}"
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
</div>
{{--  ============================= end dashboard =============================  --}}

<!-- brands Table -->
<section class="max-w-2xl mx-auto bg-white p-8 shadow-md rounded-md">
    <div class="overflow-hidden w-[100%]">
        <table class="min-w-full divide-y divide-gray-200 bg-white shadow-md rounded-lg w-[50%]">
            <thead class="mt-10 mb-10">
                <th class="mt-10 mb-10"> Brands Table </th>
            </thead>
            <thead class="bg-gray-100">
                <tr>
                    <th
                        class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Name</th>
                    <th
                        class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Logo</th>
                    <th
                        class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($brands as $brand)
                    <tr class="hover:bg-gray-50 transition-colors duration-300 ease-in-out">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $brand->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <img src="{{ $brand->getFirstMediaUrl('brands_logo') }}" alt="Brand Logo"
                                class="h-auto w-12">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button
                            class="border border-yellow-500 bg-yellow-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-yellow-600 focus:outline-none focus:shadow-outline">
                            <a href="{{ route('brands.edit', $brand->id) }}">Edit</a>
                            </button>
                            <button>
                                <form action="{{ route('brands.destroy', $brand->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                         <a class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                                            Delete</a>
                                </form>
                            </button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
<footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800">
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
</body>
</html>
