<script src="/js/jquery-2.1.4.min.js"></script>
<script  src="/dist/minified.js" defer></script>
<!-- <script  src="/js/smoothscroll.min.js"></script> -->
<script>
$(window).load(function() {
        $('.preloader').fadeOut('slow');
    });

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
