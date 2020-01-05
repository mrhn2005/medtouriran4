
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@section('style')

@endsection

@section('content')	
    <div class="page-ttl faq-bg">
{{--        <div class="layer-stretch">--}}
            <div class="page-ttl-container">
                <h1 class="text-uppercase">@lang('home.faq')</h1>
{{--                <p><a href="{{ route('home') }}">@lang('home.home')</a> &#8594; <span>@lang('home.faq')</span></p>--}}
            </div>
{{--        </div>--}}
    </div><!-- End Page Title Section -->
    {!! ViewHelper::faq() !!}
    <!-- Start Form Section -->
    @include('front.pages.home.includes.form')
    <!-- End Form Section -->
@endsection

