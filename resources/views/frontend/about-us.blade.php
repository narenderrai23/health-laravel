@extends('frontend.layouts.app')

@section('main')
    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{ asset('assets/images/bg/breadcrumb-bg.jpg') }}"
        data-black-overlay="4">
        <div class="container">
            <div class="tm-breadcrumb text-center">
                <h2>About us</h2>
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>


    <main class="main-content">
        <div class="tm-section about-us-area bg-white tm-padding-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="about-content about-content-2">
                            <h2>{{ $about->title }}</h2>
                            <p>{!! $about->philosophy !!}</p>
                            <div class="about-contentbottom">
                                <a href="#" class="tm-callbutton">
                                    <span class="tm-callbutton-icon"><i class="zmdi zmdi-phone-in-talk"></i></span>
                                    <h3>{{ $about->contact_number }} </h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="about-videobox">
                            <img src="{{ Storage::url($about->image_path) }}" alt="{{ $about->title }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="funfact-area tm-padding-section-top">
                <div class="container">
                    <div class="row mt-30-reverse">
                        @foreach ($funfacts as $fact)
                            <div class="col mt-30">
                                <div class="tm-funfact">
                                    <span class="tm-funfact-icon">
                                        <i class="{{ $fact['icon'] }}"></i>
                                    </span>
                                    <div class="tm-funfact-content">
                                        <span class="tm-funfact-contentbg"></span>
                                        <span class="odometer" data-count-to="{{ $fact['count'] }}"></span>
                                        <h5>{{ $fact['title'] }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <div class="tm-section mission-vision-area bg-white tm-padding-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>Why Us</h2>
                            <p>Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem
                                an cule dicta iriure at phaedrum. </p>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters justify-content-center">
                    <div class="col-xl-10 col-12">
                        <div class="tm-missvis">
                            <ul class="nav tm-missvis-tabs" id="missionvision" role="tablist">
                                @foreach ($missionvisions as $index => $missionvision)
                                    <li class="nav-item">
                                        <a class="nav-link {{ $index === 0 ? 'active' : '' }}"
                                            id="missionvision-area{{ $index + 1 }}-tab" data-toggle="tab"
                                            href="#missionvision-area{{ $index + 1 }}" role="tab"
                                            aria-controls="missionvision-area{{ $index + 1 }}"
                                            aria-selected="{{ $index === 0 ? 'true' : 'false' }}">
                                            <span class="tab-icon"><i class="{{ $missionvision['icon'] }}"></i></span>
                                            <h5>{{ $missionvision['section'] }}</h5>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="tab-content tm-missvis-tabcontent" id="missionvision-ontent">
                                @foreach ($missionvisions as $index => $missionvision)
                                    <div class="tab-pane {{ $index === 0 ? 'show active' : '' }}"
                                        id="missionvision-area{{ $index + 1 }}" role="tabpanel"
                                        aria-labelledby="missionvision-area{{ $index + 1 }}-tab">
                                        <div class="tm-missvis-sectionwrap">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <img src="{{ asset('storage/' . $missionvision->content['image_path']) }}"
                                                        alt="{{ $missionvision->content['title'] }}" class="w-100">

                                                </div>
                                                <div class="col-lg-6 {{ $index % 2 === 1 ? 'order-2 order-lg-1' : '' }}">
                                                    <div class="tm-missvis-content">
                                                        <h5>{{ $missionvision->content['title'] }}</h5>
                                                        <p>{{ $missionvision->content['description'] }}</p>
                                                        <ul class="stylish-list-color">
                                                            @foreach ($missionvision->content['services'] as $item)
                                                                @foreach (explode(', ', $item) as $item)
                                                                    <li>{{ $item }}</li>
                                                                @endforeach
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
