<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HVAC | Template</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script nonce="ebb68183-4f48-495b-9b2f-418cf89ae9b9">
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

    <nav class="bg-white dark:bg-white-700 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-200">
        <nav class="bg-gray-600 border-gray-200 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline">(555)
                        412-1234</a>
                    <a href="#"
                        class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                    bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                    focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                    dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Login</a>
                </div>
            </div>
        </nav>
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-gray-600">TA-AUTO</span>
            </a>
            @auth
                {{-- User Authenticated --}}
                <div class="flex items-center md:order-2 space-x-3 gap-10 md:space-x-0 rtl:space-x-reverse">
                    <!-- Search Bar -->
                    <div class="relative">
                        <input type="text" placeholder="Search"
                            class="block w-64 py-2 px-4 text-sm text-gray-700 placeholder-gray-400 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-gray-800 dark:text-white dark:placeholder-gray-500 dark:border-gray-600">
                        <button type="button"
                            class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-500 focus:outline-none">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>
                        </button>
                    </div>
                    <!-- User Profile Dropdown -->
                    <div class="relative">
                        <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                            data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg"
                                alt="user photo">
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="user-dropdown">
                            <!-- Dropdown Content -->
                        </div>
                    </div>
                    <!-- Mobile Menu Toggle -->
                    <button data-collapse-toggle="navbar-user" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            @else
                {{-- User Not Authenticated --}}
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <!-- Authentication Links -->
                    <a href="{{ route('login') }}"><button type="button"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                        bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                        focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                        dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Login</button></a>
                    <a href="{{ route('register') }}"> <button type="button"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none
                        bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4
                        focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800
                        dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Register</button></a>
                    <!-- Mobile Menu Toggle -->
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
            @endauth

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 ml-20" id="navbar-cta">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                    <li>
                        <a href="{{ route('home') }}" class="block py-2 px-3 md:p-0 text-gray-700 rounded hover:bg-gray-100 "
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('car.index') }}"
                            class="block py-2 px-3 md:p-0 text-gray-700 rounded hover:bg-gray-100 ">Cars</a>
                    </li>
                    <li>
                        <a href="{{ route('Blog.Blog') }}"
                            class="block py-2 px-3 md:p-0 text-gray-700 rounded hover:bg-gray-100 ">blog</a>
                    </li>
                    <li>
                        <a href="{{ route('Blog.Blog') }}"
                            class="block py-2 px-3 md:p-0 text-gray-700 rounded hover:bg-gray-100">Service
                            Micanique</a>
                    </li>
                    <li>
                        <a href="{{ route('contact.contact') }}"
                            class="block py-2 px-3 md:p-0 text-gray-700 rounded hover:bg-gray-100">Contact</a>
                    </li>
                </ul>
            </div>
            {{-- Mobile Menu --}}
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <!-- Mobile Menu Content -->
            </div>
        </div>
    </nav>
    <section class="blog-details-hero spad set-bg" data-setbg="img/blog/details/details-hero-bg.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="blog__details__hero__text">
                        <span class="label">Car Dealer, BMW</span>
                        <h2>An Update on Adobe Fuse as Adobe Moves to the Future of 3D & AR Development</h2>
                        <ul>
                            <li><img src="img/blog/details/details-hero-avatar.png" alt> <span>By Evelyn Lane</span>
                            </li>
                            <li><i class="fa fa-calendar-o"></i> <span>Dec 17, 2019</span></li>
                            <li><i class="fa fa-edit"></i> <span>2 Comment</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__pic">
                        <img src="img/blog/details/details-pic.jpg" alt>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__text">
                        <p>WordPress, the premier free open-source blogging utility, has gone through several upgrades
                            in its life. Today it’s one of the most popular blogging tools on the Internet; it’s easy to
                            use, powerful, and very versatile. It also has a very active base of skilled users who are
                            eager to improve the product and to help out those who haven’t tried it before.</p>
                        <p>Though the Strayhorn 1.5 version is the favorite for many, it is not as stable or as secure
                            as the newest version 2.0.3. The best part of the new version is the security patch; the new
                            “nonce” security key reduces the chances of a malicious hacker finding a way into your admin
                            panel.</p>
                    </div>
                    <div class="blog__details__quote">
                        <p>Though a major upgrade to 2.1 is due out soon, the 2.0.3 is something you should definitely
                            download and install if only</p>
                    </div>
                    <div class="blog__details__desc">
                        <p>In addition to the 2.0.3 install, you should be aware that some bugs have already been found,
                            and that a plugin will need to be installed to repair those bugs. If you modify any of the
                            files that this patch plugin fixes, you’ll need to either merge the changes with the new
                            files or make those changes manually once again. You can find these issues by running a diff
                            to locate changes; if the only changes you find are your own, then you’re fine, and
                            otherwise you’ll need to merge them manually into the</p>
                    </div>
                    <div class="blog__details__share">
                        <a href="#" class="blog__details__share__item">
                            <i class="fa fa-facebook"></i>
                            <span>Share</span>
                        </a>
                        <a href="#" class="blog__details__share__item twitter">
                            <i class="fa fa-twitter"></i>
                            <span>Share</span>
                        </a>
                        <a href="#" class="blog__details__share__item google">
                            <i class="fa fa-google"></i>
                            <span>Share</span>
                        </a>
                        <a href="#" class="blog__details__share__item linkedin">
                            <i class="fa fa-linkedin"></i>
                            <span>Share</span>
                        </a>
                    </div>
                    <div class="blog__details__author">
                        <div class="blog__details__author__pic">
                            <img src="img/blog/details/author.png" alt>
                        </div>
                        <div class="blog__details__author__text">
                            <h5>Marry Jean</h5>
                            <p>Another thing that I don’t really like about them is that they’re such sideline actors,
                                lacking the abilities to participate actively.</p>
                        </div>
                    </div>
                    <div class="blog__details__btns">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="#" class="blog__details__btns__item set-bg"
                                            data-setbg="img/blog/details/pre.jpg">
                                            <h6>Promotional Advertising Specialty</h6>
                                            <ul>
                                                <li>By Don Townsend</li>
                                                <li>Dec 22, 2018</li>
                                            </ul>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="#" class="blog__details__btns__item set-bg"
                                            data-setbg="img/blog/details/next.jpg">
                                            <h6>Promotional Advertising Specialty</h6>
                                            <ul>
                                                <li>By Don Townsend</li>
                                                <li>Dec 22, 2018</li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog__details__comment">
                        <h4>12 Comment</h4>
                        <div class="blog__details__comment__item">
                            <div class="blog__details__comment__item__pic">
                                <img src="img/blog/details/comment-1.png" alt>
                            </div>
                            <div class="blog__details__comment__item__text">
                                <h6>Brandon Kelley</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore</p>
                                <a href="#">Like</a>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                        <div class="blog__details__comment__item reply__comment">
                            <div class="blog__details__comment__item__pic">
                                <img src="img/blog/details/comment-2.png" alt>
                            </div>
                            <div class="blog__details__comment__item__text">
                                <h6>Brandon Kelley</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
                                <a href="#">Like</a>
                                <a href="#">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="blog__details__comment__form">
                        <h4>Leave A Reply</h4>
                        <form action="#">
                            <div class="input-list">
                                <div class="input-list-item">
                                    <p>Name</p>
                                    <input type="text">
                                </div>
                                <div class="input-list-item">
                                    <p>Email</p>
                                    <input type="text">
                                </div>
                                <div class="input-list-item">
                                    <p>Website</p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="input-desc">
                                <p>Comment</p>
                                <textarea></textarea>
                            </div>
                            <button type="submit" class="site-btn">Submit Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                                    data-cfemail="44072b282b36282d26042329252d286a272b29">[email&#160;protected]</a>
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
        data-cf-beacon='{"rayId":"863d03f6d89a8674","b":1,"version":"2024.2.4","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/hvac/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 15:26:58 GMT -->

</html>
