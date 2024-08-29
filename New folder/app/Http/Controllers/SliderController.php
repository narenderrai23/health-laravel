<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index', compact('sliders'));
    }

    public function show($id)
    {
        $slider = Slider::find($id);
        return view('admin.sliders.show', compact('slider'));
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_path' => 'required|image',
            'link' => 'nullable|url',
        ]);

        $path = $request->file('image_path')->store('public/slider');

        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $path,
            'link' => $request->link,
        ]);

        return redirect()->route('admin.sliders.index');
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image_path' => 'nullable|image',
            'link' => 'nullable|url',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
        ];

        if ($request->hasFile('image_path')) {
            $data['image_path'] = $request->file('image_path')->store('public/slider');
        }

        $slider->update($data);

        return redirect()->route('admin.sliders.index');
    }

    public function destroy(Slider $slider)
    {
        if ($slider->image_path && Storage::exists($slider->image_path)) {
            Storage::delete($slider->image_path);
        }
        $slider->delete();
        return redirect()->route('admin.sliders.index');
    }
}
