<div class="heroslider-area" data-bgimage="{{ asset('assets/images/bg/bg-image-1.jpg') }}" data-black-overlay="3">
    <div class="heroslider-slider heroslider-animated tm-slider-dots tm-slider-dots-left" data-white-overlay="7">
        @foreach ($sliders as $slider)
            <div class="heroslider-singleslider d-flex align-items-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6 col-12 order-2 order-md-1">
                            <div class="heroslider-content">
                                <h1>{{ $slider->title }}</h1>
                                <p>{{ $slider->description }}</p>
                                <a href="#{{ $slider->link }}" class="tm-button">About Us</a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-8 col-12 order-1 order-md-2">
                            <div class="heroslider-image">
                                <img src="{{ Storage::url($slider->image_path) }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
