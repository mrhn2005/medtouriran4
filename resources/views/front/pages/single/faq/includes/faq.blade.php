<!-- Start Faq Section -->
<div class="layer-stretch" id="faq-page">
    <div class="layer-wrapper text-center">
        <div class="row">
            <div class="col-sm-3">
                <p class="search-bar-text">what are you looking for?</p>
            </div>
            <div class="col-sm-9">
                <div class="search-bar" id="search">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                        <input class="mdl-textfield__input" type="text" id="sidebar-search" onkeyup="searchBar()">
                        <label class="mdl-textfield__label" for="sidebar-search">@lang('home.enter_keyword')</label>
                        {{--            <button class="fa fa-search search-button"></button>--}}
                    </div>
                </div>
            </div>
        </div>
        <div class="theme-accordion-container">
            @foreach ($faqs as $faq)
                <div class="theme-accordion">
                    <div class="theme-accordion-hdr">
                    <h4><i class="fa fa-question"></i> {{$faq->getTranslatedAttribute('question')}}</h4>
                        <div class="theme-accordion-control"><i class="fa fa-plus"></i></div>
                    </div>
                    <div class="theme-accordion-bdy">
                        <div class="paragraph-medium paragraph-black">
                            <i class="fa fa-stethoscope theme-dropcap"></i>
                            {!!$faq->getTranslatedAttribute('answer')!!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div><!-- End FAQ Section -->