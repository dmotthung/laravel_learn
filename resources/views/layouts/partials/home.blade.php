@extends('layouts.index')
@section('title')
Trang chủ
@endsection

@section('content')
<!-- Hero Slider -->
@include('layouts.partials._home.slider')
<!--/ End Hero Slider -->
<!-- Features Area -->
@include('layouts.partials._home.features')
<!--/ End Features Area -->
<!-- Video Feature -->
@include('layouts.partials._home.video')
<!--/ End Video Feature -->
<!-- Services -->
@include('layouts.partials._home.services')
<!--/ End Services -->
<!-- Call To Action -->
@include('layouts.partials._home.callaction')
<!--/ End Call to action -->
<!-- Portfolio -->
@include('layouts.partials._home.portfolio')
<!--/ End Portfolio -->
<!-- Testimonials -->
@include('layouts.partials._home.testimonials')
<!--/ End Testimonials -->
<!-- Counterup -->
@include('layouts.partials._home.counterup')
<!--/ End Counterup -->
<!-- Our Team -->
@include('layouts.partials._home.team')
<!--/ End Team -->
<!-- Latest Blog -->
@include('layouts.partials._home.blog')
<!--/ End Latest Blog -->
<!-- Client Area -->
@include('layouts.partials._home.client')
<!--/ End Client Area -->
@endsection