<!-- Start Header Section -->
<header id="header-1" class="hidden-sm hidden-xs main-menu">
    <div class="layer-stretch hdr">
        <div class="tbl animated fadeInDown">
            <div class="tbl-row">
                <!-- Start Header Logo Section -->
                <div class="tbl-cell hdr-logo">
                    @if($is_rtl)
                        <a href="{{route('home')}}"><img src="/images/logo-h-ar.png" alt="MedTourIran logo"></a>
                    @else
                        <a href="{{route('home')}}"><img src="/images/logo-h-en.png" alt="MedTourIran logo"></a>
                    @endif
                </div><!-- End Header Logo Section -->
                <div class="tbl-cell hdr-menu">
                    <!-- Start Menu Section -->

                    <!-- Start Menu Section -->
                    <ul class="menu p-0">
                        <li>
                            <a href="{{route('package.index')}}" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.packages') </a>
                        </li>
                        <li class="menu-megamenu-li">
                            <a href="{{route('procedure.index')}}" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang("home.procedures") <i class="fa fa-chevron-down"></i></a>
                            <ul class="menu-megamenu pb-2">
                                <li class="row">
                                    @foreach($categories as $category)

                                        <div class="col-lg-6">
                                            <div class="megamenu-ttl {{$category->title}}">{{$category->getTranslatedAttribute('title')}}</div>
                                            <ul>
                                                @foreach($category->children as $child)
                                                <li><a href="{{route('procedure.show',[$child,$child->slug])}}">{{$child->getTranslatedAttribute('title')}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endforeach
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.services') <i class="fa fa-chevron-down"></i></a>
                            <ul class="menu-dropdown">
                                <li>
                                    <a href="{{route('service.hotel.index','medical-centers')}}">@lang('home.our_medical_centers')</a>
                                </li>
                                <li>
                                    <a href="{{route('service.hotel.index','hotels')}}">@lang('home.our_hotels') </a>
                                </li>
                                <li>
                                    <a href="{{route('service.doctor.index')}}">@lang('home.our_doctors')</a>
                                </li>
                                <li>
                                    <a href="{{route('service.hotel.index','hostels')}}">@lang('home.our_hostels_apartments')</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('aboutMedical.destination.index')}}">@lang('home.destinations') <i class="fa fa-chevron-down"></i>
                            </a>
                            <ul class="menu-dropdown">
                                @foreach($cities as $city)
                                    <li><a href="{{route('aboutMedical.destination.show',[$city,$city->slug])}}" >{{$city->getTranslatedAttribute('title')}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <a href="{{route('patientReview')}}" id="menu-review" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.patients_review')</a>
                        </li>
                        <li>
                            <a href="{{route('blog.index')}}" id="menu-blog" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.blog')</a>
                        </li>

                        <li>
                            <a href="{{route('single-page',['about-us'])}}" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.about_us') <i class="fa fa-chevron-down"></i></a>
                            <ul class="menu-dropdown">
                                <!--<li><a href="#">Our Team</a></li>-->
{{--                                <li><a href="{{route('single-page',['contact-us'])}}">@lang('home.contact')</a></li>--}}
                                <li><a href="{{route('single-page',['faq'])}}">@lang('home.faq')</a></li>
                                <!--&lt;!&ndash;<li><a href="#">Terms &#38; Conditions</a></li>&ndash;&gt;-->
                                <!--&lt;!&ndash;<li><a href="#">Privacy Policy</a></li>&ndash;&gt;-->
                            </ul>

                        </li>
                        @if(!empty(App::getLocale()))
                            <li id="menu-lang">
                                <a class="mdl-button mdl-js-button mdl-js-ripple-effect"> {{config('app.locales')[App::getLocale()]}}  <i class="fa fa-chevron-down"></i></a>
                                <ul class="menu-dropdown menu-lang--ul">
                                    @foreach (config('app.locales') as $localeKey => $locale)
                                        @if ($localeKey != app()->getLocale())
                                            <li><a href="{{ route('locale.switch', $localeKey) }}">{{ $locale }}</a></li>
                                        @endif
                                    @endforeach

                                </ul>

                            </li>
                        @endif
                    </ul><!-- End Menu Section -->
                </div>

            </div>
        </div>
    </div>
</header><!-- End Header Section -->


<header id="mobile-menu--hdr" class="hidden-lg hidden-md main-menu">
    <div id="mobile-menu--tbl">
        <div id="mobile-menu--tbl-cell">
            <!-- Start Menu Section -->
            <ul id="mobile-menu--menu">
                <li>
                    <a href="{{route('package.index')}}" id="mb-menu-packages">@lang('home.packages') </a>
                </li>
                <li>
                    <a href="{{route('procedure.index')}}" id="mb-menu-procedures">@lang("home.procedures")</a>
                </li>
                <li>
                    <a href="{{route('service.hotel.index','medical-centers')}}">@lang('home.our_medical_centers') </a>
                </li>
                <li>
                    <a href="{{route('service.hotel.index','hotels')}}">@lang('home.our_hotels') </a>
                </li>
                <li>
                    <a href="{{route('service.doctor.index')}}">@lang('home.our_doctors')</a>
                </li>
                <li>
                    <a href="{{route('service.hotel.index','hostels')}}">@lang('home.our_hostels_apartments')</a>
                </li>
                <li>
                    <a href="{{route('aboutMedical.destination.index')}}" id="mb-menu-destinations">@lang('home.destinations')</a>
                </li>
                <li>
                    <a href="{{route('patientReview')}}" id="mb-menu-review">@lang('home.patients_review')</a>
                </li>
                <li>
                    <a href="{{route('blog.index')}}" id="mb-menu-blog">@lang('home.blog')</a>
                </li>
                <li>
                    <a href="{{route('single-page',['about-us'])}}">@lang('home.about_us') </a>
{{--                    <ul>--}}
{{--                        <li><a href="{{route('single-page',['contact-us'])}}">@lang('home.contact')</a></li>--}}
{{--                        <li><a href="{{route('single-page',['faq'])}}">@lang('home.faq')</a></li>--}}
{{--                    </ul>--}}

                </li>
            </ul><!-- End Menu Section -->
        </div>
        <div id="mobile-menu--overlay"></div>
        <div id="mobile-menu--bar"><a><i class="fa fa-bars"></i></a></div>
        <div id="mobile-menu--lang">
            @if(!empty(App::getLocale()))

                    @foreach (config('app.locales') as $localeKey => $locale)
                        @if ($localeKey != app()->getLocale())
                            <a href="{{ route('locale.switch', $localeKey) }}" style="font-weight: 600;color: #fff !important;" class="mdl-button mdl-js-button">{{ $locale }}</a>
                        @endif
                    @endforeach

                
            @endif
        </div>
        <div id="mobile-menu--logo">
            @if($is_rtl)
                <a href="{{route('home')}}"><img src="/images/logo-h-ar.png" alt="MedTourIran logo"></a>
            @else
                <a href="{{route('home')}}"><img src="/images/logo-h-en.png" alt="MedTourIran logo"></a>
            @endif
        </div><!-- End Header Logo Section -->
    </div>
</header><!-- End Header Section -->