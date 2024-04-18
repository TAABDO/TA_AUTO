@extends('layouts.app')
    {{--  +++++++++++++++++++++++++++++++++ header-picture ======  --}}
    <header class="header pt-[2rem]">
        <section class="bg-cover bg-center bg-no-repeat bg-opacity-50 relative mt-20" style="background-image: url('{{ URL::asset('img/imagesPFR/Audi3d.jpg') }}');">
            <div class="absolute inset-0 bg-gray-900 bg-opacity-75"></div>
            <div class="container mx-auto py-32 px-6 text-center relative">
                <h1 class="text-4xl sm:text-5xl font-bold text-white">Contact Us</h1>
                <div class="text-gray-300 text-xl mt-4">
                    <a href="{{ route('car.index') }}" class="hover:text-red-500">Home</a>
                    <span class="mx-2">&rsaquo;</span>
                    <span class="text-red-500">Contact Us</span>
                </div>
            </div>
        </section>
    </header>

    {{--  ======================================== contact section ==============  --}}

    <section class="contact spad mt-20">
        <div class="max-w-screen-lg mx-auto p-5">
            <div class="grid grid-cols-1 md:grid-cols-12 border">
                <div class="bg-gray-900 md:col-span-4 p-10 text-white">
                    <p class="mt-4 text-sm leading-7 font-regular uppercase">
                        Contact
                    </p>
                    <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight">
                        Get In <span class="text-indigo-600">Touch</span>
                    </h3>
                    <p class="mt-4 leading-7 text-gray-200">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industrys standard dummy text ever since the 1500s.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industrys standard dummy text ever since the 1500s.
                    </p>

                    <div class="flex items-center mt-5">
                        <span class="text-sm">+93 749 99 65 50</span>
                    </div>
                    <div class="flex items-center mt-5">
                        <span class="text-sm">24/7</span>
                    </div>

                </div>
                <form class="md:col-span-8 p-10">
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-first-name">
                                First Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                id="grid-first-name" type="text" placeholder="Jane">
                            <p class="text-red-500 text-xs italic hidden">Please fill out this field.</p>
                        </div>
                        <div class="w-full md:w-1/2 px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-last-name">
                                Last Name
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white "
                                id="grid-last-name" type="text" placeholder="Doe">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Email Address
                            </label>
                            <input
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-email" type="email" placeholder="********@*****.**">
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">
                                Your Message
                            </label>
                            <textarea rows="10"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                        </div>
                        <div class="flex justify-between w-full px-3">
                            <button
                                class="shadow bg-indigo-600 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded"
                                type="submit">
                                Send Message
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{--  =========================================== footer ==================  --}}
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="bg-gray-900">
            <div class="max-w-screen-lg py-10 px-4 sm:px-6 text-gray-100 sm:flex justify-between mx-auto">
                <div class="p-5 sm:w-2/12 border-r">
                    <div class="text-sm uppercase text-indigo-600 font-bold">Menu</div>
                    <ul>
                        <li class="my-2">
                            <a class="hover:text-indigo-600" href="#">Home</a>
                        </li>
                        <li class="my-2">
                            <a class="hover:text-indigo-600" href="#">Services</a>
                        </li>
                        <li class="my-2">
                            <a class="hover:text-indigo-600" href="#">Products</a>
                        </li>
                        <li class="my-2">
                            <a class="hover:text-indigo-600" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
                <div class="p-5 sm:w-7/12 border-r text-center">
                    <h3 class="font-bold text-2xl text-gray-100 mb-4">TA-AUTO</h3>
                    <p class="text-gray-100 text-sm mb-10">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s.</p>
                </div>
                <div class="p-5 sm:w-3/12">
                    <div class="text-sm uppercase text-gray-100 font-bold">Contact Us</div>
                    <ul>
                        <li class="my-2">
                            <a class="hover:text-gray-100" href="#">contact@company.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex py-5 m-auto text-gray-100 text-sm flex-col items-center border-t max-w-screen-xl">
                <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
                    <a href="#" class="w-6 mx-1">

                    </a>
                    <a href="#" class="w-6 mx-1">

                    </a>
                    <a href="#" class="w-6 mx-1">

                    </a>
                    <a href="#" class="w-6 mx-1">

                    </a>
                    <a href="#" class="w-6 mx-1">

                    </a>
                </div>
                <div class="my-5">© Copyright 2023. All Rights Reserved.</div>
            </div>
        </div>
    </footer>

    {{--  </body>
</html>  --}}
