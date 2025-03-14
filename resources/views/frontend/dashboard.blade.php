@extends('frontend.master')

@section ('title', 'user-dashboard')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <section class="space">
        <div class="container">
            <div class="team-details">
                <div class="row gy-5 mb-3 mb-xl-5 pb-xl-4">
                    <div class="col-xl-4">

                        <div class="th-team team-grid">
                            <div class="team-img">
                                <img src="frontend/assets/img/team/team_img_3.jpg" alt="Team">
                            </div>
                            <div class="team-img2">
                                <img src="frontend/assets/img/team/team_1_3.jpg" alt="Team">
                            </div>
                            <div class="team-content">
                                    <h3 >{{ $user->name }}</h3>
                            </div>
                            <!-- Logout Button -->
                            <div class="team-content">
                                <form action="{{ route('user.logout') }}" method="POST">
                                @csrf
                                <button class="th-btn style3" type="submit">Signout</button>
                                </form>
                            </div>
    
                        </div><br>
                        
                        <div class="th-team ">
                            <!-- Follow User Details -->
                            <div class="card mb-6">
                              <div class="card-body">
                                <small class="card-text text-uppercase text-muted small">About</small>
                                <ul class="list-unstyled my-3 py-1">
                                  <li class="d-flex align-items-center mb-4">
                                    <i class="fas fa-user fa-lg"></i><span class="fw-medium mx-2">Full Name:</span>
                                    <span>Jane Doe</span>
                                  </li>
                                  <li class="d-flex align-items-center mb-4">
                                    <i class="fas fa-check-circle fa-lg"></i><span class="fw-medium mx-2">Status:</span>
                                    <span>Active</span>
                                  </li>
                                </ul>
                                <small class="card-text text-uppercase text-muted small">Contacts</small>
                                <ul class="list-unstyled my-3 py-1">
                                  <li class="d-flex align-items-center mb-4">
                                    <i class="fas fa-envelope fa-lg"></i><span class="fw-medium mx-2">Email:</span>
                                    <span>jane.doe@example.com</span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                            <!--/ Follow User Details -->
                        </div>
                                                      
                    </div>
                    
                    <div class="col-xl-8 ps-3 ps-xl-5 pe-xl-4">
                        <div class="th-cart-wrapper  space-top space-extra-bottom">
                            <div class="container">
                                <div class="woocommerce-notices-wrapper">
                                    <div class="woocommerce-message">Recent Bookings </div>
                                </div>
                                <form action="#" class="woocommerce-cart-form">
                                    <table class="cart_table">
                                        <thead>
                                            <tr>
                                                <th class="cart-col-date">date</th>
                                                <th class="cart-col-productname">Name</th>
                                                <th class="cart-col-price">Price</th>
                                                <th class="cart-col-quantity">state</th>
                                                <th class="cart-col-total">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td data-title="date">
                                                </td>
                                                <td data-title="Name">
                                                </td>
                                                <td data-title="Price">
                                                </td>
                                                <td data-title="state">
                                                </td>
                                                <td data-title="action">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    
                    </div>
                </div>
                
                <div class="row gy-4 justify-content-center">
                </div>
            </div>
        </div>
    </section>


</div>


@endsection
