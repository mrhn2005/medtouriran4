<!-- Jquery Library 2.1 JavaScript-->
<script src="/js/jquery-2.1.4.min.js"></script>
<!-- Popper JavaScript-->
<script src="/js/popper.min.js"></script>
<!-- Bootstrap Core JavaScript-->
<script src="/js/bootstrap.min.js"></script>

<!-- Material Design Lite JavaScript-->
<script src="/js/material.min.js"></script>
<!-- Material Select Field Script -->
<script src="/js/mdl-selectfield.min.js"></script>
<!-- fullcalendar Plugin JavaScript-->
<script src="/js/jquery.flexslider.min.js"></script>
<!-- moment Plugin JavaScript-->
<script src="/js/moment.min.js"></script>


<!-- Owl Carousel Plugin JavaScript-->
<script src="/js/owl.carousel.min.js"></script>
<!-- Scrolltofixed Plugin JavaScript-->
<script src="/js/jquery-scrolltofixed.min.js"></script>
<!-- Magnific Popup Plugin JavaScript-->
<script src="/js/jquery.magnific-popup.min.js"></script>
<!-- WayPoint Plugin JavaScript-->
<script src="/js/jquery.waypoints.min.js"></script>
<!-- CounterUp Plugin JavaScript-->
<script src="/js/jquery.counterup.js"></script>
<!-- SmoothScroll Plugin JavaScript-->

<script src="//cdn.jsdelivr.net/jquery.lazy/1.7.1/jquery.lazy.min.js"></script>
<script src="//cdn.jsdelivr.net/jquery.lazy/1.7.1/plugins/jquery.lazy.youtube.min.js"></script>
<script src="/js/toastr.min.js"></script>
<script  src="/js/whatsapp.js?t={{time()}}"></script>

<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
<!--Custom JavaScript for Klinik Template-->
<script src="/js/custom.js"></script>
@if(!$is_rtl)
    <script src="/js/ltr.js?t={{time()}}"></script>
@else
    <script src="/js/bootstrap4rtl.min.js"></script>
    <script  src="/js/rtl.js?t={{time()}}"></script>
@endif
<script>
    $(window).load(function() {
        $('.preloader').fadeOut('slow');
    });

    $('body').on('click', '.slider-appointment a, #appointment-now, .hdr-apointment', function () {
        $('#make-appointment').modal('show');
    });

    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos ) {
            // if( prevScrollpos + 500 > currentScrollPos ){
            setTimeout(() =>{
                document.getElementById("header-1").style.top = "0";
                document.getElementById("mobile-menu--hdr").style.top = "0";
            },200);

            // }
        } else {
            document.getElementById("header-1").style.top = "-76px";
            document.getElementById("mobile-menu--hdr").style.top = "-70px";
        }
        prevScrollpos = currentScrollPos;
    }

    // let owl = $('.owl-carousel');
    function isMobile()
    {
        return (/Android|webOS|iPhone|iPad|iPod|Windows Phone|IEMobile|Mobile|BlackBerry/i.test(navigator.userAgent) ); 
    }
    var elm = jQuery('a[href*="whatsapp.com"]');
    jQuery.each(elm, function(index, value){
        var item = jQuery(value).attr('href');
        if(item.indexOf('chat') != -1){
            //nothing
        } else if (item.indexOf('web') != -1 && isMobile()){
            var itemLink = item;
            var newLink = itemLink.replace('web', 'api');
            jQuery(value).attr("href", newLink);
        } else if (item.indexOf('api') != -1 && !isMobile()){
            var itemLink = item;
            var newLink = itemLink.replace('api', 'web');
            jQuery(value).attr("href", newLink);
        } 
    });


    var lazyLoadInstance = new LazyLoad({
        elements_selector: ".lazy"
        // ... more custom settings?
    });
    @if(Session::has('message'))

        // TODO: change Controllers to use AlertsMessages trait... then remove this
        var alertType = {!! json_encode(Session::get('alert-type', 'info')) !!};
        var alertMessage = {!! json_encode(Session::get('message')) !!};
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-left",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        var alerter = toastr[alertType];
        @if($is_rtl)
            toastr.options.rtl = true;
        @endif
        if (alerter) {
            alerter(alertMessage);
        } else {
            toastr.error("toastr alert-type " + alertType + " is unknown");
        }

    @endif

    MaterialTextfield.prototype.checkValidity = function () {
    if (this.input_.validity.valid) {
        this.element_.classList.remove(this.CssClasses_.IS_INVALID);
    } else {
        if (this.element_.getElementsByTagName('input')[0].value.length > 0) {
            this.element_.classList.add(this.CssClasses_.IS_INVALID);
        }
    }
};
$(function() {
    $("iframe[data-src]").Lazy();
});
</script>
@yield('js')