
<script  src="/dist/minified.js" defer></script>
<!-- <script  src="/js/smoothscroll.min.js"></script> -->
<script>
var callback = function(){
    var s = document.getElementById("preloader").style;

    s.opacity = 1;
    (function fade(){(s.opacity-=.1)<0?s.display="none":setTimeout(fade,40)})();
};

if (
    document.readyState === "complete" ||
    (document.readyState !== "loading" && !document.documentElement.doScroll)
) {
  callback();
} else {
  document.addEventListener("DOMContentLoaded", callback);
}

</script>
<!--Custom JavaScript for Klinik Template-->
@if(!$is_rtl)
    <script src="/dist/ltr-all.js?t={{time()}}" defer></script>
@else
    <script src="/js/bootstrap4rtl.min.js" defer></script>
    <script  src="/dist/rtl-all.js?t={{time()}}" defer></script>
@endif
<script src="{{asset('/js/languages/'.App::getLocale().'.js?t='.time())}}" defer></script>
<script>
    var session_has_message ='{{Session::has('message')}}';
    var is_rtl = '{{$is_rtl}}';
    var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
    var alertMessage = {!! json_encode(Session::get('message')) !!};
</script>
<script src="{{asset('/js/front-blade.js')}}" defer></script>
@yield('js')
