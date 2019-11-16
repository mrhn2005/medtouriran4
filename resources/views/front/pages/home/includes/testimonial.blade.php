<div id="testimonial" class="parallax-background parallax-background-3 pb-70 lazy"
     data-bg="url(/images/background/what-clients-says.webp)">
    <div class="layer-stretch" id="hm-testimonial">
        <div class="layer-wrapper">
            <div class="layer-ttl">
                <h3>@lang("home.what_patients_tell_about_us")</h3>
            </div>
            <div class="layer-container">
                <div id="testimonial-slider" class="owl-carousel owl-theme theme-owl-dot">
                    @foreach($videos as $video)
                    <div class="testimonial-block">
                        <div class="video-sample-frame">
                            <iframe  data-loader="youtube" data-src="{{$video->video}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media;" allowfullscreen></iframe>
                        </div>
                        <div class="paragraph-medium paragraph-white">
                            <i class="fa fa-quote-left"></i>
                            {{$video->getTranslatedAttribute('body')}}
                        </div>
                        <a>{{$video->getTranslatedAttribute('title')}}</a>
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
</div>

