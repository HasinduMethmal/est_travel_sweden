@extends('frontend.master')

@section ('title', 'destination_details')

@section('content')

<div class="breadcumb-wrapper" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('frontend/images/destination_2.png'); background-size: cover; background-position: center center; height: 400px;">
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
                    <div class="service-img"><img src="{{ asset('storage/' . $destinations->image) }}" alt="{{ $destinations->name }}" style="width:872px;height:536px;"></div>
                    <div class="page-content d-block">
                        <div class="page-meta mt-50 mb-45">
                            <a class="page-tag" href="tour.html">Featured</a>
                            <span class="ratting"><i class="fa-sharp fa-solid fa-star"></i><span>4.8</span></span>
                        </div>
                        <h2 class="box-title">{{ $destinations->name }}</h2>
                        <h6 class="">Location : {{ $destinations->location }}</h6>
                        <p class="blog-text mb-30">{{$destinations ->description}}</p>
                      
                       
                        
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
                  
                
                  
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area style3">
                   
                    <div class="widget  ">
                        <h3 class="widget_title">Recent Blogs</h3>
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
