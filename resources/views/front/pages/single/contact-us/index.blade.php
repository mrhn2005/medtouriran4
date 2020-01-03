
@extends('front.layout.front')

@section('title')
    {{setting(App::getLocale().'.title')}}
@endsection



@section('content')	
    <!-- Start Page Title Section -->
    <div class="page-ttl contact-bg">
{{--        <div class="layer-stretch">--}}
            <div class="page-ttl-container">
                <h1>@lang('home.contact')</h1>
{{--                <p><a href="{{route('home')}}">@lang('home.home')</a> &#8594; <span>@lang('home.contact')</span></p>--}}
            </div>
{{--        </div>--}}
    </div><!-- End Page Title Section -->


@endsection

