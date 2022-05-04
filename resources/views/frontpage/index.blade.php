@extends('layouts.frontend')
@section('title')
    Trang chủ
@endsection

@section('content')
    <!-- Hero Slider -->
    @include('layouts.frontend.frontpage.slider')
    <!--/ End Hero Slider -->
    <!-- Features Area -->
    @include('layouts.frontend.frontpage.features')
    <!--/ End Features Area -->
    <!-- Video Feature -->
    @include('layouts.frontend.frontpage.video')
    <!--/ End Video Feature -->
    <!-- Services -->
    @include('layouts.frontend.frontpage.services')
    <!--/ End Services -->
    <!-- Call To Action -->
    @include('layouts.frontend.frontpage.callaction')
    <!--/ End Call to action -->
    <!-- Portfolio -->
    @include('layouts.frontend.frontpage.portfolio')
    <!--/ End Portfolio -->
    <!-- Testimonials -->
    @include('layouts.frontend.frontpage.testimonials')
    <!--/ End Testimonials -->
    <!-- Counterup -->
    @include('layouts.frontend.frontpage.counterup')
    <!--/ End Counterup -->
    <!-- Our Team -->
    @include('layouts.frontend.frontpage.team')
    <!--/ End Team -->
    <!-- Latest Blog -->
    @include('layouts.frontend.frontpage.blog')
    <!--/ End Latest Blog -->
    <!-- Client Area -->
    @include('layouts.frontend.frontpage.client')
    <!--/ End Client Area -->
@endsection