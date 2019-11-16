<div id="hm-packages" class="parallax-background lazy" 
     data-bg="url(/images/background/home-packages.jpg)">
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="layer-ttl">
                <h3>@lang("home.special_packages")</h3>
            </div>
            <div class="layer-container">
                <div id="hm-packages-slider" class="owl-carousel owl-theme theme-owl-dot">
                    @foreach($packages as $package)
                    <div class="lazy hm-packages hm-packages--box {{$package->css_class()}}" 
                        data-bg="linear-gradient(rgba(0, 0, 0, 0.35),rgba(0, 0, 0, 0.1)),
                        url({{Voyager::image($package->main_image)}})" 
                        style="background-size:cover;background-repeat: no-repeat;background-position:center">
                    <div class="hm-packages--overlay"></div>
                        <div class="hm-packages--title">
                            <h2>{{$package->getTranslatedAttribute('title')}}</h2>
                            <p>@lang("home.package_in")</p>
                            <ul class="hm-packages--city">
                                @foreach($package->cities as $city)
                                <li class="package-logo-{{strtolower($city->title)}}">
                                    <img src="{{Voyager::image($city->icon)}}" alt="{{$city->title}}-logo">
                                    {{$city->getTranslatedAttribute('title')}}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="hm-packages--price">
                            <p>@lang("home.from")</p>
{{--                            <p>$</p>--}}
                            <h3>${{$package->getTranslatedAttribute('price')}}</h3>
                        </div>
                        <div class="hm-packages--options">
{{--                            <div class="hm-packages--overlay2"></div>--}}
                            <ul class="hm-packages--list">
                                @foreach($package->items as $item)
                                    <li>{{$item->getTranslatedAttribute('title')}}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="hm-packages--button">
                            <a href="{{route('package.show',[$package,$package->slug])}}">
                                <div>@lang("home.book")</div>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="owl-theme">
                    <div class="owl-controls">
                        <div class="custom-nav owl-nav"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End hm-packages Section -->




