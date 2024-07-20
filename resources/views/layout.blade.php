<!doctype html>
<html lang="en">

<head>
    <title>@yield('title') BEO KAPER</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">
@yield('head')
</head>

<body data-target=".site-navbar-target" data-offset="300">


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

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3 ">
                        <div>
                            <a href="/">BEO KAPER</a>
                        </div>
                    </div>

                    <div class="col-9  text-right">
                        <span class="d-inline-block d-lg-none"><a href="#"
                                class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                                    class="icon-menu h3 text-white"></span></a></span>

                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                @yield('ul')
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            @yield('header')
        </header>

        <main>
            @yield('main')
        </main>

        <footer class="site-footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-3">Alamat</h2>
                        <div class="row">
                            <p>Kaper, Jl Trans Flores, Desa Golo Bilas, Kec. Komodo, Kabupaten Manggarai Barat, Nusa
                                Tenggara Tim., Indonesia</p>
                        </div>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-6 ml-auto">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li><a href="contact" class="btn btn-outline-primary">
                                            Hubungi Kami
                                        </a></li>
                                    <li><a href="testimoni" class="btn btn-outline-primary">Testimonials</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <h2 class="footer-heading mb-4">Jam Oprasional Pementasan Budaya Dan UMKM</h2>
                                <p>Jam : 07.00 - 05.00 ( setiap hari )</p>
                                <a href="https://wa.me/+6285253922070" class="btn btn-outline-success">
                                    <i class="bi bi-whatsapp"></i> +6285253922070
                                </a>
                                <a href="https://wa.me/+6285239987278" class="btn btn-outline-success">
                                    <i class="bi bi-whatsapp"></i> +6285239987278
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        @yield('content')
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
@yield('body')
</body>

</html>
