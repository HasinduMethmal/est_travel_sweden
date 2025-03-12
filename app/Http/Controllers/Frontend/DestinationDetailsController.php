<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationDetailsController extends Controller{

    public function destination(){
        $destinations = Destination::where('is_active', true)->get();

        return view('frontend.destination.destination',compact('destinations'));
    }

   

  
}