@extends('frontend.layouts.app')

@section('main')
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="assets/images/bg/breadcrumb-bg.jpg"
        data-black-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb text-center">
                <h2>{{ $service->name }}</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="">{{ $service->name }}</a></li>
                </ul>
            </div>
        </div>
    </div>

    <main class="main-content">
        <div class="tm-section service-details-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="tm-service-details">
                            <img class="tm-service-details-image" src="{{ Storage::url($service->image_path) }}"
                                alt="{{ $service->title }}">
                            <h2>{{ $service->title }}</h2>
                            <p>{!! $service->description !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="sticky-sidebar">
                            <div class="widgets widgets-blog">
                                <div class="single-widget widget-serviceitems">
                                    <h5 class="widget-title">Services</h5>
                                    <ul>
                                        @foreach (App\Models\Service::select('name', 'slug')->orderBy('created_at', 'desc')->paginate(10) as $index => $service)
                                            <li><a href="{{ route('services', $service->slug) }}">{{ $index + 1 }}.
                                                    {{ $service->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
