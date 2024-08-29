<?php

namespace App\Http\Controllers\Admin;

use App\Models\FunFact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FunFactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funfact = FunFact::first();
        return view('admin.funfact', compact('funfact'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'count' => 'required|integer',
            'title' => 'required|string|max:255',
        ]);

        FunFact::create($validated);

        return redirect()->route('admin.funfact.index')->with('success', 'Fun Fact created successfully.');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FunFact $funfact)
    {
        $validated = $request->validate([
            'icon' => 'required|string|max:255',
            'count' => 'required|integer',
            'title' => 'required|string|max:255',
        ]);

        $funfact->update($validated);

        return redirect()->route('admin.funfact.index')->with('success', 'Fun Fact updated successfully.');
    }
}
