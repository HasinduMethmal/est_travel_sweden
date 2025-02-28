@extends('frontend.master')

@section ('title', 'home_countryside')

@section('content')

<div class="th-hero-wrapper hero-7" id="hero" data-bg-src="{{asset('frontend/assets/img/bg/hero_bg_7_1.jpg')}}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-xl-8">
                <div class="hero-style7">
                    <span class="sub-title style1 text-white">Welcome to Countryside Hotel</span>
                    <h1 class="hero-title text-white">Serene Countryside Retreat at Tourm Best Hotel</h1>
                    <div class="btn-group">
                        <a href="tour.html" class="th-btn th-icon">Explore Tours</a>
                        <a href="service.html" class="th-btn style2 th-icon">Our Services</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4">
                <form action="mail.php" method="POST" class="hero-form ajax-contact">
                    <div class="hero-wrap">
                        <div class="title-area mb-35 text-center">
                            <span class="sub-title2 text-white">Select a date to explore</span>
                            <h2 class="sec-title text-white">Make Your Reservation</h2>
                        </div>
                        <div class="row gx-24 align-items-center justify-content-between">
                            <div class="form-group col-12">
                                <div class="form-item">
                                    <label for="name">Check In</label>
                                    <input type="date" class="form-control" name="date" id="date" value="2024-09-13" placeholder="select Date">
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <div class="form-item">
                                    <label for="name">Check Out</label>
                                    <input type="date" class="form-control" name="date" id="date" value="2024-09-16" placeholder="select Date">
                                </div>
                            </div>
                            <div class="form-group col-12">
                                <div class="form-item">
                                    <label for="name">Rooms</label>
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="1 Room" selected disabled>1 Room</option>
                                        <option value="2 Room">2 Room</option>
                                        <option value="3 Room">3 Room</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-item">
                                    <label for="name">Adults</label>
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="Adults" selected disabled>1</option>
                                        <option value="2 Room">2</option>
                                        <option value="3 Room">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="form-item">
                                    <label for="name">Children</label>
                                    <select name="subject" id="subject" class="form-select nice-select">
                                        <option value="1" selected disabled>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="btn-form">
                                <button type="submit" class="th-btn btn-fw style1">Confirm Availability <img src="{{asset('frontend/assets/img/icon/plane2.svg')}}" alt=""></button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<section class="category-area4 space">
    <div class="container th-container">
        <div class="title-area text-center">
            <span class="sub-title">Our Destination</span>
            <h2 class="sec-title">Explore Our Paradise</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow categorySlider4" id="categorySlider4" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"},"1400":{"slidesPerView":"5"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="category-card style3">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_3_1.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">New Zealand</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style3">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_3_2.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">The Amazon</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style3">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_3_3.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Angel Falls, Venezuela</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style3">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_3_4.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">The great wall of china</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style3">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_3_5.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">The Azores, Portugal</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style3">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_3_1.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">New Zealand</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style3">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_3_2.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">The Amazon</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style3">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_3_3.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">Angel Falls, Venezuela</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style3">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_3_4.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">The great wall of china</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="category-card style3">
                            <div class="box-img global-img">
                                <img src="{{asset('frontend/assets/img/category/category_3_5.jpg')}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="destination.html">The Azores, Portugal</a></h3>
                            <a class="line-btn" href="destination.html">See more</a>
                        </div>
                    </div>


                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative overflow-hidden space" id="service-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-3">
                <div class="title-area text-center">
                    <span class="sub-title">Best Place For You</span>
                    <h2 class="sec-title">Our Best CountrySide Best Place</h2>
                    <p class="sec-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="slider-area tour-slider ">
            <div class="swiper th-slider has-shadow slider-drag-wrap" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1300":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="tour-box style4 th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="{{asset('frontend/assets/img/tour/tour_7_1.jpg')}}" alt="image">
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">vineyard tour Harvesting</a></h3>
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
                        <div class="tour-box style4 th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="{{asset('frontend/assets/img/tour/tour_7_2.jpg')}}" alt="image">
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Cultural Heritage Tour</a></h3>
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
                        <div class="tour-box style4 th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="{{asset('frontend/assets/img/tour/tour_7_3.jpg')}}" alt="image">
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Nature & Adventure Tour</a></h3>
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
                        <div class="tour-box style4 th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="{{asset('frontend/assets/img/tour/tour_7_4.jpg')}}" alt="image">
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
                        <div class="tour-box style4 th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="{{asset('frontend/assets/img/tour/tour_7_1.jpg')}}" alt="image">
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">vineyard tour Harvesting</a></h3>
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
                        <div class="tour-box style4 th-ani gsap-cursor">
                            <div class="tour-box_img global-img">
                                <img src="{{asset('frontend/assets/img/tour/tour_7_2.jpg')}}" alt="image">
                            </div>
                            <div class="tour-content">
                                <h3 class="box-title"><a href="tour-details.html">Cultural Heritage Tour</a></h3>
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


<div class="brand-area overflow-hidden space-bottom">
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

<div class="destination-area6 position-relative overflow-hidden space">
    <div class="container th-container">
        <div class="title-area text-center">
            <span class="sub-title">Our Gallery</span>
            <h2 class="sec-title">A simply amazing experience</h2>

        </div>
        <div class="slider-area">
            <div class="swiper th-slider destination-slider2 slider-drag-wrap" id="destiSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"-17","stretch":"-8","depth":"330","modifier":"1","slideShadows":"false"},"centeredSlides":"true"}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="destination-box2 gsap-cursor">
                            <div class="destination-img">
                                <img src="{{asset('frontend/assets/img/destination/destination_6_1.jpg')}}" alt="destination image">
                                <a href="{{asset('frontend/assets/img/destination/destination_6_1.jpg')}}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box2 gsap-cursor">
                            <div class="destination-img">
                                <img src="{{asset('frontend/assets/img/destination/destination_6_2.jpg')}}" alt="destination image">
                                <a href="{{asset('frontend/assets/img/destination/destination_6_2.jpg')}}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box2 gsap-cursor">
                            <div class="destination-img">
                                <img src="{{asset('frontend/assets/img/destination/destination_6_3.jpg')}}" alt="destination image">
                                <a href="{{asset('frontend/assets/img/destination/destination_6_3.jpg')}}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box2 gsap-cursor">
                            <div class="destination-img">
                                <img src="{{asset('frontend/assets/img/destination/destination_6_4.jpg')}}" alt="destination image">
                                <a href="{{asset('frontend/assets/img/destination/destination_6_4.jpg')}}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box2 gsap-cursor">
                            <div class="destination-img">
                                <img src="{{asset('frontend/assets/img/destination/destination_6_5.jpg')}}" alt="destination image">
                                <a href="{{asset('frontend/assets/img/destination/destination_6_5.jpg')}}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box2 gsap-cursor">
                            <div class="destination-img">
                                <img src="{{asset('frontend/assets/img/destination/destination_6_1.jpg')}}" alt="destination image">
                                <a href="{{asset('frontend/assets/img/destination/destination_6_1.jpg')}}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box2 gsap-cursor">
                            <div class="destination-img">
                                <img src="{{asset('frontend/assets/img/destination/destination_6_2.jpg')}}" alt="destination image">
                                <a href="{{asset('frontend/assets/img/destination/destination_6_2.jpg')}}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box2 gsap-cursor">
                            <div class="destination-img">
                                <img src="{{asset('frontend/assets/img/destination/destination_6_3.jpg')}}" alt="destination image">
                                <a href="{{asset('frontend/assets/img/destination/destination_6_3.jpg')}}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box2 gsap-cursor">
                            <div class="destination-img">
                                <img src="{{asset('frontend/assets/img/destination/destination_6_4.jpg')}}" alt="destination image">
                                <a href="{{asset('frontend/assets/img/destination/destination_6_4.jpg')}}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="destination-box2 gsap-cursor">
                            <div class="destination-img">
                                <img src="{{asset('frontend/assets/img/destination/destination_6_5.jpg')}}" alt="destination image">
                                <a href="{{asset('frontend/assets/img/destination/destination_6_5.jpg')}}" class="popup-image">
                                    <div class="icon-btn"><i class="fal fa-magnifying-glass-plus"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="icon-box mt-60 text-center">
                <button data-slider-prev="#destiSlider1" class="slider-arrow style5 default"><img src="{{asset('frontend/assets/img/icon/right-arrow2.svg')}}" alt=""></button>
                <button data-slider-next="#destiSlider1" class="slider-arrow style5 default"><img src="{{asset('frontend/assets/img/icon/left-arrow2.svg')}}" alt=""></button>
            </div>
        </div>
    </div>
    <div class="shape-mockup shape1 d-none d-xxl-block" data-top="7%" data-right="9%">
        <img src="{{asset('frontend/assets/img/shape/shape_1.png')}}" alt="shape">
    </div>
    <div class="shape-mockup shape2 d-none d-xl-block" data-top="12%" data-right="5%">
        <img src="{{asset('frontend/assets/img/shape/shape_2.png')}}" alt="shape">
    </div>
    <div class="shape-mockup shape3 d-none d-xxl-block" data-top="15%" data-right="1%">
        <img src="{{asset('frontend/assets/img/shape/shape_3.png')}}" alt="shape">
    </div>
    <div class="shape-mockup spin d-none d-xxl-block" data-top="15%" data-left="2%">
        <img src="{{asset('frontend/assets/img/shape/shape_2_7.png')}}" alt="shape">
    </div>
    <div class="shape-mockup jump d-none d-xxl-block" data-bottom="15%" data-left="0%">
        <img src="{{asset('frontend/assets/img/shape/shape_2_8.png')}}" alt="shape">
    </div>
    <div class="shape-mockup movingX d-none d-xxl-block" data-bottom="19%" data-right="7%">
        <img src="{{asset('frontend/assets/img/shape/shape_2_9.png')}}" alt="shape">
    </div>
</div>

<div class="counter-area space-bottom">
    <div class="container">
        <div class="row">

            <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                <div class="counter-card">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">12</span></h3>
                        <h6 class="counter-title">Years Experience</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                <div class="counter-card">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">97</span>%</h3>
                        <h6 class="counter-title">Retention Rate</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                <div class="counter-card">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">8</span>k</h3>
                        <h6 class="counter-title">Tour Completed</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3 counter-card-wrap style2">
                <div class="counter-card">
                    <div class="counter-shape"><span></span></div>
                    <div class="media-body">
                        <h3 class="box-number"><span class="counter-number">19</span>k</h3>
                        <h6 class="counter-title">Happy Travellers</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup shape1 d-none d-xl-block" data-top="30%" data-left="2%">
        <img src="{{asset('frontend/assets/img/shape/shape_1.png')}}" alt="shape">
    </div>
    <div class="shape-mockup shape2 d-none d-xl-block" data-top="45%" data-left="2%">
        <img src="{{asset('frontend/assets/img/shape/shape_2.png')}}" alt="shape">
    </div>
    <div class="shape-mockup shape3 d-none d-xl-block" data-top="32%" data-left="7%">
        <img src="{{asset('frontend/assets/img/shape/shape_3.png')}}" alt="shape">
    </div>
    <div class="shape-mockup d-none d-xl-block" data-top="10%" data-right="5%">
        <img src="{{asset('frontend/assets/img/shape/shape_2_2.png')}}" alt="shape">
    </div>
    <div class="shape-mockup spin d-none d-xl-block" data-bottom="20%" data-right="3%">
        <img src="{{asset('frontend/assets/img/shape/shape_2_5.png')}}" alt="shape">
    </div>
    <div class="shape-mockup spin d-none d-xl-block" data-bottom="15%" data-right="20%">
        <img src="{{asset('frontend/assets/img/shape/shape_2_3.png')}}" alt="shape">
    </div>
</div>

<section class="bg-smoke space" data-bg-src="{{asset('frontend/assets/img/bg/team_bg_1.png')}}">
    <div class="container z-index-common">
        <div class="title-area text-center">
            <span class="sub-title">Meet with Guide</span>
            <h2 class="sec-title">Tour Guide</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider teamSlider1 has-shadow" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="{{asset('frontend/assets/img/team/team_1_1.jpg')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title"><a href="tour-guider-details.html">Jacob Jones</a></h3>
                                    <span class="team-desig">Tourist Guide</span>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="{{asset('frontend/assets/img/team/team_1_2.jpg')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title"><a href="tour-guider-details.html">Jane Cooper</a></h3>
                                    <span class="team-desig">Tourist Guide</span>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="{{asset('frontend/assets/img/team/team_1_3.jpg')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title"><a href="tour-guider-details.html">Guy Hawkins</a></h3>
                                    <span class="team-desig">Tourist Guide</span>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="{{asset('frontend/assets/img/team/team_1_4.jpg')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title"><a href="tour-guider-details.html">Jenny Wilson</a></h3>
                                    <span class="team-desig">Tourist Guide</span>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="{{asset('frontend/assets/img/team/team_1_1.jpg')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title"><a href="tour-guider-details.html">Jacob Jones</a></h3>
                                    <span class="team-desig">Tourist Guide</span>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="{{asset('frontend/assets/img/team/team_1_2.jpg')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title"><a href="tour-guider-details.html">Jane Cooper</a></h3>
                                    <span class="team-desig">Tourist Guide</span>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="{{asset('frontend/assets/img/team/team_1_3.jpg')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title"><a href="tour-guider-details.html">Guy Hawkins</a></h3>
                                    <span class="team-desig">Tourist Guide</span>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-box">
                            <div class="team-img">
                                <img src="{{asset('frontend/assets/img/team/team_1_4.jpg')}}" alt="Team">
                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title"><a href="tour-guider-details.html">Jenny Wilson</a></h3>
                                    <span class="team-desig">Tourist Guide</span>
                                    <div class="th-social">
                                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </div>
</section>

<section class="testi-area overflow-hidden space-top" id="testi-sec">
    <div class="container-fluid p-0">
        <div class="title-area mb-20 text-center">
            <span class="sub-title">Testimonial</span>
            <h2 class="sec-title">What Client Say About us</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider testiSlider6 has-shadow" id="testiSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2","centeredSlides":"true"},"992":{"slidesPerView":"2","centeredSlides":"true"},"1200":{"slidesPerView":"2","centeredSlides":"true"},"1400":{"slidesPerView":"3","centeredSlides":"true"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-card style2">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile" data-mask-src="{{asset('frontend/assets/img/shape/testi-shape.png')}}">
                                    <div class="testi-card_avater">
                                        <img src="{{asset('frontend/assets/img/testimonial/testi_1_1.jpg')}}" alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Maria Doe</h3>
                                        <span class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>

                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I discovered Ecoland Residence. From the moment I stepped into this community, I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                            <div class="testi-card-quote">
                                <img src="{{asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style2">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile" data-mask-src="{{asset('frontend/assets/img/shape/testi-shape.png')}}">
                                    <div class="testi-card_avater">
                                        <img src="{{asset('frontend/assets/img/testimonial/testi_1_2.jpg')}}" alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Andrew Simon</h3>
                                        <span class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>

                            <p class="testi-card_text">“The home boasts sleek, contemporary architecture with clean lines and expansive windows, allowing natural light to flood the interiors It incorporates passive design principles”</p>
                            <div class="testi-card-quote">
                                <img src="{{asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style2">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile" data-mask-src="{{asset('frontend/assets/img/shape/testi-shape.png')}}">
                                    <div class="testi-card_avater">
                                        <img src="{{asset('frontend/assets/img/testimonial/testi_1_1.jpg')}}" alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Alex Jordan</h3>
                                        <span class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>

                            <p class="testi-card_text">“Solar panels adorn the roof, harnessing renewable energy to power the home and even feed excess electricity back into the grid. High-performance insulation and triple-glazed”</p>
                            <div class="testi-card-quote">
                                <img src="{{asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style2">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile" data-mask-src="{{asset('frontend/assets/img/shape/testi-shape.png')}}">
                                    <div class="testi-card_avater">
                                        <img src="{{asset('frontend/assets/img/testimonial/testi_1_2.jpg')}}" alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Maria Doe</h3>
                                        <span class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>

                            <p class="testi-card_text">A sophisticated rainwater harvesting system collects and filters rainwater for irrigation and non-potable uses, reducing reliance on municipal water sources. Greywater systems</p>
                            <div class="testi-card-quote">
                                <img src="{{asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style2">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile" data-mask-src="{{asset('frontend/assets/img/shape/testi-shape.png')}}">
                                    <div class="testi-card_avater">
                                        <img src="{{asset('frontend/assets/img/testimonial/testi_1_1.jpg')}}" alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Angelina Rose</h3>
                                        <span class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>

                            <p class="testi-card_text">Throughout the interior, eco-friendly materials like reclaimed wood, bamboo flooring, and recycled glass countertops create a luxurious yet sustainable ambiance.</p>
                            <div class="testi-card-quote">
                                <img src="{{asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style2">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile" data-mask-src="{{asset('frontend/assets/img/shape/testi-shape.png')}}">
                                    <div class="testi-card_avater">
                                        <img src="{{asset('frontend/assets/img/testimonial/testi_1_1.jpg')}}" alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Maria Doe</h3>
                                        <span class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>

                            <p class="testi-card_text">“A home that perfectly blends sustainability with luxury until I discovered Ecoland Residence. From the moment I stepped into this community, I knew it was where I wanted to live. The commitment to eco-friendly living”</p>
                            <div class="testi-card-quote">
                                <img src="{{asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style2">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile" data-mask-src="{{asset('frontend/assets/img/shape/testi-shape.png')}}">
                                    <div class="testi-card_avater">
                                        <img src="{{asset('frontend/assets/img/testimonial/testi_1_2.jpg')}}" alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Andrew Simon</h3>
                                        <span class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>

                            <p class="testi-card_text">A sophisticated rainwater harvesting system collects and filters rainwater for irrigation and non-potable uses, reducing reliance on municipal water sources. Greywater systems</p>
                            <div class="testi-card-quote">
                                <img src="{{asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card style2">
                            <div class="testi-card_wrapper">
                                <div class="testi-card_profile" data-mask-src="{{asset('frontend/assets/img/shape/testi-shape.png')}}">
                                    <div class="testi-card_avater">
                                        <img src="{{asset('frontend/assets/img/testimonial/testi_1_1.jpg')}}" alt="testimonial">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="box-title">Alex Jordan</h3>
                                        <span class="testi-card_desig">Traveller</span>
                                    </div>
                                </div>
                                <div class="testi-card_review">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>

                            <p class="testi-card_text">Throughout the interior, eco-friendly materials like reclaimed wood, bamboo flooring, and recycled glass countertops create a luxurious yet sustainable ambiance.</p>
                            <div class="testi-card-quote">
                                <img src="{{asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
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
                    <h2 class="sec-title">Our News & Update</h2>

                </div>
            </div>
            <div class="col-lg-auto d-none d-lg-block">
                <div class="sec-btn">
                    <a href="blog.html" class="th-btn style4 th-icon">See More Articles</a>
                </div>
            </div>
        </div>
        <div class="row gx-24 gy-30">
            <div class="col-xl-4">
                <div class="blog-grid3 th-ani">
                    <div class="blog-img global-img">
                        <img src="{{asset('frontend/assets/img/blog/blog_7_1.jpg')}}" alt="blog image">
                    </div>
                    <div class="blog-grid_content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html">Sep 05, 2024</a>
                            <a href="blog.html">6 min read</a>
                        </div>
                        <h3 class="box-title"><a href="blog-details.html">Tourm Commits to Carbon-Neutral Countryside Holidays</a></h3>
                        <a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="blog-grid3 style2 th-ani">
                    <div class="blog-img global-img">
                        <img src="{{asset('frontend/assets/img/blog/blog_7_2.jpg')}}" alt="blog image">
                    </div>
                    <div class="blog-grid_content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html">Sep 07, 2024</a>
                            <a href="blog.html">7 min read</a>
                        </div>
                        <h3 class="box-title"><a href="blog-details.html">A Voyage to the World's Cultural and Natural Marvels</a></h3>
                        <a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
                    </div>
                </div>
                <div class="blog-grid3 th-ani style2 mt-24">
                    <div class="blog-img global-img">
                        <img src="{{asset('frontend/assets/img/blog/blog_7_3.jpg')}}" alt="blog image">
                    </div>
                    <div class="blog-grid_content">
                        <div class="blog-meta">
                            <a class="author" href="blog.html">Sep 10, 2024</a>
                            <a href="blog.html">8 min read</a>
                        </div>
                        <h3 class="box-title"><a href="blog-details.html">Touring the World's Heritage Wonders</a></h3>
                        <a href="blog-details.html" class="th-btn style4 th-icon">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







@endsection


