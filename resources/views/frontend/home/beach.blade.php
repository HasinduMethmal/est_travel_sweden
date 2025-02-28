@extends('frontend.master')

@section ('title', 'home_beach')

@section('content')

<div class="th-hero-wrapper hero-5" id="hero" data-bg-src="{{asset('frontend/assets/img/bg/hero_bg_5_1.png')}}">
    <div class="swiper th-slider hero-slider-5" id="heroSlide1" data-slider-options='{"effect":"fade","menu": ["", "", ""],"heroSlide1": {"swiper-container": {"pagination": {"el": ".swiper-pagination", "clickable": true }}}}'>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="container">
                        <div class="hero-style5">
                            <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.4s">
                                Your Dream Beach Escape Awaits </h1>
                            <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.4s">
                                Experience the ultimate beach vacation with luxurious accommodations, thrilling water sports, and relaxation galore.</p>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                <a href="tour.html" class="th-btn style2 th-icon">Explore Tours</a>
                            </div>
                        </div>
                    </div>
                    <div class="th-hero-image">
                        <div class="hero-img" data-ani="slideinleft" data-ani-delay="0.8s">
                            <img src=" {{asset('frontend/assets/img/hero/hero_5_1_1.jpg')}}" alt="">
                        </div>
                        <div class="hero-img2" data-ani="slideinright" data-ani-delay="0.9s">
                            <img src=" {{asset('frontend/assets/img/hero/hero_5_2_1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="container">
                        <div class="hero-style5">
                            <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.4s">
                                Sandy and Salty Air A Beach Escape </h1>
                            <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.4s">
                                Beaches offer so much to enjoy! From relaxing under the sun and building sandcastles to swimming, beach volleybal</p>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                <a href="tour.html" class="th-btn style2 th-icon">Explore Tours</a>
                            </div>
                        </div>
                    </div>
                    <div class="th-hero-image">
                        <div class="hero-img" data-ani="slideinleft" data-ani-delay="0.8s">
                            <img src=" {{asset('frontend/assets/img/hero/hero_5_1_2.jpg')}}" alt="">
                        </div>
                        <div class="hero-img2" data-ani="slideinright" data-ani-delay="0.9s">
                            <img src=" {{asset('frontend/assets/img/hero/hero_5_2_2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-inner">
                    <div class="container">
                        <div class="hero-style5">
                            <h1 class="hero-title text-white" data-ani="slideinleft" data-ani-delay="0.4s">
                                Ocean A Tranquil Beach Escape </h1>
                            <p class="hero-text" data-ani="slideinleft" data-ani-delay="0.4s">
                                Beaches are pretty fantastic! Whether you're into sunbathing, playing beach volleyball, building sandcastles, strolling</p>
                            <div class="btn-group" data-ani="slideinup" data-ani-delay="0.6s">
                                <a href="tour.html" class="th-btn style2 th-icon">Explore Tours</a>
                            </div>
                        </div>
                    </div>
                    <div class="th-hero-image">
                        <div class="hero-img" data-ani="slideinleft" data-ani-delay="0.8s">
                            <img src=" {{asset('frontend/assets/img/hero/hero_5_1_3.jpg')}}" alt="">
                        </div>
                        <div class="hero-img2" data-ani="slideinright" data-ani-delay="0.9s">
                            <img src=" {{asset('frontend/assets/img/hero/hero_5_2_3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="th-swiper-custom">
            <button data-slider-prev="#heroSlide1" class="slider-arrow slider-prev"><img src="{{asset('frontend/assets/img/icon/right-arrow.svg')}}" alt=""></button>
            <div class="slider-pagination"></div>
            <button data-slider-next="#heroSlide1" class="slider-arrow slider-next"><img src="{{asset('frontend/assets/img/icon/left-arrow.svg')}}" alt=""></button>
        </div>

    </div>
</div>

<div class="booking-sec">
    <div class="container">
        <form action="mail.php" method="POST" class="booking-form style3 ajax-contact">
            <div class="input-wrap">
                <div class="row align-items-center justify-content-between">
                    <div class="form-group col-md-6 col-lg-auto">
                        <div class="booking-client-box mb-sm-0 mb-3">
                            <div class="client-thumb-group">
                                <div class="thumb"><img src="{{asset('frontend/assets/img/shape/client-img-1-1.png')}}" alt="avater"></div>
                                <div class="thumb"><img src="{{asset('frontend/assets/img/shape/client-img-1-2.png')}}" alt="avater"></div>
                                <div class="thumb"><img src="{{asset('frontend/assets/img/shape/client-img-1-3.png')}}" alt="avater"></div>
                                <div class="thumb icon"><i class="fa-light fa-plus"></i></div>
                            </div>
                            <h4 class="cilent-box_counter"><span class="counter-number">2</span>k+ people Booked</h4>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-lg-auto">
                        <div class="icon">
                            <i class="fa-light fa-route"></i>
                        </div>
                        <div class="search-input">
                            <label>Destination</label>
                            <select name="subject" id="subject" class="form-select nice-select">
                                <option value="Select Destination" selected disabled>Select Destination</option>
                                <option value="Australia">Australia</option>
                                <option value="Dubai">Dubai</option>
                                <option value="England">England</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Egypt">Egypt</option>
                                <option value="Saudi Arab">Saudi Arab</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Scandinavia">Scandinavia</option>
                                <option value="Western Europe">Western Europe</option>
                                <option value="Indonesia">Indonesia</option>
                                <option class="Italy">Italy</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-lg-auto">
                        <div class="icon">
                            <i class="fa-regular fa-person-hiking"></i>
                        </div>
                        <div class="search-input">
                            <label>Type</label>
                            <select class=" nice-select" name="Adventure" id="Adventure">
                                <option value="Adventure" selected disabled>Adventure</option>
                                <option value="Beach">Beach</option>
                                <option value="Group Tour">Group Tour</option>
                                <option value="Couple Tour">Couple Tour</option>
                                <option value="Family Tour">Family Tour</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-lg-auto">
                        <div class="icon">
                            <i class="fa-light fa-clock"></i>
                        </div>
                        <div class="search-input">
                            <label>Duration</label>
                            <select class="form-select nice-select" name="Duration" id="Duration">
                                <option value="Normal" selected disabled>Duration</option>
                                <option value="1">1 days</option>
                                <option value="2">2 days</option>
                                <option value="3">3 days</option>
                                <option value="4">4 days</option>
                                <option value="5">5 days</option>
                                <option value="6">6 days</option>
                                <option value="7">7 days</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-btn col-md-12 col-lg-auto">
                        <button class="th-btn style3"><img src="{{asset('frontend/assets/img/icon/search.svg')}}" alt="">Search</button>
                    </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </div>
        </form>
    </div>
</div>

<section class="category-area3 space">
    <div class="container th-container">
        <div class="title-area text-center">
            <span class="sub-title">Tour Categories</span>
            <h2 class="sec-title">Tour Classifications</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow categorySlider4" id="categorySlider4" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"5"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="category-card style2">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_2_1.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Maldives Beach</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style2">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_2_2.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Boulders Beach</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style2">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_2_3.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Bondi Beach</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style2">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_2_4.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Copacabana Beach</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style2">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_2_5.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Maldives Beach</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style2">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_2_1.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Maldives Beach</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style2">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_2_2.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Boulders Beach</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style2">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_2_3.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Bondi Beach</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style2">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_2_4.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Copacabana Beach</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style2">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_2_5.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Maldives Beach</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>


                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </div>
</section>

<div class="brand-area overflow-hidden space-top">
    <div class="container th-container">
        <div class="swiper th-slider brandSlider1" id="brandSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="brand-box">
                        <a href="">
                            <img class="original" src="{{asset('frontend/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <a href="">
                            <img class="original" src="{{asset('frontend/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <a href="">
                            <img class="original" src="{{asset('frontend/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <a href="">
                            <img class="original" src="{{asset('frontend/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <a href="">
                            <img class="original" src="{{asset('frontend/assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_5.svg')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <a href="">
                            <img class="original" src="{{asset('frontend/assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_6.svg')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <a href="">
                            <img class="original" src="{{asset('frontend/assets/img/brand/brand_1_7.svg')}}" alt="Brand Logo">
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_7.svg')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <a href="">
                            <img class="original" src="{{asset('frontend/assets/img/brand/brand_1_8.svg')}}" alt="Brand Logo">
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_8.svg')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <a href="">
                            <img class="original" src="{{asset('frontend/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_4.svg')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <a href="">
                            <img class="original" src="{{asset('frontend/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <a href="">
                            <img class="original" src="{{asset('frontend/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_2.svg')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="brand-box">
                        <a href="">
                            <img class="original" src="{{asset('frontend/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_1.svg')}}" alt="Brand Logo">
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<section class="position-relative overflow-hidden space" id="service-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="title-area text-center">
                    <span class="sub-title">Best Place For You</span>
                    <h2 class="sec-title">Our Destination Beach</h2>
                    <p class="sec-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="slider-area tour-slider ">
            <div class="swiper th-slider has-shadow slider-drag-wrap" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tour-box style3 th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="{{asset('frontend/assets/img/tour/tour_6_1.jpg')}}" alt="image">
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Bali Private Beach Package</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                            <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                            Rating)</span></div>
                                    <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                        Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>7 Days</span>
                                    <a href="tour-guider-details.html" class="th-btn style4 th-icon">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="tour-box style3 th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="{{asset('frontend/assets/img/tour/tour_6_2.jpg')}}" alt="image">
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Maldives Beach Package</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                            <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                            Rating)</span></div>
                                    <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                        Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>7 Days</span>
                                    <a href="tour-guider-details.html" class="th-btn style4 th-icon">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="tour-box style3 th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="{{asset('frontend/assets/img/tour/tour_6_3.jpg')}}" alt="image">
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Island Beach Package</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                            <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                            Rating)</span></div>
                                    <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                        Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>7 Days</span>
                                    <a href="tour-guider-details.html" class="th-btn style4 th-icon">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="tour-box style3 th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="{{asset('frontend/assets/img/tour/tour_6_4.jpg')}}" alt="image">
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Boulders Beach Package</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                            <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                            Rating)</span></div>
                                    <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                        Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>7 Days</span>
                                    <a href="tour-guider-details.html" class="th-btn style4 th-icon">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="tour-box style3 th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="{{asset('frontend/assets/img/tour/tour_6_1.jpg')}}" alt="image">
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Bali Private Beach Package</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                            <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                            Rating)</span></div>
                                    <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                        Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>7 Days</span>
                                    <a href="tour-guider-details.html" class="th-btn style4 th-icon">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="tour-box style3 th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="{{asset('frontend/assets/img/tour/tour_6_2.jpg')}}" alt="image">
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Maldives Beach Package</a></h3>
                                <div class="tour-rating">
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                            <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                            Rating)</span></div>
                                    <a href="tour-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                        Rating)</a>
                                </div>
                                <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                <div class="tour-action">
                                    <span><i class="fa-light fa-clock"></i>7 Days</span>
                                    <a href="tour-guider-details.html" class="th-btn style4 th-icon">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>


<section class="overflow-hidden space">
    <div class="container">
        <div class="row justify-content-lg-between justify-content-center align-items-end">
            <div class="col-lg">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title">News & Blog</span>
                    <h2 class="sec-title">Beach News and Insights</h2>
                </div>
            </div>
            <div class="col-lg-auto d-none d-lg-block">
                <div class="sec-btn">
                    <a href="blog.html" class="th-btn style4 th-icon">See More Articles</a>
                </div>
            </div>
        </div>
        <div class="row gx-24 gy-30">
            <div class="col-xl-8">
                <div class="blog-grid2 style2 th-ani">
                    <div class="blog-img global-img">
                        <img src="{{asset('frontend/assets/img/blog/blog_5_1.jpg')}}" alt="blog image">
                    </div>
                    <div class="blog-grid2_content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html">Sep 09, 2024</a>
                            <a href="blog.html">6 min read</a>
                        </div>
                        <h3 class="box-title"><a href="blog-details.html">Tourm Reveals New Eco-Friendly Resort in
                                Maldives</a></h3>
                        <a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
                    </div>
                </div>
                <div class="blog-grid2 th-ani style2 mt-24">
                    <div class="blog-img global-img">
                        <img src="{{asset('frontend/assets/img/blog/blog_5_2.jpg')}}" alt="blog image">
                    </div>
                    <div class="blog-grid2_content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html">Sep 10, 2024</a>
                            <a href="blog.html">8 min read</a>
                        </div>
                        <h3 class="box-title"><a href="blog-details.html">Essential Packing List for Your Next Beach
                                Vacation</a></h3>
                        <a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="blog-grid2 th-ani">
                    <div class="blog-img global-img">
                        <img src="{{asset('frontend/assets/img/blog/blog_5_3.jpg')}}" alt="blog image">
                    </div>
                    <div class="blog-grid2_content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html">Sep 05, 2024</a>
                            <a href="blog.html">6 min read</a>
                        </div>
                        <h3 class="box-title"><a href="blog-details.html">Tourm Commits to Carbon-Neutral Beach
                                Holidays</a></h3>
                        <a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection
