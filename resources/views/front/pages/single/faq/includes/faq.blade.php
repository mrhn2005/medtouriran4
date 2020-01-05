<!-- Start Faq Section -->
<div class="layer-stretch" id="faq-page">
    <div class="layer-wrapper text-center">
{{--        <div class="layer-fixed">--}}
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
{{--        </div>--}}
    </div>
</div><!-- End FAQ Section -->