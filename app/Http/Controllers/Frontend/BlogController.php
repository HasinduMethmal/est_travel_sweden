<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::latest()->paginate(5);
        return view('frontend.blog.blog',compact('blog'));
    }

}
