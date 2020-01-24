
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@section('content')	
    <!-- Start Page Title Section -->
    <div class="page-ttl packages-bg">
        <div class="page-ttl-container">
            <h1>@lang('home.packages')</h1>
        </div>
        <p class="page-breadcrumb"><a href="{{route('home')}}">@lang('home.home')</a>  <span>@lang('home.packages')</span></p>
    </div><!-- End Page Title Section -->
    <!-- Start Doctor List Section -->
    <div id="packages-page" class="layer-stretch">
        <div class="layer-wrapper text-center">
            <div class="filter-menu m-0 mb-5">
                <button class="type-filter active" data-filter="all">@lang('home.all')</button>
                @foreach ($categories as $category)
                <button class="type-filter" data-filter="{{Helper::remove_space($category->title)}}">{{$category->getTranslatedAttribute('title')}}</button> 
                @endforeach
            </div>
            <div class="row flex-container-1 justify-content-lg-between flex-wrap justify-content-md-around">
                @foreach ($packages as $package)
{{--                    <div class="">--}}
                        <div class="packages-page--card {{$package->css_class()}} flex-item-1 t-filter c-filter
                            @foreach($package->categories as $category){{Helper::remove_space($category->parent_id!=null?$category->parent->title:$category->title)}} @endforeach">
                            <div class="packages-page-card--pic lazy"  data-bg="linear-gradient(180deg,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.65)),
                                 url('{{Helper::placeholder(Voyager::image($package->background))}}')">
                                <div class="packages-page--price">
                                    @if(!$is_rtl)
                                        <p>@lang('home.from') ${{$package->price}}</p>
                                    @else
                                        <p>@lang('home.from') {{$package->price}}$</p>
                                    @endif

                                </div>
                                <div class="packages-page--title">
                                    <h3>{{$package->getTranslatedAttribute('title')}}</h3>
                                </div>

                            </div>
                            <div class="packages-page--details flex-text-1">
                                <div class="packages-page--cities">
                                        <span class="packages-page--text">@lang('home.available_in')</span>
                                    @php
                                        $package_cities=$package->cities->pluck('title');
                                    @endphp
                                    @foreach($cities as $city)
                                        <span class="packages-page--city {{$package_cities->contains($city->title)?'active':''}}">
                                            {{$city->getTranslatedAttribute('title')}}
                                        </span>
                                    @endforeach

                                </div>
                                <div class="packages-page--options">
                                    @include('front.pages.packages.includes.items')
                                </div>
                                <a href="{{route('package.show',[$package,$package->slug])}}">
                                    <button class="button--default button--thirdary">@lang('home.learn_more')</button>
                                </a>
                            </div>
                        </div>
{{--                    </div> --}}
                @endforeach           
            </div>
            {{ $packages->links() }}
            {{-- <ul class="theme-pagination">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">5</a></li>
            </ul> --}}
        </div>
    </div><!-- End Service List Section -->
    <form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
    @csrf
    @include('front.common.form')
    </form>
@endsection

