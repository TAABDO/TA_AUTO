<!DOCTYPE html>
<html lang="zxx">

{{--  <!-- Mirrored from preview.colorlib.com/theme/hvac/car-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Mar 2024 15:26:55 GMT -->  --}}

<head>
    <meta charset="UTF-8">
    <meta name="description" content="HVAC Template">
    <meta name="keywords" content="HVAC, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HVAC Template</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900 &amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <script nonce="e2e50971-c351-461b-b685-7b7b87df1cdf">
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

    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__widget">
            <a href="#"><i class="fa fa-cart-plus"></i></a>
            <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
            <a href="#" class="primary-btn">Add Car</a>
        </div>
        <div class="offcanvas__logo">
            <a href="index.html"><img src="img/logo.png" alt></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <ul class="offcanvas__widget__add">
            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
            <li><i class="fa fa-envelope-o"></i> <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                    class="__cf_email__"
                    data-cfemail="327b5c545d1c515d5e5d405e5b5072555f535b5e1c515d5f">[email&#160;protected]</a></li>
        </ul>
        <div class="offcanvas__phone__num">
            <i class="fa fa-phone"></i>
            <span>(+12) 345 678 910</span>
        </div>
        <div class="offcanvas__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>


    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul class="header__top__widget">
                            <li><i class="fa fa-clock-o"></i> Week day: 08:00 am to 18:00 pm</li>
                            <li><i class="fa fa-envelope-o"></i> <a
                                    href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="f6bf989099d895999a99849a9f94b6919b979f9ad895999b">[email&#160;protected]</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="header__top__right">
                            <div class="header__top__phone">
                                <i class="fa fa-phone"></i>
                                <span>(+12) 345 678 910</span>
                            </div>
                            <div class="header__top__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="index.html"><img src="img/logo.png" alt></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__nav">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="car.html">Cars</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li class="active"><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="car-details.html">Car Details</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__nav__widget">
                            <div class="header__nav__widget__btn">
                                <a href="#"><i class="fa fa-cart-plus"></i></a>
                                <a href="#" class="search-switch"><i class="fa fa-search"></i></a>
                            </div>
                            <a href="#" class="primary-btn">Add Car</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>


    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Porsche Cayenne Turbo S 2019</h2>
                        <div class="breadcrumb__links">
                            <a href="index.html"><i class="fa fa-home"></i> Home</a>
                            <a href="#">Car Listing</a>
                            <span>Porsche cayenne turbo s</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="car-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="car__details__pic">
                        <div class="car__details__pic__large">
                            <img class="car-big-img" src="img/cars/details/cd-1.jpg" alt>
                        </div>
                        <div class="car-thumbs">
                            <div class="car-thumbs-track car__thumb__slider owl-carousel">
                                <div class="ct" data-imgbigurl="img/cars/details/cd-2.jpg"><img
                                        src="img/cars/details/sm-1.jpg" alt></div>
                                <div class="ct" data-imgbigurl="img/cars/details/cd-3.jpg"><img
                                        src="img/cars/details/sm-2.jpg" alt></div>
                                <div class="ct" data-imgbigurl="img/cars/details/cd-4.jpg"><img
                                        src="img/cars/details/sm-3.jpg" alt></div>
                                <div class="ct" data-imgbigurl="img/cars/details/cd-5.jpg"><img
                                        src="img/cars/details/sm-4.jpg" alt></div>
                                <div class="ct" data-imgbigurl="img/cars/details/cd-6.jpg"><img
                                        src="img/cars/details/sm-5.jpg" alt></div>
                            </div>
                        </div>
                    </div>
                    <div class="car__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Vehicle
                                    Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Technical</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Features &
                                    Options</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-4" role="tab">Vehicle
                                    Location</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat
                                                        non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat
                                                        non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__details__tab__feature">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Interior Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                    <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                    <li><i class="fa fa-check-circle"></i> CD player</li>
                                                    <li><i class="fa fa-check-circle"></i> Central locking</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Safety Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                    <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                    <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information2</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat
                                                        non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat
                                                        non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__details__tab__feature">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Interior Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                    <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                    <li><i class="fa fa-check-circle"></i> CD player</li>
                                                    <li><i class="fa fa-check-circle"></i> Central locking</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Safety Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                    <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                    <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information3</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat
                                                        non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat
                                                        non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__details__tab__feature">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Interior Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                    <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                    <li><i class="fa fa-check-circle"></i> CD player</li>
                                                    <li><i class="fa fa-check-circle"></i> Central locking</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Safety Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                    <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                    <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-4" role="tabpanel">
                                <div class="car__details__tab__info">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information4</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat
                                                        non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="car__details__tab__info__item">
                                                <h5>General Information</h5>
                                                <ul>
                                                    <li><i class="fa fa-check"></i> Pellentesque lacus urna, feugiat
                                                        non
                                                        consectetur nec</li>
                                                    <li><i class="fa fa-check"></i> Aliquam sem neque, efficitur atero
                                                        lectus vitae.</li>
                                                    <li><i class="fa fa-check"></i> Pellentesque erat libero, eleifend
                                                        sit amet felis ido.</li>
                                                    <li><i class="fa fa-check"></i> Maecenas eget consectetur quam.
                                                        Vestibulum ligula.</li>
                                                    <li><i class="fa fa-check"></i> Praesent lorem sapien, vestibulum
                                                        eget aliquet et.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__details__tab__feature">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Interior Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Auxiliary heating</li>
                                                    <li><i class="fa fa-check-circle"></i> Bluetooth</li>
                                                    <li><i class="fa fa-check-circle"></i> CD player</li>
                                                    <li><i class="fa fa-check-circle"></i> Central locking</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Safety Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Head-up display</li>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> Alloy wheels</li>
                                                    <li><i class="fa fa-check-circle"></i> Electric side mirror</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports package</li>
                                                    <li><i class="fa fa-check-circle"></i> Sports suspension</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="car__details__tab__feature__item">
                                                <h5>Extra Design</h5>
                                                <ul>
                                                    <li><i class="fa fa-check-circle"></i> MP3 interface</li>
                                                    <li><i class="fa fa-check-circle"></i> Navigation system</li>
                                                    <li><i class="fa fa-check-circle"></i> Panoramic roof</li>
                                                    <li><i class="fa fa-check-circle"></i> Parking sensors</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="car__details__sidebar">
                        <div class="car__details__sidebar__model">
                            <ul>
                                <li>Stock <span>K99D10459934</span></li>
                                <li>Vin <span>3VWKM245686</span></li>
                            </ul>
                            <a href="#" class="primary-btn">Get Today Is Price</a>
                            <p>Pricing in 11/26/2019</p>
                        </div>
                        <div class="car__details__sidebar__payment">
                            <ul>
                                <li>MSRP <span>$120,000</span></li>
                                <li>Dealer Discounts <span>$3,000</span></li>
                                <li>Price <span>$117,000</span></li>
                            </ul>
                            <a href="#" class="primary-btn"><i class="fa fa-credit-card"></i> Express
                                Purchase</a>
                            <a href="#" class="primary-btn sidebar-btn"><i class="fa fa-sliders"></i> Build
                                Payment</a>
                            <a href="#" class="primary-btn sidebar-btn"><i class="fa fa-money"></i> Value
                                Trade</a>
                        </div>
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
                                    data-cfemail="2f6c4043405d43464d6f48424e4643014c4042">[email&#160;protected]</a>
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
        data-cf-beacon='{"rayId":"863d03f50a7a5e47","b":1,"version":"2024.2.4","token":"cd0b4b3a733644fc843ef0b185f98241"}'
        crossorigin="anonymous"></script>
</body>

</html>
