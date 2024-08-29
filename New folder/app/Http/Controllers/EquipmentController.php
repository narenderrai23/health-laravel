<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipments = Equipment::all();
        return view('admin.equipments.index', compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.equipments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $equipment = new Equipment($request->all());

        if ($request->hasFile('image_path')) {
            $filePath = $request->file('image_path')->store('public/equipments');
            $equipment->image_path = $filePath;
        }

        $equipment->save();

        return redirect()->route('admin.equipments.index')->with('success', 'Equipment created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Equipment $equipment)
    {
        return view('admin.equipments.show', compact('equipment'));
    }


    public function fetch($slug)
    {
        $equipment = Equipment::where('slug', $slug)->firstOrFail();
        return view('equipment.show', compact('equipment'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Equipment $equipment)
    {
        return view('admin.equipments.edit', compact('equipment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Equipment $equipment)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4096',
        ]);


        $equipment->fill($request->all());

        if ($request->hasFile('image_path')) {
            $filePath = $request->file('image_path')->store('public/equipments');
            $equipment->image_path = $filePath;
        }

        $equipment->save();
        return redirect()->route('admin.equipments.index')->with('success', 'Equipment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Equipment $equipment)
    {
        $equipment->delete();
        return redirect()->route('admin.equipments.index')->with('success', 'Equipment deleted successfully.');
    }
}
