<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @if (isset($title))
            {{ $title }} | {{ $config('app.name') }}
        @else
            {{ config('app.name') }}
        @endif
    </title>

    <!-- Favicons -->
    {{-- <link href="{{ asset('assets/img/favicon.png') }}" rel="icon"> --}}
    {{-- <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>

<body>
    {{-- header --}}
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                {{-- <h1 class="sitename">UpConstruction</h1> <span>.</span> --}}
                <img src="{{ asset('assets/logos/GIS Logo_Logo 1.png') }}" alt="">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('structure') }}/#constructions" class="{{ request()->routeIs('structure') ? 'active' : '' }}">Structure</a></li>
                    <li><a href="/#services" class="{{ request()->is('services*') ? 'active' : '' }}">Services</a></li>
                    <li><a href="{{ route('partner') }}/#partnership" class="{{ request()->routeIs('partner') ? 'active' : '' }}">Partnership</a></li>
                    <li><a href="{{ route('about') }}/#alt-services"  class="{{ request()->is('about*') ? 'active' : '' }}">About</a></li>
                    <li><a href="#footer" class="{{ request()->is('contact*') ? 'active' : '' }}">Contact</a></li>

                    {{-- <li><a href="/" class="active">Home</a></li>
                    <li><a href="{{ route('structure') }}"  >Structure</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="services.html">Partnership</a></li>
                    <li><a href="#alt-services">About</a></li>
                    <li><a href="#footer">Contact</a></li> --}}
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>
    {{-- End header --}}

    {{-- main content --}}
    <main class="main">

        {{ $slot }}

    </main>
    {{-- End main content --}}

    {{-- footer --}}
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">{{ config('app.name') }}</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Makassar, Sulawesi Selatan, Indonesia</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62 813-5829-8193</span></p>
                        <p><strong>Email:</strong> <span>generasiindojayasejahtera@gmail.com</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/generasiindojayasejahtera/"><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links ms-auto">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>
                © <span>Copyright</span> <strong class="px-1 sitename">{{ config('app.name') }}</strong> <span>All
                    Rights Reserved</span>
            </p>
        </div>

    </footer>
    {{-- End footer --}}

    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>

</html>
