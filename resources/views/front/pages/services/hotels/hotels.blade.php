
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@section('content')	
        <!-- Start Page Title Section -->
    <div class="page-ttl {{$hotels->first()->type}}-bg">
        <div class="page-ttl-container">
            <h1>{{$hotels->first()->services()}}</h1>
        </div>
        <p class="page-breadcrumb"><a href="{{route('home')}}">@lang('home.home')</a>  <span>{{$hotels->first()->services()}}</span></p>

    </div><!-- End Page Title Section -->
    <!-- Start Doctor List Section -->
    <div id="hotels-page" class="layer-stretch">
        <div class="layer-wrapper text-center">
            <!--<div class="row">-->
                <div class="text-center pb-5">
                    <div class="filter-menu mt-0">
                        <button class="city-filter active" data-filter="all">@lang('home.all')</button>
                        @foreach ($cities as $city)
                            <button class="city-filter" data-filter="{{Helper::remove_space($city->title)}}">{{$city->getTranslatedAttribute('title')}}</button>  
                        @endforeach
                        
                    </div>
                </div>
            <!--</div>-->
            <div class="row flex-container-1">
                @foreach ($hotels as $hotel)
                <div class="col-md-6 col-lg-4 c-filter {{Helper::remove_space($hotel->city->title)}} flex-item-1">
                <div class="hotels-page-card flex-content-1 lazy" data-bg="linear-gradient(var(--degree,90deg), rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.26), rgba(0, 0, 0, 0.1)), url('{{Helper::placeholder(Voyager::image($hotel->thumbnail('medium')))}}')">
                            <div class="rating-stars">
                                @include('front.pages.services.hotels.includes.rating-stars',["star"=>$hotel->star])
                            </div>
                            <div class="hotels-name">
                                <h3>{{$hotel->getTranslatedAttribute('title')}}</h3>
                            </div>
                            <div class="hotels-location">
                                <p>{{$hotel->city->getTranslatedAttribute('title')}}</p>
                            </div>
                            <div class="flex-text-1">
                                <div class="hotels-facilities">
{{--                                    @if(!empty($hotel->price))--}}
{{--                                    <p><b><span class="fa fa-money"></span>Cost: From {{$hotel->price}}$</b></p>--}}
{{--                                    @endif--}}
                                    <h4>@lang('home.major_facilities')</h4>
                                    @foreach($hotel->items as $item)
                                    <p><span class="{{$item->icon}}"></span>{{$item->getTranslatedAttribute('title')}}</p>
                                    @endforeach
                                </div>
                                <a href="{{route('service.hotel.show',[$hotel->type,$hotel,$hotel->slug])}}">
                                    <button class="button--default button--secendary my-1">@lang('home.more_info')</button>
                                </a>
                            </div>

                        </div>
                    </div>  
                @endforeach
                
            </div>
            {{-- <ul class="theme-pagination">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">10</a></li>
            </ul> --}}
        </div>
    </div><!-- End Doctor List Section -->
    
    <form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
    @csrf
    @include('front.common.form')
    </form>
@endsection

