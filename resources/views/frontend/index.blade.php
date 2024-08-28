@extends('frontend.layouts.app')

@section('main')
    @include('frontend.components.slider')
    <main class="main-content">
        <div class="tm-section features-area bg-white tm-padding-section">
            <div class="container">
                <div class="row justify-content-center mt-30-reverse">
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-feature text-center wow fadeInUp">
                            <span class="tm-feature-icon">
                                <i class="flaticon-spa"></i>
                            </span>
                            <span class="tm-feature-backicon">
                                <i class="flaticon-spa"></i>
                            </span>
                            <h5>Massage Therapy</h5>
                            <p>Massage therapy is the manipulation of the soft tissues of the body including
                                muscles, connective tissue, tendons, ligaments and joints.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-feature text-center wow fadeInUp">
                            <span class="tm-feature-icon">
                                <i class="flaticon-physical"></i>
                            </span>
                            <span class="tm-feature-backicon">
                                <i class="flaticon-physical"></i>
                            </span>
                            <h5>Physio Therapy</h5>
                            <p>Physiotherapists spend years studying how the body works, how injuries impact
                                performance & how to recover and repair injured tissues.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 mt-30">
                        <div class="tm-feature text-center wow fadeInUp">
                            <span class="tm-feature-icon">
                                <i class="flaticon-acupuncture"></i>
                            </span>
                            <span class="tm-feature-backicon">
                                <i class="flaticon-acupuncture"></i>
                            </span>
                            <h5>Acupuncture</h5>
                            <p>Acupuncture is a form of alternative medicine
                                in which thin needles are inserted into the
                                body. It is a key component of medicine.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-section about-us-area bg-grey">
            <div class="about-image" data-bgimage="{{ url('/') }}/assets/images/others/about-image-1.jpg"
                data-overlay="1">
                <div class="tm-videobutton">
                    <a data-fancybox href="https://www.youtube.com/watch?v=Sv511KEiIJQ">
                        <span><i class="flaticon-play-button"></i></span>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                        <div class="about-content tm-padding-section">
                            <h2><span><span class="color-theme">Welcomes</span> you…..</span><br>
                                "First happiness is good health"</h2>
                            <p>We understand you concern fir your love one so we are here to help you. We will be
                                proud to tell you that we are make our dream come true. Whose aim is to provide
                                beter health services at your home.</p>
                            <p>Healthback has been conceptualised with the idea of providing medical facilities at
                                your home to view pandamic of Covid-19 here we are providing you differ kind of
                                medical facilities all type of medical services at your home. Its our motto to
                                increase patients lifestyle and avoid unnecessary hospitalisation. </p>
                            <div class="about-contentbottom">
                                <a href="about-us" class="tm-button">Read more</a>
                                <a href="#" class="tm-callbutton">
                                    <span class="tm-callbutton-icon"><i class="zmdi zmdi-phone-in-talk"></i></span>
                                    <h3>+91 90134 02089</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-section services-area tm-padding-section bg-white">
            <span class="bg-shape-left"><img
                    data-pagespeed-lazy-src="{{ url('/') }}/assets/images/icons/bg-shape-1.png" alt="background shape"
                    src="{{ url('/') }}/assets/1.JiBnMqyl6S.gif"
                    onload="pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"
                    onerror="this.onerror=null;pagespeed.lazyLoadImages.loadIfVisibleAndMaybeBeacon(this);"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>Our Services</h2>
                            <p>Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem
                                an cule dicta iriure at phaedrum. </p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-30-reverse">
                    @foreach (App\Models\Service::paginate(6) as $service)
                        <div class="col-lg-4 col-md-6 col-12 mt-30">
                            <div class="tm-service text-center wow fadeInUp">
                                <div class="tm-service-inner">
                                    <span class="tm-service-icon">
                                        <i class="{!! $service->icon !!}"></i>
                                    </span>
                                    <span class="tm-service-backicon">
                                        <i class="{!! $service->icon !!}"></i>
                                    </span>
                                    <h5><a href="{{ route('services', $service->slug) }}">{{ $service->name }}</a></h5>
                                    <p>{{ $service->short_description }}</p>
                                    <a href="{{ route('services', $service->slug) }}" class="tm-readmore">Read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="tm-section call-to-action-area tm-padding-section"
            data-bgimage="{{ url('/') }}/assets/images/bg/call-to-action-bg.jpg" data-overlay="8">
            <div class="container">
                <div class="tm-cta">
                    <div class="tm-cta-content">
                        <h3>New Patient Special Offer</h3>
                        <h2>For your convenience, you can book your appointment</h2>
                    </div>
                    <div class="tm-cta-button">
                        <a href="book-an-appointment" class="tm-button tm-button-white">Book an
                            Appointment</a>
                    </div>
                </div>
            </div>
        </div>



        <div class="tm-section products-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>EQUIPMENT</h2>
                            <p>Lorem ipsum dolor sit amet, in quodsi vulputate pro. Ius illum vocent mediocritatem
                                an cule dicta iriure at phaedrum. </p>
                        </div>
                    </div>
                </div>
                <div class="row product-slider-active tm-slider-arrow tm-slider-arrow-hovervisible">
                    <div class="col">
                        <div class="tm-product">
                            <div class="tm-product-image">
                                <a class="tm-product-imagelink" href="#">
                                    <img src="{{ url('/') }}/assets/images/product/product-image-1.jpg"
                                        alt="product image">
                                </a>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="zmdi zmdi-favorite"></i></a></li>
                                </ul>
                            </div>
                            <div class="tm-product-content">
                                <h5 class="tm-product-title text-center"><a href="#">Fowler Bed</a></h5>
                                <h6 class="tm-product-price text-center"><a href="#">Read More</a></del>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tm-product">
                            <div class="tm-product-image">
                                <a class="tm-product-imagelink" href="#">
                                    <img src="{{ url('/') }}/assets/images/product/product-image-2.jpg"
                                        alt="product image">
                                </a>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="zmdi zmdi-favorite"></i></a></li>
                                </ul>
                            </div>
                            <div class="tm-product-content">
                                <h5 class="tm-product-title text-center"><a href="#">Wheel Chairs</a></h5>
                                <h6 class="tm-product-price text-center"><a href="#">Read More</a></del>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tm-product">
                            <div class="tm-product-image">
                                <a class="tm-product-imagelink" href="#">
                                    <img src="{{ url('/') }}/assets/images/product/product-image-3.jpg"
                                        alt="product image">
                                </a>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="zmdi zmdi-favorite"></i></a></li>
                                </ul>
                            </div>
                            <div class="tm-product-content">
                                <h5 class="tm-product-title text-center"><a href="#">OT / Labour Light</a>
                                </h5>
                                <h6 class="tm-product-price text-center"><a href="#">Read More</a></del>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tm-product">
                            <div class="tm-product-image">
                                <a class="tm-product-imagelink" href="#">
                                    <img src="{{ url('/') }}/assets/images/product/product-image-4.jpg"
                                        alt="product image">
                                </a>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="zmdi zmdi-favorite"></i></a></li>
                                </ul>
                            </div>
                            <div class="tm-product-content">
                                <h5 class="tm-product-title text-center"><a href="#">OT / Labour Table</a>
                                </h5>
                                <h6 class="tm-product-price text-center"><a href="#">Read More</a></del>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tm-product">
                            <div class="tm-product-image">
                                <a class="tm-product-imagelink" href="#">
                                    <img src="{{ url('/') }}/assets/images/product/product-image-5.jpg"
                                        alt="product image">
                                </a>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="zmdi zmdi-favorite"></i></a></li>
                                </ul>
                            </div>
                            <div class="tm-product-content">
                                <h5 class="tm-product-title text-center"><a href="#">Pulse Oximeter</a></h5>
                                <h6 class="tm-product-price text-center"><a href="#">Read More</a></del>
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="tm-product">
                            <div class="tm-product-image">
                                <a class="tm-product-imagelink" href="#">
                                    <img src="{{ url('/') }}/assets/images/product/product-image-6.jpg"
                                        alt="product image">
                                </a>
                                <ul class="tm-product-actions">
                                    <li><a href="#"><i class="zmdi zmdi-favorite"></i></a></li>
                                </ul>
                            </div>
                            <div class="tm-product-content">
                                <h5 class="tm-product-title text-center"><a href="#">Suction machine</a>
                                </h5>
                                <h6 class="tm-product-price text-center"><a href="#">Read More</a></del>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tm-section testimonial-area tm-padding-section bg-grey">
            <div class="bg-animated-shape">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 col-md-10 col-12">
                        <div class="tm-section-title text-center">
                            <h2>What Our Customers Say</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider-active tm-slider-arrow-2">
                    <div class="tm-testimonial-slideritem">
                        <div class="tm-testimonial">
                            <div class="tm-testimonial-author">
                                <div class="tm-testimonial-authorimage">
                                    <img src="{{ url('/') }}/assets/images/authors/author-image-1.jpg"
                                        alt="author image">
                                </div>
                                <div class="tm-testimonial-authorinfo">
                                    <h5>Penny Beaird</h5>
                                    <h6>Financer</h6>
                                </div>
                            </div>
                            <div class="tm-testimonial-content">
                                <p>I started seeing Dr. Robinson on the recommendation of my massage therapist.
                                    Massage
                                    therapy is the science of movement and function. Massage therapy will help
                                    anybody
                                    who experiences difficulty with movement strength and pain.</p>
                                <div class="tm-rating">
                                    <span class="active"><i class="zmdi zmdi-star"></i></span>
                                    <span class="active"><i class="zmdi zmdi-star"></i></span>
                                    <span class="active"><i class="zmdi zmdi-star"></i></span>
                                    <span class="active"><i class="zmdi zmdi-star"></i></span>
                                    <span class="active"><i class="zmdi zmdi-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tm-testimonial-slideritem">
                        <div class="tm-testimonial">
                            <div class="tm-testimonial-author">
                                <div class="tm-testimonial-authorimage">
                                    <img src="{{ url('/') }}/assets/images/authors/author-image-2.jpg"
                                        alt="author image">
                                </div>
                                <div class="tm-testimonial-authorinfo">
                                    <h5>Ludie Cremin</h5>
                                    <h6>Supervisor</h6>
                                </div>
                            </div>
                            <div class="tm-testimonial-content">
                                <p>Quae iusto consequatur consectetur velit at nulla et enim debitis. Eligendi modi
                                    consectetur laudantium. Ut quis nobis numquam omnis suscipit eum est omnis.
                                    Explicabo ipsum accusamus consectetur animi laudantium quia.</p>
                                <div class="tm-rating">
                                    <span class="active"><i class="zmdi zmdi-star"></i></span>
                                    <span class="active"><i class="zmdi zmdi-star"></i></span>
                                    <span class="active"><i class="zmdi zmdi-star"></i></span>
                                    <span class="active"><i class="zmdi zmdi-star"></i></span>
                                    <span><i class="zmdi zmdi-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tm-testimonial-slideritem">
                        <div class="tm-testimonial">
                            <div class="tm-testimonial-author">
                                <div class="tm-testimonial-authorimage">
                                    <img src="{{ url('/') }}/assets/images/authors/author-image-3.jpg"
                                        alt="author image">
                                </div>
                                <div class="tm-testimonial-authorinfo">
                                    <h5>Ottilie Wisoky</h5>
                                    <h6>Marketer</h6>
                                </div>
                            </div>
                            <div class="tm-testimonial-content">
                                <p>Molestias dicta non laboriosam eum ut eos et. Dignissimos temporibus sit quis
                                    aut itaque vel. Maiores a est. Id ut aspernatur aliquam cumque aut ut alias
                                    accusamus. Minus aperiam fugiat tempora aut repellendus voluptatem debitis
                                    sequi.</p>
                                <div class="tm-rating">
                                    <span class="active"><i class="zmdi zmdi-star"></i></span>
                                    <span class="active"><i class="zmdi zmdi-star"></i></span>
                                    <span class="active"><i class="zmdi zmdi-star"></i></span>
                                    <span><i class="zmdi zmdi-star"></i></span>
                                    <span><i class="zmdi zmdi-star"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
