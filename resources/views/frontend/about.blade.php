@extends('frontend.master')

@section ('title', 'About')

@section('content')

<div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend/images/about_1.png') }}" alt="Example Image">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About Us</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-travel.html">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</div>


<div class="about-area position-relative overflow-hidden overflow-hidden space" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-xl-7">
                <div class="img-box3">
                    <div class="img1 moving">
                        <img src="{{ asset('frontend/images/about_2.png') }}" alt="About">
                    </div>
                    <div class="img2 moving">
                        <img src="{{ asset('frontend/images/about_3.png') }}"alt="About">
                    </div>
                    <div class="img3 movingX">
                        <img src="{{ asset('frontend/images/about_4.png') }}"alt="About">
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="ps-xl-4">
                    <div class="title-area mb-20">
                        <span class="sub-title style1 ">Welcome To Best Time Travel</span>
                        <h3 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">We BELIEVE THAT TOURISM SHOULD BENEFIT BOTH TRAVELLER AND HOST ALIKE.</h2>
                    </div>
                    <p class="pe-xl-5">To redefine travel by creating seamless, unforgettable experiences that
                        turn every journey into the best time of your life. We believe travel
                        isn’t just about places—it’s about people, emotions, and extraordinary
                        moments you’ll be talking about for years to come..</p>
                    <p class="mb-30 pe-xl-5"> At Best Time Travel, we don’t just plan trips— we craft experiences that
                        spark joy, curiosity, and connection. Whether you're chasing sunsets,
                        diving into new cultures, or getting lost (in the best way) in hidden
                        corners of the world, we make sure every detail is seamless, so you can
                        focus on the fun. With exclusive local insights, stress-free planning,
                        and a touch of spontaneity, we bring you the kind of travel that feels
                        effortless, exciting, and truly your best time!.</p>
                    <div class="about-item-wrap">
                        <div class="about-item style2">
                            <div class="about-item_img"><img src="{{ asset('frontend/assets/img/icon/about_1_1.svg')}}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Exclusive Trip</h5>
                                <p class="about-item_text">Embark on an exclusive journey where every moment is a destination in itself.</p>
                            </div>
                        </div>
                        <div class="about-item style2">
                            <div class="about-item_img"><img src="{{ asset('frontend/assets/img/icon/about_1_2.svg')}}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Safety First Always</h5>
                                <p class="about-item_text">Always stay aware of your surroundings and keep your essential documents secure while traveling.</p>
                            </div>
                        </div>
                        <div class="about-item style2">
                            <div class="about-item_img"><img src="{{ asset('frontend/assets/img/icon/about_1_3.svg')}}" alt=""></div>
                            <div class="about-item_centent">
                                <h5 class="box-title">Professional Guide</h5>
                                <p class="about-item_text">Travel not to escape life, but to embrace the beauty, cultures, and stories the world has to offer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-35"><a href="contact.html" class="th-btn style3 th-icon">Contact With Us</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup movingX d-none d-xxl-block" data-top="4%" data-left="2%">
        <img src="{{ asset('frontend/assets/img/shape/shape_2_1.png')}}" alt="shape">
    </div>
    <div class="shape-mockup jump d-none d-xxl-block" data-top="28%" data-right="5%">
        <img src="{{ asset('frontend/assets/img/shape/shape_2_2.png')}}" alt="shape">
    </div>
    <div class="shape-mockup spin d-none d-xxl-block" data-bottom="18%" data-left="2%">
        <img src="{{ asset('frontend/assets/img/shape/shape_2_3.png')}}" alt="shape">
    </div>
    <div class="shape-mockup movixgX d-none d-xxl-block" data-bottom="18%" data-right="2%">
        <img src="{{ asset('frontend/assets/img/shape/shape_2_4.png')}}" alt="shape">
    </div>
</div>

<section class="testi-area overflow-hidden space-bottom" id="testi-sec">
        <div class="container-fluid p-0">
            <div class="title-area mb-20 text-center">
                <span class="sub-title">Testimonial</span>
                <h2 class="sec-title">What Client Say About us</h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider testiSlider1 has-shadow" id="testiSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"767":{"slidesPerView":"2","centeredSlides":"true"},"992":{"slidesPerView":"2","centeredSlides":"true"},"1200":{"slidesPerView":"2","centeredSlides":"true"},"1400":{"slidesPerView":"3","centeredSlides":"true"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater">
                                            <img src="{{ asset('frontend/assets/img/testimonial/testi_1_1.jpg')}}" alt="testimonial">
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
                                    <img src="{{ asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater">
                                            <img src="{{ asset('frontend/assets/img/testimonial/testi_1_2.jpg')}}" alt="testimonial">
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
                                    <img src="{{ asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater">
                                            <img src="{{ asset('frontend/assets/img/testimonial/testi_1_1.jpg')}}" alt="testimonial">
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
                                    <img src="{{ asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater">
                                            <img src="{{ asset('frontend/assets/img/testimonial/testi_1_2.jpg')}}" alt="testimonial">
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
                                    <img src="{{ asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater">
                                            <img src="{{ asset('frontend/assets/img/testimonial/testi_1_1.jpg')}}" alt="testimonial">
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
                                    <img src="{{ asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater">
                                            <img src="{{ asset('frontend/assets/img/testimonial/testi_1_1.jpg')}}" alt="testimonial">
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
                                    <img src="{{ asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater">
                                            <img src="{{ asset('frontend/assets/img/testimonial/testi_1_2.jpg')}}" alt="testimonial">
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
                                    <img src="{{ asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testi-card">
                                <div class="testi-card_wrapper">
                                    <div class="testi-card_profile">
                                        <div class="testi-card_avater">
                                            <img src="{{ asset('frontend/assets/img/testimonial/testi_1_1.jpg')}}" alt="testimonial">
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
                                    <img src="{{ asset('frontend/assets/img/icon/testi-quote.svg')}}" alt="img">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
        <div class="shape-mockup d-none d-xl-block" data-bottom="-2%" data-right="0%">
            <img src="{{ asset('frontend/assets/img/shape/line2.png')}}" alt="shape">
        </div>
        <div class="shape-mockup movingX d-none d-xl-block" data-top="30%" data-left="5%">
            <img src="{{ asset('frontend/assets/img/shape/shape_7.png')}}" alt="shape">
        </div>
</section>

<div class="brand-area overflow-hidden ">
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
                            <img class="gray" src="{{asset('frontend/assets/img/brand/brand_1_3.svg')}}" alt="Brand Logo')}}">
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


<section class="position-relative overflow-hidden space-bottom" id="destination-sec">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Services We Offer</span>
            <h2 class="sec-title">Our Amazing services</h2>
        </div>
        <div class="row gy-4 gx-4">
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="destination-item th-ani">
                    <div class="destination-item_img global-img">
                        <img src="{{ asset('frontend/images/service_1.png')}}" alt="image">
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
                        <img src="{{ asset('frontend/images/service_2.png')}}" alt="image">
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
                        <img src="{{ asset('frontend/images/service_3.png')}}" alt="image">
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
                        <img src="{{ asset('frontend/images/service_4.png')}}" alt="image">
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
                        <img src="{{ asset('frontend/images/service_5.png')}}" alt="image">
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
                        <img src="{{ asset('frontend/images/service_6.png')}}" alt="image">
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
                        <img src="{{ asset('frontend/images/service_7.png')}}" alt="image">
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
                        <img src="{{ asset('frontend/images/service_8.png')}}" alt="image">
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
</section>
@endsection
