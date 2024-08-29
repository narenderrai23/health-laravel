@extends('frontend.layouts.app')
@push('links')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css">
@endpush
@section('main')
    <div class="container my-5">
        <div class="card shadow-lg">
            <div class="card-header justify-content-between d-flex align-items-center bg-info text-white">
                <div>
                    <h4 class="mb-0 mr-auto">APPOINTMENT DETAILS</h4>
                </div>
                <a href="{{ route('admin.appointmentPdf', $appointment->id) }}" target="_blank"
                    class="btn px-1 text-primary fs-3  text-dark">
                    <i class="fs-5 fa fa-download" aria-hidden="true"></i>
                </a>
            </div>
            <div class="card-body">
                <!-- Appointment Unique ID -->
                <div class="col-12 text-center mb-4">
                    <p class="h4">
                        Appointment ID:
                        <span class="d-inline-block ml-2">{{ $appointment->appointment_unique_id }}</span>
                    </p>
                </div>
                <div class="row">
                    <!-- Hospital -->
                    <div class="col-12 col-lg-6 mb-3">
                        <i class="fas fa-hospital-user text-primary"></i>
                        <strong class="ml-2">Hospital:</strong> {{ $appointment->hospital }}
                    </div>
                    <!-- Patient Name -->
                    <div class="col-12 col-lg-6 mb-3">
                        <i class="fas fa-user text-info"></i>
                        <strong class="ml-2">Patient Name:</strong> {{ $appointment->patient_name }}
                    </div>
                    <!-- Mobile Number -->
                    <div class="col-12 col-lg-6 mb-3">
                        <i class="fas fa-phone text-warning"></i>
                        <strong class="ml-2">Mobile Number:</strong> {{ $appointment->mobile_number }}
                    </div>
                    <!-- Department -->
                    <div class="col-12 col-lg-6 mb-3">
                        <i class="fas fa-building text-danger"></i>
                        <strong class="ml-2">Department:</strong> {{ $appointment->department }}
                    </div>
                    <!-- Appointment Date -->
                    <div class="col-12 col-lg-6 mb-3">
                        <i class="fas fa-calendar-day text-success"></i>
                        <strong class="ml-2">Appointment Date:</strong> {{ $appointment->appointment_date }}
                    </div>
                    <!-- Comment -->
                    <div class="col-12 col-lg-6 mb-3">
                        <i class="fas fa-comment text-muted"></i>
                        <strong class="ml-2">Comment:</strong> {{ $appointment->comment }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
