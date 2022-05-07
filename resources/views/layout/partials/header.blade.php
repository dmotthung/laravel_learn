<!DOCTYPE html>
<html lang="{{str_replace('_', '_', app()->getLocale())}}">

<head>
    <!-- SEO Tag -->
    @include('layout.partials._header.seotags')
    <!-- Web Font -->
    @include('layout.partials._header.webfont')
    <!-- Plugins CSS -->
    @include('layout.partials.styles')
</head>

<body id="bg" style="">
    <!-- Boxed Layout -->
    <div id="page" class="site">
        <!-- Preloader -->
        <!-- @include('layout.partials._header.preloader') -->
        <!--/ End Preloader -->