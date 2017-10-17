<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('agency/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('agency/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('agency/css/agency.css') }}" rel="stylesheet">
    <link href="{{ asset('delicious/css/style.css') }}" rel="stylesheet">

    @yield('head')

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Pour House</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#team">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
                @if(auth()->user())
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="/home">Dashboard</a>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Pour House</div>
            {{--<div class="intro-heading">It's Nice To Meet You</div>--}}
            {{--<a class="btn btn-xl js-scroll-trigger" href="#services">Tell Me More</a>--}}
        </div>
    </div>
</header>

@yield('content')

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//pourhouseoceanside.com" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/pourhouseoceanside" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://twitter.com/search?q=pourhouseoceanside" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('agency/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('agency/vendor/popper/popper.min.js') }}"></script>
<script src="{{ asset('agency/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Plugin JavaScript -->
<script src="{{ asset('agency/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Contact form JavaScript -->
<script src="{{ asset('agency/js/jqBootstrapValidation.js') }}"></script>
<script src="{{ asset('agency/js/contact_me.js') }}"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('agency/js/agency.min.js') }}"></script>
<script src="{{ asset('delicious/js/jquery.mixitup.min.js') }}"></script>
<script src="{{ asset('delicious/js/custom.js') }}"></script>

</body>
</html>
