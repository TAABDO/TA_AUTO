<!DOCTYPE html>
<html lang="zxx">

{{--  <!-- Mirrored from preview.colorlib.com/theme/hvac/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 15:26:51 GMT -->  --}}

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    {{--  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">  --}}
    {{--  <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">  --}}
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script nonce="c618aefd-1f82-4794-9efd-5d944be03164">
        try {
            (function(w, d) {
                ! function(du, dv, dw, dx) {
                    du[dw] = du[dw] || {};
                    du[dw].executed = [];
                    du.zaraz = {
                        deferred: [],
                        listeners: []
                    };
                    du.zaraz.q = [];
                    du.zaraz._f = function(dy) {
                        return async function() {
                            var dz = Array.prototype.slice.call(arguments);
                            du.zaraz.q.push({
                                m: dy,
                                a: dz
                            })
                        }
                    };
                    for (const dA of ["track", "set", "debug"]) du.zaraz[dA] = du.zaraz._f(dA);
                    du.zaraz.init = () => {
                        var dB = dv.getElementsByTagName(dx)[0],
                            dC = dv.createElement(dx),
                            dD = dv.getElementsByTagName("title")[0];
                        dD && (du[dw].t = dv.getElementsByTagName("title")[0].text);
                        du[dw].x = Math.random();
                        du[dw].w = du.screen.width;
                        du[dw].h = du.screen.height;
                        du[dw].j = du.innerHeight;
                        du[dw].e = du.innerWidth;
                        du[dw].l = du.location.href;
                        du[dw].r = dv.referrer;
                        du[dw].k = du.screen.colorDepth;
                        du[dw].n = dv.characterSet;
                        du[dw].o = (new Date).getTimezoneOffset();
                        if (du.dataLayer)
                            for (const dH of Object.entries(Object.entries(dataLayer).reduce(((dI, dJ) => ({
                                    ...dI[1],
                                    ...dJ[1]
                                })), {}))) zaraz.set(dH[0], dH[1], {
                                scope: "page"
                            });
                        du[dw].q = [];
                        for (; du.zaraz.q.length;) {
                            const dK = du.zaraz.q.shift();
                            du[dw].q.push(dK)
                        }
                        dC.defer = !0;
                        for (const dL of [localStorage, sessionStorage]) Object.keys(dL || {}).filter((dN => dN
                            .startsWith("_zaraz_"))).forEach((dM => {
                            try {
                                du[dw]["z_" + dM.slice(7)] = JSON.parse(dL.getItem(dM))
                            } catch {
                                du[dw]["z_" + dM.slice(7)] = dL.getItem(dM)
                            }
                        }));
                        dC.referrerPolicy = "origin";
                        dC.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(du[
                            dw])));
                        dB.parentNode.insertBefore(dC, dB)
                    };
                    ["complete", "interactive"].includes(dv.readyState) ? zaraz.init() : du.addEventListener(
                        "DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document)
        } catch (e) {
            throw fetch("/cdn-cgi/zaraz/t"), e;
        };
    </script>
</head>

<body>

    <!-- Navigation -->
    <x-navbar />


    <header class="header pt-[7rem]">
        <section class="bg-cover bg-center bg-no-repeat bg-opacity-50 relative h-[40%]"
            style="background-image: url('{{ URL::asset('img/imagesPFR/AudiR.jpg') }}');">
            <div class="absolute inset-0 bg-gray-900 bg-opacity-75"></div>
            <div class="container mx-auto py-32 px-6 text-center relative">
                <h1 class="text-4xl sm:text-5xl font-bold text-white">Blog Section</h1>
                <div class="text-gray-300 text-xl mt-4">
                    <a href="{{ route('car.index') }}" class="hover:text-red-500">Home</a>
                    <span class="mx-2">&rsaquo;</span>
                    <span class="text-red-500">Blog</span>
                </div>
            </div>
        </section>
    </header>

    {{--  big section  --}}
    <section class="flex flex-row justify-evenly gap-10">

        {{--  left section  --}}
        <section class="flex flex-col gap-10">
            <section class="blog pt-5">

                <div class="text-center">
                    <div class="section-title">
                        <span class="text-red-500 font-semibold">Latest blogs</span>
                        <h2 class="text-3xl font-bold text-gray-800">Best Vehicle Offers</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 pt-5 p-7 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($blogs as $blog)
                        <div class="bg-white border border-gray-200 rounded-lg shadow-md transition duration-300 transform hover:scale-105">
                            <img class="rounded-t-lg w-full h-40" src="{{ $blog->getFirstMediaUrl('Blog_Image') }}" alt="">
                            <div class="p-5">
                                <ul class="flex flex-row justify-between text-gray-600 text-sm mb-3">
                                    <li>By {{ $blog->user->fullname }}</li>
                                    <li>{{ $blog->created_at }}</li>
                                </ul>
                                <a href="{{ route('blogs.details', $blog->id) }}" class="block text-lg font-bold text-gray-900 hover:text-blue-700 mb-2">
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
            <div class="mb-4 flex justify-center space-x-4" aria-label="Pagination">

                    <span class="rounded-lg border border-teal-500 px-2 py-2 text-gray-700">
                        <span class="sr-only">Previous</span>
                        <svg class="mt-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </span>
                    <span class="rounded-lg border border-teal-500 bg-teal-500 px-4 py-2 text-white">1</span>
                    <a class="rounded-lg border border-teal-500 px-4 py-2 text-gray-700" href="/page/2">2
                    </a>
                    <a class="rounded-lg border border-teal-500 px-4 py-2 text-gray-700" href="/page/3">3
                    </a>
                    <a class="rounded-lg border border-teal-500 px-2 py-2 text-gray-700" href="/page/2">
                        <span class="sr-only">Next</span>
                        <svg class="mt-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </a>
            </div>
        </section>
        {{--  endfirst section  --}}

        {{--  right section  --}}
        <section>
            <div class="flex flex-col w-100">
                <div class="blog__sidebar">
                    <form action="#" class="blog__sidebar__search">
                        <input type="text" placeholder="Search...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <div class="blog__sidebar__feature">
                        <h4>Feature News</h4>
                        <div class="blog__sidebar__feature__item">
                            <h6><a href="#">Where To Look For Cheap Brochure</a></h6>
                            <ul>
                                <li>By Polly Williams</li>
                                <li>Dec 27, 2018</li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__feature__item">
                            <h6><a href="#">Using Banner Stands To Increase</a></h6>
                            <ul>
                                <li>By Evelyn Lane</li>
                                <li>Dec 17, 2018</li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__feature__item">
                            <h6><a href="#">Promotional Advertising Specialty</a></h6>
                            <ul>
                                <li>By Don Townsend</li>
                                <li>Dec 22, 2018</li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog__sidebar__categories">
                        <h4>Categories</h4>
                        <ul>
                            <li><a href="#">Creativity</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Inspiration</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div>
                    <div class="blog__sidebar__tag">
                        <h4>Tag</h4>
                        <a href="#">Car Dealer</a>
                        <a href="#">bmw</a>
                        <a href="#">Chevrolet</a>
                        <a href="#">ferrari</a>
                        <a href="#">Honda</a>
                        <a href="#">Hatchback</a>
                    </div>
                    <div class="blog__sidebar__newslatter">
                        <h4>Newsletter</h4>
                        <p>Subscribe our newsletter gor get</p>
                        <form action="#">
                            <input type="text" placeholder="Your email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        {{--  endright section  --}}
    </section>

    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="footer__contact">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__title">
                            <h2>Contact Us Now!</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__contact__option">
                            <div class="option__item"><i class="fa fa-phone"></i> (+12) 345 678 910</div>
                            <div class="option__item email"><i class="fa fa-envelope-o"></i> <a
                                    href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="64270b080b16080d06240309050d084a070b09">[email&#160;protected]</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt></a>
                        </div>
                        <p>Any questions? Let us know in store at 625 Gloria Union, California, United Stated or call us
                            on (+1) 96 123 8888</p>
                        <div class="footer__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="google"><i class="fa fa-google"></i></a>
                            <a href="#" class="skype"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3">
                    <div class="footer__widget">
                        <h5>Infomation</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Purchase</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Payemnt</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Shipping</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Return</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="footer__widget">
                        <h5>Infomation</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Hatchback</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Sedan</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> SUV</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Crossover</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer__brand">
                        <h5>Top Brand</h5>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Abarth</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Acura</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Alfa Romeo</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Audi</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i> BMW</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Chevrolet</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Ferrari</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i> Honda</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__copyright__text">
                <p>Copyright &copy;
                    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                </p>
            </div>

        </div>
    </footer>


    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
        integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
        data-cf-beacon='{"rayId":"863d03f1be3c5e47","b":1,"version":"2024.2.4","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/hvac/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 15:26:51 GMT -->

</html>
