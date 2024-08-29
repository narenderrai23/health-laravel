<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{route('admin.index')}}" class="navbar-brand mx-4 mb-3  text-center">
            <img src="{{ asset('assets/images/logo.png') }}" alt="{{ config('app.name') }} LOGO" class="w-75">
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ $path }}" alt="" style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name ?? null }}</h6>
                <span>Patient</span>
            </div>
        </div>

        <div class="navbar-nav w-100">
            @php
                function isActiveRoute($route, $submenu = [])
                {
                    return (Route::has($route) && request()->routeIs($route)) ||
                        collect($submenu)
                            ->pluck('route')
                            ->contains(request()->route()->getName());
                }
            @endphp

            @foreach ($menuItems as $item)
                @php
                    $isActive = isActiveRoute($item['route'], $item['submenu']);
                @endphp

                @if (empty($item['submenu']))
                    @if (Route::has($item['route']))
                        <a href="{{ route($item['route']) }}" class="nav-item nav-link {{ $isActive ? 'active' : '' }}">
                            <i class="{{ $item['icon'] }} me-2"></i>{{ $item['title'] }}
                        </a>
                    @endif
                @else
                    <div class="nav-item dropdown ">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle {{ $isActive ? 'active' : '' }}" data-bs-toggle="dropdown">
                            <i class="{{ $item['icon'] }} me-2"></i>{{ $item['title'] }}
                        </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            @foreach ($item['submenu'] as $subitem)
                                @if (Route::has($subitem['route']))
                                    <a href="{{ route($subitem['route']) }}"
                                        class="dropdown-item {{ request()->routeIs($subitem['route']) ? 'active' : '' }}">{{ $subitem['title'] }}</a>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach

        </div>

    </nav>
</div>
