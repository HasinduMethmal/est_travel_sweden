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
            @foreach($galleries as $gallery)
                <div class="col-auto">
                    <div class="gallery-box style5">
                        <div class="gallery-img global-img">
                            <!-- Dynamically display images stored in the public directory -->
                            <img src="{{ asset('storage/' . $gallery->image) }}" alt="gallery image" style="width: 508px; height: 690px;">
                            <a href="{{ asset('storage/' . $gallery->image) }}" class="icon-btn popup-image">
                                <i class="fal fa-magnifying-glass-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
