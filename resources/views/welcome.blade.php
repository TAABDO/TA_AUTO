@extends('layouts.app')
<!-- heroSection -->

<section
    class="relative h-screen flex flex-row items-center justify-center justify-between text-center text-white rounded-lg ">
    <div class="absolute top-[30%] right-0 w-[70%] h-full overflow-hidden z-10">
        <img src="{{ asset('img/imagesPFR/carhome_2_-removebg.png') }}" class="w-[220em]" alt="">
    </div>

    <div class="z-0 relative top-20 min-h-screen flex flex-row items-center justify-content-around gap-24 bg-gray-25">
        <div
            class="flex flex-col gap-6 min-h-screen items-center justify-center bg-gradient-to-tr to-blue-700 from-indigo-900 drop-shadow-2xl p-20">
            <div class="w-full h-full flex justify-center items-center">
                <h1 id="typewriter" class="text-4xl font-bold"></h1>
            </div>
            <div>
                <a href="{{ route('car.index') }}" title="Get quote now"
                    class="relative inline-flex items-center justify-center px-8 py-4 text-lg font-bold text-white transition-all duration-200 bg-gray-900 font-pj rounded-xl focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
                    role="button">Get it now
                </a>
            </div>
        </div>
    </div>
</section>
<!-- endheroSection -->

<section class="car spad bg-gray-100 pt-[10em] flex flex-col justify-center">

    <div id="best" style="visibility: hidden" class="text-center">
        <div class="section-title">
            <span class="text-red-500 font-semibold">Best Vehicle Offers</span>
            <h2 class="text-3xl font-bold text-gray-800">Best Vehicle Offers</h2>
        </div>
    </div>

    <div id="announce" style="visibility: hidden"
        class="flex flex-wrap justify-center sm:justify-center md:justify-center lg:justify-center gap-10 pt-10 p-10">
        @foreach ($announcements as $announcement)
            <div class="w-full sm:w-auto md:w-auto lg:w-auto">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                        <div class="relative">
                            <div class="car__item__pic__slider owl-carousel">
                                <img src="{{ $announcement->getFirstMediaUrl('images') }}" class="w-full h-44"
                                    alt="Car 1">
                            </div>
                            @if ($announcement->type === 'rentel')
                                <span id="car-option" style="background-color: rgb(245, 23, 23)"
                                    class="car-option absolute top-0 right-0 text-white py-1 px-2 rounded-bl-lg">
                                    For {{ $announcement->type }}
                                </span>
                            @else
                                <span id="car-option" style="background-color: rgb(44, 198, 100)"
                                    class="car-option absolute top-0 right-0 text-white py-1 px-2 rounded-bl-lg">
                                    For {{ $announcement->type }}
                                </span>
                            @endif

                        </div>
                        <div class="p-4">
                            <div class="label-date bg-gray-100 Text-gray-700 py-1 px-2 w-16 rounded-bl-lg shadow-lg">
                                <span>
                                    {{ $announcement->car->year }}
                                </span>
                            </div>
                            <h5 class="text-xl font-semibold mt-2"><a href="#"
                                    class="text-gray-800 hover:text-red-500">
                                    {{ $announcement->car->model }}
                                </a></h5>
                            <ul class="text-gray-600 mt-2 flex flex-row justify-evenly">
                                <li><span>{{ $announcement->car->km }}</span> mi | </li>
                                <li>{{ $announcement->car->transmission }} | </li>
                                <li><span>{{ $announcement->car->engine_capacity }}</span> hp |</li>
                            </ul>
                        </div>
                        <div class="car__item__price mt-4 p-2 bg-gray-100 border-top flex flex-row gap-5">
                            <h6 class="text-lg font-semibold bg-green-300 p-2 rounded-full shadow-lg">
                                {{ $announcement->situation }}
                            </h6>
                            @if ($announcement->type === 'rentel')
                                <h6 class="text-lg font-semibold p-2">${{ $announcement->price }}<span
                                        class="text-sm">/Day</span>
                                </h6>
                            @else
                                <h6 class="text-lg font-semibold p-2">${{ $announcement->price }}<span
                                        class="text-sm"></span>
                                </h6>
                            @endif

                        </div>
                        <div class="p-4">
                            <a href="{{ route('car.details', $announcement->id) }}"
                                class="text-white bg-blue-700 w-10 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

{{--  =====================  services ========= --}}
<section id="features" class="px-6 py-30 pt-[2em] md:py-30 md:px-10 ">

    <div class="relative mx-auto max-w-5xl text-center">
        <span class="text-red-400 my-3 flex items-center justify-center font-medium uppercase tracking-wider">
            Why choose us
        </span>
        <h2 class="block w-full font-bold text-3xl text-gray-700 sm:text-4xl">
            What We Offers
        </h2>
        <p class="mx-auto my-4 w-full max-w-xl text-center font-medium text-gray-400">
            Our templates allow for maximum customization. No technical skills required our intuitive design tools
            let you get the job done easily.
        </p>
    </div>

    <div class="relative mx-auto max-w-5xl z-10 grid grid-cols-1 gap-10 pt-14 sm:grid-cols-2 lg:grid-cols-3">
        <div
            class="rounded-md border border-neutral-300 bg-gray-200 p-8 text-center shadow-md transform transition-transform hover:-translate-y-2 hover:bg-white hover:text-gray-900">
            <div
                class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                <img src="img/services/services-1.png" alt>
            </div>
            <h5 class="font-bold">Rental A Cars</h5>
            <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">
                Consectetur adipiscing elit incididunt ut labore et dolore magna aliqua. Risus commodo
                viverra maecenas.</p>
            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
        </div>

        <div
            class="rounded-md border border-neutral-300 bg-gray-200 p-8 text-center shadow-md transform transition-transform hover:-translate-y-2 hover:bg-white hover:text-gray-900">
            <div
                class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                <img src="img/services/services-3.png" alt>
            </div>
            <h5 class="font-bold">Car Maintenance</h5>
            <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-500">We build our templates for
                speed in mind, for super-fast load times so your customers never waver.
            </p>
            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
        </div>

        <div
            class="rounded-md border border-neutral-300 bg-gray-200 p-8 text-center shadow-md transform transition-transform hover:-translate-y-2 hover:bg-white hover:text-gray-900">
            <div
                class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                <img src="img/services/services-2.png" alt>
            </div>
            <h5 class="font-bold">Buying A Cars</h5>
            <p class="my-4 mb-0 font-normal leading-relaxed tracking-wide text-gray-400">
                Everything you need to succeed
                and launch your landing page, right out of the box. No need to install anything else.
            </p>
        </div>
    </div>

</section>
{{--  ============================================== feature ======  --}}
<section class="flex flex-col bg-gray-800 md:flex-row justify-evenly items-center mt-10 p-20">

    <!-- Feature Text -->
    <div class="w-full md:w-1/2 mb-8 pl-10 pr-10 flex flex-col gap-5 md:mb-0">
        <div class="feature__text">
            <span class="text-red-400 my-3 block font-medium uppercase tracking-wider">
                Our Feature
            </span>
            <h2 class="font-bold text-3xl text-gray-200 sm:text-4xl">
                We Are a Trusted <br> Name In Auto
            </h2>
        </div>
        <div class="feature__text__desc mt-4 text-gray-400">
            <p class="max-w-md">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,do eiusmod
                <br>tempor incididunt ut labore et Lorem ipsum dolor sit amet,
                <br>consectetur adipiscing elit, sed do eiusmod tempor
                <br>incididunt ut labore et dolore magna aliqua. Quis ipsum
                <br>suspendisse ultrices gravida . Risus commodo viverra
                <br>maecenas accumsan lacus vel facilisis.
                <br>
            </p>
        </div>
        <div class="feature__text__btn mt-4">
            <a href="#"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">About
                Us</a>

            <a href="#"
                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Our
                Partners</a>
        </div>
    </div>

    <!-- Car Image -->
    <div class="w-full md:w-2/2 mb-8 md:mb-0">
        <img src="{{ URL::asset('img/imagesPFR/carhome.png') }}" w-[50%] alt="car.png">
    </div>

    <!-- Feature Items -->
    <div class="flex flex-col md:w-1/2 md:flex-row gap-20">
        <div class="flex flex-col gap-6">
            <div class="feature__item mb-4">
                <div
                    class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                    <img src="{{ URL::asset('img/feature/feature-1.png') }}" alt="Engine Icon">
                </div>
                <div class="pl-5">
                    <h6 class="text-gray-300 hover:text-red-400">Engine</h6>
                </div>
            </div>
            <div class="feature__item mb-4">
                <div
                    class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                    <img src="{{ URL::asset('img/feature/feature-2.png') }}" alt="Turbo Icon">
                </div>
                <div class="pl-7">
                    <h6 class="text-gray-300 hover:text-red-400">Turbo</h6>
                </div>
            </div>
            <div class="feature__item mb-4">
                <div
                    class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                    <img src="{{ URL::asset('img/feature/feature-3.png') }}" alt="Cooling Icon">
                </div>
                <div class="pl-5">
                    <h6 class="text-gray-300 hover:text-red-400">Cooling</h6>
                </div>
            </div>
            <div class="feature__item mb-4">
                <div
                    class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                    <img src="{{ URL::asset('img/feature/feature-4.png') }}" alt="Suspension Icon">
                </div>
                <div class="pl-4">
                    <h6 class="text-gray-300 hover:text-red-400">Suspension</h6>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6">
            <div class="feature__item mb-4">
                <div
                    class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                    <img src="{{ URL::asset('img/feature/feature-5.png') }}" alt="Electrical Icon">
                </div>
                <div class="pl-2">
                    <h6 class="text-gray-300 hover:text-red-400">Electrical</h6>
                </div>
            </div>
            <div class="feature__item mb-4 flex flex-col align-content-center justify-center">
                <div
                    class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                    <img src="{{ URL::asset('img/feature/feature-6.png') }}" alt="Brakes Icon">
                </div>
                <div class="pl-4">
                    <h6 class="text-gray-300 hover:text-red-400">Brakes</h6>
                </div>
            </div>
            <div class="feature__item mb-4 flex flex-col">
                <div
                    class="button-text mx-auto flex h-20 w-20 rounded rounded-full items-center justify-center border bg-gray-100">
                    <img src="{{ URL::asset('img/feature/feature-6.png') }}" alt="Brakes Icon">
                </div>
                <div class="pl-4">
                    <h6 class="text-gray-300 hover:text-red-400">Brakes</h6>
                </div>
            </div>
        </div>
    </div>
</section>
{{--  ======================================= cars ===========  --}}

 <section class="blog pt-5">
    <div class="text-center">
        <div class="section-title">
            <span class="text-red-500 font-semibold">Latest blogs</span>
            <h2 class="text-3xl font-bold text-gray-800">Best Vehicle Offers</h2>
        </div>
    </div>
    <div class="grid grid-cols-1 pt-5 p-7 md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach ($blogs as $blog)
            <div
                class="bg-white border border-gray-200 rounded-lg shadow-md transition duration-300 transform hover:scale-105">
                <img class="rounded-t-lg w-full h-40" src="{{ $blog->getFirstMediaUrl('Blog_Image') }}"
                    alt="">
                <div class="p-5">
                    <ul class="flex flex-row justify-between text-gray-600 text-sm mb-3">
                        <li>By {{ $blog->user->fullname }}</li>
                        <li>{{ $blog->created_at }}</li>
                    </ul>
                    <a href="{{ route('blogs.details', $blog->id) }}"
                        class="block text-lg font-bold text-gray-900 hover:text-blue-700 mb-2">
                        {{ $blog->title }}
                    </a>
                    <p class="text-gray-700 mb-4">
                        {{ \Illuminate\Support\Str::limit($blog->description, 100) }}
                    </p>
                    <a href="{{ route('blogs.details', $blog->id) }}"
                        class="inline-block px-4 py-2 text-sm font-semibold text-white bg-blue-700 rounded-lg hover:bg-blue-800 transition duration-300 ease-in-out">
                        Read more
                    </a>
                </div>
            </div>
        @endforeach
    </div>
 </section>

<section>
    <div class="items-center w-12/12 grid-cols-2 mx-auto overflow-x-hidden lg:grid md:py-14 lg:py-24 xl:py-14 lg:mt-3 xl:mt-5"
        data-aos="fade-right" data-aos-duration="800">
        <div class="pl-16 md:mb-14 py-14 md:py-0">
            <h1 class="text-3xl font-semibold text-blue-900 xl:text-5xl lg:text-3xl"><span class="block w-full">Get a
                    financial experience</span> for growing your business!
            </h1>
            <p class="py-4 text-lg text-gray-500 2xl:py-8 md:py-6 2xl:pr-5">
                Empowering you to make better financial decisions, We truly are professional money planners...
            </p>
            <div class="mt-4">
                <a href="#contact"
                    class="px-5 py-3 text-lg tracking-wider text-white bg-blue-500 rounded-lg md:px-8 hover:bg-blue-600 group">
                    <span>Explore More</span>
                </a>
            </div>
        </div>

        <div class="pb-10 overflow-hidden md:p-10 lg:p-0 sm:pb-0">
            <img id="heroImg1"
                class="transition-all duration-300 ease-in-out hover:scale-105 lg:w-full sm:mx-auto sm:w-4/6 sm:pb-12 lg:pb-0"
                src="{{ asset('img/chooseus-video.png') }}" alt="Awesome hero page image" width="500"
                height="488" />
        </div>
    </div>
</section>

<!-- Footer -->

<!-- Js Plugins -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#filterButton').click(function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('car.filterCar') }}",
                type: 'GET',
                data: {
                    model: $('#model').val(),
                    year: $('#year').val(),
                    situation: $('#situation').val(),
                    price: $('#price').val(),
                },
                success: function(response) {
                    $('#carList').html(response);
                }
            });
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

<script>
    const wordds = ["Hello, World! Welcome to my website!", "Drive the Future with TA-AUTO: ",
        " Your Trusted Car Marketplace.", "TA-AUTO: Where Every Mile Tells a Story.", " Start Your Journey Today."
    ];
    let i = 0;
    let j = 0;
    let currentWord = "";
    let isDeleting = false;

    function type() {
        currentWord = wordds[i];
        if (isDeleting) {
            document.getElementById("typewriter").textContent = currentWord.substring(0, j - 1);
            j--;
            if (j == 0) {
                isDeleting = false;
                i++;
                if (i == wordds.length) {
                    i = 0;
                }
            }
        } else {
            document.getElementById("typewriter").textContent = currentWord.substring(0, j + 1);
            j++;
            if (j == currentWord.length) {
                isDeleting = true;
            }
        }
        setTimeout(type, 100);
    }

    type();
</script>


<script>
    new Promise((resolve, reject) => {

        setTimeout(function() {
            document.getElementById('best').style.visibility = "visible";
            resolve();
        }, 1000)


    }).then(() => {
        setTimeout(function() {
            document.getElementById('announce').style.visibility = "visible";
        }, 1000)


    })
</script>
