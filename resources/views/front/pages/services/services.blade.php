
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@section('style')
    <!-- Flex timeline Stylesheet CSS -->
    <link rel="stylesheet" href="/css/services-timeline.css"/>
@endsection

@section('content')	

<!--services-3-->
<!-- Start Page Title Section -->
<div class="page-ttl services-bg">
{{--    <div class="layer-stretch">--}}
        <div class="page-ttl-container">
            <h1>Services</h1>
{{--            <p><a href="#">Home</a> &#8594; <span>Services</span></p>--}}
        </div>
{{--    </div>--}}
</div><!-- End Page Title Section -->
<!-- Start Service List Section -->
<div id="services-page" class="layer-stretch">
    <div class="layer-wrapper text-center">
        <!--<div class="theme-material-card">-->
            <div class="services-page--timeline-d">
                <div class="services-page--main-timeline">
                    @foreach($benefits as $benefit)
                    <div class="services-page--timeline">
                        <a href="#" class="services-page--timeline-content">
                            <span class="icon {{$benefit->icon}}"></span>
                            <h3 class="title">{{$benefit->getTranslatedAttribute('title')}}</h3>
                            <p class="description">
                                {{$benefit->getTranslatedAttribute('body')}}
                            </p>

                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        <!--</div>-->
    </div>
</div><!-- End Service List Section -->  



<form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
        @csrf
        @include('front.common.form')
        </form>
@endsection
