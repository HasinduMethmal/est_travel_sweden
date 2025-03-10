@extends('frontend.master')

@section ('title', 'Home')

@section('content')
  
  
  
  <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('frontend/images/trips_bg.png'); background-size: cover; background-position: center center; height: 400px;">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Book Now</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-travel.html">Home</a></li>
                    <li>Book Now</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Product Area
==============================-->
    <section class="space">
        <div class="container">
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

                    <div class="col-md-auto">
                        <div class="sorting-filter-wrap">
                            <div class="nav" role="tablist">
                                <a class="active" href="#" id="tab-destination-grid" data-bs-toggle="tab" data-bs-target="#tab-grid" role="tab" aria-controls="tab-grid" aria-selected="true"><i class="fa-light fa-grid-2"></i></a>

                                <a href="#" id="tab-destination-list" data-bs-toggle="tab" data-bs-target="#tab-list" role="tab" aria-controls="tab-list" aria-selected="false" class=""><i class="fa-solid fa-list"></i></a>
                            </div>
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby" aria-label="destination order">
                                    <option value="menu_order" selected="selected">Default Sorting</option>
                                    <option value="popularity">Sort by popularity</option>
                                    <option value="rating">Sort by average rating</option>
                                    <option value="date">Sort by latest</option>
                                    <option value="price">Sort by price: low to high</option>
                                    <option value="price-desc">Sort by price: high to low</option>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-9 col-lg-8">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="tab-grid" role="tabpanel" aria-labelledby="tab-destination-grid">
                            <div class="row gy-30">
                                <div class="col-xxl-4 col-xl-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_1.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Dubai</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-xl-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_2.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Italy</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$880.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-xl-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_3.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">France</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$680.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-xl-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_4.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Maldives</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$580.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-xl-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_5.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Belgium</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$480.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-xl-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_6.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Brazil</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$380.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-xl-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_7.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Spain</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$580.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-xl-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_8.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Greece</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="frontend/destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$680.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-xl-6">
                                    <div class="tour-box th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_9.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Newziland</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$780.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane fade " id="tab-list" role="tabpanel" aria-labelledby="tab-destination-list">
                            <div class="row gy-30">
                                <div class="col-12">
                                    <div class="tour-box style-flex th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_1.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Dubai</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$980.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="tour-box style-flex th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_2.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Italy</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$880.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="tour-box style-flex th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_3.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">France</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$680.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="tour-box style-flex th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_4.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Maldives</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$580.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="tour-box style-flex th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_5.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Belgium</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$480.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="tour-box style-flex th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_6.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Brazil</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$380.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="tour-box style-flex th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_7.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Spain</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$580.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="tour-box style-flex th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_8.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Greece</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$680.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="tour-box style-flex th-ani">
                                        <div class="tour-box_img global-img">
                                            <img src="frontend/assets/img/tour/tour_3_9.jpg" alt="image">
                                        </div>
                                        <div class="tour-content">
                                            <h3 class="box-title"><a href="destination-details.html">Newziland</a></h3>
                                            <div class="tour-rating">
                                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated
                                                        <strong class="rating">5.00</strong> out of 5 based on <span class="rating">4.8</span>(4.8
                                                        Rating)</span></div>
                                                <a href="destination-details.html" class="woocommerce-review-link">(<span class="count">4.8</span>
                                                    Rating)</a>
                                            </div>
                                            <h4 class="tour-box_price"><span class="currency">$780.00</span>/Person</h4>
                                            <div class="tour-action">
                                                <span><i class="fa-light fa-clock"></i>7 Days</span>
                                                <a href="contact.html" class="th-btn style4 th-icon">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
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
                <div class="col-xxl-3 col-lg-4">
                    <aside class="sidebar-area style2">
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">Categories</h3>
                            <ul>
                                <li>
                                    <a href="blog.html"><img src="frontend/assets/img/theme-img/map.svg" alt="">City Tour</a>
                                    <span>(8)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="frontend/assets/img/theme-img/map.svg" alt="">Beach Tours</a>
                                    <span>(6)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="frontend/assets/img/theme-img/map.svg" alt="">Wildlife Tours</a>
                                    <span>(2)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="frontend/assets/img/theme-img/map.svg" alt="">News & Tips</a>
                                    <span>(7)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="frontend/assets/img/theme-img/map.svg" alt="">Adventure Tours</a>
                                    <span>(9)</span>
                                </li>
                                <li>
                                    <a href="blog.html"><img src="frontend/assets/img/theme-img/map.svg" alt="">Mountain Tours</a>
                                    <span>(10)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="widget  ">
                            <h3 class="widget_title">Recent Posts</h3>
                            <div class="recent-post-wrap">
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="frontend/assets/img/blog/recent-post-1-1.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Exploring The Green Spaces Of the island maldives</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-regular fa-calendar"></i>22/6/ 2024</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="frontend/assets/img/blog/recent-post-1-2.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Harmony With Nature Of Belgium Tour and travle</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-regular fa-calendar"></i>25/6/ 2024</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="recent-post">
                                    <div class="media-img">
                                        <a href="blog-details.html"><img src="frontend/assets/img/blog/recent-post-1-3.jpg" alt="Blog Image"></a>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Exploring The Green Spaces Of Realar Residence</a></h4>
                                        <div class="recent-post-meta">
                                            <a href="blog.html"><i class="fa-regular fa-calendar"></i>27/6/ 2024</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="widget widget_offer  " data-bg-src="frontend/assets/img/bg/widget_bg_1.jpg">
                            <div class="offer-banner">
                                <div class="offer">
                                    <h6 class="box-title">Need Help? We Are Here To Help You</h6>
                                    <div class="banner-logo">
                                        <img src="frontend/assets/img/logo2.svg" alt="Tourm">
                                    </div>
                                    <div class="offer">
                                        <h6 class="offer-title">You Get Online support</h6>
                                        <a class="offter-num" href="+256214203215">+256 214 203 215</a>
                                    </div>
                                    <a href="contact.html" class="th-btn style2 th-icon">Read More</a>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

            </div>

        </div>
    </section>
    @endsection