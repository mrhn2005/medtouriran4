
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@section('content')	
<!-- Start Page Title Section -->
<div class="page-ttl destinations-bg">
    <div class="page-ttl-container">
        <h1>@lang('home.destinations')</h1>
    </div>
    <p class="page-breadcrumb"><a href="{{route('home')}}">@lang('home.home')</a>  <span>@lang('home.destinations')</span></p>
</div><!-- End Page Title Section -->
<!-- Start Doctor List Section -->
<div id="destinations-page" class="layer-stretch">
    <div class="layer-wrapper layer-bottom-10">
        <div class="row flex-container-1">
            @foreach($cities as $city)
            <div class="col-md-4 col-sm-6 flex-item-1">
                <div class="theme-block theme-block-hover text-left flex-content-1">
                    <div class="theme-block-picture">
                        <img height="250px" class="lazy card-img-top" data-src="{{Helper::placeholder(Voyager::image($city->thumbnail('medium')))}}" alt="{{$city->getTranslatedAttribute('title')}}">
                    </div>
                    <div class="card-body flex-text-1">
                        <h4 class="card-title">{{$city->getTranslatedAttribute('title')}}</h4>
                        <p class="text-muted">{{$city->getTranslatedAttribute('excerpt')}}</p>
                        <a style="margin: 0 !important;" href="{{ route('aboutMedical.destination.show',[$city,$city->slug]) }}" class="w-100 button--default button--thirdary">@lang('home.read_more')</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div><!-- End Doctor List Section -->

<form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
@csrf
@include('front.common.form')
</form>
@endsection

   
