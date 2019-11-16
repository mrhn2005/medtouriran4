<div id="hm-about">
    <div class="layer-stretch">
        <div class="layer-wrapper">
            <div class="layer-ttl">
                <h3>@lang("home.who_we_are")</h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="hm-about-block">
                        <div class="tbl-cell hm-about-icon"><i class="fa fa-user-md"></i></div>
                        <div class="tbl-cell hm-about-number">
                            <span class="counter">{{$num_of_doctors}}</span>
                            <p>@lang('home.doctors')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="hm-about-block">
                        <div class="tbl-cell hm-about-icon"><i class="fas fa-hospital"></i></div>
                        <div class="tbl-cell hm-about-number">
                        <span class="counter">{{$num_of_medical_centers}}</span>
                            <p>@lang('home.medical_centers')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="hm-about-block">
                        <div class="tbl-cell hm-about-icon"><i class="fas fa-hotel"></i></div>
                        <div class="tbl-cell hm-about-number">
                            <span class="counter">{{$num_of_hotels}}</span>
                            <p>@lang('home.hotels')</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="hm-about-block">
                        <div class="tbl-cell hm-about-icon"><i class="fas fa-plus"></i></div>
                        <div class="tbl-cell hm-about-number">
                            <span class="counter">{{$num_of_treatments}}</span>
                            <p>@lang('home.treatments')</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="hm-about-paragraph">
                    <p class="paragraph-medium">
                        @lang('home.who_we_are_text')
                    </p>
                </div>
                <div class="text-center mx-auto d-block">
                    <a href="{{route('single-page',['about-us'])}}">
                        <button class="button--default button--thirdary mt-0">@lang('home.learn_more_about_us')</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>