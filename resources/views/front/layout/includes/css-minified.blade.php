
<link rel="preload" href="/fonts/comfortaa/comfortaa.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="/fonts/comfortaa/comfortaa.css"></noscript>

<link rel="preload" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"></noscript>

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
    <link rel="preload" href="/css/bootstrap4rtl.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/css/bootstrap4rtl.css"></noscript>

    <link rel="preload" href="/fonts/tajawal/tajawal.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/fonts/tajawal/tajawal.css"></noscript>

    <link rel="preload" href="/fonts/rudaw/rudaw.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/fonts/rudaw/rudaw.css"></noscript>

    <link rel="preload" href="/dist/rtl-all.css?t={{time()}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="/dist/rtl-all.css?t={{time()}}"></noscript>

@endif

<link rel="preload" href="{{asset('/css/languages/'.App::getLocale().'.css?t='.time())}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{asset('/css/languages/'.App::getLocale().'.css?t='.time())}}"></noscript>

<style>
 .onvis{
     display: none;
 }
</style>