@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@include('front.pages.blog.includes.hreflang')

@section('content')	
<!-- Start Page Title Section -->
<div class="page-ttl blog-bg">
    <div class="page-ttl-container">
        <h1>{{\Request::is('*blogs/tag*')?'#'.$tag->getTranslatedAttribute('title'):__('home.blogs')}}</h1>
    </div>
    <p class="page-breadcrumb">
        <a href="{{route('home')}}">@lang('home.home')</a> @lang('home.arrow')
        @if(\Request::is('*blogs/tag*'))
        <a href="{{route('blog.index')}}">@lang('home.blogs')</a> @lang('home.arrow')
        <span>#{{$tag->getTranslatedAttribute('title')}}</span>
        @else
        <span>@lang('home.blogs')</span>
        @endif
    </p>
</div><!-- End Page Title Section -->
<!-- Start Blog List Section -->
<div class="layer-stretch">
    <div class="layer-wrapper">
        <div class="row">
            <div class="col-lg-8 text-center">
                @foreach($posts as $post)
                <div class="theme-material-card blog-full-block">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="theme-img theme-img-scalerotate">
                                <img class="lazy" data-src="{{Helper::placeholder(Voyager::image($post->thumbnail('medium')))}}" alt="{{$post->getTranslatedAttribute('title')}}">
                            </div>
                        </div>
                        <div class="col-sm-8 flex-col">
                            <div class="blog-full-ttl">
                                <h3><a href="{{route('blog.show',[$post,$post->slug])}}">{{$post->getTranslatedAttribute('title')}}</a></h3>
                            </div>
                            <div class="blog-full-description">{{$post->getTranslatedAttribute('excerpt')}}</div>
                            <div class="blog-full-ftr">
                                <a class="pull-left blog-full-author"><i class="fa fa-date"></i>{{$post->created_at->format('d M Y')}}</a>
                                <a href="{{route('blog.show',[$post,$post->slug])}}" class="pull-right anchor-icon">
                                    @lang('home.read_more') <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{$posts->links()}}
            </div>
            {!! ViewHelper::blog_sidebar() !!}
        </div>
    </div>
</div><!-- End Blog List Section -->

<form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
@csrf
@include('front.common.form')
</form>
@endsection



