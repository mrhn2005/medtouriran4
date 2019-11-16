<div id="hm-slider" class="slider-1">
    <div class="flexslider slider-wrapper">
        <form action="{{route('homesearch')}}" class="form-horizontal cform-2" method="get">

            <div class="slider-search">
                <div class="text-center p-3">
                    <div class="hm-slider-searchtext">@lang("home.slider_search_text")</div>
                    <div class="mdl-selectfield mdl-js-selectfield form-input is-upgraded mx-3">
                        <select name="category" class="mdl-selectfield__select" id="hm-treatmentlist">
                            <option value=""></option>
                            @foreach($categories as $category)
                                <option value="{{$category->title}}">{{$category->getTranslatedAttribute('title')}}</option>
                            @endforeach
                        </select>
                        <i class="fa fa-notes-medical hm-icon"></i><label class="mdl-selectfield__label" for="hm-treatmentlist">@lang('home.select_treatment')<i class="fa fa-angle-down hm-angle-down"></i></label>
                    </div>
                    <div class="mdl-selectfield mdl-js-selectfield form-input is-upgraded mx-3">
                        <select name="city" class="mdl-selectfield__select" id="hm-citylist">
                            <option value=""></option>
                            @foreach($cities as $city)
                                <option value="{{$city->title}}">{{$city->getTranslatedAttribute('title')}}</option>
                            @endforeach
                        </select>

                        <i class="fa fa-map-marker-alt hm-icon"></i><label class="mdl-selectfield__label" for="hm-citylist">@lang('home.select_city')<i class="fa fa-angle-down hm-angle-down"></i></label>
                    </div>

                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect button button-bordered-primary button-hover-primary mx-3">@lang('home.search')
                        <span class="mdl-button__ripple-container">
                        <span class="mdl-ripple is-animating" style="width: 266.913px; height: 266.913px; transform: translate(-50%, -50%) translate(64px, 22px);"></span>
                    </span>
                    </button>

                </div>
            </div>
        </form>
        <ul class="slides">
            <li>
                <div class="slider-info">
                    <h1 class="animated fadeInDown">@lang("home.medtouriran")</h1>
                    <p class="animated fadeInDown">@lang("home.medtouriran_info")</p>
                </div>
                <div class="slider-background-image" style="background-image: url('/images/background/bg1.jpg');"></div>
                <!--Make an Appointment  Button -->
                <!--<div class="slider-button slider-appointment">-->
                <!--    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect  animated fadeInUp">Make An Appointment<i class="fa fa-check"></i></a>-->
                <!--</div>-->
            </li>
        </ul>
    </div>
</div>