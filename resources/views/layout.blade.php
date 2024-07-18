<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('fonts/icomoon/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/flaticon/font/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- MAIN CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap" id="home-section">

        <header class="site-navbar site-navbar-target" role="banner">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-3">
                        <div>
                            <a href="/">BEO CAMPER</a>
                        </div>
                    </div>
                    <div class="col-9 text-right">
                        <span class="d-inline-block d-lg-none">
                            <a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white">
                                <span class="icon-menu h3 text-white"></span>
                            </a>
                        </span>
                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto">
                                <li class="active"><a href="/" class="nav-link">Home</a></li>
                                <li><a href="sejarah" class="nav-link">Sejarah</a></li>
                                <li><a href="#" class="nav-link">UMKM</a></li>
                                <li><a href="#" class="nav-link">Pementasan</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        @yield('content') <!-- Content will be injected here -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <h2 class="footer-heading mb-3">Alamat</h2>
                        <p>Kaper, Jl Trans Flores, Desa Golo Bilas, Kec. Komodo, Kabupaten Manggarai Barat, Nusa
                            Tenggara Tim., Indonesia</p>
                    </div>
                    <div class="col-lg-8 ml-auto">
                        <div class="row">
                            <div class="col-lg-6 ml-auto">
                                <h2 class="footer-heading mb-4">Quick Links</h2>
                                <ul class="list-unstyled">
                                    <li>
                                        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            Hubungi Kami
                                        </button>
                                    </li>
                                    <li><a href="#" class="btn btn-outline-primary">Testimonials</a></li>
                                    <li><a href="#" class="btn btn-outline-primary">Terms of Service</a></li>
                                    <li><a href="#" class="btn btn-outline-primary">Privacy</a></li>
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
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart text-danger" aria-hidden="true"></i> by <a
                                    href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    @stack('scripts') <!-- For adding additional scripts -->
    @yield('body') <!-- Additional content -->
</body>

</html>
