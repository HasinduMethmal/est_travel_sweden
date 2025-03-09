<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Package;  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Back_PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();

        return view('backend.admin-dashboard.tour-package.index', compact('packages'));
    }

    public function show($id)
    {
        $package = Package::findOrFail($id);

        return view('backend.admin-dashboard.tour-package.show', compact('package'));
    }

    public function create()
    {
        return view('backend.admin-dashboard.tour-package.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'destination' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'is_active' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $request->file('image')->store('images/packages', 'public'); 
        }

        Package::create($validatedData);

        return redirect()->route('back_package.index')->with('success', 'Package created successfully!');
    }

    public function edit($id)
    {
        $package = Package::findOrFail($id);

        return view('backend.admin-dashboard.tour-package.edit', compact('package'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'destination' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'is_active' => 'required|boolean',
        ]);

        $package = Package::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($package->image) {
                Storage::delete('public/' . $package->image); 
            }
            $validatedData['image'] = $request->file('image')->store('images/packages', 'public');
        }

        $package->update($validatedData);

        return redirect()->route('back_package.index')->with('success', 'Package updated successfully!');
    }

    public function destroy($id)
    {
        $package = Package::findOrFail($id);

        if ($package->image) {
            Storage::delete('public/' . $package->image); 
        }

        $package->delete();

        return redirect()->route('back_package.index')->with('success', 'Package deleted successfully!');
    }
}
