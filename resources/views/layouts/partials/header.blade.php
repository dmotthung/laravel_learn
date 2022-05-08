<!DOCTYPE html>
<html lang="{{str_replace('_', '_', app()->getLocale())}}">

<head>
    <!-- SEO Tag -->
    @include('layouts.partials._header.seotags')
    <!-- Web Font -->
    @include('layouts.partials._header.webfont')
    <!-- Plugins CSS -->
    @include('layouts.partials.styles')
</head>

<body id="bg" style="">
    <!-- Boxed Layout -->
    <div id="page" class="site">
        <!-- Preloader -->
        <!-- @include('layouts.partials._header.preloader') -->
        <!--/ End Preloader -->