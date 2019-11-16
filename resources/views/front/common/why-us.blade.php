<div id="hm-feature" class="layer-stretch">
    <div class="layer-wrapper">
        <div class="layer-ttl py-0">
            <h3 style="padding: 0 !important;">@lang("home.why_choose_us")</h3>
        </div>
        <div class="row flex-container-1">
            @foreach($benefits as $benefit)
                <div class="col-12 col-md-4 flex-item-1">
                    <div class="service-card flex-content-1">
                        <img class="hm-feature-icon lazy" data-src="/images/whychooseus/{{$benefit->icon}}.png">
                        <h5>{{$benefit->getTranslatedAttribute('title')}}</h5>
                        <p class="paragraph-small paragraph-black"> {{$benefit->getTranslatedAttribute('body')}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>