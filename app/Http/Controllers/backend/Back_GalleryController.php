<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Back_GalleryController extends Controller
{
    
    public function index()
    {
        $images = Gallery::all();

        return view('backend.admin-dashboard.gallery.index', compact('images'));
    }

   
    public function create()
    {
        return view('backend.admin-dashboard.gallery.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required|array', 
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        foreach ($request->file('images') as $image) {
            $gallery = new Gallery();

            $gallery->image = $image->store('images/gallery', 'public'); 

            $gallery->save();
        }

        return redirect()->route('back_gallery.index')->with('success', 'Images uploaded successfully!');
    }

    
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        Storage::delete('public/' . $gallery->image); 

        $gallery->delete();

        return redirect()->route('back_gallery.index')->with('success', 'Image deleted successfully!');
    }
}
