@extends('layout.index')
@section('title')
Trang chủ
@endsection

@section('content')
<!-- Hero Slider -->
@include('layout.partials._home.slider')
<!--/ End Hero Slider -->
<!-- Features Area -->
@include('layout.partials._home.features')
<!--/ End Features Area -->
<!-- Video Feature -->
@include('layout.partials._home.video')
<!--/ End Video Feature -->
<!-- Services -->
@include('layout.partials._home.services')
<!--/ End Services -->
<!-- Call To Action -->
@include('layout.partials._home.callaction')
<!--/ End Call to action -->
<!-- Portfolio -->
@include('layout.partials._home.portfolio')
<!--/ End Portfolio -->
<!-- Testimonials -->
@include('layout.partials._home.testimonials')
<!--/ End Testimonials -->
<!-- Counterup -->
@include('layout.partials._home.counterup')
<!--/ End Counterup -->
<!-- Our Team -->
@include('layout.partials._home.team')
<!--/ End Team -->
<!-- Latest Blog -->
@include('layout.partials._home.blog')
<!--/ End Latest Blog -->
<!-- Client Area -->
@include('layout.partials._home.client')
<!--/ End Client Area -->
@endsection