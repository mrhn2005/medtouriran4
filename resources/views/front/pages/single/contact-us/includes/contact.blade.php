<div id="contact-page" class="layer-stretch my-4">
    <div class="layer-wrapper">
        <div class="row text-center flex-container-1">
            @foreach($cities as $city)
            <div class="col-sm-12 col-lg-4 contact-info-block flex-item-1">
                <div class="contact-info-inner w-100">
                    <i class="fa fa-phone"></i>
                    @if($is_rtl)
                        <span>@lang('home.office') {{$city->getTranslatedAttribute('title')}}</span>
                    @else
                        <span>{{$city->getTranslatedAttribute('title')}} @lang('home.office')</span>
                    @endif


                    <p class="paragraph-medium paragraph-black" style="direction: ltr !important">{{$city->phone}}</p>
                    <p>{{$city->getTranslatedAttribute('address')}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>