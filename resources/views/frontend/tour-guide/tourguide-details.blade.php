@extends('frontend.master')

@section ('title', 'destination_index')

@section('content')
 
 
 
 
    <section class="space">
        <div class="container">
            <div class="team-details">
                <div class="row gy-5 mb-3 mb-xl-5 pb-xl-4">
                    <div class="col-xl-4">
                        <div class="th-team team-grid">
                            <div class="team-img">
                                <img src="frontend/images/guide.jpg" alt="Team" style="width:424px;height:220px;">
                            </div>
                            <div class="team-img2">
                                <img src="{{ asset('storage/' . $guiders->image) }}" alt="Team" style="width:280px;height:280px;">
                            </div>
                            <div class="team-content">
                                <div class="media-body">
                                    <h3 class="box-title"><a href="team-details.html">{{$guiders->name}}</a></h3>
                                    <span class="team-desig">Tourist Guide</span>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 ps-3 ps-xl-5 pe-xl-4">
                        <div class="team-about">
                            <h2 class="team-about_title">About Me</h2>
                            <p class="team-about_text mb-25">{{$guiders->bio}}</p>
                          
                            <h2 class="team-about_title">Contact Me</h2>
                            <p class="team-about_text" style="margin-bottom: 10px; font-size: 18px; color: black;">
    <i class="fas fa-phone-alt" style="font-size: 20px; margin-right: 8px; color: black; 
    border: 2px solid black; border-radius: 50%; padding: 8px; display: inline-flex; width: 36px; height: 36px; align-items: center; justify-content: center;"></i> 
    {{$guiders->phone}}
</p>
<p class="team-about_text" style="margin-bottom: 10px; font-size: 18px; color: black;">
    <i class="fas fa-envelope" style="font-size: 20px; margin-right: 8px; color: black; 
    border: 2px solid black; border-radius: 50%; padding: 8px; display: inline-flex; width: 36px; height: 36px; align-items: center; justify-content: center;"></i> 
    {{$guiders->email}}
</p>


                          
                        </div>
                    </div>
                </div>
             
    </section>
    @endsection