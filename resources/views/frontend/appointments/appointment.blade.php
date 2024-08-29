@extends('frontend.layouts.app')
@push('links')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

@section('main')
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ asset('assets/images/bg/breadcrumb-bg.jpg') }}"
        data-black-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb text-center">
                <h2>Book Appointment</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="">Book Appointment</a></li>
                </ul>
            </div>
        </div>
    </div>

    <main class="main-content">
        <!-- start book appointment section -->
        <section class="tm-section service-details-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Check for success message -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header d-flex align-items-center bg-info text-white">
                                <h4 class="mb-0 mr-auto">Book Appointment</h4>
                            </div>
                            <div class="card-body">
                                <form class="book-appointment-form bg-white rounded-20 box-shadow" id="frontAppointmentBook"
                                    action="{{ route('appointment.book') }}" method="post">
                                    @csrf
                                    @include('frontend.appointments.book_appointment')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end book appointment section -->
    </main>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr("#templateAppointmentDate", {
            dateFormat: "Y-m-d", // Customize the date format if needed
            locale: "fr", // Set the locale to French
            altInput: true, // Optional: displays a user-friendly format
            altFormat: "F j, Y", // Optional: the format in the alt input
            allowInput: true, // Allows manual input
        });
    </script>
@endpush
