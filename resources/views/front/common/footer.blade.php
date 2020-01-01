    <!-- Start Footer Section -->
    <footer id="footer">
        <div class="layer-stretch">
            <!-- Start main Footer Section -->
            <div class="row layer-wrapper">
                <div class="col-md-5 footer-block">
                    <div class="footer-ttl"><p>@lang('home.about_medtouriran')</p></div>
                    <div class="footer-container footer-a">
                        <div class="tbl">
                            <div style="display: table-caption !important;border-bottom: 1px solid #999; ">
                                <p class="paragraph-medium paragraph-white">
                                    {{setting(App::getLocale().'.about')}}
                                </p>
                            </div>
                            @foreach($cities as $city)
                            <div class="tbl-row">
                                <div class="tbl-cell {{$city->title}}"><img style="max-width:25px" src="{{Voyager::image($city->icon)}}" alt="{{$city->title}}-logo"></div>
                                <div class="tbl-cell">
                                    <p class="paragraph-medium paragraph-white">
                                        {{$city->getTranslatedAttribute('address')}}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                            <div class="tbl-row">
                                <div class="tbl-cell"><i class="fa fa-phone"></i></div>
                                <div class="tbl-cell">
                                    <p class="paragraph-medium paragraph-white text-left" style="direction: ltr !important">{{setting('site.phone')}}</p>
                                </div>
                            </div>
                            <div class="tbl-row">
                                <div class="tbl-cell"><i class="fa fa-envelope"></i></div>
                                <div class="tbl-cell">
                                    <p class="paragraph-medium paragraph-white text-left">{{setting('site.email')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 footer-block">
                    <div class="footer-ttl"><p>@lang('home.quick_links')</p></div>
                    <div class="footer-container footer-b">
                        <div class="tbl">
                            <div class="tbl-row">
                                <ul class="tbl-cell">
                                    @foreach($links as $link)
									<li><a href="{{url(App::getLocale().'/'.$link->link)}}">{{$link->getTranslatedAttribute('title')}}</a></li>
									@endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-block">
                    <div class="footer-ttl"><p>@lang('home.newsletter')</p></div>
                    <div class="footer-container footer-c">
                        <div class="footer-subscribe">
                            <form method="post" action="{{route('subscriber.store')}}">
                            @csrf
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input name="onvis" class="onvis" value="">
                                <input class="mdl-textfield__input" name="email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="subscribe-email" required>
                                <label class="mdl-textfield__label" for="subscribe-email">@lang('home.your_email')</label>
                                <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                            </div>
                            <div class="footer-subscribe-button">
                                <button type="submit" class="button--default button--thirdary-2">@lang('home.subscribe')!</button>
                            </div>
                            </form>
                        </div>
                        <ul class="social-list social-list-colored footer-social">
                            @foreach($socials as $social)
                            <li>
                                <a href="{{$social->getTranslatedAttribute('link')}}" target="_blank" id="footer-{{strtolower($social->title)}}" class="{{$social->icon}}"></a>
                                <span class="mdl-tooltip mdl-tooltip--top" data-mdl-for="footer-{{strtolower($social->title)}}">{{$social->title}}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- End main Footer Section -->
        <!-- Start Copyright Section -->
        <div id="copyright">
            <div class="layer-stretch">
                <div class="paragraph-medium paragraph-white">@lang('home.copyright')</div>
            </div>
        </div><!-- End of Copyright Section -->
    </footer><!-- End of Footer Section -->
