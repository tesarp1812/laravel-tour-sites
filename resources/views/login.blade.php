@extends('layout')

@section('head')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
       

        a {
            color: #92badd;
            display: inline-block;
            text-decoration: none;
            font-weight: 400;
        }

        h2 {
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            display: inline-block;
            margin: 40px 8px 10px 8px;
            color: #cccccc;
        }



        /* STRUCTURE */

        /* Wrapper untuk form login */
        /* Wrapper form */
        .wrapper {
            display: flex;
            align-items: center;
            justify-content: center; /* Memastikan konten (termasuk tombol) terletak di tengah */
            flex-direction: column;
            width: 100%;
            min-height: 100vh; /* Full height */
            background: none; /* Menghapus background hijau */
            padding: 20px;
        }

        /* Styling form content dengan background transparan */
        #formContent {
            background: rgba(255, 255, 255, 0.8); /* Transparent white background */
            border-radius: 15px; /* Rounded corners */
            padding: 40px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2); /* Soft shadow */
            text-align: center;
            transition: all 0.3s ease;
        }

        #formContent:hover {
            transform: translateY(-10px); /* Hover effect */
        }

        /* Styling untuk heading */
        #formContent .fadeIn.first h3 {
            font-size: 30px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Styling input fields */
        #formContent input[type="text"], 
        #formContent input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 12px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        #formContent input[type="text"]:focus, 
        #formContent input[type="password"]:focus {
            border-color: #4CAF50; /* Change border color on focus */
            box-shadow: 0 0 10px rgba(76, 175, 80, 0.5); /* Glow effect on focus */
            outline: none;
        }

        /* Styling for the submit button */
        #formContent input[type="submit"] {
            width: 100%;
            padding: 14px;
            background-color: #4CAF50;
            color: #fff;
            font-size: 18px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block; /* Memastikan tombol berada di baris yang sama dengan input lainnya */
            text-align: center; /* Center text inside button */
        }

        #formContent input[type="submit"]:hover {
            background-color: #45a049; /* Darker green on hover */
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
            transform: translateY(-2px); /* Hover lift effect */
        }

        /* Styling for forgot password link */
        #formFooter {
            background-color: transparent;  /* Mengatur background menjadi transparan */
            border-top: 1px solid #dce8f1;
            padding: 25px;
            text-align: center;
            -webkit-border-radius: 0 0 10px 10px;
            border-radius: 0 0 10px 10px;
        }

        /* Styling untuk link Forgot Password */
        #formFooter a {
            color: #4CAF50;  /* Menyesuaikan warna link */
            text-decoration: none;
            font-size: 14px;
        }

        #formFooter a:hover {
            text-decoration: underline;  /* Efek hover pada link */
        }






        /* TABS */

        h2.inactive {
            color: #cccccc;
        }

        h2.active {
            color: #0d0d0d;
            border-bottom: 2px solid #5fbae9;
        }



       /* Styling untuk tombol */
        input[type=submit], input[type=button] {
            background-color: #56baed;
            border: none;
            color: white;
            padding: 15px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 13px;
            -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
            box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
            -webkit-border-radius: 5px 5px 5px 5px;
            border-radius: 5px 5px 5px 5px;
            margin: 20px 0 40px 0; /* Margin atas dan bawah lebih besar */
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            width: 100%; /* Membuat tombol menyesuaikan lebar container */
            box-sizing: border-box; /* Memastikan padding dan margin tidak mempengaruhi ukuran */
        }

        /* Hover effect untuk tombol */
        input[type=submit]:hover,
        input[type=button]:hover {
            background-color: #39ace7;
        }

        /* Active state untuk tombol */
        input[type=submit]:active,
        input[type=button]:active {
            transform: scale(0.95);
        }

        /* Pastikan input dan form teratur */
        #formContent {
            display: flex;
            flex-direction: column;
            align-items: center; /* Menjaga agar form konten terpusat */
            justify-content: center;
            width: 100%;
        }

        /* Styling untuk input teks */
        input[type=text] {
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 32px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            transition: all 0.5s ease-in-out;
            border-radius: 5px 5px 5px 5px;
            box-sizing: border-box;
        }

        input[type=text]:focus {
            background-color: #fff;
            border-bottom: 2px solid #5fbae9;
        }

        input[type=text]:placeholder {
            color: #cccccc;
        }




        /* ANIMATIONS */

        /* Simple CSS3 Fade-in-down Animation */
        .fadeInDown {
            -webkit-animation-name: fadeInDown;
            animation-name: fadeInDown;
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        @-webkit-keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }

            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        /* Simple CSS3 Fade-in Animation */
        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-moz-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .fadeIn {
            opacity: 0;
            -webkit-animation: fadeIn ease-in 1;
            -moz-animation: fadeIn ease-in 1;
            animation: fadeIn ease-in 1;

            -webkit-animation-fill-mode: forwards;
            -moz-animation-fill-mode: forwards;
            animation-fill-mode: forwards;

            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            animation-duration: 1s;
        }

        .fadeIn.first {
            -webkit-animation-delay: 0.4s;
            -moz-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }

        .fadeIn.second {
            -webkit-animation-delay: 0.6s;
            -moz-animation-delay: 0.6s;
            animation-delay: 0.6s;
        }

        .fadeIn.third {
            -webkit-animation-delay: 0.8s;
            -moz-animation-delay: 0.8s;
            animation-delay: 0.8s;
        }

        .fadeIn.fourth {
            -webkit-animation-delay: 1s;
            -moz-animation-delay: 1s;
            animation-delay: 1s;
        }

        /* Simple CSS3 Fade-in Animation */
        .underlineHover:after {
            display: block;
            left: 0;
            bottom: -10px;
            width: 0;
            height: 2px;
            background-color: #56baed;
            content: "";
            transition: width 0.2s;
        }

        .underlineHover:hover {
            color: #0d0d0d;
        }

        .underlineHover:hover:after {
            width: 100%;
        }



        /* OTHERS */

        *:focus {
            outline: none;
        }

        #icon {
            width: 60%;
        }
    </style>
@endsection

@section('header')
@section('ul')
    <li><a href="/" class="nav-link">Home</a></li>
    <li><a href="sejarah" class="nav-link">Sejarah</a></li>
    <li><a href="umkm" class="nav-link">UMKM</a></li>
    <li><a href="trips" class="nav-link">Pementasan</a></li>
    <li><a href="contact" class="nav-link">Hubungi Kami</a></li>
    <li class="active">
        <a href="login" class="btn-login" style="color: #fff !important;">Login</a>
    </li>
@endsection
@endsection

@section('body')
@if (session('loginError'))
    <script>
        Swal.fire(
            'error!',
            '{{ session('loginError') }}',
            'error'
        );
    </script>
@endif
@section('main')
    <div class="ftco-blocks-cover-1">
        <div class="site-section-cover overlay" style="background-image: url('images/wisata-gibran.jpg')">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-md-5" data-aos="fade-up">
                        <div class="wrapper fadeInDown">
                            <div id="formContent">
                                <!-- Tabs Titles -->

                                <!-- Icon -->
                                <div class="fadeIn first">
                                    <h3>Login Page</h3>
                                </div>

                                <!-- Login Form -->
                                <form action="/login" method="POST">
                                    @csrf
                                   
                                    <input type="text" class="fadeIn second" @error('email') is-invalid @enderror"
                                        name="email" id="email" required value="{{ old('email') }}"
                                        placeholder="name@example.com" autofocus>
                                    <input type="text" name="password" id="password" class="fadeIn third" 
                                        placeholder="password">
                                    <input type="submit" class="fadeIn fourth" value="Log In">
                                </form>

                                <!-- Remind Passowrd -->
                                <div id="formFooter">
                                    <a class="underlineHover" href="#">Forgot Password?</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endsection
