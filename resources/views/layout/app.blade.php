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
        @yield('content')

    </div>

    @include('layouts.vendor-scripts')
</body>

</html>
