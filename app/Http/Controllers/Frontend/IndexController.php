<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use App\Models\Package;
use Illuminate\Http\Request;

class IndexController extends Controller{

    public function index(){

        $destinations = Destination::where('is_active', true)->get();
        $packages =Package::where('is_active', true)->get();
        return view('frontend.Home', compact('destinations','packages'));
    }
}
