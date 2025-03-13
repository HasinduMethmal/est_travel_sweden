<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Guider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Back_GuiderController extends Controller
{
    public function index(Request $request)
    {
        $email = $request->get('email');  
    
        $guiders = Guider::when($email, function ($query, $email) {
            return $query->where('email', 'like', '%' . $email . '%');
        })->paginate(10); 
    
        return view('backend.guider.index', compact('guiders'));
    }

    public function show($id)
    {
        $guider = Guider::findOrFail($id);

        return view('backend.guider.show', compact('guider'));
    }

    public function create()
    {
        return view('backend.guider.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:guiders,email',
            'phone' => 'nullable|string|max:15', 
            'bio' => 'nullable|string|max:1000', 
            'is_active' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/guiders', 'public');
        } else {
            $imagePath = null; 
        }
    
        $validatedData['image'] = $imagePath;
    
        Guider::create($validatedData);
    
        return redirect()->route('back_guider.index')->with('success', 'Guider created successfully!');
    }
    
    public function edit($id)
    {
        
        $guider = Guider::findOrFail($id);

        
        return view('backend.guider.edit', compact('guider'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:guiders,email,' . $id, 
            'phone' => 'nullable|string|max:15', 
            'bio' => 'nullable|string|max:1000', 
            'is_active' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $guider = Guider::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($guider->image && Storage::disk('public')->exists($guider->image)) {
                Storage::disk('public')->delete($guider->image);
            }

            $imagePath = $request->file('image')->store('images/guiders', 'public');
            $validatedData['image'] = $imagePath;
        }

        $guider->update($validatedData);

        return redirect()->route('back_guider.index')->with('success', 'Guider updated successfully!');
    }

    public function destroy($id)
    {
        $guider = Guider::findOrFail($id);

        if ($guider->image && Storage::disk('public')->exists($guider->image)) {
            Storage::delete('public/' . $guider->image); 

        }

        $guider->delete();

        return redirect()->route('back_guider.index')->with('success', 'Guider deleted successfully!');
    }
}
