@include('layout.partials.header')

<!-- Navbar -->
@include('layout.partials.navbar')
<!--/ End Navbar -->

<!-- Breadcrumb -->
@include('layout.partials.breadcrumb')
<!-- / End Breadcrumb -->

@yield('content')

@include('layout.partials.footer')