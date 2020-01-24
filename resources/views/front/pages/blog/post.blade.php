@extends('front.layout.front')

@section('title')
{{$single_post->getTranslatedAttribute('title')}} - {{setting(App::getLocale().'.title')}}
@endsection

@section('meta')
    <link rel="canonical" href="{{route('blog.show',[$single_post,$single_post->slug])}}" />
@endsection

@section('meta_desc')
 {{$single_post->getTranslatedAttribute('meta_description')}}
@endsection

@include('front.pages.blog.includes.hreflang')

@section('content')	
<!-- Start Page Title Section -->
<div class="page-ttl" style="background: url('{{Voyager::image($single_post->grand_background)}}')">
    <div class="page-ttl-container">
        <h1>{{$single_post->getTranslatedAttribute('title')}}</h1>
{{--            <h1>@lang('home.blog')</h1>--}}
{{--            <p><a href="{{route('home')}}">@lang('home.home')</a> &#8594; <a href="{{route('blog.index')}}">@lang('home.blogs')</a> &#8594; <span>{{$single_post->getTranslatedAttribute('title')}}</span></p>--}}
    </div>
    <p class="page-breadcrumb"><a href="{{route('home')}}">@lang('home.home')</a> @lang('home.arrow') <a href="{{route('blog.index')}}">@lang('home.blogs')</a> @lang('home.arrow') <span>{{$single_post->getTranslatedAttribute('title')}}</span></p>
{{--    </div>--}}
</div><!-- End Page Title Section -->
<!-- Start Blog Section -->
<div class="layer-stretch">
    <div class="layer-wrapper">
        <div class="row">
            <div class="col-lg-8 text-center">
                <div class="theme-material-card">
                    <ul class="blog-detail">
                        <li><i class="fa fa-calendar-o"></i>{{$single_post->created_at->format('d M Y')}}</li>
                        <li><i class="fa fa-comment-o"></i>{{count($single_post->reviews)}}</li>
                    </ul>
                    <h3 class="font-weight-700 template-title">@lang('home.template_list')</h3>
                    {!! $single_post->getTranslatedAttribute('body') !!}
                    <div class="row blog-meta">
                        <div class="col-sm-7 blog-tag">
                            <p>@lang('home.tags') : </p>
                            <ul>
                                @foreach ($single_post->tags as $tag)
                                <li><a href="{{route('tag.show',[$tag,$tag->slug])}}">{{ucwords($tag->getTranslatedAttribute('title'))}}, </a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-sm-5 text-right">
                            <ul class="social-list social-list-sm">
                                @include('front.common.social-networks')
                            </ul>
                        </div>
                    </div>
                </div>  
                @include('front.common.reviews',["reviews"=>$single_post->reviews])
                <form action="{{route('comment_store')}}" class="form-horizontal cform-2" method="post">
                @csrf
                <input type="hidden" value="{{get_class($single_post)}}" name="reviewable_type">
                <input type="hidden" value="{{$single_post->id}}" name="reviewable_id">
                @include('front.common.review-form')
                </form>
            </div>
            <div class="col-lg-4 col-sm-12">
                {!! ViewHelper::blog_sidebar() !!}
            </div>
        </div>
    </div>
</div><!-- End Blog Section -->
<!-- Start Emergency Section -->

@endsection

