<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Mail\AppointmentMail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use App\DataTables\AppointmentDataTable;

class AppointmentController extends Controller
{

    public function appointments()
    {
        return view('frontend.appointments.appointment');
    }

    public function index(AppointmentDataTable $dataTable)
    {
        return $dataTable->render('admin.appointments.index');
    }


    public function store(Request $request)
    {
        // Validate the request, including the new appointment_date field
        $validatedData = $request->validate([
            'hospital' => 'required|string',
            'patient_name' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:20',
            'department' => 'required|string|max:255',
            'appointment_date' => 'required|date',
            'comment' => 'nullable|string',
        ]);
        $validatedData['appointment_unique_id'] = Appointment::generateAppointmentUniqueId();

        // Save the data to the database
        $appointment = Appointment::create($validatedData);

        // Send an email notification using the renamed Mailable class
        Mail::to('recipient@example.com')->send(new AppointmentMail($appointment));

        // Redirect to the appointment details page with appointment number using GET
        return redirect()->route('appointment.details', ['id' => $appointment->appointment_unique_id])
            ->with('success', 'Appointment booked successfully!');
    }


    public function details($appointment_unique_id)
    {
        $appointment = Appointment::where('appointment_unique_id', $appointment_unique_id)->latest('id')->first();

        return view('frontend.appointments.details', compact('appointment'));
    }

    public function appointmentPdf($id)
    {
        $appointment = Appointment::findOrFail($id);
        $pdf = Pdf::loadView('frontend.appointments.appointment_pdf.invoice', ['appointment' => $appointment]);
        return $pdf->download('invoice.pdf');
        // return view('frontend.appointments.appointment_pdf.invoice', ['appointment' => $appointment]);

    }

}
