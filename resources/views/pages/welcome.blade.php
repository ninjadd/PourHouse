@extends('layouts.out')

@section('content')
    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <br><br>
                <h1 class="header center white-text">Liquor-Room &amp; Dinning-Dancing</h1>
                <div class="row center">
                    <h4 class="header col s12 light">Founded in 2014, the Pour House offers world class dining, liquor, and entertainment in the heart of South Oceanside.</h4>
                </div>
                <br><br>

            </div>
        </div>
        <div class="parallax"><img src="{{ asset('images/Mural.jpg') }}" alt="Unsplashed background img 1"></div>
    </div>


    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">local_drink</i></h2>
                        <h5 class="center">Liquor</h5>

                        <p class="light">The full accompaniment of spirits—on every shelf—a 16-tap beer bar (plus bottles and cans) and fine wines to suit every taste… Our bar is equipped to satisfy.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">Dining</h5>

                        <p class="light">Modern American Cuisine, designed and crafted by a visionary kitchen, to suit the tastes of discerning patrons, far and wide. Live richly. Eat Pourly.</p>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="icon-block">
                        <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
                        <h5 class="center">Music</h5>

                        <p class="light">Bands. Karaoke. Vintage Vinyl DJ. Open Mic Night. Every night of the Pour House Week is an event to be remembered. MUSICALLY AWESOME. 7 NIGHTS A WEEK.</p>
                    </div>
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

    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>Contact Us</h4>
                    <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{ asset('images/taps.jpg') }}" alt="Unsplashed background img 3"></div>
    </div>
@endsection