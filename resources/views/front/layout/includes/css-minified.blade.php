
<link href="/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
{{--    <link href="/dist/fonts-all.css" rel="stylesheet">--}}


<link href="/fonts/comfortaa/comfortaa.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="/fonts/font-awesome/css/v4-shims.css">
<link rel="stylesheet" href="/fonts/medical-icons/css/wfmi-style.css">
<link rel="stylesheet" type="text/css" href="/fonts/flat-icon/flaticon.css">


<link rel="stylesheet" href="/dist/minified.css">
@if(!$is_rtl)
    {{--        <link rel="stylesheet" href="/dist/vendor.css">--}}
    <link rel="stylesheet" href="/fonts/nunito/nunito.css"/>
    <link rel="stylesheet" href="/dist/ltr-all.css?t={{time()}}">
@else
    <link rel="stylesheet" href="/css/bootstrap4rtl.css">
    <link rel="stylesheet" href="/fonts/tajawal/tajawal.css">
    <link rel="stylesheet" href="/fonts/rudaw/rudaw.css">
    <link rel="stylesheet" href="/dist/rtl-all.css?t={{time()}}">
@endif

<link href="{{asset('/css/languages/'.App::getLocale().'.css?t='.time())}}" rel="stylesheet">

<style>
 .onvis{
     display: none;
 }
</style>