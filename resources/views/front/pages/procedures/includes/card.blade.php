<div class="col-md-4 col-lg-3 flex-item-1 t-filter {{$category->css_class()}}">
        <div class="lazy flex-content-1 hm-treatment--card {{$category->css_class()}}"
             data-bg="url('{{Helper::placeholder(Voyager::image($category->thumbnail('medium')))}}')">
        <div class="hm-treatment--card-content flex-text-1">
            <h3>{{$category->parent->getTranslatedAttribute('title')}}</h3>
            <h2>{{ $category->getTranslatedAttribute('title') }}</h2>
            <a href="{{route('procedure.show',[$category,$category->slug])}}" class="button--default button--secendary m-auto">
            @lang('home.read_more')
            </a>
        </div>
    </div>
</div>