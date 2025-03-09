@extends('frontend.master')

@section ('title', 'Blog')

@section('content')

<section class="th-blog-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                @foreach($blog as $blog) <!-- Loop through each blog -->
                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <!-- Display the blog image dynamically -->
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" width="100" height="80">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                                <!-- Format the date -->
                                <a href=""><i class="fa-solid fa-calendar-days"></i>{{ $blog->created_at->format('d M, Y') }}</a>
                        </div>
                        <h2 class="blog-title">                          
                                {{ $blog->topic }} <!-- Display the topic of the blog -->
                        </h2>
                        <p class="blog-text">{{ \Str::limit($blog->description, 500) }} <!-- Limit the description to 150 chars -->
                        </p>
                    </div>
                </div>
                @endforeach

                <!-- Pagination -->
                <div class="th-pagination">
                    
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
