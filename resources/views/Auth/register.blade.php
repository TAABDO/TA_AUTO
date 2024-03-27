<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobConnect</title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <style>
        .smooth {
            transition: box-shadow 0.3s ease-in-out;
        }

        ::selection {
            background-color: aliceblue
        }

        :root {
            ::-webkit-scrollbar {
                height: 10px;
                width: 10px;
            }

            ::-webkit-scrollbar-track {
                background: #efefef;
                border-radius: 6px
            }

            ::-webkit-scrollbar-thumb {
                background: #d5d5d5;
                border-radius: 6px
            }

            ::-webkit-scrollbar-thumb:hover {
                background: #c4c4c4
            }
        }

        /*scroll to top*/
        .scroll-top {
            position: fixed;
            z-index: 50;
            padding: 0;
            right: 30px;
            bottom: 100px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(15px);
            height: 46px;
            width: 46px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            transition: all .4s ease;
            border: none;
            box-shadow: inset 0 0 0 2px #ccc;
            color: #ccc;
            background-color: #fff;
        }

        .scroll-top.is-active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .scroll-top .icon-tabler-arrow-up {
            position: absolute;
            stroke-width: 2px;
            stroke: #333;
        }

        .scroll-top svg path {
            fill: none;
        }

        .scroll-top svg.progress-circle path {
            stroke: #333;
            stroke-width: 4;
            transition: all .4s ease;
        }

        .scroll-top:hover {
            color: var(--ghost-accent-color);
        }

        .scroll-top:hover .progress-circle path,
        .scroll-top:hover .icon-tabler-arrow-up {
            stroke: var(--ghost-accent-color);
        }
    </style>
</head>

<body class="bg-white font-sans leading-normal tracking-normal">

    <!--Nav-->
    <nav class="bg-violet-300 p-4 mt-0 w-full">
        <div class="container mx-auto flex items-center justify-between ">
            <div class="flex text-white font-extrabold">
                <a class="flex text-white text-base no-underline hover:text-white hover:no-underline" href="#">
                    <span class="hidden w-0 md:w-auto md:block pl-1">JobConnect</span>
                </a>
            </div>
            <div class="flex text-sm">
                <ul class="list-reset flex mx-auto ">
                    <li class="mr-2">
                        <a class="inline-block py-2 px-2 text-white no-underline" href="">Home</a>
                    </li>
                    <li class="mr-2">
                        <a class="inline-block text-white text-indigo-200 no-underline hover:text-white hover:text-underline py-2 px-2"
                            href="#">Offers</a>
                    </li>
                </ul>
            </div>
            <div>
                <a href="{{ route('login') }}"
                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                    in</a>

                <a href="{{ route('register') }}"
                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            </div>
        </div>
    </nav>

    <!--   Scroll Top Button  -->
    <button class="btn-toggle-round scroll-top js-scroll-top" type="button" title="Scroll to top">
        <svg class="progress-circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-up" width="24"
            height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="cuurentColor" fill="none"
            stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <line x1="12" y1="5" x2="12" y2="19" />
            <line x1="18" y1="11" x2="12" y2="5" />
            <line x1="6" y1="11" x2="12" y2="5" />
        </svg>
    </button>
    {{--  {{ $slot }}  --}}

    <h1 class="text-lg font-bold text-gray-700 leading-tight text-center mt-12 mb-5">Create your acoount now!</h1>
    <form id="signUpForm" class="p-12 shadow-md rounded-2xl bg-white mx-auto border-solid border-2 border-gray-100 mb-8"
        method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <!-- start step indicators -->
        <div class="form-header flex gap-3 mb-4 text-xs text-center">
            <span class="stepIndicator flex-1 pb-8 relative">AccountSetup</span>
            <span class="stepIndicator flex-1 pb-8 relative">Personal Details</span>
        </div>
        <!-- end step indicators -->
        <!-- step one -->
        <div class="step">
            <div class="text-gray-900 font-medium text-xs text-center flex flex-col items-center justify-center">
                <label for="image-input" class="cursor-pointer">
                    <img id="preview-image" class="h-40 w-40 rounded-full shadow-xl border-2 border-gray-400"
                        src="{{ URL::asset('img/user.png') }}" alt="user image">
                </label>
                <input type="file" id="image-input" name="image" class="hidden" onchange="previewImage(event)"
                    required>
            </div>
            <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5">Create your account</p>
            <div class="mb-6">
                <input type="text" placeholder="Full name" name="fullname"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                    required />
            </div>
            <div class="mb-6">
                <input type="email" placeholder="Email Address" name="email" id="email"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                    required>
                <div id="email_error" class="text-red-500"></div>
            </div>

            <div class="mb-6">
                <input type="password" placeholder="Password" name="password" id="password"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200"
                    required>
            </div>
            <div class="mb-6">
                <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200" />
                <div id="password_error" class="text-red-500"></div>
            </div>
        </div>
        <!-- step two -->
        <div class="step">
            <div class="mb-6"> <input type="text" placeholder="Address" name="address"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
            </div>
            <div class="mb-6"> <input type="text" placeholder="phone number" name="phone"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2">Role</label>
                <div class="flex items-center">
                    <input type="radio" id="role_candidate" name="role_id" value="2" class="mr-2">
                    <label for="role_candidate" class="mr-4">Candidate</label>

                    <input type="radio" id="role_recruiter" name="role_id" value="3" class="mr-2">
                    <label for="role_recruiter">Entrepreneur</label>
                    <input type="radio" id="role_representative" name="role_id" value="4" class="mr-2">
                    <label for="role_representative" class="mr-4">Representative</label>

                </div>
            </div>

            <div class="mb-6" id="companySelect" style="display: none;">
                <label class="block text-gray-700 font-medium mb-2">Select Your Company</label>
                <select name="company_id"
                    class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
                    {{--  @foreach ($companies as $company)
                        <option value="{{ $company['id'] }}">{{ $company['name'] }}</option>
                    @endforeach  --}}
                </select>
            </div>
            <div class="mb-6" id="companyDetails" style="display: none;">
                <p class="text-md text-gray-700 leading-tight text-center mt-8 mb-5">Your company details</p>
                <div class="text-gray-900 font-medium text-xs text-center flex flex-col items-center justify-center">
                    <label for="logo-input" class="cursor-pointer">
                        <img id="logo-preview-image" class="h-40 w-40 rounded-full shadow-xl border-2 border-gray-400"
                            src="{{ URL::asset('img/company.jpg') }}" alt="user image">
                    </label>
                    <input type="file" id="logo-input" name="logo" class="hidden" onchange="logopreviewImage(event)"
                        required>
                </div>
                <div class="mb-6"> <input type="text" placeholder="company name" name="name"
                        class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
                </div>
                <div class="mb-6"> <input type="text" placeholder="company localisation" name="localisation"
                        class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
                </div>
                <div class="mb-6"> <input type="text" placeholder="company description" name="description"
                        class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200">
                </div>
            </div>
        </div>

        <div class="form-footer flex gap-3">
            <button type="button" id="prevBtn"
                class="flex-1 focus:outline-none border border-gray-300 py-2 px-5 rounded-lg shadow-sm text-center text-gray-700 bg-white hover:bg-gray-100 text-lg"
                onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn"
                class="flex-1 border border-transparent focus:outline-none p-3 rounded-md text-center text-white bg-indigo-600 hover:bg-indigo-700 text-lg"
                onclick="nextPrev(1)">Next</button>
        </div>
    </form>

    <script>
        /* Progress bar */
        //Source: https://alligator.io/js/progress-bar-javascript-css-variables/
        var h = document.documentElement,
            b = document.body,
            st = 'scrollTop',
            sh = 'scrollHeight',
            progress = document.querySelector('#progress'),
            scroll;
        var scrollpos = window.scrollY;
        var header = document.getElementById("header");

        document.addEventListener('scroll', function() {

            /*Refresh scroll % width*/
            scroll = (h[st] || b[st]) / ((h[sh] || b[sh]) - h.clientHeight) * 100;
            progress.style.setProperty('--scroll', scroll + '%');

            /*Apply classes for slide in bar*/
            scrollpos = window.scrollY;

            if (scrollpos > 100) {
                header.classList.remove("hidden");
                header.classList.remove("fadeOutUp");
                header.classList.add("slideInDown");
            } else {
                header.classList.remove("slideInDown");
                header.classList.add("fadeOutUp");
                header.classList.add("hidden");
            }

        });

        // scroll to top
        const t = document.querySelector(".js-scroll-top");
        if (t) {
            t.onclick = () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                })
            };
            const e = document.querySelector(".scroll-top path"),
                o = e.getTotalLength();
            e.style.transition = e.style.WebkitTransition = "none", e.style.strokeDasharray = `${o} ${o}`, e.style
                .strokeDashoffset = o, e.getBoundingClientRect(), e.style.transition = e.style.WebkitTransition =
                "stroke-dashoffset 10ms linear";
            const n = function() {
                const t = window.scrollY || window.scrollTopBtn || document.documentElement.scrollTopBtn,
                    n = Math.max(document.body.scrollHeight, document.documentElement.scrollHeight, document.body
                        .offsetHeight, document.documentElement.offsetHeight, document.body.clientHeight, document
                        .documentElement.clientHeight),
                    s = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
                var l = o - t * o / (n - s);
                e.style.strokeDashoffset = l
            };
            n();
            const s = 100;
            window.addEventListener("scroll", (function(e) {
                n();
                (window.scrollY || window.scrollTopBtn || document.getElementsByTagName("html")[0]
                    .scrollTopBtn) > s ? t.classList.add("is-active") : t.classList.remove("is-active")
            }), !1)
        }
    </script>

</body>

</html>
