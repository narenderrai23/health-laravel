<div class="header">
    <div class="header-toparea">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-sm-6 col-12">
                    <div class="header-topinfo">
                        <ul>
                            <li>Email us : <a href="#">{{ $contact->email }}</a></li>
                            <li>Call us : <a href="#">{{ $contact->phone }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-12">
                    <div class="header-topbutton">
                        <a href="book-an-appointment" class="tm-button tm-button-white">Book an Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottomarea">
        <div class="container">
            <div class="header-bottominner">
                <div class="header-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ url('/') }}/assets/images/logo/logo.png" alt="dialia logo">
                    </a>
                </div>

                @php
                    if (!function_exists('active_class')) {
                        function active_class($path)
                        {
                            return Request::is($path) ? 'text-primary' : '';
                        }
                    }

                    $navigationItems = [
                        ['url' => url('/'), 'label' => 'Home', 'path' => '/'],
                        ['url' => url('about-us'), 'label' => 'About', 'path' => 'about-us'],
                        [
                            'label' => 'Services',
                            'path' => 'services*',
                            'dropdown' => true,
                            'items' => App\Models\Service::paginate(10)
                                ->map(function ($service, $index) {
                                    return [
                                        'url' => route('services', $service->slug),
                                        'label' => $index + 1 . '. ' . $service->name,
                                        'path' => 'services/' . $service->slug,
                                    ];
                                })
                                ->toArray(),
                        ],
                        [
                            'label' => 'Equipment',
                            'path' => 'equipments*',
                            'dropdown' => true,
                            'items' => App\Models\Equipment::paginate(10)
                                ->map(function ($equipment, $index) {
                                    return [
                                        'url' => route('equipments', $equipment->slug),
                                        'label' => $index + 1 . '. ' . $equipment->name,
                                        'path' => 'equipments/' . $equipment->slug,
                                    ];
                                })
                                ->toArray(),
                        ],
                        ['url' => url('insurance'), 'label' => 'Insurance', 'path' => 'insurance'],
                        ['url' => url('contact'), 'label' => 'Contact', 'path' => 'contact'],
                    ];
                @endphp

                <nav class="tm-navigation">
                    <ul>
                        @foreach ($navigationItems as $item)
                            @if (isset($item['dropdown']) && $item['dropdown'])
                                <li class="tm-navigation-dropdown">
                                    <a href="#" class="{{ active_class($item['path']) }}">{{ $item['label'] }}</a>
                                    <ul>
                                        @foreach ($item['items'] as $dropdownItem)
                                            <li>
                                                <a href="{{ $dropdownItem['url'] }}"
                                                    class="{{ active_class($dropdownItem['path']) }}">
                                                    {{ $dropdownItem['label'] }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @elseif (isset($item['megamenu']) && $item['megamenu'])
                                <li class="tm-navigation-megamenu">
                                    <a href="#" class="{{ active_class($item['path']) }}">{{ $item['label'] }}</a>
                                    <ul>
                                        @foreach ($item['items'] as $group)
                                            <li>
                                                <ul>
                                                    @foreach ($group as $index => $equipment)
                                                        <li>
                                                            <a href="{{ url($equipment[1]) }}"
                                                                class="{{ active_class($equipment[1]) }}">
                                                                {{ $loop->parent->index * 8 + $index + 1 }}.
                                                                {{ $equipment[0] }}
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="{{ $item['url'] }}"
                                        class="{{ active_class($item['path']) }}">{{ $item['label'] }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </nav>



                <div class="header-icons">
                    <ul>
                        <li><a href="#" class="header-searchtrigger"><i class="zmdi zmdi-search"></i></a></li>
                    </ul>
                </div>
                <div class="header-searchbox">
                    <div class="header-searchinner">
                        <form action="#" class="header-searchform">
                            <input type="text" placeholder="Enter search keyword..">
                        </form>
                        <button class="search-close"><i class="zmdi zmdi-close"></i></button>
                    </div>
                </div>
            </div>
            <div class="header-mobilemenu clearfix">
                <div class="tm-mobilenav"></div>
            </div>
        </div>

    </div>
</div>
