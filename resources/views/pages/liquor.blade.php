@extends('layouts.out')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
@endsection

@section('content')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center white-text">Liquor</h1>
                <div class="row center">
                    {{--<h3 class="header col s12 light">Liquor</h3>--}}
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="{{ asset('images/Stone.jpg') }}" alt="Unsplashed background img 1"></div>
    </div>


    <div class="container">
        <div class="section">

            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">local_drink</i>
                        Classic Manhattan
                    </div>
                    <div class="collapsible-body">
                        <span>
                            * Rittenhouse Rye, Martini & Rossi, Angostura Bitters, Luxardo Cherry
                        </span>
                        <strong class="right">$10.00</strong>
                        <br>
                        <br>
                        <i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">local_drink</i>
                        Classic Old Fashioned
                    </div>
                    <div class="collapsible-body">
                        <span>
                            * Bulleit Rye, House-Made Simple Syrup, Angostura, Lemon Peel
                        </span>
                        <strong class="right">$10.00</strong>
                        <br>
                        <br>
                        <i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i class="material-icons">local_drink</i>
                        Blood &amp; Sand
                    </div>
                    <div class="collapsible-body">
                        <span>
                            * White Horse Blended Scotch, Sweet Vermouth, Cherry Heering, Fresh Orange Juice
                        </span>
                        <strong class="right">$10.00</strong>
                        <br>
                        <br>
                        <i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                        <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
                    </div>
                </li>
            </ul>

            <div class="collection">
                <a href="#classic_manhattan" class="collection-item modal-trigger"><span class="badge" data-badge-caption="">$10.00</span>Classic Manhattan</a>
                <a href="#classic_old_fashiined" class="collection-item modal-trigger"><span class="badge" data-badge-caption="">$10.00</span>Classic Old Fashioned</a>
                <a href="#blood_sand" class="collection-item modal-trigger"><span class="badge" data-badge-caption="">$10.00</span>Blood &amp; Sand</a>
            </div>

            <div id="classic_manhattan" class="modal">
                <div class="modal-content">
                    <h4>Classic Manhattan</h4>
                    <span>
                        * Rittenhouse Rye, Martini & Rossi, Angostura Bitters, Luxardo Cherry
                    </span>
                <strong class="right">$10.00</strong>
                    <br>
                    <br>
                    <i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i>
                    <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                    <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Close</a>
                </div>
            </div>

            <div id="classic_old_fashiined" class="modal">
                <div class="modal-content">
                    <h4>Classic Old Fashioned</h4>
                    <span>
                        * Bulleit Rye, House-Made Simple Syrup, Angostura, Lemon Peel
                    </span>
                    <strong class="right">$10.00</strong>
                    <br>
                    <br>
                    <i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i>
                    <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                    <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Close</a>
                </div>
            </div>

            <div id="blood_sand" class="modal">
                <div class="modal-content">
                    <h4>Blood &amp; Sand</h4>
                    <span>
                        * White Horse Blended Scotch, Sweet Vermouth, Cherry Heering, Fresh Orange Juice
                    </span>
                    <strong class="right">$10.00</strong>
                    <br>
                    <br>
                    <i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i>
                    <i class="fa fa-twitter fa-lg" aria-hidden="true"></i>
                    <i class="fa fa-instagram fa-lg" aria-hidden="true"></i>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Close</a>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">A modern restaurant based on American comforts</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{ asset('images/SkullEdit.jpg') }}" alt="Unsplashed background img 2"></div>
    </div>
@endsection