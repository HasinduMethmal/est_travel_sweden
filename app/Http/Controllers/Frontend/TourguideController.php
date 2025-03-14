<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Guider;
use Illuminate\Http\Request;

class TourguideController extends Controller{

    public function tourguide(){
        $guiders = Guider::where('is_active', 1)->get(); 
        return view('frontend.tour-guide.tour-guide',compact('guiders'));
    }

    public function tourguideDetails(){
        
        return view('frontend.tour-guide.tourguide-details');
    }
    public function show($id)
    {
        $guiders = Guider::findOrFail($id);
        return view('frontend.tour-guide.tourguide-details', compact('guiders'));
    }
}