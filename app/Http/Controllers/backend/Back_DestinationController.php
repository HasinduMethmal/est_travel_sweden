<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Destination; // Assuming you have a Destination model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Back_DestinationController extends Controller
{
    // Display a list of all destinations
    public function index()
    {
        $destinations = Destination::all(); // Or use pagination: Destination::paginate(10);
        return view('backend.admin-dashboard.tour-destination.index', compact('destinations'));
    }

    // Show the form to create a new destination
    public function create()
    {
        return view('backend.admin-dashboard.tour-destination.create');
    }

    public function show($id)
    {
        // Fetch the destination by its ID
        $destination = Destination::findOrFail($id);

        // Return the view with the destination details
        return view('backend.admin-dashboard.tour-destination.show', compact('destination'));
    }


    // Store a new destination
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Optional image validation
            'status' => 'required|in:Active,Inactive', // Destination status
        ]);

        $destination = new Destination();
        $destination->name = $request->name;
        $destination->description = $request->description;
        $destination->price = $request->price;
        $destination->status = $request->status;

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $destination->image = $request->file('image')->store('images/destinations', 'public');  // Store image in 'public' disk
        }

        $destination->save();

        return redirect()->route('back_destination.index')->with('success', 'Destination created successfully.');
    }

    // Show the form to edit an existing destination
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
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'status' => 'required|in:Active,Inactive',
        ]);

        $destination = Destination::findOrFail($id);
        $destination->name = $request->name;
        $destination->description = $request->description;
        $destination->price = $request->price;
        $destination->status = $request->status;

        // Handle image upload if present
        if ($request->hasFile('image')) {
            // Delete the old image if it's being replaced
            if ($destination->image) {
                Storage::delete('public/images/destination' . $destination->image); // Using Storage facade for better clarity
            }
            $destination->image = $request->file('image')->store('images/destinations', 'public');
        }

        $destination->save();

        return redirect()->route('back_destination.index')->with('success', 'Destination updated successfully.');
    }

    // Delete a destination
    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        
        // Delete the associated image if it exists
        if ($destination->image) {
            Storage::delete('public/images/destination' . $destination->image); // Use Storage facade
        }

        $destination->delete();

        return redirect()->route('back_destination.index')->with('success', 'Destination deleted successfully.');
    }
}
