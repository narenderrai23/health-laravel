@extends('frontend.layouts.app')

@section('main')
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="assets/images/bg/breadcrumb-bg.jpg"
        data-black-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb text-center">
                <h2>Insurance</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Insurance</li>
                </ul>
            </div>
        </div>
    </div>
    <main class="main-content">
        <div class="tm-section all-team-members tm-padding-section bg-white">
            <div class="container">
                <p>
                    Our philosophy is to provide individualised services for every
                    client. Would we come to Dialia RMT therapy as clients? The
                    profession of Registered Massage Therapy (RMT) has enlarge to become
                    a primary health care modality. Our philosophy is to provide
                    individualised services for every client. Would we come to Dialia
                    RMT therapy as clients? The profession of Registered Massage Therapy
                    (RMT) has enlarge to become a primary health care modality.
                </p>
                <br />
                <div class="row mt-50-reverse justify-content-center">
                    @foreach ($insurances as $insurance)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-50">
                            <div class="tm-member">
                                <div class="tm-member-top">
                                    <img src="{{ asset('storage/' . $insurance->image_path) }}"
                                        alt="{{ $insurance->name }}" />
                                </div>
                                <div class="tm-member-bottom">
                                    <h5>{{ $insurance->name }}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </main>
@endsection
