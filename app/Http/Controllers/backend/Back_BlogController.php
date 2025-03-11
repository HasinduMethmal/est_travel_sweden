<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Back_BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); 
        return view('backend.admin-dashboard.blog.index', compact('blogs')); 
    }

    public function create()
    {
        return view('backend.admin-dashboard.blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'topic' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/blog', 'public');
        }

        Blog::create([
            'description' => $request->description,
            'topic'=>$request->topic,
            'image' => $imagePath ?? null, 
        ]);

        return redirect()->route('back_blog.index')->with('success', 'Blog created successfully');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id); 
        return view('backend.admin-dashboard.blog.edit', compact('blog')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required|string',
            'topic' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($blog->image && Storage::exists('public/' . $blog->image)) {
                Storage::delete('images/blog', 'public');
            }

            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->image = $imagePath;
        }

        $blog->description = $request->description;
        $blog->topic=$request->topic;
        $blog->save();

        return redirect()->route('back_blog.index')->with('success', 'Blog updated successfully');
    }

    // Remove the specified blog
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete the image if it exists
        if ($blog->image && Storage::exists('public/' . $blog->image)) {
            Storage::delete('images/blog', 'public');
        }

        $blog->delete();

        return redirect()->route('back_blog.index')->with('success', 'Blog deleted successfully');
    }
}
