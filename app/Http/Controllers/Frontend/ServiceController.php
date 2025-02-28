<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller{

    public function service(){
        return view('frontend.services.Services');
    }

    public function serviceDetails(){
        return view('frontend.services.Services-Details');
    }
}
