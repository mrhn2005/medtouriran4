window._ = require('lodash');

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

require('./third-party/jquery-migration');

require('material-design-lite');

require('owl.carousel');

require('./third-party/mdl-selectfield.min');

require('./third-party/whatsapp');

require('magnific-popup');

require('flexslider');

require('scrolltofixed');

window.toastr = require('toastr');

require('jquery-waypoints/waypoints.min.js');

require('counterup/jquery.counterup.min.js');

window.LazyLoad = require('vanilla-lazyload');

$(window).on('load', function() { 
    $('.preloader').fadeOut('slow');
});
