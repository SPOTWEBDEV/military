<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'UnService Military') }}</title>

    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/img/download.png') }}" type="image/x-icon">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaM1AnjEPN3k20pFy6HnuG7tUXwgbc6epg+dh/gLgqMiDoU5GmZxZZLk2sN" crossorigin="anonymous">
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <style>
        #google_translate_element {
            position: fixed !important;
            bottom: 30px;
            left: 20px;
        }

        .VIpgJd-ZVi9od-l4eHX-hSRGPd {
            display: none !important;
        }
    </style>

    <nav class="{{ Route::is('frontend.index') ? 'leave-applictaion' : 'leave-applictaion ln' }}">

        <div class="logo">
            <img src="{{ asset('frontend/img/download.png') }}" alt="">
        </div>
        <div class="links">
            <li>
                <a href="{{ route('frontend.index') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('frontend.carepack') }}">
                    Care Pack
                </a>
            </li>
            <li>
                <a href="{{ route('frontend.applyLeave') }}">Leave / Vacation Application</a>
            </li>
            <li>
                <a href="{{ route('frontend.flight') }}">Book Flight</a>
            </li>
            <li>
                <a href="{{ route('frontend.track') }}">Track Military ID</a>
            </li>
        </div>
        <div class="search hidden resize">
            <input type="text" placeholder="Search">
            <i class="bx bx-x"></i>
        </div>
        <div class="icons">
            <a href="#"><i class="bx bx-search"></i></a>
            <a href="mailto:support@gdmbp.com">
                <i class="bx bx-envelope"></i>
            </a>

            <div class="hamburger-container">
                <div class="hamburger"></div>
            </div>
        </div>


    </nav>

    <div class="mobile-links">
        <li>
            <a href="{{ route('frontend.index') }}">Home</a>
        </li>
        <li>
            <a href="{{ route('frontend.carepack') }}">
                Care Pack
            </a>
        </li>
        <li>
            <a href="{{ route('frontend.applyLeave') }}">Leave / Vacation Application</a>
        </li>
        <li>
            <a href="{{ route('frontend.flight') }}">Book Flight</a>
        </li>
        <li>
            <a href="{{ route('frontend.track') }}">Track Military ID</a>
        </li>
    </div>


    @yield('content')


    <div id="google_translate_element"></div>

    <footer>
        <div class="box">
            <h2>Unservice Military</h2>
            <div class="links" style="max-width: 400px;">
                <a>
                    German military personnel provide relief worldwide when people are in need due to natural disasters,
                    serious accidents or epidemics. In this international disaster assistance, the German Defense And Military Job Portal cooperates
                    closely with governmental and non-governmental partners and relief organisations.


                </a>
            </div>
        </div>

        <div class="box">
            <h2>Quick Links</h2>
            <div class="links">
                <a href="{{ route('frontend.index') }}">Home</a>
                {{-- <a href="{{ route('frontend.about') }}">About</a> --}}
                <a href="{{ route('frontend.carepack') }}">Care Pack</a>
                <a href="{{ route('frontend.index') }}">Contact Us</a>
                <a href="{{ route('frontend.index') }}">Track Military ID</a>

            </div>
        </div>

        {{-- <div class="box">
            <h2>Useful Links</h2>
            <div class="links">
                <a href="#">Privacy Policy</a>
                <a href="#">Terms and Conditions</a>
                <a href="#">Disclaimer</a>
                <a href="#">Support</a>
                <a href="#">FAQ</a>

            </div>
        </div> --}}

        {{-- <div class="box">
            <h2>Follow Us</h2>
            <div class="links">
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Linked in</a>
                <a href="#">Pinterest</a>
                <a href="#">Instagram</a>

            </div>
        </div> --}}

        <div class="box">
            <h2>Contact Us</h2>
            <div class="links">
                <a href="https://mail.google.com/mail/?view=cm&to=support@gdmbp.com" target="_blank">
                    support@gdmbp.com
                </a>
            </div>

            <h2>Newsletter</h2>

            <input type="text" placeholder="Enter Your Email">
            <button onclick="alert('Thank you for sign with us')">SUSCRIBE</button>
            <div class="socials">
                <a href="#">
                    <i class="bx-bx-facebook"></i>
                </a>
            </div>

        </div>
    </footer>



    <script src="{{ asset('frontend/script.js') }}"></script>
</body>

</html>