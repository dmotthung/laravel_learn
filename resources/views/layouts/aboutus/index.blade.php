@extends('layouts.page')
@section('title')
Giới Thiệu
@endsection

@section('breadcrumb')
Home/Giới thiệu
@endsection

@section('content')
<section class="about-us section-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 col-md-6 col-12">
                <!-- About Video -->
                <div class="modern-img-feature"><img src="{{asset('frontend/img/about-us.jpg')}}" alt="#">
                    <div class="video-play"><a href="https://www.youtube.com/watch?v=RLlPLqrw8Q4" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a></div>
                </div>
                <!--/End About Video -->
            </div>
            <div class="col-lg-5 col-md-6 col-12">
                <div class="about-content section-title default text-left">
                    <div class="section-top">
                        <h1><span>About Us</span><b>We Provide Quality Business &amp;Smart Solution</b></h1>
                    </div>
                    <div class="section-bottom">
                        <div class="text">
                            <p>Lorem Ipsum Dolor Sit Amet,Consectetur AdipiscinE Tellus,Luctus Nec Ullamcorper Mattis,Pulvinr Dapius Leo.Greater Great Set Seasons Praesent auctor facilisis</p>
                            <p>Greater great set seasons was morning creepeth all made replen fisher night to. She to fourth does. cattle also be days second sit given can itself you good for better solution. morning creepeth all made replen fisher
                                night to. She</p>
                        </div>
                        <div class="button"><a href="about.html" class="bizwheel-btn theme-2">Our Works<i class="fa fa-angle-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection