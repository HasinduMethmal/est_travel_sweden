@extends('frontend.master')

@section ('title', 'Home')

@section('content')
  <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('frontend/images/services_bg.jpg'); background-size: cover; background-position: center center; height: 400px;">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Services</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-travel.html">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Destination Area  
==============================-->

    <section class="position-relative overflow-hidden space" id="destination-sec">
        <div class="container">
            <div class="row gy-4 gx-4">
                <div class="row">
                    @foreach($services as $service)
                        <div class="col-xl-3 col-lg-4 col-md-6 pb-2">
                            <div class="destination-item th-ani">
                                <div class="destination-item_img global-img ">
                                    <!-- Dynamically display the service image -->
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="image" style="width: 312px; height: 274px;">
                                </div>
                                <div class="destination-content">
                                    <!-- Display the service name dynamically -->
                                    <h3 class="box-title"><a href="">{{ $service->name }}</a></h3><br>
                                    <!-- Link to book or inquire about the service -->
                                    <a href="" class="th-btn style4 th-icon" style="margin-top:-12px;">Book Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="shape-mockup shape1 d-none d-xxl-block" data-bottom="17%" data-right="9%">
            <img src="{{asset('frontend/assets/img/shape/shape_1.png')}}" alt="shape">
        </div>
        <div class="shape-mockup shape2 d-none d-xl-block" data-bottom="8%" data-right="8%">
            <img src="{{asset('frontend/assets/img/shape/shape_2.png')}}" alt="shape">
        </div>
        <div class="shape-mockup shape3 d-none d-xxl-block" data-bottom="15%" data-right="4%">
            <img src="{{asset('frontend/assets/img/shape/shape_3.png')}}" alt="shape">
        </div>
    </section> 
@endsection