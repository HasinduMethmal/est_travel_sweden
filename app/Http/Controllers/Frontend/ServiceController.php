<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller{

    public function service(){
        $services =Service::where('is_active', true)->get();

        return view('frontend.services.Services',compact('services'));
    }

    public function serviceDetails(){
        return view('frontend.services.Services-Details');
    }
}
