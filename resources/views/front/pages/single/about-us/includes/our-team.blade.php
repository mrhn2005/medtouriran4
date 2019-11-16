<div class="layer-stretch">
    <div class="layer-wrapper layer-bottom-10 text-center">
        <div class="layer-ttl">
            <h3>@lang('our_team')</h3>
        </div>
        <div class="row">
            @foreach(App\Models\Member::withTranslations(App::getLocale())->get() as $member)
            <div class="col-sm-6 col-lg-4">
                <div class="theme-block theme-block-hover">
                    <div class="theme-block-picture">
                        <img src="{{Helper::placeholder(Voyager::image($member->thumbnail('medium')))}}" alt="{{$member->getTranslatedAttribute('title')}}">
                    </div>
                    <div class="doctor-name">
                        <h4><a>{{$member->getTranslatedAttribute('title')}}</a></h4>
                    </div>
                    <div class="doctor-details">
                        <div class="doctor-specility">
                            <p>{{$member->getTranslatedAttribute('expert')}}</p>
                        </div>
                        <div class="doctor-details-extra">
                            <div class="doctor-details-extra-3">
                                <p><i class="fa fa-shield"></i>{{$member->getTranslatedAttribute('position')}}</p>
                                <p><i class="fa fa-mortar-board"></i>{{$member->getTranslatedAttribute('degree')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>