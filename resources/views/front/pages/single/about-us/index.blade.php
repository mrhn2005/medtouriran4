
@extends('front.layout.front')

@section('title')
    {{setting(App::getLocale().'.title')}}
@endsection

@section('style')

@endsection

@section('content')
<span id="about-page">
    <div class="page-ttl about-bg">
        <div class="page-ttl-container">
            <h1>@lang('home.about_us')</h1>
        </div>
        <p class="page-breadcrumb"><a href="{{route('home')}}">@lang('home.home')</a>  <span>@lang('home.about_us')</span></p>
    </div><!-- End Page Title Section -->
    <!-- Start About First Section  -->
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="layer-container row">
                <div class="col-md-5 hm-service-left">
                    <img src="/images/logo-color.png" alt="MedTourIran Logo">
                </div>
                <div class="col-md-7 hm-service-right">
                    <p>
                        @lang('home.about_us_desc')
                    </p>

                </div>
            </div>
        </div>
    </div><!-- End About First Page  -->

    <!-- Start Our Team Section -->
{{--    {!! ViewHelper::why_us() !!}--}}
    <!-- End Our Team Section -->
    <!-- Start About Second Section  -->
{{--    {!! ViewHelper::about() !!}--}}
    <!-- End About Second Section  -->

    <!-- Start Contact Detail Section -->
    {!! ViewHelper::contact() !!}
    <!-- End Contact Detail Section -->
    <!-- Start Request Form Section -->
    <form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
        @csrf
        @include('front.common.form')
    </form>
    <!-- Start Google Map Section -->
    <div id="map">
        <div class="map-wrapper">
            <div id="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12959.890834550202!2d51.3526189!3d35.7022892!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xabc33a6150abea22!2sSharif+Accelerator!5e0!3m2!1sen!2snl!4v1565776312240!5m2!1sen!2snl" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="map-address">
            <div class="map-icon"><i class="fa fa-map-marker"></i></div>
            <div class="map-address-ttl">@lang('home.our_location')</div>
            <div class="paragraph-medium paragraph-black">@lang('home.location')</div>
        </div>
    </div><!-- End Google Map Section -->
</span>
@endsection

