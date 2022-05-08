@include('layouts.partials.header')

<!-- Navbar -->
@include('layouts.partials.navbar')
<!--/ End Navbar -->

<!-- Breadcrumb -->
@include('layouts.partials.breadcrumb')
<!-- / End Breadcrumb -->

@yield('content')

@include('layouts.partials.footer')