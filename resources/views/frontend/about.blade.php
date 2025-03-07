@extends('frontend.master')

@section ('title', 'About')

@section('content')

<div class="breadcumb-wrapper" 
     style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
     url('{{ asset('frontend/images/about_1.png') }}') !important;">
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
                        <h3 class="sec-title mb-20 pe-xl-5 me-xl-5 heading">We Believe That Tourism Should Benefit Both Traveller And Host Alike.</h2>
                    </div>
                   
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
                    <div class="mt-35"><a href="{{route('contact')}}" class="th-btn style3 th-icon">Contact With Us</a></div>
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


<div class="container" style="max-width: 1300px; margin: auto; margin-bottom: 100px;">
    <!-- First Row: Vision Statement + Mission Statement -->
    <div class="row align-items-center">
        <!-- Vision Box -->
        <div class="col-md-5">
            <div style="padding: 40px; border-radius: 10px; box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.1); background-color:rgb(240, 250, 252); text-align: center;">
                <span class="sub-title style1" style="margin-bottom: 30px; color: #113d48; font-size: 30px; font-weight: bold;">
                    OUR VISION
                </span>
                <h5 class="box-title" style="font-size: 21px; line-height: 1.7; letter-spacing: 1px; color: #009dc4;font-weight: bold;">
                    To redefine travel by creating seamless, unforgettable experiences that
                    turn every journey into the best time of your life. We believe travel
                    isn’t just about places—it’s about people, emotions, and extraordinary
                    moments you’ll be talking about for years to come.
                </h5>
            </div>
        </div>

        <!-- Mission Box -->
        <div class="col-md-7">
            <div style="padding: 40px; border-radius: 10px; box-shadow: 3px 3px 15px rgba(0, 0, 0, 0.1); background-color:rgb(240, 250, 252); text-align: center;">
                <span class="sub-title style1" style="margin-bottom: 30px; color: #113d48; font-size: 30px; font-weight: bold;">
                    OUR MISSION
                </span>
                <h5 class="box-title" style="font-size: 21px; line-height: 1.7; letter-spacing: 1px; color: #009dc4;font-weight: bold;">
                    At Best Time Travel, we don’t just plan trips—we craft experiences that
                    spark joy, curiosity, and connection. Whether you're chasing sunsets,
                    diving into new cultures, or getting lost (in the best way) in hidden
                    corners of the world, we make sure every detail is seamless, so you can
                    focus on the fun. With exclusive local insights, stress-free planning,
                    and a touch of spontaneity, we bring you the kind of travel that feels
                    effortless, exciting, and truly your best time!
                </h5>
            </div>
        </div>
    </div>
</div>

<section class="position-relative bg-top-center overflow-hidden space" id="service-sec" style="background-image: url('frontend/images/aboutimg.jpg'); background-size: cover; background-position: center center; height: 500px; margin-bottom: 50px;">
</section>




<!--branding area-->
<div class="container th-container" style="margin-bottom:50px;">
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
