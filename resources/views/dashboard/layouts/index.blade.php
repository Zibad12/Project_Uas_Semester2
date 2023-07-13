@if (Auth::user()->role == 'admin' || Auth::user()->role == 'manager')
    @include('dashboard.layouts.navbar')
    @include('dashboard.layouts.sidebar')
    @yield('content')
    @include('dashboard.layouts.footer')
@else
    @php
        abort(403, 'FORBIDDEN  | UNAUTHORIZED ACTION.');
    @endphp
@endif
