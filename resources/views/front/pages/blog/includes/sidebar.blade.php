<div class="col-lg-4 col-sm-12">
    <div class="theme-material-card">
        <div class="sub-ttl">@lang('home.recent_post')</div>
        @foreach($recent_posts as $post)
        <a href="{{route('blog.show',[$post,$post->slug])}}" class="row blog-recent">
            <div class="p-2 blog-recent-img">
                <img class="img-responsive img-thumbnail" src="{{Helper::placeholder(Voyager::image($post->thumbnail('medium')))}}" alt="{{$post->getTranslatedAttribute('title')}}">
            </div>
            <div class="p-2 blog-recent-post">
                <h4>{{$post->getTranslatedAttribute('title')}}</h4>
                <p>{{$post->created_at->format('d M Y')}}</p>
            </div>
        </a>
        @endforeach
    </div>
    <div class="theme-material-card trending-post-xs">
        <div class="sub-ttl">@lang('home.trending_post')</div>
        <div class="flexslider theme-flexslider">
            <ul class="slides">
                @foreach($recent_posts->take(2) as $post)
                <li>
                    <div class="theme-flexslider-container">
                        <img src="{{Helper::placeholder(Voyager::image($post->thumbnail('medium')))}}" alt="{{$post->getTranslatedAttribute('title')}}" />
                        <h4 class="font-16 text-left">{{$post->getTranslatedAttribute('title')}}</h4>
                        <p class="text-left primary-color">{{$post->created_at->format('d M Y')}}</p>
                        <a href="{{route('blog.show',[$post,$post->slug])}}">
                            <button class="button--default button--thirdary">@lang('home.read_more')</button>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    {{-- <div class="theme-material-card">
        <div class="sub-ttl">Categories</div>
        <ul class="category-list">
            <li><a href="#"><i class="fa fa-newspaper-o"></i>News</a><span>(10)</span></li>
            <li><a href="#"><i class="fa fa-history"></i>History</a><span>(20)</span></li>
            <li><a href="#"><i class="fa fa-th"></i>Mythology</a><span>(9)</span></li>
            <li><a href="#"><i class="fa fa-cloud"></i>Technology</a><span>(21)</span></li>
            <li><a href="#"><i class="fa fa-flask"></i>Science</a><span>(13)</span></li>
            <li><a href="#"><i class="fa fa-info-circle"></i>New Disese</a><span>(7)</span></li>
            <li><a href="#"><i class="fa fa-hospital-o"></i>Health</a><span>(5)</span></li>
            <li><a href="#"><i class="fa fa-wheelchair-alt"></i>wellness</a><span>(8)</span></li>
        </ul>
    </div> --}}
    <div class="theme-material-card">
        <div class="sub-ttl">@lang('home.popular_tags')</div>
        @foreach ($popular_tags as $tag)
        <a href="{{route('tag.show',[$tag,$tag->slug])}}" class="theme-tag theme-tag-2">{{$tag->getTranslatedAttribute('title')}}</a> 
        @endforeach
    </div>
</div>