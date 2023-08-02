<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/noxen/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 03:28:13 GMT -->

<head>
    <title>Noxen &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../../fonts.googleapis.com/css1e81.css?family=DM+Sans:300,400,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/front/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/style.css') }}">

    <link rel="stylesheet" href="css/style.css">
    <script nonce="03cfa36d-53f2-40e0-ad6a-d59ea48ee605">
        (function(w, d) {
            ! function(bt, bu, bv, bw) {
                bt[bv] = bt[bv] || {};
                bt[bv].executed = [];
                bt.zaraz = {
                    deferred: [],
                    listeners: []
                };
                bt.zaraz.q = [];
                bt.zaraz._f = function(bx) {
                    return function() {
                        var by = Array.prototype.slice.call(arguments);
                        bt.zaraz.q.push({
                            m: bx,
                            a: by
                        })
                    }
                };
                for (const bz of ["track", "set", "debug"]) bt.zaraz[bz] = bt.zaraz._f(bz);
                bt.zaraz.init = () => {
                    var bA = bu.getElementsByTagName(bw)[0],
                        bB = bu.createElement(bw),
                        bC = bu.getElementsByTagName("title")[0];
                    bC && (bt[bv].t = bu.getElementsByTagName("title")[0].text);
                    bt[bv].x = Math.random();
                    bt[bv].w = bt.screen.width;
                    bt[bv].h = bt.screen.height;
                    bt[bv].j = bt.innerHeight;
                    bt[bv].e = bt.innerWidth;
                    bt[bv].l = bt.location.href;
                    bt[bv].r = bu.referrer;
                    bt[bv].k = bt.screen.colorDepth;
                    bt[bv].n = bu.characterSet;
                    bt[bv].o = (new Date).getTimezoneOffset();
                    if (bt.dataLayer)
                        for (const bG of Object.entries(Object.entries(dataLayer).reduce(((bH, bI) => ({
                                ...bH[1],
                                ...bI[1]
                            })), {}))) zaraz.set(bG[0], bG[1], {
                            scope: "page"
                        });
                    bt[bv].q = [];
                    for (; bt.zaraz.q.length;) {
                        const bJ = bt.zaraz.q.shift();
                        bt[bv].q.push(bJ)
                    }
                    bB.defer = !0;
                    for (const bK of [localStorage, sessionStorage]) Object.keys(bK || {}).filter((bM => bM
                        .startsWith("_zaraz_"))).forEach((bL => {
                        try {
                            bt[bv]["z_" + bL.slice(7)] = JSON.parse(bK.getItem(bL))
                        } catch {
                            bt[bv]["z_" + bL.slice(7)] = bK.getItem(bL)
                        }
                    }));
                    bB.referrerPolicy = "origin";
                    bB.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(bt[bv])));
                    bA.parentNode.insertBefore(bB, bA)
                };
                ["complete", "interactive"].includes(bu.readyState) ? zaraz.init() : bt.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap" id="home-section">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar site-navbar-target" role="banner">
            <div class="container mb-3">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto">
                        <a href="index-2.html">HRT<span class="text-primary">.</span></a>
                    </div>
                    <div class="site-quick-contact d-none d-lg-flex ml-auto ">
                        <div class="d-flex site-info align-items-center mr-5">
                            <span class="block-icon mr-3"><span class="icon-map-marker"></span></span>
                            <span>08 Street Djuanda, City Jakarta, <br> Indonesia</span>
                        </div>
                        <div class="d-flex site-info align-items-center">
                            <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                            <span>Sunday - Friday 8:00AM - 4:00PM <br> Saturday CLOSED</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="menu-wrap d-flex align-items-center">
                    <span class="d-inline-block d-lg-none"><a href="#"
                            class="text-black site-menu-toggle js-menu-toggle py-5"><span
                                class="icon-menu h3 text-black"></span></a></span>
                    <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto ">
                            <li class="active"><a href="/" class="nav-link">Home</a></li>
                            <li><a href="/#servicess" class="nav-link">Services</a></li>
                            <li><a href="/#rent" class="nav-link">Rent</a></li>
                            <li><a href="/contact" class="nav-link">Contact</a></li>
                            @if (Auth::check())
                                <li><a href="/signout" class="nav-link">{{ Auth::user()->name }} | Sign Out</a></li>
                                <li><a href="/rental" class="nav-link">Rental</a></li>
                            @else
                                <li><a href="/login" class="nav-link">Login</a></li>
                            @endif
                        </ul>
                    </nav>
                    <div class="top-social ml-auto">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="ftco-blocks-cover-1">
            <div class="site-section-cover overlay" data-stellar-background-ratio="0.5"
                style="background-image: url('{{ asset('assets/front/images/hero_1.jpg') }}')">
                <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-md-5 mt-5 pt-5">
                            <h1 class="mb-3">Contact Us</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur
                                doloremque, maiores doloribus officia iste. Dolores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section bg-light" id="contact-section">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-7 text-center mb-5">
                        <h2>Get In Touch Using The Contact Form</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum
                            necessitatibus eius earum voluptates sed!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mb-5">
                        <form action="#" method="post">
                            <div class="form-group row">
                                <div class="col-md-6 mb-4 mb-lg-0">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="First name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Email address">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30"
                                        rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 mr-auto">
                                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                        value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4 ml-auto">
                        <div class="bg-white p-3 p-md-5">
                            <h3 class="text-black mb-4">Contact Info</h3>
                            <ul class="list-unstyled footer-link">
                                <li class="d-block mb-3">
                                    <span class="d-block text-black">Address:</span>
                                    <span>08 Street Djuanda, City Jakarta, Indonesia</span>
                                </li>
                                <li class="d-block mb-3"><span
                                        class="d-block text-black">Phone:</span><span>+62-81546977016</span></li>
                                <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span><a
                                            href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                                            class="__cf_email__"
                                            data-cfemail="234a4d454c635a4c5651474c4e424a4d0d404c4e">fikrinurhakim911@gmail.com</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="footer-heading mb-3">About Us</h2>
                        <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts. </p>
                        <h2 class="footer-heading mb-4">Newsletter</h2>
                        <form action="#" class="d-flex" class="subscribe">
                            <input type="text" class="form-control mr-3" placeholder="Email">
                            <input type="submit" value="Send" class="btn btn-primary">
                        </form>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-4 ml-auto">
                                <h2 class="footer-heading mb-4">Navigation</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h2 class="footer-heading mb-4">Navigation</h2>
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Testimonials</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>

                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | Home Rent Topia

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{ asset('assets/front/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('assets/front/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/front/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/aos.js') }}"></script>
    <script src="{{ asset('assets/front/js/main.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854"
        integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg=="
        data-cf-beacon='{"rayId":"7f033a12eab540e2","version":"2023.7.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/noxen/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Aug 2023 03:28:14 GMT -->

</html>
