<div id="package-page--timeline" class="col-md-7 col-sm-12 ml-auto">
    <div class="package-page--main-timeline">
        @foreach ($package->timelines->sortBy('order') as $timeline)
            <div class="package-page--timeline">
                <div class="package-page--timeline-icon">
                    <i class="{{$timeline->icon}}"></i>
                </div>
                <div class="inner-content">
                    <h3 class="title">{{$timeline->getTranslatedAttribute('title')}}</h3>
                    <p class="description">{{$timeline->getTranslatedAttribute('description')}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>