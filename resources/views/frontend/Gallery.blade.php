@extends('frontend.master')


@section ('title', 'Home')

@section('content')
  <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('frontend/images/gallery.jpg'); background-size: cover; background-position: center center; height: 400px;">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Our Gallery</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-travel.html">Home</a></li>
                <li>Our Gallery</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
Gallery Area  
==============================-->
    <div class="overflow-hidden space" id="gallery-sec">
        <div class="container-fuild">
            <div class="title-area mb-30 text-center">
                <span class="sub-title">Explore Us</span>
                <h2 class="sec-title">A truly exceptional experience</h2>
            </div>
            <div class="row gy-4 gallery-row4">
                <div class="col-auto">
                    <div class="gallery-box style5">
                        <div class="gallery-img global-img">
                            <img src="frontend/assets/img/gallery/gallery_8_1.jpg" alt="gallery image">
                            <a href="frontend/assets/img/gallery/gallery_8_1.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="gallery-box style5">
                        <div class="gallery-img global-img">
                            <img src="frontend/assets/img/gallery/gallery_8_2.jpg" alt="gallery image">
                            <a href="frontend/assets/img/gallery/gallery_8_2.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="gallery-box style5">
                        <div class="gallery-img global-img">
                            <img src="frontend/assets/img/gallery/gallery_8_3.jpg" alt="gallery image">
                            <a href="frontend/assets/img/gallery/gallery_8_3.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="gallery-box style5">
                        <div class="gallery-img global-img">
                            <img src="frontend/assets/img/gallery/gallery_8_4.jpg" alt="gallery image">
                            <a href="frontend/assets/img/gallery/gallery_8_4.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="gallery-box style5">
                        <div class="gallery-img global-img">
                            <img src="frontend/assets/img/gallery/gallery_8_5.jpg" alt="gallery image">
                            <a href="frontend/assets/img/gallery/gallery_8_5.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="gallery-box style5">
                        <div class="gallery-img global-img">
                            <img src="frontend/assets/img/gallery/gallery_8_6.jpg" alt="gallery image">
                            <a href="frontend/assets/img/gallery/gallery_8_6.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="gallery-box style5">
                        <div class="gallery-img global-img">
                            <img src="frontend/assets/img/gallery/gallery_8_7.jpg" alt="gallery image">
                            <a href="frontend/assets/img/gallery/gallery_8_7.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="gallery-box style5">
                        <div class="gallery-img global-img">
                            <img src="frontend/assets/img/gallery/gallery_8_8.jpg" alt="gallery image">
                            <a href="frontend/assets/img/gallery/gallery_8_8.jpg" class="icon-btn popup-image"><i class="fal fa-magnifying-glass-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection