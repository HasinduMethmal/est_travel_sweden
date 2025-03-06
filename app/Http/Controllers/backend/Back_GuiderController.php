<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Guider;
use Illuminate\Http\Request;

class Back_GuiderController extends Controller
{
    // Show all guiders
    public function index(Request $request)
    {
        $email = $request->get('email');  // Get the email input from the search form
    
        $guiders = Guider::when($email, function ($query, $email) {
            return $query->where('email', 'like', '%' . $email . '%');
        })->paginate(10);
    
        return view('backend.admin-dashboard.tour-guider.index', compact('guiders'));
    }
    
    // Show a single guider
    public function show($id)
    {
        // Find guider by id or fail if not found
        $guider = Guider::findOrFail($id);

        // Return a view to show guider details
        return view('backend.admin-dashboard.tour-guider.show', compact('guider'));
    }

    // Show the form to create a new guider
    public function create()
    {
        // Return a view to create a guider
        return view('backend.admin-dashboard.tour-guider.create');
    }

    // Store a new guider in the database
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:guiders,email',
            'status' => 'required|in:Active,Inactive,Suspended',
        ]);

        // Create the guider using validated data
        Guider::create($validatedData);

        // Redirect to guider index with success message
        return redirect()->route('guider.index')->with('success', 'Guider created successfully!');
    }

    // Show the form to edit a guider
    public function edit($id)
    {
        // Find guider by id or fail
        $guider = Guider::findOrFail($id);

        // Return the edit view with guider data
        return view('backend.admin-dashboard.tour-guider.edit', compact('guider'));
    }

    // Update an existing guider in the database
    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:guiders,email,' . $id, // Ignore current guider's email
            'status' => 'required|in:Active,Inactive,Suspended',
        ]);

        // Find the guider by id or fail
        $guider = Guider::findOrFail($id);

        // Update the guider data
        $guider->update($validatedData);

        // Redirect to guider index with success message
        return redirect()->route('guider.index')->with('success', 'Guider updated successfully!');
    }

    // Delete a guider
    public function destroy($id)
    {
        
        // Find guider by id or fail
        $guider = Guider::findOrFail($id);

        // Delete the guider
        $guider->delete();

        // Redirect to guider index with success message
        return redirect()->route('guider.index')->with('success', 'Guider deleted successfully!');
    }
}
