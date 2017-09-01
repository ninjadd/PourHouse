<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('delicious/css/style.css') }}" rel="stylesheet">

    @yield('head')

</head>

<body>
<!--banner-->
<section id="banner">
    <div class="bg-color">
        <header id="header">
            <div class="container">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="#about">About</a>
                    <a href="#event">Event</a>
                    <a href="#menu-list">Menu</a>
                    <a href="#contact">Book Event</a>
                </div>
                <!-- Use any element to open the sidenav -->
                <span onclick="openNav()" class="pull-right menu-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="inner text-center">
                    <h1 class="logo-name">PourHouse</h1>
                    <h2>Liquor Room Dinning - Dancing</h2>
                    <p>A Satisfying Establishment for the Discerning Patron</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / banner -->
@yield('content')
<!-- footer -->
<footer class="footer text-center">
    <div class="footer-top">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 text-center">
                <div class="widget">
                    <h4 class="widget-title">PourHouse</h4>
                    <address>1903 S Coast Hwy,<br>Oceanside, CA 92054</address>
                    <div class="social-list">
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </div>
                    <p class="copyright clear-float">
                        © PourHouse. All Rights Reserved
                    <div class="credits">
                        <a href="/">PourHouse</a>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->

    @yield('foot')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('delicious/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('delicious/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('delicious/js/custom.js') }}"></script>
</body>
</html>
