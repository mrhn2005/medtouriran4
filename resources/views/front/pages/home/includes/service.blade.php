<div id="hm-service" class="layer-stretch">
    <div class="layer-wrapper">
        <div class="layer-ttl">
            <h3>@lang("home.our_services")</h3>
        </div>
        <div class="layer-container flex-container-1">
            @foreach($benefits->where('type',1) as $benefit)
                <div class="feature-block feature-block-dark">
                    <a href="{{url(App::getLocale().'/'.$benefit->link)}}">
                        <div class="feature-icon"><i class="{{$benefit->icon}}"></i></div>
                        <span>{{$benefit->getTranslatedAttribute('title')}}</span>
                        <p class="paragraph-small paragraph-white">{{$benefit->getTranslatedAttribute('body')}}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>