<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourguideController extends Controller{

    public function tourguide(){
        return view('frontend.tour-guide.tour-guide');
    }

    public function tourguideDetails(){
        return view('frontend.tour-guide.tourguide-details');
    }
}