<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service; // Assuming you have a Service model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Back_Service_Controller extends Controller
{
    // Display a list of all services
    public function index()
    {
        // Fetch all services from the database
        $services = Service::all(); // You can use pagination instead: Service::paginate(10);
        
        return view('backend.admin-dashboard.tour-service.index', compact('services'));
    }

    // Show the form to create a new service
    public function create()
    {
        return view('backend.admin-dashboard.tour-service.create');
    }

    // Store a new service
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Optional image validation
            'status' => 'required|in:Active,Inactive', // Service status
        ]);

        // Create and save the new service
        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->status = $request->status;

    
         // Handle image upload if present
         if ($request->hasFile('image')) {
            $service->image = $request->file('image')->store('images/service', 'public');  // Store image in 'public' disk
        }

        $service->save();

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    // Show the form to edit an existing service
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.admin-dashboard.tour-service.edit', compact('service'));
    }

    // Update an existing service
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Optional image validation
            'status' => 'required|in:Active,Inactive',
        ]);

        // Find the service and update its data
        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->status = $request->status;

        // Handle image upload if present
        if ($request->hasFile('image')) {
            // Delete the old image if it's being replaced
            if ($service->image) {
                Storage::delete('public/images/service' . $service->image); // Using Storage facade for better clarity
            }
            $service->image = $request->file('image')->store('images/service', 'public');
        }


        $service->save();

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    // Delete a service
    public function destroy($id)
    {
        // Find the service
        $service = Service::findOrFail($id);

        // Delete the associated image if it exists
        if ($service->image) {
            Storage::delete('public/images/service' . $service->image); // Use Storage facade
        }

        // Delete the service from the database
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
