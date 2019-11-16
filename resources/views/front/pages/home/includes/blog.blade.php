<div id="hm-blog" class="layer-stretch">
    <div class="layer-wrapper layer-bottom-10 text-center">
        <div class="layer-ttl">
            <h3>@lang('home.latest_posts')</h3>
        </div>
        <div class="row flex-container-1">
            @foreach($posts as $post)
            <div class="col-md-6 col-lg-4 flex-item-1">
                <div class="theme-block theme-block-hover flex-content-1">
                    <div class="theme-block-picture">
{{--                        <div class="blog-card-date">{{$post->created_at->format('d M Y')}}</div>--}}
                            <img alt="{{$post->getTranslatedAttribute('title')}}" class="lazy" data-src="{{Helper::placeholder(Voyager::image($post->thumbnail('medium')))}}" />                    </div>
                    <div class="flex-text-1">
                        <div class="blog-card-ttl">
                            <h3><a href="{{route('blog.show',[$post,$post->slug])}}">{{$post->getTranslatedAttribute('title')}}</a></h3>
                        </div>
                        <a href="{{route('blog.show',[$post,$post->slug])}}">
                            <div class="blog-card-details button--secendary">
                                @lang('home.read_more')
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>