
<!-- <link href="/fonts/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
{{-- <link rel="preload" href="{{asset('fonts/comfortaa/1Pt_g8LJRfWJmhDAuUsSQamb1W0lwk4S4WjMDrMfIA.woff2')}}" as="font"> --}}
{{-- <link rel="preload" href="{{asset('dist/fonts/flexslider-icon.woff')}}" as="font"> --}}
<link href="/fonts/comfortaa/comfortaa.css" rel="stylesheet" async>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preload" href="/fonts/font-awesome/css/v4-shims.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/fonts/font-awesome/css/v4-shims.css"></noscript>

<link rel="preload" href="/fonts/font-awesome/css/v4-shims.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/fonts/font-awesome/css/v4-shims.css"></noscript>

<link rel="preload" href="/fonts/medical-icons/css/wfmi-style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/fonts/medical-icons/css/wfmi-style.css"></noscript>

<link rel="preload" href="/fonts/flat-icon/flaticon.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/fonts/flat-icon/flaticon.css"></noscript>

<link rel="preload" href="/dist/minified.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/dist/minified.css"></noscript>
@if(!$is_rtl)
    <link rel="preload" href="/fonts/nunito/nunito.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/fonts/nunito/nunito.css"></noscript>

    <link rel="preload" href="/dist/ltr-all.css?t={{time()}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/dist/ltr-all.css?t={{time()}}"></noscript>

@else
    <link rel="stylesheet" href="/css/bootstrap4rtl.css">
    <link rel="stylesheet" href="/fonts/tajawal/tajawal.css" async>
    <link rel="stylesheet" href="/fonts/rudaw/rudaw.css" async>
    <link rel="stylesheet" href="/dist/rtl-all.css?t={{time()}}" async>
@endif

<link href="{{asset('/css/languages/'.App::getLocale().'.css?t='.time())}}" rel="stylesheet">

<style>
 .onvis{
     display: none;
 }
</style>