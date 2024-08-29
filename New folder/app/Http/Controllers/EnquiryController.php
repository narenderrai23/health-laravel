<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{

    public function index()
    {
        $enquiries = Enquiry::all();
        return view('admin.enquiry', compact('enquiries'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        Enquiry::create($request->all());

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

  

    public function destroy($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();

        return redirect()->route('admin.enquiry.index')->with('success', 'Enquiry deleted successfully!');
    }

}
