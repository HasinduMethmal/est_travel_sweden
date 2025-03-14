@extends('frontend.master')
@section('title', 'Home')

@section('content')

<!--==============================
    Breadcumb
==============================-->
<div class="breadcumb-wrapper" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('frontend/images/tour_guide.jpg') }}'); background-size: cover; background-position: center center; height: 400px;">
    <div class="container">
        <div class="breadcumb-content text-white text-center">
            <h1 class="breadcumb-title">Tour Guide</h1>
            <ul class="breadcumb-menu list-inline">
                <li class="list-inline-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="list-inline-item">/ Tourist Guides</li>
            </ul>
        </div>
    </div>
</div>

<!--==============================
    Tour Guides Section
==============================-->
<section class="space" id="team-sec">
        <div class="container">
        <div class="title-area text-center">
                <span class="sub-title">Start Your Journey Today</span>
                <h2 class="sec-title">Explore Tour Guiders</h2><br>
            </div>
            <div class="row gy-4 gx-4">
    @foreach($guiders as $guider)
        <!-- Single Item -->
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="th-team team-grid">
                <div class="team-img">
                    <img src="frontend/images/guide.jpg" alt="Team" style="width:424px;height:220px;">
                </div>
                <div class="team-img2">
                    <img src="{{ asset('storage/' . $guider->image) }}" alt="Team" style="width:280px;height:280px;">
                </div>
                <div class="team-content">
                    <div class="media-body" >
                        <h3 class="box-title"><a href="tour-guider-details.html">{{$guider->name}}</a></h3>
                        <span class="team-desig">Tourist Guide</span>
                        <a href="{{ route('tourguide.details', ['id' => $guider->id]) }}"  style="padding: 8px 14px; font-size: 14px; line-height: 1; display: inline-block; text-decoration: none; color: white; background-color: #009dc4; border-radius: 5px; transition: background-color 0.3s ease;"
                    onmouseover="this.style.backgroundColor='#113d48'"onmouseout="this.style.backgroundColor='#009dc4'">View Profile</a>

             
                      
                    </div>
                </div>
            </div>
        </div>
        @if($loop->iteration % 3 == 0)
            </div><div class="row gy-4 gx-4">
        @endif
    @endforeach
</div>
                    </div>
                </div>
</section>
@endsection



