<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\MissionVision;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class MissionVisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $missionvisions = MissionVision::all();
        return view('admin.missionvisions', compact('missionvisions'));
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'section' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required',
            'services' => 'required|array',
            'image_path' => 'nullable|image|max:2048',
        ]);

        $content = [
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'services' => $validatedData['services'],
            'image_path' => null,
        ];

        if ($request->hasFile('image_path')) {
            $content['image_path'] = $request->file('image_path')->store('missionvision', 'public');
        }

        MissionVision::create([
            'section' => $validatedData['section'],
            'icon' => $validatedData['icon'],
            'content' => json_encode($content),
        ]);

        return redirect()->route('admin.missionvisions.index')->with('success', 'Mission and Vision created successfully.');
    }


    public function update(Request $request, MissionVision $missionvision)
    {
        $validatedData = $request->validate([
            'section' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required',
            'services' => 'required|array',
            'image_path' => 'nullable|image|max:2048',
        ]);

        $content = [
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'services' => $validatedData['services'],
            'image_path' => $missionvision->content['image_path'] ?? null, // Keep the old image path if no new image is uploaded
        ];

        // Check if a new image file is uploaded
        if ($request->hasFile('image_path')) {
            // Delete the old image if it exists
            if (isset($content['image_path']) && !empty($content['image_path'])) {
                Storage::disk('public')->delete($content['image_path']);
            }

            // Store the new image and update the image path
            $content['image_path'] = $request->file('image_path')->store('missionvision', 'public');
        }

        // Update the MissionVision instance
        $missionvision->update([
            'section' => $validatedData['section'],
            'icon' => $validatedData['icon'],
            'content' => $content,
        ]);

        return redirect()->route('admin.missionvisions.index')->with('success', 'Mission and Vision updated successfully.');
    }
}
