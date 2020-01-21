@php
    $is_rtl=Helper::isRtl();
@endphp
<link rel="stylesheet" href="{{mix('css/app.css')}}">

@if(!$is_rtl)
    <link rel="preload" href="{{mix('css/ltr-all.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{mix('css/ltr-all.css')}}"></noscript>

@else
    <link rel="preload" href="{{mix('css/rtl-all.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{mix('css/rtl-all.css')}}"></noscript>
@endif

<link rel="preload" href="{{mix('css/languages/'.App::getLocale().'.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{mix('css/languages/'.App::getLocale().'.css')}}"></noscript>
