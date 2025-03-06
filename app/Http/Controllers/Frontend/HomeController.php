<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller{

    public function travel(){
        return view('frontend.home.travel');
    }

    public function tour(){
        return view('frontend.home.tour');
    }

    public function agency(){
        return view('frontend.home.agency');
    }

    public function yacht(){
        return view('frontend.home.yacht');
    }

    public function beach(){
        return view('frontend.home.beach');
    }

    public function resort(){
        return view('frontend.home.resort');
    }

    public function countryside(){
        return view('frontend.home.countryside');
    }

    public function forest(){
        return view('frontend.home.forest');
    }

    public function hiking(){
        return view('frontend.home.hiking');
    }

}
