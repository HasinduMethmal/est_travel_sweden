<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PricePackageController extends Controller{

    public function pricepackage(){
        return view('frontend.price-package.price-package');
    }
}
