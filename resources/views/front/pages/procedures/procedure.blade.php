@extends('front.layout.front')

@section('title')
    @lang('home.procedure'): {{$category->getTranslatedAttribute('title')}} - {{setting(App::getLocale().'.title')}}
@endsection

@section('style')

@endsection

@section('content')	
    <!-- Start Page Title Section -->
    <div class="page-ttl" style="background: url({{Helper::placeholder(Voyager::image($category->main_image))}})">
{{--        <div class="layer-stretch">--}}
            <div class="page-ttl-container">
                <h1>{{$category->getTranslatedAttribute('title')}}</h1>
{{--                <p><a href="{{route('home')}}">Home</a> &#8594; <a href="{{route('procedure.index')}}">Procedures</a> &#8594; <span>{{$category->getTranslatedAttribute('title')}}</span></p>--}}
            </div>
{{--        </div>--}}
    </div><!-- End Page Title Section -->
    <!-- Start Blog Section -->
    <div class="layer-stretch" id="procedure-page">
        <div class="layer-wrapper">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="theme-material-card">
{{--                        <div class="theme-img blog-picture" id="procedure-page--main-image">--}}
{{--                            <img class="" src="{{Helper::placeholder(Voyager::image($category->main_image))}}" alt="{{$category->getTranslatedAttribute('title')}}">--}}
{{--                        </div>--}}
{{--                        <h2 class="blog-ttl">{{$category->getTranslatedAttribute('title')}}</h2>--}}
                        <div class="blog-post" id="procedure-page--post">
                            <h3 class="font-weight-700 template-title">@lang('home.template_list')</h3>
{{--                            <p>@lang('home.template_list')</p>--}}
                            {!! $category->getTranslatedAttribute('body') !!}
                        </div>
                        
                        <div class="row blog-meta"  id="procedure-page--metatags">
                            <div class="col-sm-7 blog-tag">

                            </div>
                            <div class="col-sm-5 text-right" >
                                <ul class="social-list social-list-sm">
                                    @foreach($socials as $social)
                                        <li><a href="{{$social->getTranslatedAttribute('link')}}" target="_blank"><i class="social-pad {{$social->icon}}"></i></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    @php
    $count_packages=count($category->packages->pluck('children')->collapse());
    @endphp
    @if(count($category->packages)>0)
    <div class="parallax-background lazy" id="package-page--packages" data-bg="url(/images/packages/city/city-package.jpg)">
            <div class="layer-stretch">
            <div class="layer-wrapper">
                <div class="layer-ttl">
                    <h3>@lang('home.our_offers')</h3>
                </div>
                <div class="layer-container">
                    <div id="package-page--packages-slider" class="@if($count_packages>2)owl-carousel owl-theme theme-owl-dot @endif">
                        @foreach($category->packages as $package)
                            @foreach($package->children as $child)
                            <div class="package-page--packages package-page--packages-box {{$child->city_class()}}">
                                <div class="package-page--packages-overlay"></div>
                                <div class="package-page--packages-title">
                                    <h2>{{$package->getTranslatedAttribute('title')}}</h2>
                                    <h3>{{$child->city()->getTranslatedAttribute('title')}}</h3>
                                </div>
                                <div class="package-page--packages-price">
                                    <h3>${{$child->getTranslatedAttribute('price')}}</h3>
                                </div>
                                <div class="package-page--packages-options">
                                    <ul class="package-page--packages-list">
                                        @foreach($child->items as $item)
                                            <li>{{$item->getTranslatedAttribute('title')}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="package-page--packages-button">
                                         <button class="button--default button--secendary">@lang('home.book')</button>	

                                </div>

                            </div>
                            @endforeach
                        @endforeach
                    </div>
                    @if($count_packages>2)
                    <div class="owl-theme">
                        <div class="owl-controls">
                            <div class="custom-nav owl-nav"></div>
                        </div>
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div><!-- End Doctor Section -->
    @endif

    <form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
    @csrf
    @include('front.common.form')
    </form>

    <!-- PACKAGE BOOK MODAL -->
    @include('front.common.modal-form')
    <!-- End Make an Appointment Modal -->
@endsection

@section('js')

    <script type="text/javascript">

        //Package book Tag
        $('body').on('click', 'button.package-page--book-btn', function () {
            $('#package-page--book-modal').modal('show');
        });
        @if($count_packages>2)
        $("#package-page--packages-slider").owlCarousel({
            center: true,
            autoplay: true,
            items: 1,
            @if($is_rtl)
            rtl:true,
            @endif
            // margin: 10,
            loop: true,
            smartSpeed: 1000,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            nav: false,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            navContainer: '.owl-theme .owl-nav',
            responsive: {
                0: {
                    items: 1,
                    // nav: false
                },
                600: {
                    items: 1,
                    // nav: false
                },
                992: {
                    items: 3,
                    // nav: false
                }
            }
        });
        $('#package-page--packages-slider .owl-prev').dblclick( () => {
            $('.owl-carousel').trigger('prev.owl.carousel');
            // alert('salam')
        });
        $('#package-page--packages-slider .owl-next').dblclick( () => {
            $('.owl-carousel').trigger('next.owl.carousel');
        });
        @endif
    </script>

@endsection
