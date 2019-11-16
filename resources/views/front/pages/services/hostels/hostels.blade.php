
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@section('style')

@endsection

@section('content')	
        <!-- Start Page Title Section -->
    <div class="page-ttl">
{{--        <div class="layer-stretch">--}}
            <div class="page-ttl-container">
                <h1>Hostels & Apartments</h1>
{{--                <p><a href="{{route('home')}}">Home</a> &#8594; <a href="{{route('service')}}">Services</a> &#8594; <span>Our Hostels & Apartments</span></p>--}}
            </div>
{{--        </div> --}}
    </div><!-- End Page Title Section -->
    <!-- Start Doctor List Section -->
    <div id="hostels-page" class="layer-stretch">
        <div class="layer-wrapper text-center">
            <!--<div class="row">-->
                <div class="text-center p-2 pt-4 pb-4">
                    <div class="filter-menu">
                        <button class="city-filter active" data-filter="all">All</button>
                        <button class="city-filter" data-filter="tehran">Tehran</button>
                        <button class="city-filter" data-filter="shiraz">Shiraz</button>
                        <button class="city-filter" data-filter="mashhad">Mashhad</button>
                    </div>
                </div>
            <!--</div>-->
            <div class="row">
                <div class="col-md-6 col-lg-4 c-filter tehran">
                    <div class="theme-block theme-block-hover">
                        <div class="theme-block-picture">
                            <img src="/images/hostels/r1.jpg" alt="">
                        </div>
                        <div class="doctor-name">
                            <h4><a>Apartment</a></h4>
                        </div>
                        <div class="doctor-details">
                            <div class="doctor-specility">
                                <p>Tehran , Punak</p>
                            </div>
                            <div class="doctor-details-extra">
                                <div class="doctor-details-extra-3">
                                    <p><b><i class="fa fa-couch"></i>Furnished</b></p>
                                    <p><i class="fa fa-child"></i>Capacity : 4</p>
                                    <p><i class="fa fa-home"></i>hostels : 2</p>
                                    <p><i class="fa fa-bed"></i>Beds : 3</p>
                                    <p><i class="fa fa-swimming-pool"></i>Pool</p>
                                    <p><i class="fa fa-parking"></i>Parking</p>
                                    <p><i class="fa fa-wind"></i>Air conditioning</p>
                                    <p><b><i class="fa fa-moon"></i>Cost per night : $750</b></p>
                                </div>
                            </div>
                            <a href="{{route('service.hostel.show')}}">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary my-3">More Info
                                    <span class="mdl-button__ripple-container">
                                        <span class="mdl-ripple is-animating" style="width: 256.724px; height: 256.724px; transform: translate(-50%, -50%) translate(69px, 30px);"></span>
                                    </span>
                                </button>
                             </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 c-filter mashhad">
                    <div class="theme-block theme-block-hover">
                        <div class="theme-block-picture">
                            <img src="/images/hostels/r2.jpg" alt="">
                        </div>
                        <div class="doctor-name">
                            <h4><a>Suite</a></h4>
                        </div>
                        <div class="doctor-details">
                            <div class="doctor-specility">
                                <p>Mashhad , felan</p>
                            </div>
                            <div class="doctor-details-extra">
                                <div class="doctor-details-extra-3">
                                    <p><b><i class="fa fa-couch"></i>Furnished</b></p>
                                    <p><i class="fa fa-child"></i>Capacity : 4</p>
                                    <p><i class="fa fa-home"></i>hostels : 2</p>
                                    <p><i class="fa fa-bed"></i>Beds : 3</p>
                                    <p><i class="fa fa-swimming-pool"></i>Pool</p>
                                    <p><i class="fa fa-parking"></i>Parking</p>
                                    <p><i class="fa fa-wind"></i>Air conditioning</p>
                                    <p><b><i class="fa fa-moon"></i>Cost per night : $750</b></p>
                                </div>
                            </div>
                            <a href="{{route('service.hostel.show')}}">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary my-3">More Info
                                    <span class="mdl-button__ripple-container">
                                        <span class="mdl-ripple is-animating" style="width: 256.724px; height: 256.724px; transform: translate(-50%, -50%) translate(69px, 30px);"></span>
                                    </span>
                                </button>
                             </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 c-filter Shiraz">
                    <div class="theme-block theme-block-hover">
                        <div class="theme-block-picture">
                            <img src="/images/hostels/r3.jpg" alt="">
                        </div>
                        <div class="doctor-name">
                            <h4><a>Hostel</a></h4>
                        </div>
                        <div class="doctor-details">
                            <div class="doctor-specility">
                                <p>Shiraz , Bahman</p>
                            </div>
                            <div class="doctor-details-extra">
                                <div class="doctor-details-extra-3">
                                    <p><b><i class="fa fa-couch"></i>Furnished</b></p>
                                    <p><i class="fa fa-child"></i>Capacity : 4</p>
                                    <p><i class="fa fa-home"></i>hostels : 2</p>
                                    <p><i class="fa fa-bed"></i>Beds : 3</p>
                                    <p><i class="fa fa-swimming-pool"></i>Pool</p>
                                    <p><i class="fa fa-parking"></i>Parking</p>
                                    <p><i class="fa fa-wind"></i>Air conditioning</p>
                                    <p><b><i class="fa fa-moon"></i>Cost per night : $750</b></p>
                                </div>
                            </div>
                            <a href="{{route('service.hostel.show')}}">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary my-3">More Info
                                    <span class="mdl-button__ripple-container">
                                        <span class="mdl-ripple is-animating" style="width: 256.724px; height: 256.724px; transform: translate(-50%, -50%) translate(69px, 30px);"></span>
                                    </span>
                                </button>
                             </a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="theme-pagination">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">10</a></li>
            </ul>
        </div>
    </div><!-- End Doctor List Section -->
@endsection

