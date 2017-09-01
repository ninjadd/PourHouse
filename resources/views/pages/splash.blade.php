@extends('layouts.out')

@section('content')

    <!--about-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">About Us</h1>
                    <p class="header-p"></p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="col-md-6 col-sm-6">
                        <div class="about-info">
                            <h2 class="heading">The History of Us</h2>
                            <p>Founded in 2014, the Pour House offers world class dining, liquor, and entertainment in the heart of South Oceanside.</p>
                            <div class="details-list">
                                <ul>
                                    <li><i class="fa fa-check"></i>World Class Food</li>
                                    <li><i class="fa fa-check"></i>Local Draft Beers</li>
                                    <li><i class="fa fa-check"></i>Outstanding Cocktails</li>
                                    <li><i class="fa fa-check"></i>Live Shows</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <img src="{{ asset('images/taps.jpg') }}" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!--/about-->
    <!-- event -->
    <section id="event">
        <div class="bg-color" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center" style="padding:60px;">
                        <h1 class="header-h">Up Coming Events</h1>
                        <p class="header-p">Check out some of the great things happening here</p>
                    </div>
                    <div class="col-md-12" style="padding-bottom:60px;">
                        @foreach($events as $event)
                            <div class="item active">
                                <div class="col-md-3 col-sm-3 details-text">
                                    <div class="content-holder">
                                        <img src="{{ $event->image}}" class="img-responsive">
                                        <h2>{{ str_limit($event->title, 10, '...') }}</h2>
                                        <p>{{ str_limit($event->description, 80, '...') }}</p>
                                        <address>
                                            <strong>Date: </strong>
                                            {{ $event->date->toFormattedDateString() }}
                                            <br>
                                            <strong>Time: </strong>
                                            {{ $event->start_time }} - {{ $event->end_time }}
                                        </address>
                                        <a class="btn btn-imfo btn-read-more" data-toggle="modal" data-target="#{{ $event->id }}">More</a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="{{ $event->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">{{ $event->title }}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <strong>Artist:</strong> {{ $event->artist }}<br><br>
                                                        <strong>Title:</strong> {{ $event->title }}<br><br>
                                                        <strong>Description:</strong><br>{{ $event->description }}<br><br>
                                                        <strong>Date:</strong> {{ $event->date->toFormattedDateString() }}<br><br>
                                                        <strong>Time:</strong> {{ $event->start_time }} - {{ $event->end_time }}<br><br>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-imfo btn-read-more" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-xs-12 text-center">
                        {{ $events->links('vendor.pagination.simple-bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ event -->
    <!-- menu -->
    <section id="menu-list" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Menu List</h1>
                    <p class="header-p">Pour House<br>Live Richly - Eat Pourly</p>
                </div>
                <div class="col-md-12  text-center gallery-trigger">
                    <ul>
                        <li><a class="filter" data-filter="all">Show All</a></li>
                        <li><a class="filter" data-filter=".specials">Specials</a></li>
                        <li><a class="filter" data-filter=".lunch">Lunch</a></li>
                        <li><a class="filter" data-filter=".dinner">Dinner</a></li>
                        <li><a class="filter" data-filter=".brunch">Brunch</a></li>
                        <li><a class="filter" data-filter=".drinks">Drinks</a></li>
                        <li><a class="filter" data-filter=".new">New</a></li>
                    </ul>
                </div>
                <div id="Container">
                    @foreach($foods as $food)
                        <div class="mix {{ strtolower($food->menu) }} menu-restaurant" data-myorder="2">
                            <span class="clearfix">
                                <a href="#" class="menu-title">{{ $food->name }}</a>
                                <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                <span class="menu-price">{{ $food->price }}</span>
                            </span>
                            <span class="menu-subtitle">{{ str_limit($food->description, 150, '...') }}</span>
                        </div>
                    @endforeach
                    @foreach($boozes as $booze)
                        <div class="mix drinks menu-restaurant" data-myorder="2">
                        <span class="clearfix">
                            <span class="menu-title">{{ $booze->name }}</span>
                            <span style="left: 166px; right: 44px;" class="menu-line"></span>
                            <span class="menu-price">{{ $booze->price }}</span>
                        </span>
                            <span class="menu-subtitle">{{ str_limit($booze->description, 150, '...') }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--/ menu -->
    <!-- contact -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="header-h">Book Your Next Show<br>or Just Say Hello</h1>
                    <p class="header-p">
                        Located in beautiful Oceanside California @<br>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> 1903 South Coast Highway Oceanside, CA 92054
                    </p>
                </div>
            </div>
            <div class="row msg-row">
                <div class="col-md-4 col-sm-4 mr-15">
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Phone Numbers</h4>
                            <p class="light-blue regular alt-p">760-730-5944 - <span class="contacts-sp">Phone Booking</span></p>
                        </div>
                    </div>
                    <div class="media-2">
                        <div class="media-left">
                            <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
                        </div>
                        <div class="media-body">
                            <h4 class="dark-blue regular">Opening Hours</h4>
                            <p class="light-blue regular alt-p">
                                Mon to Sat  11:00am - 2:00am
                            </p>
                            <p class="light-blue regular alt-p">
                                Sun 9:00am - 2:00am
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <form role="form" class="contactForm">
                        <div id="sendmessage">Your booking request has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <div class="col-md-6 col-sm-6 contact-form pad-form">
                            <div class="form-group label-floating is-empty">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form pad-form">
                            <div class="form-group">
                                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="People" data-rule="required" data-msg="This field is required" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 contact-form">
                            <div class="form-group label-floating is-empty">
                                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>

                        </div>
                        <div class="col-md-12 btnpad">
                            <div class="contacts-btn-pad">
                                <button class="contacts-btn">Contact Us</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- / contact -->

@endsection