
@extends('front.layout.front')

@section('title')
{{setting(App::getLocale().'.title')}}
@endsection

@section('content')	
<!-- Start Page Title Section -->
<div class="page-ttl about-bg">
{{--    <div class="layer-stretch">--}}
        <div class="page-ttl-container">
            <h1>About Medical Tourism</h1>
        </div>
        <p><a href="{{route('home')}}">Home</a> &#8594; <span>MedTourIran</span></p>
{{--    </div>--}}
</div><!-- End Page Title Section -->
<!-- Start Blog List Section -->
<div class="layer-stretch" id="aboutMedical-page">
    <div class="layer-wrapper">
        <div class="row">
            <div class="col-lg-8 text-center">
                <div class="col-md-12 blog-block-3">
                    <div class="blog-list-picture">
                        <div class="theme-img">
                            <img src="/uploads/blog-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="blog-list-ttl">
                        <h3><a href="#">Which Healthy Food Fads Should You Follow? Lorem ipsum dolor sit amet</a></h3>
                    </div>
                    <div class="blog-list-meta">
                        <p>Posted By Daniel Barnes On 27 Apr 2017</p>
                    </div>  
                    <div class="blog-list-post">
                        <p class="paragraph-medium paragraph-black">
                            <span>Restinguet citius, si ardentem acceperit. Non est enim vitium in oratione solum, sed etiam in moribus. In schola desinis. An haec ab eo non dicuntur? Longum est enim ad omnia respondere, quae a te dicta sunt. Cetera illa adhibebat, quibus demptis negat se Epicurus intellegere quid sit bonum.</span>
                            <a href="#">(Read More)</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-12 blog-block-3">
                    <div class="blog-list-picture">
                        <div class="theme-img">
                            <img src="/uploads/blog-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="blog-list-ttl">
                        <h3><a href="#">A Broken Heart Can Hurt More Than You Think, Lorem ipsum dolor sit amet</a></h3>
                    </div>
                    <div class="blog-list-meta">
                        <p>Posted By Jiya Shen On 29 Jan 2017</p>
                    </div>  
                    <div class="blog-list-post">
                        <p class="paragraph-medium paragraph-black">
                            <span>Restinguet citius, si ardentem acceperit. Non est enim vitium in oratione solum, sed etiam in moribus. In schola desinis. An haec ab eo non dicuntur? Longum est enim ad omnia respondere, quae a te dicta sunt. Cetera illa adhibebat, quibus demptis negat se Epicurus intellegere quid sit bonum.</span>
                            <a href="#">(Read More)</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-12 blog-block-3">
                    <div class="blog-list-picture">
                        <div class="theme-img">
                            <img src="/uploads/blog-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="blog-list-ttl">
                        <h3>
                            <a href="#">Keep it Clean: Make Sure Your Fruits and Veggies Are Safe and Healthy</a>
                        </h3>
                    </div>
                    <div class="blog-list-meta">
                        <p>Posted By Micheal On 24 Jan 2017</p>
                    </div>  
                    <div class="blog-list-post">
                        <p class="paragraph-medium paragraph-black">
                            <span>Restinguet citius, si ardentem acceperit. Non est enim vitium in oratione solum, sed etiam in moribus. In schola desinis. An haec ab eo non dicuntur? Longum est enim ad omnia respondere, quae a te dicta sunt. Cetera illa adhibebat, quibus demptis negat se Epicurus intellegere quid sit bonum.</span>
                            <a href="#">(Read More)</a>
                        </p>
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
            <div class="col-lg-4">
                <div class="theme-material-card">
                    <div class="sub-ttl">Recent Post</div>
                    <a href="#" class="row blog-recent">
                        <div class="col-4 blog-recent-img">
                            <img class="img-responsive img-thumbnail" src="/uploads/recent-1.jpg" alt="">
                        </div>
                        <div class="col-8 blog-recent-post">
                            <h4>Why Food Poisoning happened and How To</h4>
                            <p>08 Jun 2017</p>
                        </div>
                    </a>
                    <a href="#" class="row blog-recent">
                        <div class="col-4 blog-recent-img">
                            <img class="img-responsive img-thumbnail" src="/uploads/recent-2.jpg" alt="">
                        </div>
                        <div class="col-8 blog-recent-post">
                            <h4>Which Healthy Food Fads Should You Follow?</h4>
                            <p>27 Apr 2017</p>
                        </div>
                    </a>
                    <a href="#" class="row blog-recent">
                        <div class="col-4 blog-recent-img">
                            <img class="img-responsive img-thumbnail" src="/uploads/recent-3.jpg" alt="">
                        </div>
                        <div class="col-8 blog-recent-post">
                            <h4>A Broken Heart Can Hurt More Than You Think</h4>
                            <p>29 Jan 2017</p>
                        </div>
                    </a>
                    <a href="#" class="row blog-recent">
                        <div class="col-4 blog-recent-img">
                            <img class="img-responsive img-thumbnail" src="/uploads/recent-4.jpg" alt="">
                        </div>
                        <div class="col-8 blog-recent-post">
                            <h4>Keep it Clean: Make Sure Your Fruits and Veggies</h4>
                            <p>24 Jan 2017</p>
                        </div>
                    </a>
                    <a href="#" class="row blog-recent">
                        <div class="col-4 blog-recent-img">
                            <img class="img-responsive img-thumbnail" src="/uploads/recent-5.jpg" alt="">
                        </div>
                        <div class="col-8 blog-recent-post">
                            <h4>Should I bring my child in for a routine physical?</h4>
                            <p>15 Jan 2017</p>
                        </div>
                    </a>
                </div>
                <div class="theme-material-card">
                    <div class="sub-ttl">Trending Post</div>
                    <div class="flexslider theme-flexslider">
                        <ul class="slides">
                            <li>
                                <div class="theme-flexslider-container">
                                    <img src="/uploads/blog-1.jpg" alt="" />
                                    <h4 class="font-16 text-left"><a href="#">Why Food Poisoning happened and How To – Home Remedy</a></h4>
                                    <p class="text-left primary-color">24 Aug 2017</p>
                                </div>
                            </li>
                            <li>
                                <div class="theme-flexslider-container">
                                    <img src="/uploads/blog-2.jpg" alt="" />
                                    <h4 class="font-16 text-left"><a href="#">All you need to know about Chinese Food, Is it good or bad?</a></h4>
                                    <p class="text-left primary-color">24 Jul 2017</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="theme-material-card">
                    <div class="sub-ttl">Popular Tags</div>
                    <a href="#" class="theme-tag">Health</a>
                    <a href="#" class="theme-tag">Wellness</a>
                    <a href="#" class="theme-tag theme-tag-colored">Science</a>
                    <a href="#" class="theme-tag">Clinic</a>
                    <a href="#" class="theme-tag">Doctor</a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Blog List Section -->

<div id="booking-form" class="layer-stretch">
    <div class="layer-wrapper">
        <div class="row">
            <div class="col-lg-12 text-center">    
                <div class="theme-material-card">
                    <div class="sub-ttl layer-ttl-white">Contact Us</div>
                    <div class="row comment-form">
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="booking-form--name">
                                <label class="mdl-textfield__label" for="comment-name">Full Name <em> *</em></label>
                                <span class="mdl-textfield__error">Please Enter Valid Name!</span>
                                <span class="mdl-textfield__info">For Example: Elham Jafari</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" pattern="[0-9+-]*" id="booking-form--number">
                                <label class="mdl-textfield__label" for="comment-name">Mobile Number <em> * </em><small>( WhatsApp is Prefferd )</small></label>
                                <span class="mdl-textfield__error">Please Enter Valid Number! For Example: +989120000000</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" pattern="[A-Z,a-z, ]*" id="booking-form--country">
                                <label class="mdl-textfield__label" for="comment-name">Country <em> *</em></label>
                                <span class="mdl-textfield__info">For Example: Iran</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="booking-form--email">
                                <label class="mdl-textfield__label" for="comment-email">Email</label>
                                <span class="mdl-textfield__error">Please Enter Valid Email!</span>
                                <span class="mdl-textfield__info">For Example: example@gmail.com</span>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mdl-textfield mdl-js-textfield form-input">
                                <textarea class="mdl-textfield__input" rows="4" id="booking-form--comment-message"></textarea>
                                <label class="mdl-textfield__label" for="comment-message">How can we help you...?</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-submit">
                                <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary" id="booking-form--submit-btn">Submit</button>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </div>    
    </div>    
</div>
@endsection

