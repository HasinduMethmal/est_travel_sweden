<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Package; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller{

    public function index(){
        $packages =Package::where('is_active', true)->get();

        return view('frontend.booknow.booking',compact('packages'));

        
    }
   public function show($id)
{
    $packages = Package::findOrFail($id);
    return view('frontend.booknow.booking', compact('packages'));
}
}
