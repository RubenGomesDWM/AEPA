<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.svg') }}" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@300&family=Raleway:wght@500&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('/css/masterstyle.css') }}" rel="stylesheet">
    @yield('styles')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <svg width="997" height="155" viewBox="0 0 997 155" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M119.832 113.279C-29.3934 71.3393 2.95979 0 2.95979 0H994.286C994.286 0 1000.39 45.1112 994.286 80.6988C988.18 116.287 961.653 149.869 893.329 154.38C825.004 158.892 759.739 137.86 704.671 120.798C631.704 98.1888 580.461 124.359 509.895 137.338C353.709 166.065 269.058 155.219 119.832 113.279Z"
                fill="url(#paint0_linear_214_4)" />
            <defs>
                <linearGradient id="paint0_linear_214_4" x1="469.614" y1="5.13046e-08" x2="469.614" y2="546.799"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="#125D35" />
                    <stop offset="0.244792" stop-color="#1B9861" />
                </linearGradient>
            </defs>
        </svg>

        <nav class="navbar navbar-expand-lg stroke">
            <a href="{{ route('index') }}" class="navbar-brand"><img src="{{ asset('img/logo_green.svg') }}"
                    alt="AEPABrandLogo" width="200" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav text-center">
                    <!-- Add the "ml-auto" class to align items to the right -->
                    <a class="nav-item nav-link" href="{{ route('topDonates') }}">DOAÇÕES</a>
                    <a class="nav-item nav-link" href="{{ route('patrocinadores') }}">PATROCIONADORES</a>
                    <a class="nav-item nav-link" href="#">EVENTOS</a>
                    <a class="nav-item nav-link" href="#">VOLUNTARIADO</a>
                    <a class="nav-item nav-link" href="{{ route('projects') }}">PROJETOS</a>
                    <a><button class="btn">LOGIN</button></a>
                </div>
            </div>
        </nav>
    </header><!-- End Header -->


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">

        </div>

    </section><!-- End Hero -->
    @yield('main')

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- ======= Footer ======= -->
    <div class="footerbg">
    </div>
    <footer id="footer">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">© 2022 Company, Inc</p>

            <a href="{{ route('index') }}"
                class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img src="{{ asset('img/logo_green.svg') }}" alt="AEPABrandLogo" width="200" height="50">
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('/js/main.js') }}"></script>

</body>

</html>
