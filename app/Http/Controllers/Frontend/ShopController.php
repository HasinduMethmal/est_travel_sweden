<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller{

    public function shop (){
        return view('frontend.shop.shop');
    }

    public function shopDetails (){
        return view('frontend.shop.shop-details');
    }

}
