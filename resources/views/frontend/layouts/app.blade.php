<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome to {{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="{{ url('/') }}/assets/images/favicon.png">
    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/custom.css">
    @stack('links')
</head>

<body>

    <div id="wrapper" class="wrapper">
        @php
            $contact = App\Models\Admin\Contact::first();
        @endphp

        @include('frontend.include.header')

        @yield('main')

        @include('frontend.include.footer')

        <!-- Modal -->
        <div class="modal fade" id="bookAppointmentModal" tabindex="-1" aria-labelledby="bookAppointmentModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bookAppointmentModalLabel">Book Appointment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form accept="">
                            <div class="mb-3">
                                <label for="hospitalList" class="form-label">Select Hospital</label>
                                <select id="hospitalList" class="form-select" name="hospital" required>
                                    <option value="" disabled selected>Select a hospital</option>
                                    <option value="Apex Citi Hospital">Apex Citi Hospital > 15% Flat</option>
                                    <option value="Makkar Hospital">Makkar Hospital > 10%</option>
                                    <option value="R K Hospital">R K Hospital > 10-15%</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="patientName" class="form-label">Patient Name*</label>
                                <input type="text" class="form-control" id="patientName" name="patient_name"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="mobileNumber" class="form-label">Mobile Number*</label>
                                <input type="text" class="form-control" id="mobileNumber" name="mobile_number"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="department" class="form-label">Department*</label>
                                <input type="text" class="form-control" id="department" name="department" required>
                            </div>
                            <div class="mb-3">
                                <label for="comment" class="form-label">Comment</label>
                                <textarea class="form-control" id="comment" name="comment"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" form="appointmentForm">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ url('/') }}/assets/js/modernizr-3.6.0.min.js"></script>
        <script src="{{ url('/') }}/assets/js/jquery.min.js"></script>
        <script src="{{ url('/') }}/assets/js/popper.min.js"></script>
        <script src="{{ url('/') }}/assets/js/bootstrap.min.js"></script>
        <script src="{{ url('/') }}/assets/js/plugins.js"></script>
        <script src="{{ url('/') }}/assets/js/main.js"></script>
        @stack('scripts')

</body>

</html>
