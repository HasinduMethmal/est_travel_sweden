
<style>
   .header-button .th-btn {
    background-color:#113d48 !important;
}

    .main-menu ul li a {
    text-decoration: none;
    font-size: 17px;
    color: #333; 
    font-weight: bold;
}

</style>
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
                                        <a class="active" href="/">Home</a>
                                   
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
                                    <li ><a href="{{route('blog.blog')}}">Blog</a></li>
                                    <li><a href="{{ route('contact') }}">Contact us</a></li>
                                </ul>
                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-xl-none"><i class="far fa-bars" style="font-size:17px;"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button">
                                <a href="{{ route('booknow') }}" class="th-btn style1 th-icon" style=" font-size:17px;">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
