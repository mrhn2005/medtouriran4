
@extends('front.layout.front')

@section('title')
    @lang('home.package'):{{$package->getTranslatedAttribute('title')}} - {{setting(App::getLocale().'.title')}}
@endsection

@section('style')
    <!-- Flex timeline Stylesheet CSS -->
    <link rel="stylesheet" href="/css/package-timeline.css"/>
@endsection

@section('content')	
        <!-- Start Page Title Section -->
    <div class="page-ttl packages-bg" style="background-image: url('{{Voyager::image($package->grand_background)}}')">
        <div class="page-ttl-container">
            <h1>{{$package->getTranslatedAttribute('title')}}</h1>
        </div>
        <p class="page-breadcrumb"><a href="{{route('home')}}">@lang('home.home')</a> @lang('home.arrow') <a href="{{route('package.index')}}">@lang('home.packages')</a> @lang('home.arrow') <span>{{$package->getTranslatedAttribute('title')}}</span></p>
    </div><!-- End Page Title Section -->
    <!-- Start package List Section -->
        <!-- Start Blog Section -->
    <div class="layer-stretch" id="package-page">
        <div class="layer-wrapper">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="theme-material-card">
                        @if(!empty($package->video))
                        <div id="package-page--main-video">
                            <iframe class="lazy" width="560" height="315" data-loader="youtube" data-src="https://www.youtube.com/embed/{{$package->video}}"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        @endif
                        <h2 class="blog-ttl">@lang('home.medical_tourism_timeline')</h2>
                        <div class="blog-post" id="package-page--post">
                            {!!$package->getTranslatedAttribute('description')!!}
                        </div>
                        <div class="row" id="package-page--info">
                            <div class="col-md-4 col-sm-12">
                                <div class="doctor-details package-page--inclusions">
                                    <div class="sub-ttl">
                                        <h3>@lang('home.inclusions')</h3>
                                    </div>
                                    <div class="doctor-details-extra">
                                        <div class="doctor-details-extra-3">
                                            @include('front.pages.packages.includes.items')
                                        </div>
                                    </div>
                                </div>
                                @if(!empty($package->getTranslatedAttribute('pricing')))
                                <div class="doctor-details package-page--pricing">
                                    <div class="sub-ttl">
                                        <h3>@lang('home.pricing')</h3>
                                    </div>
                                    <table class="package-page--price-table">
                                        @foreach(json_decode($package->getTranslatedAttribute('pricing'),TRUE) as $price)
                                            <tr>
                                                <td>{{$price['title']}}</td>
                                                <td>{{$price['price']}}</td>
                                            </tr>
                                        @endforeach
                                        
                                    </table>
                                </div>
                                @endif
                            </div>
                            @include('front.pages.packages.includes.timeline')
                        </div>

                        <div class="row blog-meta"  id="package-page--metatags">
                            <div class="col-sm-7 blog-tag">
                                {{-- <p>Tags : </p>
                                <ul>
                                    <li><a href="#">Medical, </a></li>
                                    <li><a href="#">Rhinoplasty </a></li>
                                    <!--<li><a href="#">Science </a></li>-->
                                </ul> --}}
                            </div>
                            <div class="col-sm-5 text-right" >
                                <ul class="social-list social-list-sm">
                                    @include('front.common.social-networks')
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <div class="theme-material-card" id="package-page--testimonial">
                        <div class="sub-ttl">@lang('home.testimonial')</div>
                        <div class="row">
                            @foreach(explode(";",$package->getTranslatedAttribute('testimonial')) as $video)
                            <div class="col-md-12 ">
                                <div class="theme-block">
                                    <iframe class="lazy" width="100%" height="400px" data-loader="youtube" data-src="https://www.youtube.com/embed/{{$video}}"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>    
            </div>    
        </div>
    </div>
    <div class="parallax-background" id="package-page--packages" style="background-image:url(/images/packages/city/city-package.jpg)">
        <div class="layer-stretch">
            <div class="layer-wrapper">
                <div class="layer-ttl">
                    <h3>@lang('home.our_offers')</h3>
                </div>
                <div class="layer-container">
                    <div id="package-page--packages-slider" class="@if(count($package->children)>2) owl-carousel owl-theme theme-owl-dot @endif">
                        @foreach($package->children as $child)
                            <div class="package-page--packages package-page--packages-box {{$child->city_class()}}">
{{--                                <div class="package-page--packages-overlay"></div>--}}
                                <div class="package-page--packages-title">
{{--                                    <h2>{{$child->getTranslatedAttribute('title')}}</h2>--}}
                                    <h2>{{$child->city()->getTranslatedAttribute('title')}}</h2>
                                </div>
                                <div class="package-page--packages-price">
                                    <h3>${{$child->getTranslatedAttribute('price')}}</h3>
                                </div>
                                <div class="package-page--packages-options">
                                    <ul class="package-page--packages-list">
                                        @foreach($child->items as $item)
                                            <li>{{$item->getTranslatedAttribute('title')}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="package-page--packages-button">
{{--                                    <a href="{{route('package.show',[$child,$child->slug])}}">--}}
                                        <button class="button--default button--secendary">@lang('home.book')</button>
{{--                                    </a>--}}
                                </div>

                            </div>
                        @endforeach
                    </div>
                    @if(count($package->children)>2)
                        <div class="owl-theme">
                            <div class="owl-controls">
                                <div class="custom-nav owl-nav"></div>
                            </div>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
        <!-- End Doctor Section -->
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="row">
                <div class="col-lg-12 text-center">
                    @include('front.common.reviews',["reviews"=>$package->reviews])
                    <form action="{{route('comment_store')}}" class="form-horizontal cform-2" method="post">
                    @csrf
                    <input type="hidden" value="{{get_class($package)}}" name="reviewable_type">
                    <input type="hidden" value="{{$package->id}}" name="reviewable_id">
                    @include('front.common.review-form')
                    </form>
                </div>
            </div>    
        </div>    
    </div>
    @include('front.common.modal-form')
@endsection

@if(count($package->children)>2)
    @section('js')
        <script>
            is_rtl = false;
            @if($is_rtl)
                is_rtl = true;
            @endif
                
        </script>
        <script src="{{asset('js/pages/package.js')}}" defer></script>                          
    @endsection
@endif