
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection



@section('content')	
        <!-- Start Page Title Section -->
    <div class="page-ttl">
{{--        <div class="layer-stretch">--}}
            <div class="page-ttl-container">
                <h1>Medical Centers</h1>
{{--                <p><a href="{{route('home')}}">Home</a> &#8594; <a href="{{route('service')}}">Services</a> &#8594; <span>Medical Centers</span></p>--}}
            </div>
{{--        </div> --}}
    </div><!-- End Page Title Section -->
    <!-- Start Doctor List Section -->
    <div id="medical-centers-page" class="layer-stretch">
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
                    <div class="rating-stars">
                        <span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                        </span>
                    </div>
                    <div class="theme-block theme-block-hover">
                        <div class="theme-block-picture">
                            <img src="/images/medicalCenters/erfan.jpg" alt="">
                        </div>
                        <div class="doctor-name">
                            <h4><a>Erfan Hospital</a></h4>
                        </div>
                        <div class="doctor-details">
                            <div class="doctor-specility">
                                <p>Location : Tehran</p>
                            </div>
                            <div class="doctor-descreiption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dicta blanditiis velit ullam quis quod possimus cum repellendus illum iure!</p>
                            </div>
                            <!--<div class="doctor-details-extra">-->
                            <!--    <div class="doctor-details-extra-3">-->
                                    <!--<p><i class="fa fa-check"></i>Location: Tehran</p>-->
                            <!--        <p><i class="fa fa-child"></i>Person: 3</p>-->
                            <!--        <p><i class="fa fa-bed"></i>Beds: 2</p>-->
                            <!--        <p><i class="fa fa-money"></i>Cost: 500$</p>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <a href="{{route('service.medicalCenter.show')}}">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary my-3">Read More
                                    <span class="mdl-button__ripple-container">
                                        <span class="mdl-ripple is-animating" style="width: 256.724px; height: 256.724px; transform: translate(-50%, -50%) translate(69px, 30px);"></span>
                                    </span>
                                </button>
                             </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 c-filter mashhad">
                    <div class="rating-stars">
                        <span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </span>
                    </div>
                    <div class="theme-block theme-block-hover">
                        <div class="theme-block-picture">
                            <img src="/images/medicalCenters/milad.jpg" alt="">
                        </div>
                        <div class="doctor-name">
                            <h4><a>Milad Hospital</a></h4>
                        </div>
                        <div class="doctor-details">
                            <div class="doctor-specility">
                                <p>Location : Tehran</p>
                            </div>
                            <div class="doctor-descreiption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dicta blanditiis velit ullam quis quod possimus cum repellendus illum iure!</p>
                            </div>
                            <!--<div class="doctor-details-extra">-->
                            <!--    <div class="doctor-details-extra-3">-->
                                    <!--<p><i class="fa fa-check"></i>Location: Mashhad</p>-->
                            <!--        <p><i class="fa fa-child"></i>Person: 4</p>-->
                            <!--        <p><i class="fa fa-bed"></i>Beds: 3</p>-->
                            <!--        <p><i class="fa fa-money"></i>Cost: 700$</p>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <a href="{{route('service.medicalCenter.show')}}">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary my-3">Read More
                                    <span class="mdl-button__ripple-container">
                                        <span class="mdl-ripple is-animating" style="width: 256.724px; height: 256.724px; transform: translate(-50%, -50%) translate(69px, 30px);"></span>
                                    </span>
                                </button>
                             </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 c-filter Shiraz">
                    <div class="rating-stars">
                        <span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </span>
                    </div>
                    <div class="theme-block theme-block-hover">
                        <div class="theme-block-picture">
                            <img src="/images/medicalCenters/jam.jpg" alt="">
                        </div>
                        <div class="doctor-name">
                            <h4><a>Jam Hospital</a></h4>
                        </div>
                        <div class="doctor-details">
                            <div class="doctor-specility">
                                <p>Location : Tehran</p>
                            </div>
                            <div class="doctor-descreiption">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dicta blanditiis velit ullam quis quod possimus cum repellendus illum iure!</p>
                            </div>
                            <!--<div class="doctor-details-extra">-->
                            <!--    <div class="doctor-details-extra-3">-->
                                    <!--<p><i class="fa fa-check"></i>Location: Shiraz</p>-->
                                    <!--<p><i class="fa fa-child"></i>Person: 5</p>-->
                                    <!--<p><i class="fa fa-bed"></i>Beds: 3</p>-->
                            <!--        <p><i class="fa fa-money"></i>Cost: 750$</p>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <a href="{{route('service.medicalCenter.show')}}">
                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary my-3">Read More
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
    
<div id="hm-booking-form" class="layer-stretch">
    <div class="layer-wrapper">
        <div class="row">
            <div class="col-lg-12 text-center">    
                <div class="theme-material-card">
                    <div class="sub-ttl layer-ttl-white">Contact Us</div>
                    <div class="row comment-form">
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="hm-booking-form--name">
                                <label class="mdl-textfield__label" for="comment-name">Full Name <em> *</em></label>
                                <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                                <span class="mdl-textfield__info">For Example: Elham Jafari</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" pattern="[0-9+-]*" id="hm-booking-form--number">
                                <label class="mdl-textfield__label" for="booking-form--number">Mobile Number <em> * </em><small>( WhatsApp is Prefferd )</small></label>
                                <span class="mdl-textfield__error">Please Enter Valid Number! For Example: +989120000000</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="hm-booking-form--country">
                                <label class="mdl-textfield__label" for="comment-name">Country <em> *</em></label>
                                <span class="mdl-textfield__info">For Example: Iran</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="hm-booking-form--email">
                                <label class="mdl-textfield__label" for="comment-email">Email</label>
                                <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                                <span class="mdl-textfield__info">For Example: example@gmail.com</span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mdl-textfield mdl-js-textfield form-input">
                                <textarea class="mdl-textfield__input" rows="4" id="hm-booking-form--comment-message"></textarea>
                                <label class="mdl-textfield__label" for="comment-message">How can we help you...?</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-submit">
                                <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary" id="hm-booking-form--submit-btn">Submit</button>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>    
    </div>    
</div>
@endsection

