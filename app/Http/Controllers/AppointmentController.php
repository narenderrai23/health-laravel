<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'hospital' => 'required|string',
            'patient_name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:20',
            'department' => 'required|string|max:255',
            'comment' => 'nullable|string',
        ]);

        // Optionally, save the data to the database
        Appointment::create($validatedData);

        // Send an email notification using the renamed Mailable class
        // Mail::to('recipient@example.com')->send(new Appointment($validatedData));
        Mail::to('recipient@example.com')->send(new Appointment($validatedData));

        // Return a response or redirect with a success message
        return response()->json(['success' => 'Appointment booked successfully!']);
    }
}
