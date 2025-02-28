@extends('frontend.master')
<style>
.about-contact-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f4f4f4; /* Adjust color as needed */
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
.about-contact-details p {
    margin-bottom: 5px; /* Adjust as needed */
    line-height: 1.4; /* Reduces excessive spacing between lines */
}
.col-lg-6:first-child {
    margin-top: -200px; /* Adjust the value as needed */
}
.space {
    padding-top: 40px; /* Reduce top padding */
}
.about-contact-grid {
    display: flex;
    align-items: center;
    padding: 10px; /* Adjust padding as needed */
    min-height: 80px; /* Adjust height */
    width: 80%; /* Ensure full-width within container */
}




</style>
@section ('title', 'Home')

@section('content')

  <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend/assets/img/bg/contactbg.png') }}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-travel.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
<!--Contact Area  
==============================-->
<div class="space">
<div class="container">

    <div class="row align-items-center">
        <!-- Contact Information Section -->
        <div class="col-lg-6">
            <div class="space">
                <div class="title-area text-center">
                    <span class="sub-title">Get In Touch</span>
                    <h2 class="sec-title">Our Contact Information</h2>
                </div>
                <div class="row gy-4">
                    <div class="col-md-12">
                        <div class="about-contact-grid style2">
                            <div class="about-contact-icon">
                                <img src="{{ asset('frontend/assets/img/icon/location-dot2.svg') }}" alt="">
                            </div>
                            <div class="about-contact-details">
                                <h6 class="box-title">Our Address</h6>
                                <p>Andra Langgatan 7</p>
                                <p>413 03 Gotheburg</p>
                                <p>Sweden</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="about-contact-grid">
                            <div class="about-contact-icon">
                                <img src="{{ asset('frontend/assets/img/icon/call.svg') }}" alt="">
                            </div>
                            <div class="about-contact-details">
                                <h6 class="box-title">Phone Number</h6>
                                <p><a href="tel:01234567890" style="color:grey;">Rachel - +46</a></p>
                                <p><a href="tel:01234567890"style="color:grey;">Peter  - +46</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="about-contact-grid">
                            <div class="about-contact-icon">
                                <img src="{{ asset('frontend/assets/img/icon/mail.svg') }}" alt="">
                            </div>
                            <div class="about-contact-details">
                                <h6 class="box-title">Email Address</h6>
                                <p><a href="mailto:mailinfo00@tourm.com" style="color:grey;">mailinfo00@tourm.com</a></p>
                                <p><a href="mailto:support24@tourm.com" style="color:grey;">support24@tourm.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Booking Form Section -->
        <div class="col-lg-6">
            <div>
                <form action="mail.php" method="POST" class="contact-form style2 ajax-contact">
                    <h3 class="sec-title mb-30 text-capitalize">Book a tour</h3>
                    <div class="row">
                        <div class="col-12 form-group">
                            <input type="text" class="form-control" name="name" id="name3" placeholder="First Name">
                            <img src="{{ asset('frontend/assets/img/icon/user.svg') }}" alt="">
                        </div>
                        <div class="col-12 form-group">
                            <input type="email" class="form-control" name="email3" id="email3" placeholder="Your Mail">
                            <img src="{{ asset('frontend/assets/img/icon/mail.svg') }}" alt="">
                        </div>
                        <div class="form-group col-12">
                            <select name="subject" id="subject" class="form-select nice-select">
                                <option value="Select Tour Type" selected disabled>Select Tour Type</option>
                                <option value="Africa Adventure">Africa Adventure</option>
                                <option value="Africa Wild">Africa Wild</option>
                                <option value="Asia">Asia</option>
                                <option value="Scandinavia">Scandinavia</option>
                                <option value="Western Europe">Western Europe</option>
                            </select>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                            <img src="{{ asset('frontend/assets/img/icon/chat.svg') }}" alt="">
                        </div>
                        <div class="form-btn col-12 mt-24">
                            <button type="submit" class="th-btn style3">Send message
                                <img src="{{ asset('frontend/assets/img/icon/plane.svg') }}"alt="">
                            </button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>

</div>
</div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("[data-bg-src]").forEach((element) => {
        let bgSrc = element.getAttribute("data-bg-src");
        if (bgSrc) {
            element.style.backgroundImage = `url('${bgSrc}')`;
        }
    });
});

</script>