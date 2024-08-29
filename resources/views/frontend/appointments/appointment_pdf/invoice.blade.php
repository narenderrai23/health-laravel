<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Welcome to {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <base href="{{ url('/') }}">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('pdf/assets/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('pdf/assets/fonts/font-awesome/css/font-awesome.min.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ url('/') }}/assets/images/favicon.ico">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('pdf/assets/css/style.css') }}">
</head>

<body>

    <!-- Invoice 1 start -->
    <div class="invoice-1 invoice-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="invoice-inner clearfix">
                        <div class="invoice-info clearfix" id="invoice_wrapper">
                            <div class="invoice-headar">
                                <div class="row g-0">
                                    <div class="col-sm-6">
                                        <div class="invoice-logo">
                                            <!-- logo started -->
                                            <div class="logo">
                                                <img src="{{ url('/') }}/assets/images/logo/logo.png"
                                                    alt="dialia logo">
                                            </div>
                                            <!-- logo ended -->
                                        </div>
                                    </div>
                                    <div class="col-sm-6 invoice-id">
                                        <div class="info">
                                            <h1 class="color-white inv-header-1">Invoice</h1>
                                            <p class="color-white mb-1">Invoice Number <span>#45613</span></p>
                                            <p class="color-white mb-0">Invoice Date <span>21 Sep 2021</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-top">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="invoice-number mb-30">
                                            <h4 class="inv-title-1">Invoice To</h4>
                                            <h2 class="name mb-10">Jhon Smith</h2>
                                            <p class="invo-addr-1">
                                                Theme Vessel <br />
                                                info@themevessel.com <br />
                                                21-12 Green Street, Meherpur, Bangladesh <br />
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="invoice-number mb-30">
                                            <div class="invoice-number-inner">
                                                <h4 class="inv-title-1">Invoice From</h4>
                                                <h2 class="name mb-10">Animas Roky</h2>
                                                <p class="invo-addr-1">
                                                    Apexo Inc <br />
                                                    billing@apexo.com <br />
                                                    169 Teroghoria, Bangladesh <br />
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-center">
                                <div class="table-responsive">
                                    <table class="table mb-0 table-striped invoice-table">
                                        <thead class="bg-active">
                                            <tr class="tr">
                                                <th>Field</th>
                                                <th>Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr">
                                                <td>Hospital</td>
                                                <td>{{ $appointment->hospital }}</td>
                                            </tr>
                                            <tr class="tr">
                                                <td>Patient Name</td>
                                                <td>{{ $appointment->patient_name }}</td>
                                            </tr>
                                            <tr class="tr">
                                                <td>Mobile Number</td>
                                                <td>{{ $appointment->mobile_number }}</td>
                                            </tr>
                                            <tr class="tr">
                                                <td>Department</td>
                                                <td>{{ $appointment->department }}</td>
                                            </tr>
                                            <tr class="tr">
                                                <td>Appointment Date</td>
                                                <td>{{ $appointment->appointment_date }}</td>
                                            </tr>
                                            <tr class="tr">
                                                <td>Comment</td>
                                                <td>{{ $appointment->comment }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="invoice-bottom">
                                <div class="row">
                                    <div class="col-lg-6 col-md-8 col-sm-7">
                                        <div class="mb-30 dear-client">
                                            <h3 class="inv-title-1">Terms & Conditions</h3>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been typesetting industry. Lorem Ipsum</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-contact clearfix">
                                <div class="row g-0">
                                    <div class="col-sm-12">
                                        <div class="contact-info">
                                            <a href="tel:+55-4XX-634-7071"><i class="fa fa-phone"></i> +00 123 647
                                                840</a>
                                            <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i>
                                                info@themevessel.com</a>
                                            <a href="tel:info@themevessel.com" class="mr-0 d-none-580"><i
                                                    class="fa fa-map-marker"></i> 169 Teroghoria, Bangladesh</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-btn-section clearfix d-print-none">
                            <a href="javascript:window.print()" class="btn btn-lg btn-print">
                                <i class="fa fa-print"></i> Print Invoice
                            </a>
                            <a id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                                <i class="fa fa-download"></i> Download Invoice
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Invoice 1 end -->

    <script src="{{ asset('pdf/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('pdf/assets/js/jspdf.min.js') }}"></script>
    <script src="{{ asset('pdf/assets/js/html2canvas.js') }}"></script>
    <script src="{{ asset('pdf/assets/js/app.js') }}"></script>
</body>

</html>
