<div id="hm-treatment" class="layer-stretch">
    <div class="layer-wrapper">
        <div class="layer-ttl">
            <h3>@lang('home.popular_treatment')</h3>
        </div>
        <div class="layer-container">
            <div class="row flex-container-1">
                @foreach($categories->where('first_page',1) as $category)
                    @include('front.pages.procedures.includes.card')
                @endforeach
            </div>
            <div class="text-center mt-3 mx-auto d-block">
                <a href="{{route('procedure.index')}}" class="button--default button--thirdary m-auto">
                    @lang('home.see_all')
                </a>
            </div>
        </div>
    </div>
</div>