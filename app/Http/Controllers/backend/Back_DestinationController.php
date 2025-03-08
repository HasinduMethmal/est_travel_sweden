<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Destination; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Back_DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all(); 
        return view('backend.admin-dashboard.tour-destination.index', compact('destinations'));
    }

    public function create()
    {
        return view('backend.admin-dashboard.tour-destination.create');
    }

    public function show($id)
    {
        $destination = Destination::findOrFail($id);

        return view('backend.admin-dashboard.tour-destination.show', compact('destination'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', 
            'is_active' => 'required|boolean',
        ]);

        $destination = new Destination();
        $destination->name = $request->name;
        $destination->description = $request->description;
        $destination->location= $request->location;
        $destination->price = $request->price;
        $destination->is_active = $request->is_active;

        if ($request->hasFile('image')) {
            $destination->image = $request->file('image')->store('images/destinations', 'public');  
        }

        $destination->save();

        return redirect()->route('back_destination.index')->with('success', 'Destination created successfully.');
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        return view('backend.admin-dashboard.tour-destination.edit', compact('destination'));
    }

    // Update an existing destination
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'is_active' => 'required|boolean',
        ]);

        $destination = Destination::findOrFail($id);
        $destination->name = $request->name;
        $destination->description = $request->description;
        $destination->location= $request->location;
        $destination->price = $request->price;
        $destination->is_active = $request->is_active;

        if ($request->hasFile('image')) {
            if ($destination->image) {
                Storage::delete('public/' . $destination->image); 
            }
            $destination->image = $request->file('image')->store('images/destinations', 'public');
        }

        $destination->save();

        return redirect()->route('back_destination.index')->with('success', 'Destination updated successfully.');
    }

    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        
        if ($destination->image) {
            Storage::delete('public/' . $destination->image); 
        }

        $destination->delete();

        return redirect()->route('back_destination.index')->with('success', 'Destination deleted successfully.');
    }
}
