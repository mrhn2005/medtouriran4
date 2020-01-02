/**
 * Custom JS - Custom js for klinik template
 * @version v1.2
 * @copyright 2017 Pepdev.
 */

/**
 * OnDOMLoad
 * ThemeSlider
 * ResponsiveMenu
 * ThemeAccordion
 * FormAjaxsubmit
 * Slider
 * CountDown
 * Modal
 * Gallery
 */




// (function ($) {
//     "use strict";
//     //Color Picker



    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
    //*************************************************
    //OnDOMLoad  **************************************
    //*************************************************
    $(window).on('load', function () {
        $('.slider-wrapper').flexslider({
            animation: "fade",
            animationLoop: true,
            pauseOnHover: true,
            keyboard: true,
            controlNav: false
        });
        $('.slider-height').removeClass();
    });

    $('[data-toggle="tooltip"]').tooltip()

    //*************************************************
    //ThemeSlider  ************************************
    //*************************************************
    $('.theme-flexslider').flexslider({
        animation: "slide",
        animationLoop: true,
        pauseOnHover: true
    });



    //*************************************************
    //ResponsiveMenu  *********************************
    //*************************************************
    $('#hdr-wrapper').scrollToFixed();

    $('.hdr-center-menu, .header-transparent-menu, #header-1').scrollToFixed({
        preFixed: function () {
            $('#header-1, .hdr-center-menu, .header-transparent-menu').addClass('hdr-fixed');
        },
        postFixed: function () {
            $('#header-1, .hdr-center-menu, .header-transparent-menu').removeClass('hdr-fixed');
        }
    });

    // settings for side bar menu transferred to ltr.js and rtl.js

    $('body').on('click', '.hdr-search', function () {
        var ele = $(this);
        if ($('.search-banner').css('display') === "none") {
            $('.search-banner').slideDown();
            ele.find('.fa').addClass('fa-close');
        } else {
            $('.search-banner').slideUp();
            ele.find('.fa').removeClass('fa-close');
        }
    });

    //*************************************************
    //ThemeAccordion **********************************
    //*************************************************
    $('.theme-accordion:nth-child(1) .theme-accordion-bdy').slideDown();
    $('.theme-accordion:nth-child(1) .theme-accordion-control .fa').addClass('fa-minus');
    $('body').on('click', '.theme-accordion-hdr', function () {
        var ele = $(this);
        $('.theme-accordion-bdy').slideUp();
        $('.theme-accordion-control .fa').removeClass('fa-minus');
        if (ele.parents('.theme-accordion').find('.theme-accordion-bdy').css('display') === "none") {
            ele.find('.theme-accordion-control .fa').addClass('fa-minus');
            ele.parents('.theme-accordion').find('.theme-accordion-bdy').slideDown();
        } else {
            ele.find('.theme-accordion-control .fa').removeClass('fa-minus');
            ele.parents('.theme-accordion').find('.theme-accordion-bdy').slideUp();
        }
    });

    //Processing Button
    $('body').on('click', '.button-process', function () {
        var ele = $(this);
        ele.button('loading');
        setTimeout(function () { ele.button('reset'); }, 8000);
    });

    //*************************************************
    //FormAjaxsubmit ********************************
    //*************************************************
    var appointment_form = "sidebar";
    function makeAppointment(data) {
        $.ajax({
            type: 'post',
            url: 'inc/make-appointment.php',
            data: { name: data.name, email: data.email, mobile: data.mobile, department: data.department, doctor: data.doctor, date: data.date },
            error: function () {
                if (appointment_form === "sidebar") {
                    $('.side-error .alert').remove();
                    $('.side-error').append('<div class="alert alert-danger" role="alert">Server Error Please try again after some time...</div>');
                } else {
                    $('.appointment-error .alert').remove();
                    $('.appointment-error').append('<div class="alert alert-danger" role="alert">Server Error Please try again after some time...</div>');
                }
            },
            success: function (response) {
                response = $.parseJSON(response);
                if (response.flag === "1") {
                    if (appointment_form === "sidebar") {
                        $('.side-appointment').button('reset');
                        $('.side-error .alert').remove();
                        $('.side-error').append('<div class="alert alert-danger" role="alert">Please enter/select ' + response.error + ' ! ! !</div>');
                    } else {
                        $('.make-appointment').button('reset');
                        $('.appointment-error .alert').remove();
                        $('.appointment-error').append('<div class="alert alert-danger" role="alert">Please enter/select ' + response.error + ' ! ! !</div>');
                    }
                } else {
                    if (appointment_form === "sidebar") {
                        $('.side-appointment').attr("disabled", true);
                        $('.side-error .alert').remove();
                        $('.side-error').append('<div class="alert alert-success" role="alert">Appointment Created Successfully.</div>');
                    } else {
                        $('.make-appointment').attr("disabled", true);
                        $('.appointment-error .alert').remove();
                        $('.appointment-error').append('<div class="alert alert-success" role="alert">Appointment Created Successfully.</div>');
                    }
                }
            }
        });
    }

    $('body').on('click', '.side-appointment', function () {
        $(this).button('loading');
        var data = {};
        data.name = $('#sideapnt-name').val();
        data.email = $('#sideapnt-email').val();
        data.mobile = $('#sideapnt-mobile').val();
        data.department = $('#sideapnt-department').val();
        data.doctor = $('#sideapnt-doctor').val();
        data.date = $('#sideapnt-date').val();
        makeAppointment(data);
    });

    $('body').on('click', '.make-appointment', function () {
        $(this).button('loading');
        var data = {};
        appointment_form = 'popup';
        data.name = $('#appointment-name').val();
        data.email = $('#appointment-email').val();
        data.mobile = $('#appointment-mobile').val();
        data.department = $('#appointment-department').val();
        data.doctor = $('#appointment-doctor').val();
        data.date = $('#appointment-date').val();
        makeAppointment(data);
    });

    $('body').on('click', '.contact-submit', function () {
        var ele = $(this), data = {};
        ele.button('loading');
        data.name = $('#contact-name').val();
        data.email = $('#contact-email').val();
        data.mobile = $('#contact-mobile').val();
        data.subject = $('#contact-subject').val();
        data.message = $('#contact-message').val();
        $.ajax({
            type: 'post',
            url: 'inc/contact-form.php',
            data: { name: data.name, email: data.email, mobile: data.mobile, subject: data.subject, message: data.message },
            error: function () {
                $('.contact-error .alert').remove();
                $('.contact-error').append('<div class="alert alert-danger" role="alert">Server Error Please try again after some time...</div>');
            },
            success: function (response) {
                var data = $.parseJSON(response);
                if (data.flag === "1") {
                    ele.button('reset');
                    $('.contact-error .alert').remove();
                    $('.contact-error').append('<div class="alert alert-danger" role="alert">Please enter ' + data.error + ' ! ! !</div>');
                } else {
                    ele.button('reset');
                    $('.contact-error .alert').remove();
                    $('.contact-error').append('<div class="alert alert-success" role="alert">Request Created Successfully.</div>');
                }
            }
        });
    });

    //*************************************************
    //Slider ******************************************
    //*************************************************

    //*************************************************
    //CountDown ******************************************
    //*************************************************
    $('.counter').counterUp({
        delay: 10,
        time: 400
    });


    //*************************************************
    //Modal *******************************************
    //*************************************************
    //APpointment Modal
    $('body').on('click', '.slider-appointment a, #appointment-now, .hdr-apointment', function () {
        $('#appointment').modal('show');
    });

    //MyAppointmentPage Modal
    $('body').on('click', '.myappointment-view a', function () {
        $('#myappointment-popup').modal('show');
    });

    //MyFeedbackPage Modal
    $('body').on('click', '.myappointment-view a', function () {
        $('#myfeedback-popup').modal('show');
    });

    //Blog Read More Tag
    $(".blog-list-post p span").text(function (index, currentText) {
        return currentText.substr(0, 300);
    });

    //Service Read More Tag
    $(".service-description span").text(function (index, currentText) {
        return currentText.substr(0, 330);
    });

    //package-page--book-modal
    $('body').on('click', '.package-page--packages-button ', function () {
        $('#package-page--book-modal').modal('show');
    });



    //*************************************************
    //Gallery  ****************************************
    //*************************************************
    $('.gallery-block').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.type-filter').click(function(){
        var ele = $(this), value = ele.attr('data-filter');
        $('.type-filter').removeClass('active');
        ele.addClass('active');
        if(value == "all") {
            $('.t-filter').show('1000');
        } else {
            $(".t-filter").not('.'+value).hide('3000');
            $('.t-filter').filter('.'+value).show('3000');
        }
    });
    $('.city-filter').click(function(){
        var ele = $(this), value = ele.attr('data-filter');
        $('.city-filter').removeClass('active');
        ele.addClass('active');
        if(value == "all") {
            $('.c-filter').show('1000');
        } else {
            $(".c-filter").not('.'+value).hide('3000');
            $('.c-filter').filter('.'+value).show('3000');
        }
    });




    $('.gallery-owl-carousel .owl-prev').dblclick( () => {
        $('.owl-carousel').trigger('prev.owl.carousel');
        // alert('salam')
    });
    $('.gallery-owl-carousel .owl-next').dblclick( () => {
        $('.owl-carousel').trigger('next.owl.carousel');
    });

