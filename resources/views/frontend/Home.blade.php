@extends('frontend.master')

@section ('title', 'Home')

@section('content')

<div class="th-hero-wrapper hero-1" id="hero">
        <div class="swiper th-slider hero-slider-1" id="heroSlide1" data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="frontend/assets/img/bg/homeimg.jpg">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Get unforgetable pleasure with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    Natural Wonder of the world </h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="{{route('booknow')}}" class="th-btn th-icon">Explore Tours</a>
                                    <a href="{{route('services.services')}}" class="th-btn style2 th-icon">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="frontend/assets/img/bg/homeimg2.jpg">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Get unforgetable pleasure with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    Let’s make your best trip with us </h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="tour.html" class="th-btn th-icon">Explore Tours</a>
                                    <a href="service.html" class="th-btn style2 th-icon">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-inner">
                        <div class="th-hero-bg" data-bg-src="frontend/assets/img/bg/homeimg3.jpg">
                        </div>
                        <div class="container">
                            <div class="hero-style1">
                                <span class="sub-title style1" data-ani="slideinup" data-ani-delay="0.2s">Get unforgetable pleasure with us</span>
                                <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.4s">
                                    Explore beauty of the whole world </h1>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                    <a href="tour.html" class="th-btn th-icon">Explore Tours</a>
                                    <a href="service.html" class="th-btn style2 th-icon">Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="th-swiper-custom">
                <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img src="frontend/assets/img/icon/right-arrow.svg" alt=""></button>
                <div class="slider-pagination"></div>
                <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><img src="frontend/assets/img/icon/left-arrow.svg" alt=""></button>
            </div>

        </div>
    </div>
</br>
</br>
</br>
</br>
    <div class="destination-area position-relative overflow-hidden ">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Top Destination</span>
                <h2 class="sec-title">Popular Destination</h2>

            </div>
            <div class="swiper th-slider destination-slider slider-drag-wrap" id="aboutSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"95","depth":"212","modifier":"1"},"centeredSlides":"true"}'>
                <div class="swiper-wrapper">
                    @foreach($destinations as $destination)
                    <div class="swiper-slide">
                        <div class="destination-box gsap-cursor">
                            <div class="destination-img">
                                <!-- Check if the destination has an image -->
                                <img src="{{ asset('storage/' . $destination->image) }}" alt="destination image">
                                <div class="destination-content">
                                    <div class="media-left">
                                        <h4 class="box-title">
                                            {{ $destination->name }}
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <!--==============================
About Area  
==============================-->
    <!--==============================
About Area  
==============================-->
    <div class="about-area position-relative overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="img-box1">
                        <div class="img1">
                            <img src="frontend/images/home_img.png" alt="About">
                        </div>
                        <div class="img2">
                            <img src="frontend/images/home_img1.png" alt="About">
                        </div>
                        <div class="img3">
                            <img src="frontend/images/home_img1.png" alt="About">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="ps-xl-4 ms-xl-2">
                        <div class="title-area mb-20 pe-xl-5 me-xl-5">
                            <span class="sub-title style1 ">Let’s Go Together</span>
                            <h2 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">Plan Your Trip With us</h2>

                            <p class="sec-text mb-30">There are many variations of passages of available but the majority
                                have
                                suffered alteration in some form, by injected hum randomised words which don't look even
                                slightly.
                            </p>
                        </div>
                        <div class="about-item-wrap">
                            <div class="about-item">
                                <div class="about-item_img"><img src="frontend/assets/img/icon/map3.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Exclusive Trip</h5>
                                    <p class="about-item_text">There are many variations of passages of available but the
                                        majority.</p>
                                </div>
                            </div>
                            <div class="about-item">
                                <div class="about-item_img"><img src="frontend/assets/img/icon/guide.svg" alt=""></div>
                                <div class="about-item_centent">
                                    <h5 class="box-title">Professional Guide</h5>
                                    <p class="about-item_text">There are many variations of passages of available but the
                                        majority.</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-35"><a href="/aboutUs" class="th-btn style3 th-icon">Learn More</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape-mockup shape1 d-none d-xl-block" data-top="12%" data-left="2%">
            <img src="frontend/assets/img/shape/shape_1.png" alt="shape">
        </div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-top="20%" data-left="3%">
            <img src="frontend/assets/img/shape/shape_2.png" alt="shape">
        </div>
        <div class="shape-mockup shape3 d-none d-xl-block" data-top="14%" data-left="8%">
            <img src="frontend/assets/img/shape/shape_3.png" alt="shape">
        </div>

        <div class="shape-mockup about-shape movingX d-none d-xxl-block" data-bottom="0%" data-right="8%">
            <img src="frontend/assets/img/normal/about-slide-img.png" alt="shape">
        </div>
        <div class="shape-mockup about-rating d-none d-xxl-block" data-bottom="45%" data-right="2%">
            <i class="fa-sharp fa-solid fa-star"></i><span>4.9k</span>
        </div>
        <div class="shape-mockup about-emoji d-none d-xxl-block" data-bottom="25%" data-right="22%"><img src="frontend/assets/img/icon/emoji.png" alt="">
        </div>
    </div>
    <!--==============================
Service Area  
==============================-->
    <!--==============================
Service Area  
==============================-->

<section class="position-relative bg-top-center overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title-area text-center">
                        <span class="sub-title">Best Place For You</span>
                        <h2 class="sec-title">Most Popular Tour</h2>
                        <p class="sec-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="slider-area tour-slider">
                <div class="swiper th-slider has-shadow slider-drag-wrap" 
                     data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                    
                    <div class="swiper-wrapper">
                        <!-- Loop through packages and display them dynamically -->
                        @foreach($packages as $package)
                            <div class="swiper-slide">
                                <div class="tour-box th-ani gsap-cursor">
                                    <div class="tour-box_img global-img">
                                        <!-- Assuming the package has an image attribute -->
                                        <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->title }}">
                                    </div>
                                    <div class="tour-content">
                                        <!-- Title, Link to Package Details, and Price -->
                                        <h3 class="box-title">
                                            {{ $package->name }}
                                        </h3>
                                        <h4 class="tour-box_price">
                                            <span class="currency">${{ number_format($package->price, 2) }}</span>/Person
                                        </h4>
                                        <!-- Display duration if available -->
                                        <div class="tour-action">
                                            <span><i class="fa-light fa-clock"></i>{{ $package->duration }} Days</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</section>


<!--==============================
Brand Area  
==============================-->

        <div class="container th-container">
            <div class="swiper th-slider brandSlider1" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="frontend/assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                                <img class="gray" src="frontend/assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="frontend/assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                                <img class="gray" src="frontend/assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="frontend/assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                                <img class="gray" src="frontend/assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="frontend/assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                                <img class="gray" src="frontend/assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="frontend/assets/img/brand/brand_1_5.svg" alt="Brand Logo">
                                <img class="gray" src="frotend/assets/img/brand/brand_1_5.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="frontend/assets/img/brand/brand_1_6.svg" alt="Brand Logo">
                                <img class="gray" src="frontend/assets/img/brand/brand_1_6.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="frontend/assets/img/brand/brand_1_7.svg" alt="Brand Logo">
                                <img class="gray" src="frontend/assets/img/brand/brand_1_7.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="frontend/assets/img/brand/brand_1_8.svg" alt="Brand Logo">
                                <img class="gray" src="frontend/assets/img/brand/brand_1_8.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="frontend/assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                                <img class="gray" src="frontend/assets/img/brand/brand_1_4.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="frontend/assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                                <img class="gray" src="frontend/assets/img/brand/brand_1_3.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="frontend/assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                                <img class="gray" src="frontend/assets/img/brand/brand_1_2.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-box">
                            <a href="">
                                <img class="original" src="frontend/assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                                <img class="gray" src="frontend/assets/img/brand/brand_1_1.svg" alt="Brand Logo">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    

@endsection