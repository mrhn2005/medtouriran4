
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection



@section('content')	
    <div class="page-ttl patients-bg">
        <div class="page-ttl-container">
                <h1>@lang('home.patients_review')</h1>
            </div>
        <p class="page-breadcrumb"><a href="{{route('home')}}">@lang('home.home')</a> &#8594; <span>@lang('home.patients_review')</span></p>
    </div><!-- End Page Title Section -->
    <!-- Start Faq Section -->
    <div class="layer-stretch my-5" id="patients-review-page">
        <div class="text-center layer-ttl">
            <h3>@lang('home.videos')</h3>
        </div>
        <div class="layer-container" id="patients-review-page--videos">
            <div class="row">
                <div class="patients-review-page--flex">
                    @foreach($videos as $video)
                    <div class="patients-review-page--card">
                        <div class="patients-review-page--media">
                            <div class="patients-review-page--theme-block">
                                <div class="gallery-block theme-block-picture package-picture-2">
                                    <iframe class="lazy" width="100%" height data-loader="youtube" data-src="https://www.youtube.com/embed/{{$video->video}}"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="patients-review--info">
                            <h3>{{$video->getTranslatedAttribute('title')}}</h3>
                            <p>{{$video->getTranslatedAttribute('body')}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
{{--        <div class="layer-ttl">--}}
{{--            <h3>@lang('home.photoes')</h3>--}}
{{--        </div>--}}
{{--        <div class="layer-container" id="patients-review-page--photos">--}}
{{--            <div class="patients-review-page--flex">--}}
{{--                @foreach($testimonials as $review)--}}
{{--                <div class="patients-review-page--card">--}}
{{--                    <div class="patients-review--media">--}}
{{--                        <div class="theme-block mb-2">--}}
{{--                            <div class="gallery-block theme-block-picture package-picture-2">--}}
{{--                                <a href="{{Helper::placeholder(Voyager::image($review->avatar))}}">--}}
{{--                                    <img src="{{Helper::placeholder(Voyager::image($review->thumbnail('medium','avatar')))}}" alt="{{$review->getTranslatedAttribute('name')}}">--}}
{{--                                    <div class="gallery-layer">--}}
{{--                                        <div class="gallery-layer-dark">--}}
{{--                                            <p><i class="fa fa-search-plus"></i></p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="patients-review--info">--}}
{{--                        <h3>{{$review->getTranslatedAttribute('name')}}</h3>--}}
{{--                        <p>{{$review->getTranslatedAttribute('quote')}}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
    </div><!-- End FAQ Section -->
    
    <!-- START booking Section -->
    <div class="booking-section">
        
    </div>
    <!-- End booking Section -->
@endsection

