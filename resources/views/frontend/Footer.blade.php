   <footer class= "footer-wrapper bg-title footer-layout2" >
        <div class="widget-area">
            <div class="container">

           


                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-3">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="home-travel.html"><img src="frontend/assets/img/besttime-travel.png" alt="Tourm" style="width: 180px; height: auto;margin-top:-33px;margin-left:40px;"></a>
                                </div>
                                <p class="about-text" style="margin-top:-60px;font-size:13px;">Rapidiously myocardinate cross-platform intellectual capital model. Appropriately create interactive infrastructures</p>
                                <div class="th-social" style="margin-top:-10px;">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">

                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{ route('aboutUs') }}">About us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                    <li><a href="{{ route('services.services') }}">Our Services</a></li>
                                    <li><a href="{{ route('booknow') }}">Tour Booking Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Address</h3>
                            <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon">
                                        <img src="frontend/assets/img/icon/phone.svg" alt="img">
                                    </div>
                                    <div class="details">
                                        <p><a href="tel:+01234567890" class="info-box_link">Rachel - +46</a></p>
                                        <p><a href="tel:+09876543210" class="info-box_link">Peter - +46</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon">
                                        <img src="frontend/assets/img/icon/envelope.svg" alt="img">
                                    </div>
                                    <div class="details">
                                        <p><a href="mailto:mailinfo00@tourm.com" class="info-box_link">mailinfo00@tourm.com</a></p>
                                        <p><a href="mailto:support24@tourm.com" class="info-box_link">support24@tourm.com</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="frontend/assets/img/icon/location-dot.svg" alt="img"></div>
                                    <div class="details">
                                        <p>Andra Langgatan 7, 413 03 Gotheburg Sweden</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Blog</h3>
                            <div class="sidebar-gallery">
                                @foreach(App\Models\Blog::latest()->take(2)->get() as $blog)
                                <div class="gallery-thumb">
                                    <a href="{{ route('blog.blog') }}"><img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image"></a>
                                    <p  style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width: 100%; display: block; font-size: 10px;">{{ $blog->topic }}</p>
                                    <p style="font-size: 11px;"><i class="fa-solid fa-calendar-days"></i>{{ $blog->created_at->format('d M, Y') }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap" data-bg-src="">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text"> Copyright @ 2025 Best Time Travel</p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
