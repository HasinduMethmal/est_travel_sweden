<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Package;  // Change Customer model to Package
use Illuminate\Http\Request;

class Back_PackageController extends Controller
{
    // Show all packages
    public function index()
    {
        // Retrieve all packages (you can paginate or filter as needed)
        $packages = Package::all();

        // Return a view (create this view in resources/views/backend/packages/index.blade.php)
        return view('backend.admin-dashboard.tour-package.index', compact('packages'));
    }

    // Show a single package
    public function show($id)
    {
        // Find package by id or fail if not found
        $package = Package::findOrFail($id);

        // Return a view to show package details (create this view)
        return view('backend.admin-dashboard.tour-package.show', compact('package'));
    }

    // Show the form to create a new package
    public function create()
    {
        // Return a view to create a package (create this view)
        return view('backend.admin-dashboard.tour-package.create');
    }

    // Store a new package in the database
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'destination' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // optional image upload
            'is_active' => 'required|boolean',
        ]);

        // Create the package using validated data
        Package::create($validatedData);

        // Redirect to package index with success message
        return redirect()->route('package.index')->with('success', 'Package created successfully!');
    }

    // Show the form to edit a package
    public function edit($id)
    {
        // Find package by id or fail
        $package = Package::findOrFail($id);

        // Return the edit view with package data (create this view)
        return view('backend.admin-dashboard.tour-package.edit', compact('package'));
    }

    // Update an existing package in the database
    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'destination' => 'required|string|max:255',
            'duration' => 'required|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // optional image upload
            'is_active' => 'required|boolean',
        ]);

        // Find the package by id or fail
        $package = Package::findOrFail($id);

        // Update the package data
        $package->update($validatedData);

        // Redirect to package index with success message
        return redirect()->route('package.index')->with('success', 'Package updated successfully!');
    }

    // Delete a package
    public function destroy($id)
    {
        // Find package by id or fail
        $package = Package::findOrFail($id);

        // Delete the package
        $package->delete();

        // Redirect to package index with success message
        return redirect()->route('package.index')->with('success', 'Package deleted successfully!');
    }
}
