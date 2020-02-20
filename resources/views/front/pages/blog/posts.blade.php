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
        <a href="{{route('home')}}">@lang('home.home')</a> 
        @if(\Request::is('*blogs/tag*'))
        <a href="{{route('blog.index')}}">@lang('home.blogs')</a> 
        <span>#{{$tag->getTranslatedAttribute('title')}}</span>
        @else
        <span>@lang('home.blogs')</span>
        @endif
    </p>
</div><!-- End Page Title Section -->
<!-- Start Blog List Section -->
<div class="layer-stretch" id="blogs-page">
    <div class="layer-wrapper">
        <div class="row">
            <div class="col-lg-8 text-center" id="myList">
                @foreach($posts as $post)
                    <div class="theme-material-card blog-full-block myList-item">
                        <a href="{{route('blog.show',[$post,$post->slug])}}">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="theme-img theme-img-scalerotate">
                                        <img class="lazy" data-src="{{Helper::placeholder(Voyager::image($post->thumbnail('medium')))}}" alt="{{$post->getTranslatedAttribute('title')}}">
                                    </div>
                                </div>
                                <div class="col-sm-8 flex-col">
                                    <div class="blog-full-ttl">
                                        <h3><span class="myList-title">{{$post->getTranslatedAttribute('title')}}</span></h3>
                                    </div>
                                    <div class="blog-full-description">{{$post->getTranslatedAttribute('excerpt')}}</div>
                                    <div class="blog-full-ftr">
                                        <span class="pull-left blog-full-author"><i class="fa fa-date"></i>{{$post->created_at->format('d M Y')}}</span>
                                        <span class="pull-right anchor-icon">
                                            @lang('home.read_more') <i class="fa fa-arrow-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                {{$posts->links()}}
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="theme-material-card text-center" id="search">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input pl-40">
                        <input class="mdl-textfield__input" type="text" id="sidebar-search" onkeyup="searchBar()">
                        <label class="mdl-textfield__label pl-40" for="sidebar-search">@lang('home.enter_keyword')</label>
                        <i class="fa fa-search search-button left-0"></i>
                    </div>
                </div>
                {!! ViewHelper::blog_sidebar() !!}
            </div>

        </div>
    </div>
</div><!-- End Blog List Section -->

<form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
@csrf
@include('front.common.form')
</form>
@endsection



@section('js')
    <script>
        function searchBar() {
            // Declare variables
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById('sidebar-search');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myList");
            li = ul.getElementsByClassName('myList-item');

            // Loop through all list items, and hide those who don't match the search query
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByClassName("myList-title")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
@endsection