@extends('front.layout.front')

@section('title')
{{$hotel->service()}}: {{$hotel->getTranslatedAttribute('title')}} - {{setting(App::getLocale().'.title')}}
@endsection

@section('style')

@endsection

@section('content')	
<!-- Start Page Title Section -->
<div class="page-ttl hotels-bg" style="background-image: url('{{Voyager::image($hotel->grand_background)}}') !important;">
{{--    <div class="layer-stretch">--}}
        <div class="page-ttl-container">
            <h1>{{$hotel->getTranslatedAttribute('title')}}</h1>
{{--            <p><a href="#">Home</a> &#8594; <a href="#">Hotels</a> &#8594; <span>{{$hotel->getTranslatedAttribute('title')}}</span></p>--}}
            <div class="rating-stars">
                @include('front.pages.services.hotels.includes.rating-stars',["star"=>$hotel->star])
            </div>
{{--        </div>--}}
    </div>
</div><!-- End Page Title Section -->
<!-- Start Service Section -->
<div id="hotel-page">
    <div class="layer-stretch">
        <div class="row layer-wrapper">
            <div class="col-lg-8 text-center">
                <div class="theme-material-card">
                    <div class="hotel-page--name">
                        {{$hotel->getTranslatedAttribute('title')}}
                    </div>
                    <div class="hotel-page--location">
                        <i class="fas fa-map-marker-alt"></i>@lang('home.iran'), {{$hotel->city->getTranslatedAttribute('title')}}
                    </div>
{{--                    <div class="theme-img"><img src="{{Helper::placeholder(Voyager::image($hotel->image))}}" alt="{{$hotel->getTranslatedAttribute('title')}}"></div>--}}
                    <div class="service-post">
                        {!! $hotel->getTranslatedAttribute('description') !!}
                    </div>
                </div>
                <div class="theme-material-card">
                    <div class="sub-ttl">@lang('home.gallery')</div>
                    <div id="hotel-page--gallery-owl-carousel" class="owl-carousel owl-drag owl-theme theme-owl-dot gallery-owl-carousel">
                        <?php $images = json_decode($hotel->images); ?>
                        @if(!empty($images))
                        
                        @foreach($images as $image)
                        <div class="owl-item">
                            <div class="theme-block">
                                <div class="gallery-block theme-block-picture doctor-picture-2">
                                    <a href="{{ Voyager::image($image)}}">
                                        <img class="lazy" data-src="{{ Voyager::image($hotel->getThumbnail($image, 'medium'))}}" alt="{{$hotel->title}}">
                                        <div class="gallery-layer">
                                            <div class="gallery-layer-dark">
                                                <p><i class="fa fa-search-plus"></i></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                @include('front.common.reviews',["reviews"=>$hotel->reviews])
                <form action="{{route('comment_store')}}" class="form-horizontal cform-2" method="post">
                    @csrf
                    <input type="hidden" value="{{get_class($hotel)}}" name="reviewable_type">
                    <input type="hidden" value="{{$hotel->id}}" name="reviewable_id">
                    @include('front.common.review-form')
                </form>
            </div>
            <div class="col-lg-4">
                <div class="theme-material-card">
                    <div class="sub-ttl">{{$hotel->service()}} @lang('home.facilities')</div>
                    <ul class="category-list">
                        @if(!empty($hotel->price))
                        <li><span class="fa fa-money"></span>@lang('home.cost'): @lang('home.from') {{$hotel->price}}$</li>
                        @endif
                        @foreach($hotel->items as $item)
                        <li><span class="{{$item->icon}}"></span>{{$item->getTranslatedAttribute('title')}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="theme-material-card text-center">
                    <div class="sub-ttl">@lang('home.make_reservation')</div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-user-o"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="sideapnt-name">
                        <label class="mdl-textfield__label" for="sideapnt-name">@lang('home.fullname')</label>
                        <span class="mdl-textfield__error">@lang('home.name_field')</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-envelope-o"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="sideapnt-email">
                        <label class="mdl-textfield__label" for="sideapnt-email">@lang('home.email')</label>
                        <span class="mdl-textfield__error">@lang('home.email_field')</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-phone"></i>
                        <input class="mdl-textfield__input" type="text" pattern="[0-9+]*" id="sideapnt-mobile">
                        <label class="mdl-textfield__label" for="sideapnt-mobile">@lang('home.mobile_number')</label>
                        <span class="mdl-textfield__error">@lang('home.mobile_field')</span>
                    </div>
                    <div class="mdl-selectfield mdl-js-selectfield mdl-selectfield--floating-label form-input-icon">
                        <i class="fa fa-suitcase"></i>
                        <select class="mdl-selectfield__select" id="sideapnt-department">
                            <option value=""></option>
                            <option value="bussiness">@lang('home.business')</option>
                            <option value="medical">@lang('home.medical')</option>
                        </select>
                        <label class="mdl-selectfield__label" for="sideapnt-department">@lang('home.travel_reason')</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input-icon">
                        <i class="fa fa-calendar-o"></i>
                        <input class="mdl-textfield__input datetimepicker" type="text" id="sideapnt-date" readonly>
                        <label class="mdl-textfield__label" for="sideapnt-date">@lang('home.date')</label>
                        <span class="mdl-textfield__error">@lang('home.date_field')</span>
                    </div>
                    <!--<div class="side-error"></div>-->
                    <button class="button--default button--thirdary" data-loading-text="<i class='fa fa-spinner fa-spin'></i> Processing">@lang('home.submit')</button>
                </div>
                <div class="theme-material-card">
                    <div class="sub-ttl">@lang('home.location')</div>
                    <iframe src="https://maps.google.it/maps?q=<?php echo urlencode($hotel->city->title.",".$hotel->title); ?>&output=embed" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="theme-material-card">
                    <div class="sub-ttl">@lang('home.similar') {{$hotel->service()}}</div>
                    @foreach($related_hotels as $related_hotel)
                    <a href="{{route('service.hotel.show',[$related_hotel->type,$related_hotel,$related_hotel->slug])}}" class="row blog-recent">
                        <div class="col-4 blog-recent-img round">
                            <img class="img-responsive img-thumbnail lazy" data-src="{{Helper::placeholder(Voyager::image($related_hotel->thumbnail('small')))}}" alt="{{$related_hotel->getTranslatedAttribute('title')}}">
                        </div>
                        <div class="col-8 blog-recent-post">
                            <h4>{{$related_hotel->getTranslatedAttribute('title')}}</h4>
                            <p>Iran , {{$related_hotel->city->getTranslatedAttribute('title')}}</p>
                            @include('front.pages.services.hotels.includes.rating-stars',["star"=>$related_hotel->star])
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div><!-- End Service Section -->
@endsection

   
   
@section('js')


@endsection