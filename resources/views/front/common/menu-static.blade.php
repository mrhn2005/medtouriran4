
    <!-- Start Menu Section -->
    <ul class="menu p-0">
        <li>
            <a href="{{route('home')}}" id="menu-medical-tourism" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.medtouriran') <i class="fa fa-chevron-down"></i>
            </a>
            <ul class="menu-dropdown menu-dropdown-1">
                <li>
                    <a href="{{route('aboutMedical.destination.index')}}" id="menu-destinations">@lang('home.destinations')<i class="fa fa-chevron-rl float-rev" style="line-height: inherit;"></i></a>
                    <ul class="menu-dropdown menu-dropdown-2">
                        @foreach($cities as $city)
                    <li><a href="{{route('aboutMedical.destination.show',[$city,$city->slug])}}" id="menu-destinationTehran">{{$city->getTranslatedAttribute('title')}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="{{route('aboutMedical')}}" id="menu-aboutMedicalTourism">@lang('home.about_medical_tourism')</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('package.index')}}" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.packages')</a>
        </li>
        <li class="menu-megamenu-li">
            <a href="{{route('procedure.index')}}" id="menu-procedures" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.procedures') <i class="fa fa-chevron-down"></i></a>
            <ul class="menu-megamenu">
                <li class="row">
                    @foreach($categories as $category)
                    
                    <div class="col-lg-6">
                        <div class="megamenu-ttl">{{$category->getTranslatedAttribute('title')}}</div>
                        <ul>
                            @foreach($category->children as $child)
                                @if(!empty($child->body))
                                <li><a href="{{route('procedure.show',[$child,$child->slug])}}" id="menu-PlasticSurgery">{{$child->getTranslatedAttribute('title')}}</a></li>
                                @else
                                <li>{{$child->getTranslatedAttribute('title')}}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('service')}}" id="menu-service" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.services') <i class="fa fa-chevron-down"></i></a>
            <ul class="menu-dropdown">
                <li>
                    <a href="{{route('service.hotel.index','medical-centers')}}">@lang('home.our_medical_centers')</a>
                </li>
                <li>
                    <a href="{{route('service.hotel.index','hotels')}}">@lang('home.our_hotels')</a>
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
            <a href="{{route('patientReview')}}" id="menu-review" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.patients_review')</a>
        </li>
        <li>
            <a href="{{route('blog.index')}}" id="menu-blog" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.blog')</a>
        </li>
        
        <li>
            <a href="{{route('single-page',['about-us'])}}" class="mdl-button mdl-js-button mdl-js-ripple-effect">@lang('home.about_us') <i class="fa fa-chevron-down"></i></a>
            <ul class="menu-dropdown">
                <!--<li><a href="#">Our Team</a></li>-->
                <li><a href="{{route('single-page',['contact-us'])}}">@lang('home.contact')</a></li>
                <li><a href="{{route('single-page',['faq'])}}">@lang('home.faq')</a></li>
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
