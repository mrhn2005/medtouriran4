$("#package-page--packages-slider").owlCarousel({
    center: true,
    autoplay: true,
    items: 1,
    @if($is_rtl)
        rtl:true,
    @endif
    // margin: 10,
    loop: true,
    smartSpeed: 1000,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsiveClass: true,
    nav: false,
    navText: [
        '<i class="fa fa-angle-left"></i>',
        '<i class="fa fa-angle-right"></i>'
    ],
    navContainer: '.owl-theme .owl-nav',
    responsive: {
        0: {
            items: 1,
            // nav: false
        },
        600: {
            items: 1,
            // nav: false
        },
        992: {
            items: 3,
            // nav: false
        }
    }
});
$('#package-page--packages-slider .owl-prev').dblclick( () => {
    $('.owl-carousel').trigger('prev.owl.carousel');
    // alert('salam')
});
$('#package-page--packages-slider .owl-next').dblclick( () => {
    $('.owl-carousel').trigger('next.owl.carousel');
});
@endif