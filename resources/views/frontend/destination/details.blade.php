@extends('frontend.master')

@section ('title', 'destination_details')

@section('content')

<div class="breadcumb-wrapper background-image" style="background-image: url({{ asset('frontend/images/destination_2.png') }});">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Destination Details</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-travel.html">Home</a></li>
                <li>Destination  Details</li>
            </ul>
        </div>
    </div>
</div>

<section class="space">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="page-single">
                    <div class="service-img"><img src="{{asset('frontend/assets/img/destination/destination-details.jpg')}}" alt=""></div>
                    <div class="page-content d-block">
                        <div class="page-meta mt-50 mb-45">
                            <a class="page-tag" href="tour.html">Featured</a>
                            <span class="ratting"><i class="fa-sharp fa-solid fa-star"></i><span>4.8</span></span>
                        </div>
                        <h2 class="box-title">Explore the Beauty of Maldives and enjoy</h2>
                        <p class="blog-text mb-30">voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            Dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                            modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Quis autem vel
                            eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel
                            illum qui dolorem eum fugiat quo voluptas nulla pariatur Quis autem vel eum iure
                            reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui
                            dolorem eum fugiat quo voluptas nulla pariatur</p>
                        <p class="blog-text mb-35"> ‍Whether you work from home or commute to a nearby office, the
                            energy-efficient features of your home contribute to a productive and eco-conscious workday.
                            Smart home systems allow you to monitor and control energy usage, ensuring that your
                            environmental impact remains minimal.</p>
                        <h2 class="box-title">Basic Information</h2>
                        <p class="blog-text mb-35">voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            Dolorem ipsum quia dolor sit amet, consectetur, adipisci.</p>
                        <div class="destination-checklist">
                            <div class="checklist style2">
                                <ul>
                                    <li>Destination</li>
                                    <li>Visa Requirements</li>
                                    <li>Language</li>
                                    <li>Currency Used</li>
                                    <li>Area (km2)</li>
                                    <li>Destination</li>
                                    <li>Per Person</li>
                                </ul>
                            </div>
                            <div class="checklist style2">
                                <ul>
                                    <li>Netherlands</li>
                                    <li>On Arrival Visa</li>
                                    <li>English</li>
                                    <li>Euro</li>
                                    <li>25,859km2</li>
                                    <li>25 Tour Places</li>
                                    <li>$890.00</li>
                                </ul>
                            </div>
                        </div>
                        <blockquote>
                            <p>Join your neighbors for an eco-friendly social gathering as the day comes to a
                                conclusion. Savor refreshments made with sustainable ingredients and have discussions on
                                sustainable life. By fostering a sense of community.</p>
                            <cite>Michel Clarck</cite>
                        </blockquote>
                        <p class="blog-text mb-35">Dinning: Prepare a dinner using fresh ingredients from your own garden
                            or the local CSA program. The energy-efficient appliances in your kitchen make cooking a
                            breeze while minimizing your overall energy consumption. Share a meal with neighbors, The
                            quiet night offers a peaceful ambiance, reinforcing the community's commitment to a
                            sustainable, low-impact lifestyle.</p>
                        <p class="blog-text mb-35">
                            Living sustainably at Realar Residence is more than a choice; it's an immersive experience
                            that shapes every moment of your day. From the moment you wake up in your solar-powered home
                            to the evening gatherings with like-minded neighbors</p>
                        <h3 class="">The sustainable traveller These 6 hotels epitomise ethical luxury</h3>
                        <p class="mb-35"> ‍Whether you work from home or commute to a nearby office, the energy-efficient features of your home contribute to a productive and eco-conscious workday. Smart home systems allow you to monitor and control energy usage, ensuring that your environmental impact remains minimal.</p>
                        <div class="service-inner-img mb-40"><img src="{{asset('frontend/assets/img/destination/destination-inner-1.jpg')}}" alt=""></div>
                        <h2 class="box-title">Highlights</h2>
                        <div class="checklist">
                            <ul>
                                <li>Visit most popular location of Maldives</li>
                                <li>Buffet Breakfast for all traveler with good quality.</li>
                                <li>Expert guide always guide you and give informations.</li>
                                <li>Best Hotel for all also great food.</li>
                                <li>Helping all traveler for Money Exchange.</li>
                                <li>Buffet Breakfast for all traveler with good quality..</li>
                                <li>Buffet Breakfast for all traveler with good quality.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="destination-gallery-wrapper">
                        <h3 class="page-title mt-30 mb-30">From our gallery</h3>
                        <div class="row gy-4 gallery-row filter-active">
                            <div class="col-xxl-auto filter-item">
                                <div class="gallery-box style3">
                                    <div class="gallery-img global-img">
                                        <img src="{{asset('frontend/assets/img/gallery/gallery_6_1.jpg')}}" alt="gallery image">
                                        <a href="{{asset('frontend/assets/img/gallery/gallery_6_1.jpg')}}" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-auto filter-item">
                                <div class="gallery-box style3">
                                    <div class="gallery-img global-img">
                                        <img src="{{asset('frontend/assets/img/gallery/gallery_6_2.jpg')}}" alt="gallery image">
                                        <a href="{{asset('frontend/assets/img/gallery/gallery_6_2.jpg')}}" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-auto filter-item">
                                <div class="gallery-box style3">
                                    <div class="gallery-img global-img">
                                        <img src="{{asset('frontend/assets/img/gallery/gallery_6_3.jpg')}}" alt="gallery image">
                                        <a href="{{asset('frontend/assets/img/gallery/gallery_6_3.jpg')}}" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-auto filter-item">
                                <div class="gallery-box style3">
                                    <div class="gallery-img global-img">
                                        <img src="{{asset('frontend/assets/img/gallery/gallery_6_4.jpg')}}" alt="gallery image">
                                        <a href="{{asset('frontend/assets/img/gallery/gallery_6_4.jpg')}}" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                  
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area style3">
                   
                    <div class="widget  ">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="{{asset('frontend/assets/img/blog/recent-post-1-1.jpg')}}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Exploring The Green Spaces Of the island maldives</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fa-regular fa-calendar"></i>22/6/ 2024</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="{{asset('frontend/assets/img/blog/recent-post-1-2.jpg')}}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Harmony With Nature Of Belgium Tour and travle</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fa-regular fa-calendar"></i>25/6/ 2024</a>
                                    </div>

                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="{{asset('frontend/assets/img/blog/recent-post-1-3.jpg')}}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Exploring The Green Spaces Of Realar Residence</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fa-regular fa-calendar"></i>27/6/ 2024</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="widget widget_offer  " data-bg-src="{{asset('frontend/assets/img/bg/widget_bg_1.jpg')}}">
                        <div class="offer-banner">
                            <div class="offer">
                                <h6 class="box-title">Need Help? We Are Here To Help You</h6>
                                <div class="banner-logo">
                                    <img src="{{asset('frontend/assets/img/logo2.svg')}}" alt="Tourm">
                                </div>
                                <div class="offer">
                                    <h6 class="offer-title">You Get Online support</h6>
                                    <a class="offter-num" href="+256214203215">+256 214 203 215</a>
                                </div>
                                <a href="contact.html" class="th-btn style2 th-icon">Read More</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>

        </div>
    </div>
    <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="35%" data-right="12%">
        <img src="{{asset('frontend/assets/img/shape/shape_1.png')}}" alt="shape">
    </div>
    <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="31%" data-right="8%">
        <img src="{{asset('frontend/assets/img/shape/shape_2.png')}}" alt="shape">
    </div>
    <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="33%" data-right="5%">
        <img src="{{asset('frontend/assets/img/shape/shape_3.png')}}" alt="shape">
    </div>
</section>


@endsection
