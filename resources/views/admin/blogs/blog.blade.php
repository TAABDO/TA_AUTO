







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    {{--  <link href="{{ asset('roussource') }}" rel="stylesheet"> --}}
</head>

<body class="bg-gray-200 py-20">

    {{--  ======================== start dashborard =========  --}}

    <div class="fixed left-0 top-0 w-64 h-full bg-[#f8f4f3] p-4 z-50 sidebar-menu transition-transform">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">

            <h2 class="font-bold text-2xl"><span class="bg-[#f84525] text-white px-2 rounded-md">TA-AUTO</span></h2>
        </a>
        <ul class="mt-4">
            <span class="text-gray-400 font-bold">ADMIN</span>
            <li class="mb-1 group">
                <a href="{{ route('Admin.index') }}"
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="fa-solid fa-chart-pie mr-3 text-lg"></i>
                    <span class="text-sm">Dashboard</span>
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
                <a href="{{ route('Admin.create') }}"
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100 sidebar-dropdown-toggle">
                    <i class="fa-brands fa-blogger mr-3 text-lg"></i>
                    <span class="text-sm">Blog</span>
                    <i class="ri-arrow-right-s-line ml-auto group-[.selected]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]:block">
                    <li class="mb-4">
                        <a href="{{ route('Admin.create') }}"
                            class="text-gray-900 text-sm flex items-center hover:text-[#f84525] before:contents-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3">Blogs</a>
                    </li>

                </ul>
            </li>
            <hr>
            <hr>
            <li>
                <a href="{{ route('AdminProfile.index') }}"
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


<div class="flex justify-center">
    <div class="w-2/3">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 p-5 sm:rounded-lg">
                        <button class="bg-rose-500 text-white rounded-md px-4 py-2 hover:bg-rose-700 transition"
                            onclick="openModal('modelConfirm')">
                            accepte BolgStatus
                        </button>
                        <table class="min-w-full divide-y divide-gray-200">

                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Title
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Description
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        User
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Image
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">
                                                {{ \Illuminate\Support\Str::limit($blog->title, 30) }}</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-500 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                                {{ \Illuminate\Support\Str::limit($blog->description, 50) }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $blog->user->fullname }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            {{ $blog->blogStatus }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                            <img src="{{ $blog->getFirstMediaUrl('Blog_Image') }}"
                                                alt="Blog Image">
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <button class="text-blue-500 hover:text-blue-700">
                                                <a href="{{ route('blogStatus.edit', $blog->id) }}">
                                                    <i class="fa-solid fa-pen"></i>
                                                </a>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<footer class="bg-white rounded-lg shadow m-4 dark:bg-gray-800 ">
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

<script type="text/javascript">
    window.openModal = function(modalId) {
        document.getElementById(modalId).style.display = 'block'
        document.getElementsByTagName('body')[0].classList.add('overflow-y-hidden')
    }

    window.closeModal = function(modalId) {
        document.getElementById(modalId).style.display = 'none'
        document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
    }

    // Close all modals when press ESC
    document.onkeydown = function(event) {
        event = event || window.event;
        if (event.keyCode === 27) {
            document.getElementsByTagName('body')[0].classList.remove('overflow-y-hidden')
            let modals = document.getElementsByClassName('modal');
            Array.prototype.slice.call(modals).forEach(i => {
                i.style.display = 'none'
            })
        }
    };
</script>
</body>

</html>
