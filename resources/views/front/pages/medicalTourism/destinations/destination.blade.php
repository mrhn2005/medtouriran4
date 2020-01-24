
@extends('front.layout.front')

@section('title')
    @lang('home.city'): {{$city->getTranslatedAttribute('title')}} {{setting(App::getLocale().'.title')}}
@endsection

@section('content')	
<!--blog-4-->

<!-- Start Page Title Section -->
<div class="page-ttl destinations-bg" style="background-image: url('{{Voyager::image($city->grand_background)}}') !important;">
{{--    <div class="layer-stretch">--}}
        <div class="page-ttl-container">
            <h1>{{$city->getTranslatedAttribute('title')}}</h1>
        </div>
        <p class="page-breadcrumb"><a href="{{ route('home') }}">@lang('home.home')</a> @lang('home.arrow') <a href="{{ route('aboutMedical.destination.index') }}">@lang('home.destinations')</a> @lang('home.arrow') <span>{{$city->getTranslatedAttribute('title')}}</span></p>
{{--    </div>--}}
</div><!-- End Page Title Section -->
<!-- Start Blog List Section -->
<div class="layer-stretch" id="destination-page">
    <div class="layer-wrapper">
        <div class="row">
            <div class="col-lg-8 col-sm-12 text-left">
                <div class="theme-material-card">
                    <h3 class="font-weight-700 template-title">@lang('home.template_list')</h3>
                    {!! Helper::lazy_image($city->getTranslatedAttribute('description')) !!}
                </div>
{{--                <ul class="blog-detail">--}}
{{--                    <li><i class="fa fa-user-o"></i>{{$city->authorId->name}}</li>--}}
{{--                    <li><i class="fa fa-calendar-o"></i>{{$city->created_at->format('d M Y')}}</li>--}}
{{--                    <li><i class="fa fa-comment-o"></i>{{count($city->reviews)}}</li>--}}
{{--                </ul>--}}

            </div>
            {!! ViewHelper::blog_sidebar() !!}
        </div>
    </div>
</div><!-- End Blog List Section -->

<form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
@csrf
@include('front.common.form')
</form>
@endsection


  
  
  
  
  
  
  
