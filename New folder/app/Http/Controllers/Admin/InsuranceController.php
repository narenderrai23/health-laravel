<?php


namespace App\Http\Controllers\Admin;

use App\Models\Insurance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class InsuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all insurance records
        $insurances = Insurance::all();

        // Pass the data to the index view
        return view('admin.insurances', compact('insurances'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image_path' => 'required|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $filePath = $file->store('insurances', 'public');
            $validated['image_path'] = $filePath;
        }

        // Create a new insurance record
        $insurance = Insurance::create($validated);

        // Return a JSON response
        return response()->json([
            'success' => true,
            'message' => 'Insurance created successfully.',
            'insurance' => $insurance
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Insurance $insurance)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'image_path' => 'nullable|file|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image_path')) {
            // Delete the old image if it exists
            if ($insurance->image_path && Storage::disk('public')->exists($insurance->image_path)) {
                Storage::disk('public')->delete($insurance->image_path);
            }

            // Store the new image
            $file = $request->file('image_path');
            $filePath = $file->store('insurances', 'public');
            $validated['image_path'] = $filePath;
        }

        // Update the specified insurance record
        $insurance->update($validated);

        // Return a JSON response
        return response()->json([
            'success' => true,
            'message' => 'Insurance updated successfully.',
            'insurance' => $insurance
        ]);
    }

    public function destroy(Insurance $insurance)
    {
        // Delete the image if it exists
        if ($insurance->image_path && Storage::disk('public')->exists($insurance->image_path)) {
            Storage::disk('public')->delete($insurance->image_path);
        }

        // Delete the insurance record
        $insurance->delete();

        // Return a JSON response
        return response()->json(['success' => true, 'message' => 'Insurance deleted successfully.']);
    }
}