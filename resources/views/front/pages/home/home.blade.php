
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@section('style')

@endsection

@section('content')	



    <!-- Start Slider Section -->
        @include('front.pages.home.includes.slider')
    <!-- End Slider Section -->

    <!-- Start treatment Section -->
        @include('front.pages.home.includes.treatment')
    <!-- End treatment Section -->

    <!-- Start hm-packages Section -->
        @include('front.pages.home.includes.package')
    <!-- End hm-packages Section -->

    <!-- Start Service Section -->
        @include('front.pages.home.includes.service')
    <!-- End Service Section -->

    <!-- Start Video Review Section -->
        @include('front.pages.home.includes.video_review')
    <!-- End Video Review Section -->


    <!-- Start Feature Section -->
        {!! ViewHelper::why_us() !!}
    <!-- End Feature Section -->

    <!-- Start About Section -->
        {!! ViewHelper::about() !!}
    <!-- End About Section -->

    <!-- Start Testimonial Section -->
        @include('front.pages.home.includes.testimonial')
    <!-- End Testimonial Section -->

    <!-- Start Blog Section -->
        @include('front.pages.home.includes.blog')
    <!-- End Blog Section -->



    <!-- Start Form Section -->
        @include('front.pages.home.includes.form')
    <!-- End Form Section -->

@endsection


@section('js')
    <script>
        $('#video-sample-frame--player').click(function(){
            // alert('clicked');
            $(".video-sample-frame-player").show(500);
        });
        $('#video-sample-frame--player-close').click(function() {
            $(".video-sample-frame-player").hide(500);
        });
        $(window).resize(function () {
            // var frameImage = $('img.video-sample-frame--img');
            if ($(window).width() > 992) {
                $('img.video-sample-frame--img').attr("src","/images/video_review/medtour.png");
            } else {
                $('img.video-sample-frame--img').attr("src","/images/video_review/medtour-xs.png");
            }
        });

    </script>


@endsection

