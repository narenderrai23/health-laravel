<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Contact;
use App\Mail\ContactFormSubmitted;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::first();
        return view('admin.contact', compact('contact'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'location' => 'required|string',
        ]);

        Contact::create($validatedData);
        Mail::to('narender.neet@gmail.com')->send(new ContactFormSubmitted($validatedData));
        return back()->with('success', 'Your message has been sent successfully!');

    }

    public function update(Request $request, Contact $contact)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'location' => 'required|string',
        ]);
        $contact->update($validatedData);
        return redirect()->route('admin.contacts.index')->with('success', 'Contact updated successfully!');
    }

}
