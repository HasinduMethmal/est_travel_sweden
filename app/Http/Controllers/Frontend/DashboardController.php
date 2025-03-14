<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User; // Don't forget to import the User model
use Illuminate\Http\Request;
use App\Models\Booking; 

class DashboardController extends Controller
{
    public function index($id) // Accept the user ID as a parameter
    {
        
       // Find the user by the provided ID
        $user = User::findOrFail($id);
        // $bookings = Booking::where('user_id', $user->id)->latest()->take(5)->get();  // Get recent bookings

        // Return the view with user data
        return view('frontend.dashboard', compact('user')); // Pass the user data to the view
    }
}
