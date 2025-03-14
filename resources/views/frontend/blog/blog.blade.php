@extends('frontend.master')

@section ('title', 'Blog')

@section('content')

<div class="breadcumb-wrapper" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('frontend/images/blog.jpg'); background-size: cover; background-position: center center; height: 400px;">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Blog</h1>
            <ul class="breadcumb-menu">
                <li><a href="home-travel.html">Home</a></li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
</div>

<section class="th-blog-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Travel Stories & Tips</span>
            <h2 class="sec-title">Explore Inspiring Journeys</h2>
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
            <!-- Blog Posts Column -->
            <div class="col-xxl-8 col-lg-8">
                @foreach($blog as $blog)
                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" 
                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px;">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a href=""><i class="fa-solid fa-calendar-days"></i>{{ $blog->created_at->format('d M, Y') }}</a>
                        </div>
                        <h2 class="blog-title">                          
                            {{ $blog->topic }}
                        </h2>
                        <a href="{{ route('blog.details', ['id' => $blog->id]) }}"  style="padding: 8px 14px; font-size: 14px; line-height: 1; display: inline-block; text-decoration: none; color: white; background-color: #009dc4; border-radius: 5px; transition: background-color 0.3s ease;"
                    onmouseover="this.style.backgroundColor='#0056b3'"onmouseout="this.style.backgroundColor='#009dc4'">Read More</a>


                    </div>
                </div>
                @endforeach

                <!-- Pagination -->
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

            <!-- Right Sidebar for Recent Posts -->
            <div class="col-xxl-4 col-lg-4">
                <div class="widget">
                    <h3 class="widget_title">Recent Blogs</h3>
                    <div class="recent-post-wrap">
                        @foreach(App\Models\Blog::latest()->take(3)->get() as $blog)
                        <div class="recent-post">

                            <div class="media-img">
                                <a href="{{ route('blog.details', ['id' => $blog->id]) }}" ><img src="{{asset('storage/'.$blog->image)}}" alt="Blog Image" style="width:80px;height:70px;"></a>
                            </div>
                            <div class="media-body">
                                <h4 class="post-title"><a class="text-inherit" href="{{ route('blog.details', ['id' => $blog->id]) }}" >{{$blog->topic}}</a></h4>
                                <div class="recent-post-meta">
                                    <a href="blog.html"><i class="fa-regular fa-calendar"></i>{{$blog->created_at->format('d M,Y')}}</a>
                                </div>
                            </div>
                           
                        </div>
                        @endforeach
               
                    </div>
                </div> 
            </div> 
        </div>
    </div>
</section>

@endsection
