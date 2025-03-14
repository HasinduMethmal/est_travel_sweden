<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Package; 
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookingController extends Controller{

    public function index(){
        $packages =Package::where('is_active', true)->get();

        return view('frontend.booknow.booking',compact('packages'));

        
    }

    public function show(){
        $user=User::findOrFail(Auth::user()->id);
        // $packages = Package::findOrFail($id);
        return view('frontend.booknow.booking', compact('user'));
    }

}
