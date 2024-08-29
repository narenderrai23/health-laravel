<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('nav', config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Dashboard" name="description" />
    <meta content="{{ config('app.name') }}" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="images/x-icon">
    @include('layouts.head-css')
</head>

<body data-layout="vertical" data-sidebar="dark">
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @php
            $user = auth()->user();
            $path = asset('assets/images/profile.png');
            $guardRoutePrefix = $user && $user->type === 'admin' ? 'admin.' : '';
        @endphp

        @php
            $menuItems = [
                [
                    'title' => 'Dashboard',
                    'route' => $guardRoutePrefix . 'dashboard',
                    'icon' => 'fa fa-home',
                    'submenu' => [],
                ],
                [
                    'title' => 'Slider',
                    'route' => $guardRoutePrefix . 'sliders.index',
                    'icon' => 'fa fa-sliders-h',
                    'submenu' => [],
                ],
                [
                    'title' => 'Service',
                    'route' => $guardRoutePrefix . 'services.index',
                    'icon' => 'fa fa-cogs',
                    'submenu' => [],
                ],
                [
                    'title' => 'Equipment',
                    'route' => $guardRoutePrefix . 'equipments.index',
                    'icon' => 'fa fa-tools',
                    'submenu' => [],
                ],
                [
                    'title' => 'Insurance',
                    'route' => $guardRoutePrefix . 'insurances.index',
                    'icon' => 'fa fa-shield-alt',
                    'submenu' => [],
                ],
                [
                    'title' => 'Contact',
                    'route' => $guardRoutePrefix . 'contacts.index',
                    'icon' => 'fa fa-address-book',
                    'submenu' => [],
                ],
                [
                    'title' => 'About',
                    'route' => $guardRoutePrefix . 'about.index',
                    'icon' => 'fa fa-info-circle',
                    'submenu' => [],
                ],
                [
                    'title' => 'MissionVision',
                    'route' => $guardRoutePrefix . 'missionvisions.index',
                    'icon' => 'fa fa-bullseye',
                    'submenu' => [],
                ],
                [
                    'title' => 'FunFact',
                    'route' => $guardRoutePrefix . 'funfact.index',
                    'icon' => 'fa fa-smile',
                    'submenu' => [],
                ],
                [
                    'title' => 'Enquiry',
                    'route' => $guardRoutePrefix . 'enquiry.index',
                    'icon' => 'fa fa-question-circle',
                    'submenu' => [],
                ],
            ];
        @endphp


        <!-- Sidebar Start -->
        @include('layouts.sidebar')
        <div class="content">
            @include('layouts.navbar')
            @if (session('success'))
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            @yield('content')
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fas fa-angle-up"></i></a>
    </div>

    @include('layouts.vendor-scripts')
</body>

</html>
