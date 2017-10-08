@extends('layouts.out')

@section('content')

    <!-- Events Grid -->
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Events</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                @foreach($events as $event)
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#{{ $event->slug }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="{{ $event->image  }}" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>{{ $event->title }}</h4>
                            <p class="text-muted">{{ $event->date->toFormattedDateString() }}</p>
                        </div>
                    </div>
                @endforeach
                {{ $events->links('vendor.pagination.simple-bootstrap-4') }}
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu -->
    <section class="bg-light" id="team">
        <section id="menu-list" class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center marb-35">
                        <h1 class="header-h">Menu</h1>
                        <p class="header-p">
                            Modern American Cuisine, designed and crafted by a visionary kitchen, to suit the tastes of discerning patrons, far and wide. Live richly. Eat Pourly.
                        </p>
                    </div>
                    <div class="col-md-12 text-center gallery-trigger">
                        <ul>
                            <li><a class="filter" data-filter="all">Show All</a></li>
                            @foreach($types as $type)
                                <li><a class="filter" data-filter=".{{ str_slug($type->name) }}">{{ $type->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div id="Container">
                        @foreach($menuItems as $menuItem)
                            <div class="mix {{ str_slug($menuItem->type->name) }} menu-restaurant" data-myorder="2">
                                <span class="clearfix">
                                    <span class="menu-title">{{ $menuItem->title }}</span>
                                    <span style="left: 166px; right: 44px;" class="menu-line"></span>
                                    <span class="menu-price">${{ $menuItem->price }}</span>
                                </span>
                                <span class="menu-subtitle">{{ $menuItem->description }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">If you want to tell us something or just say hi</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="/contact" name="sentMessage" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-xl" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br><br><br>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Book With Us</h2>
                    <h3 class="section-subheading text-muted">If you want to book a show or event here</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="/book" name="sentMessage" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-xl" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modals -->

    <!-- Modals -->
    @foreach($events as $event)
        <div class="portfolio-modal modal fade" id="{{ $event->slug }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal">
                        <div class="lr">
                            <div class="rl"></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 mx-auto">
                                <div class="modal-body">
                                    <h2>{{ $event->title }}</h2>
                                    <p class="item-intro text-muted">{{ $event->artist }}</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ $event->image }}" alt="">
                                    <p>{{ $event->description }}</p>
                                    <ul class="list-inline">
                                        <li>Date: {{ $event->date->toFormattedDateString() }}</li>
                                        <li>Time: {{ $event->start_time }} &mdash; {{ $event->end_time }}</li>
                                        <li>Artist: {{ $event->artist }}</li>
                                    </ul>
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
                                    <button class="btn btn-primary" data-dismiss="modal" type="button"><i class="fa fa-times"></i>Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection