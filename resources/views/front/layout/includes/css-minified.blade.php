
<!-- <link href="/fonts/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
{{-- <link rel="preload" href="{{asset('fonts/comfortaa/1Pt_g8LJRfWJmhDAuUsSQamb1W0lwk4S4WjMDrMfIA.woff2')}}" as="font"> --}}
{{-- <link rel="preload" href="{{asset('dist/fonts/flexslider-icon.woff')}}" as="font"> --}}
<link href="/fonts/comfortaa/comfortaa.css" rel="stylesheet" async>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" async>
<link rel="stylesheet" href="/fonts/font-awesome/css/v4-shims.css" async>
<link rel="stylesheet" href="/fonts/medical-icons/css/wfmi-style.css" async>
<link rel="stylesheet" type="text/css" href="/fonts/flat-icon/flaticon.css" async>


<link rel="stylesheet" href="/dist/minified.css">
@if(!$is_rtl)
    <link rel="stylesheet" href="/fonts/nunito/nunito.css" async>
    <link rel="stylesheet" href="/dist/ltr-all.css?t={{time()}}">
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