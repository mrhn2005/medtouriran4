
    
@extends('front.layout.front')

@section('title')
{{$doctor->getTranslatedAttribute('name')}} {{setting(App::getLocale().'.title')}}
@endsection

@section('style')

@endsection

@section('content')	
<!-- Start Page Title Section -->
<div class="page-ttl doctors-bg" style="background-image: url({{empty($doctor->grand_background)?'/images/background/toppage/doctors.png':Voyager::image($doctor->grand_background)}})">
{{--    <div class="layer-stretch">--}}
        <div class="page-ttl-container">
            <h1>{{$doctor->getTranslatedAttribute('name')}}</h1>
{{--            <p><a href="{{route('home')}}">@lang('home.home')</a> &#8594; <a href="{{route('service.doctor.index')}}">@lang('home.doctors')</a> &#8594; <span>{{$doctor->getTranslatedAttribute('name')}}</span></p>--}}
        </div>
{{--    </div>--}}
</div><!-- End Page Title Section -->
<!-- Start Doctor List Section -->
<div id="doctor-page" class="layer-stretch">
    <div class="layer-wrapper layer-bottom-10">
        <div class="row">
            <div class="col-lg-7">
                <div class="theme-material-card">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="theme-img theme-block-hover">
                            <img class="w-100 lazy" data-src="{{Helper::placeholder(Voyager::image($doctor->thumbnail('medium','avatar')))}}" alt="{{$doctor->getTranslatedAttribute('name')}}">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="doctor-name">
                                <h3>{{$doctor->getTranslatedAttribute('name')}}</h3>
                                <span class="badge badge-primary">@lang('home.department')</span>
                                <p style="font-size: 18px;font-weight: 600;color: var(--title-color2);">
                                    @include('front.common.items', ['items' => $doctor->categories])
                                </p>

                            </div>
{{--                            <div class="doctor-details-extra text-left p-0 pt-4">--}}
{{--                                 <p class="text-center">--}}
{{--                                     @include('front.common.rating', ['star' => $doctor->rate/20])--}}
{{--                                    17 year Experience--}}
{{--                                </p>--}}
{{--                            </div>--}}
                        </div>
                        <p class="text-muted p-4 m-0 pb-0">
                        {{$doctor->getTranslatedAttribute('about')}}
                        </p>
                        @if(!empty($doctor->getTranslatedAttribute('education')))
                        <div class="col-sm-12">
                            <div class="sub-ttl pt-4 font-20">@lang('home.training')</div>
                            <table class="table table-hover">
                                <thead>
                                    <tr class="table-primary-head">
{{--                                        <th>#</th>--}}
                                        <th>@lang('home.name')</th>
                                        <th>@lang('home.degree')</th>
                                        <th>@lang('home.date')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach(json_decode($doctor->getTranslatedAttribute('education'),TRUE) as $education)
                                    <tr>
{{--                                        <td>{{$loop->index}}</td>--}}
                                        <td>{{$education['name']}}</td>
                                        <td>{{$education['degree']}}</td>
                                        <td><span class="badge badge-{{Helper::color_badge($loop->index)}} badge-pill">{{$education['date']}}</span></td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                @if(!empty($doctor->getTranslatedAttribute('skills')))
                <div class="theme-material-card">
                    <div class="px-2">
                        <div class="sub-ttl font-20 pt-4">@lang('home.skills')</div>
                        @foreach(json_decode($doctor->getTranslatedAttribute('skills'),TRUE) as $skill)
                        <div class="doctor-skills">
                            <p class="font-14">{{$skill['skill']}} <span class="badge badge-{{Helper::color_badge($loop->index)}} float-rev">{{$skill['percent']}}%</span></p>
                            <div class="progress progress-md mb-4">
                                <div class="progress-bar progress-bar-striped bg-{{Helper::color_badge($loop->index)}}" role="progressbar" style="width: {{$skill['percent']}}%" aria-valuenow="{{$skill['percent']}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
{{--                <div class="theme-material-card">--}}
{{--                    <div class="sub-ttl">Time Table</div>--}}
{{--                    <ul class="timetable">--}}
{{--                        <li><a class="pull-left"><i class="fa fa-calendar"></i>Sat</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>--}}
{{--                        <li><a class="pull-left"><i class="fa fa-calendar"></i>Sun</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>--}}
{{--                        <li><a class="pull-left"><i class="fa fa-calendar"></i>Mon</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>--}}
{{--                        <li><a class="pull-left"><i class="fa fa-calendar"></i>Tue</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>--}}
{{--                        <li><a class="pull-left"><i class="fa fa-calendar"></i>Wed</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>--}}
{{--                        <li><a class="pull-left"><i class="fa fa-calendar"></i>Thu</a><a class="pull-right"><i class="fa fa-clock-o"></i>9:00 AM - 5:00 PM</a></li>--}}
{{--                        <li><a class="pull-left"><i class="fa fa-calendar"></i>Fri</a><a class="pull-right">Holiday</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
        @if(!empty($doctor->testimonal))
        <div class="theme-material-card">
            <div class="sub-ttl">@lang('home.testimonial')</div>
            <div class="row">
                @foreach(explode(";",$doctor->testimonal) as $video)
                <div class="col-sm-12 col-md-6">
                    <div class="theme-block">
                        <iframe width="100%" height="275px" data-loader="youtube" data-src="{{$video}}"></iframe>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
        @endif
        @if(!empty($doctor->images))
        <div class="theme-material-card">
            <div class="sub-ttl">@lang('home.gallery')</div>
            <div id="doctor-page--gallery-owl-carousel" class="owl-carousel owl-drag owl-theme theme-owl-dot gallery-owl-carousel">
                <?php $images = json_decode($doctor->images); ?>
                @foreach($images as $image)
                <div class="owl-item">
                    <div class="theme-block">
                        <div class="gallery-block theme-block-picture doctor-picture-2">
                            <a href="{{ Voyager::image($image)}}">
                            <img class="lazy" data-src="{{ Helper::placeholder(Voyager::image($doctor->getThumbnail($image, 'medium')))}}" alt="image">
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
{{--                <div class="owl-controls">--}}
{{--                    <div class="custom-nav owl-nav"></div>--}}
{{--                </div>--}}
            </div>
            <div class="owl-theme">
                <div class="owl-controls">
                    <div class="custom-nav owl-nav"></div>
                </div>
            </div>
        </div>
        @endif
        <div class="theme-material-card">
            <div class="sub-ttl">@lang('home.related_doctors')</div>
            <div class="row">
                @foreach($related_doctors as $related_doctor)
                <div class="col-sm-6 col-md-4">
                    <div class="theme-block">
                        <div class="theme-block-picture doctor-picture-2">
                            <img src="{{Helper::placeholder(Voyager::image($related_doctor->thumbnail('medium','avatar')))}}" alt="{{$related_doctor->getTranslatedAttribute('name')}}">
                        </div>
                        <div class="doctor-name doctor-name-2">
                            <h4><a href="{{route('service.doctor.show',$related_doctor)}}">{{$related_doctor->getTranslatedAttribute('name')}}</a></h4>
                        </div>
                        <div class="theme-block-hidden">
                            <div class="doctor-name">
                                <h4><a href="{{route('service.doctor.show',$related_doctor)}}">{{$related_doctor->getTranslatedAttribute('name')}}</a></h4>
                            </div>
                            <div class="doctor-details">
                                <div class="doctor-specility">
                                    <p>
                                        @include('front.common.items', ['items' => $related_doctor->categories])
                                    </p>
                                </div>
                                <div class="doctor-details-extra text-left">
                                    <!--<p><i class="fa fa-shield"></i>CEO &amp; Founder</p>-->
                                    <p><i class="fa fa-mortar-board"></i>{{$related_doctor->degree}}</p>
                                    <!--<p><i class="fa fa-trophy"></i>Awards: 8</p>-->
                                    <p><i class="fa fa-star"></i>Experience: {{$related_doctor->experience}} year</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div><!-- End Doctor List Section -->


<form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
        @csrf
        @include('front.common.form')
</form>
@endsection
@section('js')

<script type="text/javascript">

</script>
@endsection