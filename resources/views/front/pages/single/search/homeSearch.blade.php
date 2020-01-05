
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection



<!--<div class="col-offset-6 col-md-6">-->

<!--</div>-->



@section('content')	
    <!-- Start Page Title Section -->
    <div class="page-ttl packages-bg">
        <div class="hms-search" id="hm-search" style="top: initial !important;">
            <form action="{{route('homesearch')}}" class="form-horizontal cform-2" method="get">
            <div class="text-center p-3">
                <div class="hms-searchtext">@lang('home.slider_search_text')</div>
                <div class="mdl-selectfield mdl-js-selectfield form-input is-upgraded mx-3">
                    <select name="category" class="mdl-selectfield__select" id="hms-treatmentlist">
                        <option value=""></option>
                        @foreach($categories as $category)
                            <option value="{{$category->title}}">{{$category->getTranslatedAttribute('title')}}</option>
                        @endforeach
                    </select>
                    <i class="fa fa-notes-medical hms-icon"></i><label class="mdl-selectfield__label" for="hms-treatmentlist">@lang('home.select_treatment')<i class="fa fa-angle-down hms-angle-down"></i></label>
                </div>
                <div class="mdl-selectfield mdl-js-selectfield form-input is-upgraded mx-3">
                    <select name="city" class="mdl-selectfield__select" id="hms-citylist">
                        <option value="">&nbsp;</option>
                        @foreach($cities as $city)
                            <option value="{{$city->title}}">{{$city->getTranslatedAttribute('title')}}</option>
                        @endforeach
                    </select>

                    <i class="fa fa-map-marker-alt hms-icon"></i><label class="mdl-selectfield__label" for="hms-citylist">@lang('home.select_city')<i class="fa fa-angle-down hms-angle-down"></i></label>
                </div>
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-bordered-primary button-hover-primary mx-3">@lang('home.search')
                        <span class="mdl-button__ripple-container">
                        <span class="mdl-ripple is-animating" style="width: 266.913px; height: 266.913px; transform: translate(-50%, -50%) translate(64px, 22px);"></span>
                    </span>
                </button>
            </div>
            </form>
        </div>
    </div><!-- End Page Title Section -->
    <!-- Start Doctor List Section -->
    <!-- Start Doctor List Section -->
    <div id="packages-page" class="layer-stretch">
        <div class="layer-wrapper text-center">
            <div class="filter-menu m-0 mb-5">
                <button class="type-filter active" data-filter="all">All</button>
                @foreach ($cities as $city)
                <button class="type-filter" data-filter="{{Helper::remove_space($city->title)}}">{{$city->getTranslatedAttribute('title')}}</button>
                @endforeach
            </div>
            <div class="row flex-container-1">
                @if(count($packages)<1)
                <div class="not-found">
                   <p>@lang("home.not_found")</p>
                </div>
                @else
                @foreach ($packages as $package)
                    <div class="col-md-6 col-lg-4 c-filter t-filter  @foreach($package->cities as $city){{Helper::remove_space($city->title)}} @endforeach flex-item-1">
                        <div class="packages-page--price">
                            <span class="packages-page--price-text1">@lang('home.from')</span>
                            <span class="packages-page--price-text2">{{$package->price}}$</span>  
                        </div>
                        <div class="theme-block theme-block-hover flex-content-1">
                            <div class="theme-block-picture">
                                <img src="{{Helper::placeholder(Voyager::image($package->background))}}" alt="{{$package->getTranslatedAttribute('title')}}">
                            </div>
                            <div class="doctor-name packages-page--name">
                                <h4><a href="{{route('package.show',[$package,$package->slug])}}"><b>{{$package->getTranslatedAttribute('title')}}</b></a></h4>
                            </div>
                            <div class="doctor-details packages-page--details flex-text-1">
                                <div class="doctor-specility">
                                    <p>@lang('home.package_in')
                                        @include('front.pages.packages.includes.cities')
                                    </p>
                                </div>
                                <div class="doctor-details-extra">
                                    <div class="doctor-details-extra-3">
                                        @include('front.pages.packages.includes.items')
                                    </div>
                                </div>
                                <a href="{{route('package.show',[$package,$package->slug])}}">
                                    <button class="button--default button--thirdary">@lang('home.read_more')
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div> 
                @endforeach
                @endif
            </div>
        </div>
    </div><!-- End Service List Section -->
@endsection

