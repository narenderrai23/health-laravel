@extends('frontend.layouts.app')

@section('main')
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ asset('assets/images/bg/breadcrumb-bg.jpg') }}"
        data-black-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb text-center">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </div>

    <main class="main-content">
        <div class="tm-section contact-us-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>How To Find Us</h2>
                            <p>Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem
                                an cule dicta iriure at phaedrum. </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-30-reverse">
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-contactblock text-center">
                            <span class="tm-contactblock-icon">
                                <i class="flaticon-placeholder"></i>
                            </span>
                            <span class="tm-contactblock-backicon">
                                <i class="flaticon-placeholder"></i>
                            </span>
                            <h5>Our location</h5>
                            <p>{{ $contact->location }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-contactblock text-center">
                            <span class="tm-contactblock-icon">
                                <i class="flaticon-alarm-clock"></i>
                            </span>
                            <span class="tm-contactblock-backicon">
                                <i class="flaticon-alarm-clock"></i>
                            </span>
                            <h5>Email ID</h5>
                            <ul class="text-center">
                                <li>{{ $contact->email }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-contactblock text-center">
                            <span class="tm-contactblock-icon">
                                <i class="flaticon-phone"></i>
                            </span>
                            <span class="tm-contactblock-backicon">
                                <i class="flaticon-phone"></i>
                            </span>
                            <h5>Mobile No.</h5>
                            <ul class="text-center">
                                <li>{{ $contact->phone }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row justify-content-center mt-50">
                    <div class="col-lg-8">
                        <p class="form-messages">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </p>
                        <form id="tm-contactform" action="{{ route('enquiry.store') }}" method="POST"
                            class="tm-form tm-contact-form">
                            @csrf
                            <div class="tm-form-inner">
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="text" name="name" required="required" placeholder="Name*">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="email" name="email" required="required" placeholder="Email*">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div>
                                <div class="tm-form-field tm-form-fieldhalf">
                                    <input type="text" name="subject" required="required" placeholder="Subject*">
                                </div>
                                <div class="tm-form-field">
                                    <textarea name="message" cols="30" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="tm-form-field text-center">
                                    <button type="submit" class="tm-button tm-button-dark">Send Message</button>
                                </div>
                            </div>
                        </form>

                        
                    </div>
                </div>
            </div>
        </div>
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14008.273015714982!2d77.3116237!3d28.6277164!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce556282108ab%3A0x8864b5be4bb894c!2shealthback!5e0!3m2!1sen!2sin!4v1721481081730!5m2!1sen!2sin"
                width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
@endsection
