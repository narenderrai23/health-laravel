<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutFormRequest;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('admin.about', compact('about'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'philosophy' => 'required|string',
            'contact_number' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048', // Max size 2MB
        ]);

        // Handle the image upload if provided
        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $filePath = $file->store('about', 'public');
            $validatedData['image_path'] = $filePath; // Add the file path to validated data
        }

        // Create a new About instance and save the data
        About::create($validatedData);

        return redirect()->route('admin.about.index')->with('success', 'About created successfully!');
    }
    public function update(Request $request, About $about)
    {
        // Validate the request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'philosophy' => 'required|string',
            'contact_number' => 'nullable|string',
            'image_path' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048', // Max size 2MB
        ]);

        // Handle the image upload if provided
        if ($request->hasFile('image_path')) {
            // Delete the old image if it exists

            if ($about->image_path && Storage::disk('public')->exists($about->image_path)) {
                Storage::disk('public')->delete($about->image_path);
            }

            // Store the new image and update the path
            $filePath = $request->file('image_path')->store('about', 'public');
            $validatedData['image_path'] = $filePath; // Add the file path to validated data
        }

        // Update the About instance with the validated data
        $about->update($validatedData);

        return redirect()->route('admin.about.index')->with('success', 'About updated successfully!');
    }

}


