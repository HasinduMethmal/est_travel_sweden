@extends('frontend.master')

@section ('title', 'destination_index')

@section('content')

 
  
  <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('frontend/images/destination_2.png'); background-size: cover; background-position: center center; height: 400px;">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Destination</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-travel.html">Home</a></li>
                    <li>Destination</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Product Area
==============================-->
    <section class="space">
        <div class="container">
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
                <div class="col-xxl-12 col-lg-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="tab-grid" role="tabpanel" aria-labelledby="tab-destination-grid">
                            <div class="row gy-30">
                                @foreach($destinations as $destination)
                                <div class="col-xxl-3 col-xl-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <!-- Display the destination image dynamically -->
                                            <img src="{{ asset('storage/' . $destination->image) }}" alt="{{ $destination->name }}" style="width: 312px; height: 354px;">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title">
                                                <!-- Dynamic link to the destination details page -->
                                                <a href="">{{ $destination->name }}</a>
                                            </h3>
                                              <span class="destination-subtitle">{{$destination -> location}}</span>
                                            <div class="tour-action">
                                                <!-- Dynamic View Detail button -->
                                                <a href="{{ route('destination.details', ['id' => $destination->id]) }}" class="th-btn style4 th-icon" style="padding: 5px 10px; font-size: 14px;">View Detail</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach                            
                            </div>
                        </div>

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
