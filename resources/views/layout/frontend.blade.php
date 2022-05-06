<!DOCTYPE html>
<html lang="{{str_replace('_', '_', app()->getLocale())}}">

<head>
    <!-- SEO Tag -->
    @include('layout.global-templates.items-head.seotags')
    <!-- Web Font -->
    @include('layout.global-templates.items-head.webfont')
    <!-- Plugins CSS -->
    @include('layout.global-templates.items-head.styles')
</head>

<body id="bg" style="">
    <!-- Boxed Layout -->
    <div id="page" class="site">
        <!-- Preloader -->
        @include('layout.global-templates.preloader')
        <!--/ End Preloader -->

        <!-- Header -->
        @include('layout.global-templates.header')
        <!--/ End Header -->

        @yield('content')

        <!-- Footer -->
        @include('layout.global-templates.footer')
        <!--/ End Footer -->
    </div><!-- End Boxed Layout -->
    <!-- Jquery JS -->
    @include('layout.global-templates.scripts')
</body>

</html>