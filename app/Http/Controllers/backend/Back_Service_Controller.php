<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Back_Service_Controller extends Controller
{
    public function index()
    {
        $services = Service::all(); 
        
        return view('backend.service.index', compact('services'));
    }

    public function create()
    {
        return view('backend.service.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', 
            'is_active' => 'required|boolean',
        ]);

        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->is_active = $request->is_active;

        if ($request->hasFile('image')) {
            $service->image = $request->file('image')->store('images/service', 'public');  
        }

        $service->save();

        return redirect()->route('back_service.index')->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', 
            'is_active' => 'required|boolean',
        ]);

        $service = Service::findOrFail($id);
        $service->name = $request->name;
        $service->description = $request->description;
        $service->price = $request->price;
        $service->is_active = $request->is_active;

        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::delete('public/' . $service->image); 
            }
            $service->image = $request->file('image')->store('images/service', 'public');
        }

        $service->save();

        return redirect()->route('back_service.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        if ($service->image) {
            Storage::delete('public/' . $service->image); 
        }

        $service->delete();

        return redirect()->route('back_service.index')->with('success', 'Service deleted successfully.');
    }
}
