@extends('frontend.master')
@section('title', 'Home')

@section('content')

 <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('{{ asset('frontend/images/tour_guide.jpg') }}'); background-size: cover; background-position: center center; height: 400px;">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Tour Guide</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-travel.html">Home</a></li>
                <li>Guide</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
Team Area  
==============================-->
<section class="space" id="team-sec">
    <div class="container">
        <div class="row gy-4 gx-30">
            @foreach($guiders as $guider)
                <!-- Single Item -->
                <div class="col-xl-4 col-md-6">
                    <div class="th-team team-grid">
                        <!-- Team Image 1 -->
                        <div class="team-img">
                            @if($guider->image)
                                <img src="{{ asset('storage/' . $guider->image) }}" alt="Team">
                            @else
                                <img src="{{ asset('frontend/assets/img/team/default.jpg') }}" alt="Team">
                            @endif
                        </div>
                        
                        <!-- Team Content -->
                        <div class="team-content">
                            <div class="media-body">
                                <h3 class="box-title"><a href="">{{ $guider->name }}</a></h3>
                                <span class="team-desig">Tourist Guide</span>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
