@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection



@section('content')	
<!-- Start Page Title Section -->
<div class="page-ttl doctors-bg">
{{--    <div class="layer-stretch">--}}
        <div class="page-ttl-container">
            <h1>@lang('home.doctors')</h1>
{{--            <p><a href="{{route('home')}}">Home</a> &#8594; <span>Doctors</span></p>--}}
        </div>
{{--    </div>--}}
</div><!-- End Page Title Section -->
<!-- Start Doctor List Section -->
    <div id="doctors-page" class="layer-stretch">
        <div class="layer-wrapper text-center">
            <div class="row flex-container-1">
                @foreach($doctors as $doctor)
                <div class="col-md-4 flex-item-1">
                    <a href={{route('service.doctor.show',[$doctor,$doctor->slug])}}>
                    <div class="doctors-page-card mx-auto flex-content-1 lazy {{$doctor->main_category()}}" data-bg="linear-gradient(0deg, rgba(0, 0, 0, 0.71), rgba(0, 0, 0, 0.21), rgba(0, 0, 0, 0)),  url('{{Helper::placeholder(Voyager::image($doctor->thumbnail('medium','avatar')))}}')">
                            @if(count($doctor->categories)>0)
                            <div class="doctors-page-speciality text-center">
                                @include('front.common.items', ['items' => $doctor->categories])
                            </div>
                            @endif
                            <div class="doctors-page-options flex-text-1">
                                <div class="doctors-page-name">
                                    <h4>{{$doctor->getTranslatedAttribute('name')}}</h4>
                                </div>
                                <div class="doctors-page-city">
                                    <h6>
                                        @if($doctor->city)
                                            {{$doctor->city->getTranslatedAttribute('title')}}
                                        @endif
                                    </h6>
                                </div>
                                <div class="doctor-page-details-extra">
                                    <p><img src="/images/doctors/icon/1.png">MBBS, MD</p>
                                    <p><img src="/images/doctors/icon/star.png"></img>@lang('home.experience'): {{$doctor->experience}} @lang('home.year')</p>

                                </div>
                            </div>
                        </div>
                     </a>
                </div>
                @endforeach
            </div>
            {{$doctors->links()}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <div class="theme-material-card text-center">--}}
{{--                        <div class="sub-ttl">@lang('home.make_appointment')</div>--}}
{{--                        @include('front.pages.services.doctors.includes.appointment-form')--}}
{{--                    </div>--}}
{{--                    <div class="theme-material-card">--}}
{{--                        <div class="sub-ttl">@lang('home.our_services')</div>--}}
{{--                        <div class="flexslider theme-flexslider">--}}
{{--                            <ul class="slides">--}}
{{--                                @foreach($hotels as $hotel)--}}
{{--                                <li>--}}
{{--                                    <div class="theme-flexslider-container">--}}
{{--                                        <img src="{{Helper::placeholder(Voyager::image($hotel->thumbnail('medium')))}}" alt="{{$hotel->getTranslatedAttribute('title')}}" />--}}
{{--                                        <h4>{{$hotel->getTranslatedAttribute('title')}}</h4>--}}
{{--                                        <a href="{{route('service.hotel.show',[$hotel->type,$hotel,$hotel->slug])}}" class="anchor-icon">@lang('home.read_more')<i class="fa fa-arrow-right"></i></a>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div><!-- End Doctor List Section -->
    <form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
    @csrf
    @include('front.common.form')
    </form>
@endsection

