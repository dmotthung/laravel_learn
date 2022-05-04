
<!DOCTYPE html>
<html lang="{str_replace('_', '_', app()->getLocale())}">

<head>
    <!-- SEO Tag -->
    @include('layouts.frontend.global-templates.items-head.seotags')
    <!-- Web Font -->
    @include('layouts.frontend.global-templates.items-head.webfont')
    <!-- Plugins CSS -->
    @include('layouts.frontend.global-templates.items-head.styles')
</head>

<body id="bg" style="">
    <!-- Boxed Layout -->
    <div id="page" class="site">
        <!-- Preloader -->

        <!--/ End Preloader -->

        <!-- Header -->
        @include('layouts.frontend.global-templates.header')
        <!--/ End Header -->

        @yield('content')

        <!-- Footer -->
        @include('layouts.frontend.global-templates.footer')
        <!--/ End Footer -->
    </div><!-- End Boxed Layout -->
    <!-- Jquery JS -->
    @include('layouts.frontend.global-templates.scripts')
</body>

</html>