
<script  src="{{mix('js/app.js')}}" defer></script>

<!--Custom JavaScript for Klinik Template-->
@if(!$is_rtl)
    <script src="{{mix('js/ltr-all.js')}}" defer></script>
@else
    <script  src="{{mix('js/rtl-all.js')}}" defer></script>
@endif
<script>
    var session_has_message ='{{Session::has('message')}}';
    var is_rtl = '{{$is_rtl}}';
    var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
    var alertMessage = {!! json_encode(Session::get('message')) !!};
</script>
<script src="{{asset('/js/pages/front-blade.js?v='.time())}}" defer></script>
@yield('js')
