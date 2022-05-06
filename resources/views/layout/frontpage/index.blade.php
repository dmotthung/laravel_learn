@extends('layout.frontend')
@section('title')
Trang chủ
@endsection

@section('content')
<!-- Hero Slider -->
@include('layout.frontpage.items.slider')
<!--/ End Hero Slider -->
<!-- Features Area -->
@include('layout.frontpage.items.features')
<!--/ End Features Area -->
<!-- Video Feature -->
@include('layout.frontpage.items.video')
<!--/ End Video Feature -->
<!-- Services -->
@include('layout.frontpage.items.services')
<!--/ End Services -->
<!-- Call To Action -->
@include('layout.frontpage.items.callaction')
<!--/ End Call to action -->
<!-- Portfolio -->
@include('layout.frontpage.items.portfolio')
<!--/ End Portfolio -->
<!-- Testimonials -->
@include('layout.frontpage.items.testimonials')
<!--/ End Testimonials -->
<!-- Counterup -->
@include('layout.frontpage.items.counterup')
<!--/ End Counterup -->
<!-- Our Team -->
@include('layout.frontpage.items.team')
<!--/ End Team -->
<!-- Latest Blog -->
@include('layout.frontpage.items.blog')
<!--/ End Latest Blog -->
<!-- Client Area -->
@include('layout.frontpage.items.client')
<!--/ End Client Area -->
@endsection