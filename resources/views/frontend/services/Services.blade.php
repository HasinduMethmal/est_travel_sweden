@extends('frontend.master')

@section ('title', 'Home')

@section('content')
  <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('frontend/images/services_bg.jpg'); background-size: cover; background-position: center center; height: 400px;">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Services</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-travel.html">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Destination Area  
==============================-->

    <section class="position-relative overflow-hidden space" id="destination-sec">
        <div class="container">
            <div class="row gy-4 gx-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="destination-item th-ani">
                        <div class="destination-item_img global-img">
                            <img src="{{asset('frontend/assets/img/destination/destination_4_1.jpg')}}" alt="image">
                        </div>
                        <div class="destination-content">
                            <h3 class="box-title"><a href="service-details.html">Photo Shoot</a></h3>
                            <p class="destination-text">20 Listing</p>
                            <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="destination-item th-ani">
                        <div class="destination-item_img global-img">
                            <img src="{{asset('frontend/assets/img/destination/destination_4_2.jpg')}}" alt="image">
                        </div>
                        <div class="destination-content">
                            <h3 class="box-title"><a href="service-details.html">Tour Guide</a></h3>
                            <p class="destination-text">22 Listing</p>
                            <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="destination-item th-ani">
                        <div class="destination-item_img global-img">
                            <img src="{{asset('frontend/assets/img/destination/destination_4_3.jpg')}}" alt="image">
                        </div>
                        <div class="destination-content">
                            <h3 class="box-title"><a href="service-details.html">Cozy Event</a></h3>
                            <p class="destination-text">23 Listing</p>
                            <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="destination-item th-ani">
                        <div class="destination-item_img global-img">
                            <img src="{{asset('frontend/assets/img/destination/destination_4_4.jpg')}}" alt="image">
                        </div>
                        <div class="destination-content">
                            <h3 class="box-title"><a href="service-details.html">Interesting Rest</a></h3>
                            <p class="destination-text">24 Listing</p>
                            <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="destination-item th-ani">
                        <div class="destination-item_img global-img">
                            <img src="{{asset('frontend/assets/img/destination/destination_4_5.jpg')}}" alt="image">
                        </div>
                        <div class="destination-content">
                            <h3 class="box-title"><a href="service-details.html">Kayaking</a></h3>
                            <p class="destination-text">25 Listing</p>
                            <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="destination-item th-ani">
                        <div class="destination-item_img global-img">
                            <img src="{{asset('frontend/assets/img/destination/destination_4_6.jpg')}}" alt="image">
                        </div>
                        <div class="destination-content">
                            <h3 class="box-title"><a href="service-details.html">Safe Flight</a></h3>
                            <p class="destination-text">26 Listing</p>
                            <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="destination-item th-ani">
                        <div class="destination-item_img global-img">
                            <img src="{{asset('frontend/assets/img/destination/destination_4_7.jpg')}}" alt="image">
                        </div>
                        <div class="destination-content">
                            <h3 class="box-title"><a href="service-details.html">Entertainment</a></h3>
                            <p class="destination-text">27 Listing</p>
                            <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="destination-item th-ani">
                        <div class="destination-item_img global-img">
                            <img src="{{asset('frontend/assets/img/destination/destination_4_8.jpg')}}" alt="image">
                        </div>
                        <div class="destination-content">
                            <h3 class="box-title"><a href="service-details.html">Delicisious Food</a></h3>
                            <p class="destination-text">28 Listing</p>
                            <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="17%" data-right="9%">
            <img src="{{asset('frontend/assets/img/shape/shape_1.png')}}" alt="shape">
        </div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="8%" data-right="8%">
            <img src="{{asset('frontend/assets/img/shape/shape_2.png')}}" alt="shape">
        </div>
        <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="15%" data-right="4%">
            <img src="{{asset('frontend/assets/img/shape/shape_3.png')}}" alt="shape">
        </div>
    </section> 
    <section class="position-relative space-bottom">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Let’s Checkin</span>
                <h2 class="sec-title">Affordable Pricing plans</h2>
            </div>
            <div class="row gy-4 justify-content-center">

                <div class="col-xl-4 col-md-6">
                    <div class="price-card ">
                        <div class="offer-tag">Popular</div>
                        <div class="price-card_wrapp">
                            <div class="price-card_icon">
                                <img src="{{asset('frontend/assets/img/icon/price_1_1.svg')}}" alt="img">
                            </div>
                            <h3 class="box-title">Basic Plan</h3>
                        </div>
                        <div class="price-card_content">
                            <h4 class="price-card_price">$785.00<span class="duration">/Per Night</span></h4>
                            <p class="price-card_text">Essential services for basic and signle person seeking.</p>
                            <div class="checklist">
                                <ul>
                                    <li>Up to 2 members</li>
                                    <li>Room Service Fees</li>
                                    <li>Driver Service Feet</li>
                                    <li>Tour management</li>
                                    <li>Collaboration</li>
                                    <li>Entrance Fees</li>
                                    <li>Guide Fees in Destination</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-btn"><a href="contact.html" class="th-btn style3 w-100">Get Started</a></div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="price-card active">
                        <div class="offer-tag">Popular</div>
                        <div class="price-card_wrapp">
                            <div class="price-card_icon">
                                <img src="{{asset('frontend/assets/img/icon/price_1_2.svg')}}" alt="img">
                            </div>
                            <h3 class="box-title">Advanced Plan</h3>
                        </div>
                        <div class="price-card_content">
                            <h4 class="price-card_price">$980.00<span class="duration">/Per Night</span></h4>
                            <p class="price-card_text">Essential services for basic and signle person seeking.</p>
                            <div class="checklist">
                                <ul>
                                    <li>Up to 2 members</li>
                                    <li>Room Service Fees</li>
                                    <li>Driver Service Feet</li>
                                    <li>Tour management</li>
                                    <li>Collaboration</li>
                                    <li>Entrance Fees</li>
                                    <li> Auto refresh ads</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-btn"><a href="contact.html" class="th-btn style3 w-100">Get Started</a></div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="price-card ">
                        <div class="offer-tag">Popular</div>
                        <div class="price-card_wrapp">
                            <div class="price-card_icon">
                                <img src="{{asset('frontend/assets/img/icon/price_1_3.svg')}}" alt="img">
                            </div>
                            <h3 class="box-title">Premium Plan</h3>
                        </div>
                        <div class="price-card_content">
                            <h4 class="price-card_price">$1580.00<span class="duration">/Per Night</span></h4>
                            <p class="price-card_text">Essential services for basic and signle person seeking.</p>
                            <div class="checklist">
                                <ul>
                                    <li>Up to 2 members</li>
                                    <li>Room Service Fees</li>
                                    <li>Driver Service Feet</li>
                                    <li>Tour management</li>
                                    <li>Collaboration</li>
                                    <li>Entrance Fees</li>
                                    <li> Auto refresh ads</li>
                                </ul>
                            </div>
                        </div>
                        <div class="price-btn"><a href="contact.html" class="th-btn style3 w-100">Get Started</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-bottom="0%" data-right="3%">
            <img class="gmovingX" src="{{asset('frontend/assets/img/normal/about-slide-img.png')}}" alt="shape">
        </div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="0%" data-left="3%">
            <img src="{{asset('frontend/assets/img/shape/shape_6.png')}}" alt="shape">
        </div>
        <div class="shape-mockup jump d-none d-xl-block" data-top="15%" data-left="6%">
            <img src="{{asset('frontend/assets/img/shape/shape_2_2.png')}}" alt="shape">
        </div>
    </section>
@endsection