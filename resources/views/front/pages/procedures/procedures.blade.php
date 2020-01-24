
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@section('content')	
        <!-- Start Page Title Section -->
    <div class="page-ttl procedures-bg">
        <div class="page-ttl-container">
            <h1>@lang('home.procedures')</h1>
        </div>
        <p class="page-breadcrumb"><a href="{{route('home')}}">@lang('home.home')</a>  <span>@lang('home.procedures')</span></p>
    </div><!-- End Page Title Section -->
    <!-- Start Service List Section --> 
    <div id="procedures-page" class="layer-stretch">
        <div class="layer-wrapper text-center">
            <div class="filter-menu m-0 mb-5">
                <button class="type-filter {{$active_category_slug=='all'?'active':''}}" data-filter="all">All</button>
                @foreach($categories->where('parent_id',null) as $category)
                <button class="type-filter {{$active_category_slug==$category->slug?'active':''}}" data-filter="{{strtolower(Helper::remove_space($category->title))}}">{{$category->getTranslatedAttribute('title')}}</button>   
                @endforeach
            </div>
            <div class="row flex-container-1">
                @foreach($categories->where('parent_id','!=',null) as $category)
                    @include('front.pages.procedures.includes.card')
                @endforeach
            </div>
        </div>
    </div><!-- End Service List Section -->
    
    <form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
        @csrf
        @include('front.common.form')
    </form>
@endsection

@section('js')
    <script src="{{asset('js/pages/procedures.js')}}" defer></script> 
@endsection