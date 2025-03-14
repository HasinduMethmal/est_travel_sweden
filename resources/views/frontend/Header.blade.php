
<style>
   .header-button .th-btn {
    background-color:#113d48 !important;
}

    .main-menu ul li a {
    text-decoration: none;
    font-size: 16px;
    color: #333; 
    font-weight: bold;
}


/* header button styles */
.header-button .th-btn {
    font-size: 14px !important;
    padding: 9px 16px !important; 
    height: auto !important;
}

.header-button .th-btn:hover {
    background-color:#009dc4 !important; 
    color: white !important; 
}


.header-button .th-btn::before,
.header-button .th-btn::after {
    display: none !important; 
}

.th-header {
    padding: 0px 0 !important; /* Reduce vertical padding */
    height: auto; /* Let it adjust dynamically */
}
</style>



<header class="th-header header-layout1">
<div class="header-top">
    <div class="container th-container">
        <div class="row justify-content-center justify-content-xl-between align-items-center">
            <div class="col-auto d-none d-md-block">
                <div class="header-links">
                    <ul>
                        <li class="d-none d-xl-inline-block">
                            <i class="fa-sharp fa-regular fa-location-dot"></i>
                            <span>Andra Langgatan 7, 413 03 Gothenburg, Sweden</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-auto">
                <div class="header-right">
                    <div class="header-links">
                        <ul>
                            <li>
                                <a href="{{ route('user.register') }}" class="popup-content">
                                    Register <i class="fa-regular fa-user"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.login') }}" class="popup-content">
                                    Sign In <i class="fa-regular fa-user"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="th-menu-wrapper onepage-nav">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="home-travel.html"><img src="frontend/assets/img/besttime-travel.png" alt="Tourm"></a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="menu-item-has-children">
                    <a class="active" href="home-travel.html">Home</a>
                  
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

<header class="th-header header-layout1">
    <div class="header-top">
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container th-container">
                    <div class="row align-items-center">
                        <!-- Logo Section -->
                        <div class="col-auto me-3"> <!-- Reduced space with me-3 -->
                            <div class="header-logo" style="margin-left: 160px !important;">
                                <a href="home-travel.html">
                                    <img src="frontend/assets/img/besttime-travel.png" alt="Tourm" style="width: 110px; height: auto; max-height: 160px; object-fit: contain;">
                                </a>
                            </div>
                        </div>

                        <!-- Navigation Section (Center) -->
                        <div class="col d-flex justify-content-center align-items-center" style="margin-left: -380px !important;">
                            <nav class="main-menu d-none d-xl-inline-block">
                                <ul class="d-flex gap-2 align-items-center">
                                    <li><a class="active" href="/">Home</a></li>
                                    <li><a href="{{ route('aboutUs') }}">About Us</a></li>
                                    <li class="menu-item"><a href="{{ route('destination.destination') }}">Destination</a></li>
                                    <li class="menu-item"><a href="{{ route('services.services') }}">Service</a></li>                
                                    <li class="menu-item-has-children">
                                        <a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                            <li><a href="{{ route('tourguide.tourguide') }}">Tour Guider</a></li>                                            
                                            <li><a href="{{route('pricepackage.pricepackage')}}">Price Packages</a></li>                                         
                                        </ul>
                                    </li>
                                    <li><a href="{{route('blog.blog')}}">Blog</a></li>
                                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- Button Section (Right) -->
                        <div class="col-auto ms-0"> <!-- Reduced space with ms-3 -->
                            <div class="header-button d-none d-xl-block">
                                <a href="{{ route('booknow') }}" class="th-btn style1" style="font-size:17px;margin-left: -290px !important;">Book Now
                                    <i class="fas fa-arrow-right" style="font-size:17px;"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


