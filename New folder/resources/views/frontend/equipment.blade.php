@extends('frontend.layouts.app')

@section('main')
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="assets/images/bg/breadcrumb-bg.jpg"
        data-black-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb text-center">
                <h2>{{ $equipment->name }}</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="">{{ $equipment->name }}</a></li>
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
                            <img class="tm-service-details-image" src="{{ Storage::url($equipment->image_path) }}"
                                alt="{{ $equipment->title }}">
                            <h2>{{ $equipment->title }}</h2>
                            <p>{!! $equipment->description !!}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="sticky-sidebar">
                            <div class="widgets widgets-blog">
                                <div class="single-widget widget-serviceitems">
                                    <h5 class="widget-title">Equipment</h5>
                                    <ul>
                                        @foreach (App\Models\Equipment::select('name', 'slug')->orderBy('created_at', 'desc')->paginate(10) as $index => $equipment)
                                            <li><a href="{{ route('equipments', $equipment->slug) }}">{{ $index + 1 }}.
                                                    {{ $equipment->name }}</a></li>
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
