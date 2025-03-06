
<style>
    
</style>
<div class="th-menu-wrapper onepage-nav">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="home-travel.html"><img src="frontend/assets/img/besttime-travel.png" alt="Tourm"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="menu-item-has-children mega-menu-wrap">
                    <a class="active" href="home-travel.html">Home</a>
                    <ul class="sub-menu">
                        <li><a href="home-travel.html">Home Travel</a></li>
                        <li><a href="home-tour.html">Home Tour</a></li>
                        <li><a href="home-agency.html">Home Agency</a></li>
                        <li><a href="home-yacht.html">Home Yacht</a></li>
                        <li><a href="home-beach.html">Home Beach</a></li>
                        <li><a href="home-resort.html">Home Resort</a></li>
                        <li><a href="home-countryside-hotel.html">Home Countryside Hotel</a></li>
                        <li><a href="home-forest.html">Home Forest</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li class="menu-item">
                    <a href="#">Destination</a>                     
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Service</a>                        
                </li>                    
                <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="tour-guide.html">Tour Guider</a></li>
                        <li><a href="price.html">Price Package</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact us</a></li>
            </ul>
        </div>
    </div>
</div>

<header class="th-header header-layout1 ">
    <div class="header-top">
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container th-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="home-travel.html">
                                    <img src="frontend/assets/img/besttime-travel.png" alt="Tourm" style="width: 100px; height: auto;">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto me-xl-auto">
                            <nav class="main-menu d-none d-xl-inline-block">
                                <ul>
                                    <li >
                                        <a class="active" href="home-travel.html">Home</a>
                                        <ul class="mega-menu mega-menu-content">
                                            <li>
                                                <div class="container">
                                                    <div class="row gy-4">
                                                        <div class="col-lg-3">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="{{asset('frontend/images/home_tour.png')  }}" alt="Home Two">
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="{{ route('home.tour') }}"><span>02.</span>Home Tour</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="{{asset('frontend/images/home_agency.png')  }}" alt="Home Three">
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="{{ route('home.agency') }}"><span>03.</span>Home Agency</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="{{asset('frontend/images/home_yacht.png')  }}" alt="Home Four">
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="{{ route('home.yacht') }}"><span>04.</span>Home Yacht</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="{{asset('frontend/images/home_beach.png')  }}" alt="Home Five">
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="{{ route('home.beach') }}"><span>05.</span>Home Beach</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="{{asset('frontend/images/home_resort.png')  }}" alt="Home Six">
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="{{ route('home.resort') }}"><span>06.</span>Home Resort</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="{{asset('frontend/images/home_countryside.png')  }}" alt="Home Six">
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="{{ route('home.countryside') }}"><span>07.</span>Home Countryside Hotel</a></h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img">
                                                                    <img src="{{asset('frontend/images/home_forest.png')  }}" alt="Home Six">
                                                                </div>
                                                                <h3 class="mega-menu-title"><a href="{{ route('home.forest') }}"><span>08.</span>Home Forest</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                                    <li class="menu-item">
                                        <a href="{{ route('destination.destination') }}">Destination</a>
                                    </li>
                                    <li class="menu-item-">
                                        <a href="{{ route('services.services') }}">Service</a>                                        
                                    </li>                
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                            <li><a href="{{ route('tourguide.tourguide') }}">Tour Guider</a></li>                                            
                                            <li><a href="{{route('pricepackage.pricepackage')}}">Price Packages</a></li>                                         
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                                </ul>
                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-xl-none"><i class="far fa-bars" style="font-size:17px;"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <a href="{{ route('booknow') }}" class="th-btn style1 th-icon" style=" font-family: 'Madimi One', serif; font-size:17px;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
