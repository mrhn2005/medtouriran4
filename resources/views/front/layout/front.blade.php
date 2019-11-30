<!DOCTYPE html>
<html dir="{{$is_rtl?'rtl':'ltr'}}" lang="{{App::getLocale()}}">
<head>
    @include('front.layout.includes.meta')
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
    CRISP_RUNTIME_CONFIG = {
        locale : "{{App::getLocale()}}"
    };

    window.$crisp=[];window.CRISP_WEBSITE_ID="b9a5fe60-cb04-4598-872e-838b0e7a4a9a";(function(){d=document;s=d.createElement("script");s.src="/js/crisp.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
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