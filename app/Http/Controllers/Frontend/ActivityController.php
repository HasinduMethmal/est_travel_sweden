<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ActivityController extends Controller{

    public function activities(){
        return view('frontend.activities.activities');
    }

    public function activitiesDetails(){
        return view('frontend.activities.activities-details');
    }


}
