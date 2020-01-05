// $(document).ready(function() {



$("#testimonial-slider").owlCarousel({
    center: true,
    autoplay: true,
    items: 1,
    dots: true,
    rtl:true,
    loop: true,
    smartSpeed: 1000,
    // autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsiveClass: true,
    // nav: true,
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ]
    // navContainer: '.owl-theme .owl-nav'
});
$('#hm-testimonial .owl-prev').dblclick( () => {
    $('#testimonial-slider.owl-carousel').trigger('prev.owl.carousel');
    alert('salam');
});
$('#hm-testimonial .owl-next').click( () => {
    $('#testimonial-slider.owl-carousel').trigger('next.owl.carousel');
});

//Home Doctor Slider
$("#hm-packages-slider").owlCarousel({
    center: true,
    autoplay: true,
    rtl:true,
    // items: 3,
    // margin: 10,
    loop: true,
    smartSpeed: 1000,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsiveClass: true,
    nav: true,
    navContainer: '.owl-theme .owl-nav',
    navText: [
        '<i class="fa fa-angle-left"></i>',
        '<i class="fa fa-angle-right"></i>'
    ],
    responsive: {
        0: {
            items: 1,
            // nav: true
        },
        600: {
            items: 2,
            // nav: false
        },
        992: {
            items: 3,
            // nav: true
        }
    }
});

$(".theme-owlslider").owlCarousel({
    items: 1,
    rtl:true,
});


$('.gallery-owl-carousel').owlCarousel({
    loop:true,
    rtl: true,
    center: true,
    autoplay: true,
    smartSpeed: 1000,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    responsiveClass: true,
    nav: true,
    navContainer: '.owl-carousel .owl-nav',
    navText: [
        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
    ],
    // margin:5,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        992:{
            items:3
        }
    }
});


$('body').on('click', '#mobile-menu--bar', function () {
    var menu = $('#mobile-menu--tbl-cell');
    var overlay = $('#mobile-menu--overlay');
    $('#mobile-menu--bar').addClass('mobile-menu-close');
    $('#mobile-menu--bar a i').addClass('fa-times');
    $('#mobile-menu--bar a i').removeClass('fa-bars');
    $('body').css('overflow', 'hidden');
    menu.css('right', '0');
    overlay.css('visibility', 'visible');
    // menu.show();
    // overlay.show();
});

$('body').on('click', '.mobile-menu-close', function () {
    var menu = $('#mobile-menu--tbl-cell');
    var overlay = $('#mobile-menu--overlay');
    $('#mobile-menu--bar').removeClass('mobile-menu-close');
    $('#mobile-menu--bar a i').addClass('fa-bars');
    $('#mobile-menu--bar a i').removeClass('fa-times');
    $('body').css('overflow', 'visible');
    menu.css('right', '-130%');
    overlay.css('visibility', 'hidden');
    // menu.hide();
    // overlay.hide();
});


$('body').on('click', '#mobile-menu--overlay', function () {
    var menu = $('#mobile-menu--tbl-cell');
    var overlay = $('#mobile-menu--overlay');
    $('#mobile-menu--bar').removeClass('mobile-menu-close');
    $('#mobile-menu--bar a i').addClass('fa-bars');
    $('#mobile-menu--bar a i').removeClass('fa-times');
    $('body').css('overflow', 'visible');
    menu.css('right', '-130%');
    overlay.css('visibility', 'hidden');
    // menu.hide();
    // overlay.hide();
});

$(window).resize(function () {
    var menu = $('.menu');
    var mobileMenu = $('#mobile-menu--tbl-cell');
    if ($(window).width() > 992) {
        $('body').css('overflow', 'visible');
        menu.css('display', 'block');
        menu.css('right', 'inherit');
    } else {
        menu.css('display', 'none');
        mobileMenu.css('right', '-130%');
        $('#shortcodes-menu').trigger('detach.ScrollToFixed');
    }
});


// })