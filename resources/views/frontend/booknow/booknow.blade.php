@extends('frontend.master')

@section ('title', 'Home')

@section('content')

<!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('frontend/images/trips_bg.png'); background-size: cover; background-position: center center; height: 400px;">
    <div class="container">
        
        <div class="breadcumb-content text-center">
            <h1 class="breadcumb-title">Book Now</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-travel.html">Home</a></li>
                <li>Book Now</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Product Area
==============================-->
<section class="space">
    <div class="container">
    <div class="title-area text-center">
                <span class="sub-title">Start Your Journey Today</span>
                <h2 class="sec-title">Book Your Dream Tour</h2>
            </div>
    <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-4">
                        <div class="search-form-area">
                            <form class="search-form" >
                                <input type="text" placeholder="Search" style="color:#113D48;">
                                <button type="submit" style="background-color:#2a9dca;"><i class="fa-light fa-magnifying-glass" ></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <!-- Full Width Cards Section -->
            <div class="col-lg-12">
                <div class="row gy-4">
                    @foreach($packages as $package)
                        <div class="col-lg-3 col-md-6">
                            <div class="tour-box th-ani gsap-cursor">
                                <div class="tour-box_img global-img">
                                    <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->name }}" class="img-fluid" style="width: 100%; height: 250px; object-fit: cover;">
                                </div>
                                <div class="tour-content p-3">
                                    <h3 class="box-title text-truncate">{{ $package->name }}</h3>
                                    <h4 class="tour-box_price">
                                        <span class="currency">${{ number_format($package->price, 2) }}</span>/Person
                                    </h4>
                                    <div class="tour-action d-flex justify-content-between">
                                        <span><i class="fa-light fa-clock"></i> {{ $package->duration }} Days</span>
                                        <a href="{{ route('booking', ['id' => $package->id]) }}" class="th-btn style4 th-icon">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            
                <div class="th-pagination text-center mt-60 mb-0">
                        <ul>
                            <li><a class="active" href="destination.html">1</a></li>
                            <li><a href="destination.html">2</a></li>
                            <li><a href="destination.html">3</a></li>
                            <li><a href="destination.html">4</a></li>
                            <li><a class="next-page" href="destination.html">Next <img src="frontend/assets/img/icon/arrow-right4.svg" alt=""></a></li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
</section>

@endsection