<?php

namespace App\Http\Controllers\Frontend\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAuthController extends Controller
{
    // Show the login form
    public function showLogin()
    {
        return view('frontend.auth.signin');
    }

    // Show the sign-up (registration) form
    public function showRegister()
    {
        return view('frontend.auth.signup');
    }
}
