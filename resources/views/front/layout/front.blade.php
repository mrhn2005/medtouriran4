<!DOCTYPE html>
<html dir="{{$is_rtl?'rtl':'ltr'}}" lang="{{App::getLocale()}}">
<head>
    @include('front.layout.includes.meta')

    @yield('meta')
    <!-- Site Title -->
    <title>
	@hasSection('title')
    	@yield('title')
    @else
     	{{setting(App::getLocale().'.title')}}	
    @endif
    </title>
    
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="/images/logo-color.png" />
    <style>
    #preloader{
    width: 100vw;
    height: 100vh;
    z-index: 10000;
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    background: white;
}

.preloader-container{
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.preloader-container img{
    width: 11rem;
    animation-name: heartbeat;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-direction: alternate-reverse;
}
.wa__popup_chat_box{
    opacity: 0;
}
    </style>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111472260-4"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-111472260-4');
    </script>

    <!-- Crisp start -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
  // Run your Crisp JS include here...

    window.$crisp=[];
    window.CRISP_WEBSITE_ID="b9a5fe60-cb04-4598-872e-838b0e7a4a9a";

    (function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
    });
    </script>
    <!-- Crisp End -->

    @include('front.layout.includes.css-minified')

    @yield('style')

</head>

<body>
    <div class="preloader" id="preloader">
        <div class="preloader-container">
            <img src="/images/preloader/preloader.svg"  alt="medtouriran-logo">
        </div>
    </div>

    {!! ViewHelper::menu() !!}

    @yield('content')

    {!! ViewHelper::footer() !!}

    <!-- fix-social-bar BEGIN -->
    {!! ViewHelper::socials() !!}


    {!! ViewHelper::whatsapp() !!}

    <!-- **********Included Scripts*********** -->
    @include('front.layout.includes.js-minified')

</body>

</html>