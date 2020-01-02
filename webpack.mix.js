const mix = require('laravel-mix');
// require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
//
// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css');
//


    // .copy('public/css/variable.css','public/dist/variable.css')
    // .styles(
    //     [
    //     // 'public/fonts/font-awesome/css/font-awesome.css',
    //     'public/fonts/nunito/nunito.css',
    //     'public/fonts/tajawal/tajawal.css',
    //     'public/fonts/comfortaa/comfortaa.css',
    //     'public/fonts/medical-icons/css/wfmi-style.css',
    //     'public/fonts/flat-icon/flaticon.css',
    //     'https://use.fontawesome.com/releases/v5.8.2/css/all.css',
    //     'https://use.fontawesome.com/releases/v5.8.2/css/v4-shims.css'
    // ], 'public/dist/fonts-all.css')
    // .styles('public/css/bootstrap.min.css','public/dist/bootstrap.min.css')
mix
    // .styles([
    //     // 'public/css/material.min.css',
    //     // 'public/css/mdl-selectfield.min.css',
    //     'public/css/owl.carousel.min.css',
    //     'public/css/owl.theme.default.css',
    //     'public/css/animate.min.css',
    //     'public/css/magnific-popup.css',
    //     'public/css/flexslider.css',
    //     'public/css/style.css',
    //     'public/css/toastr.min.css',
    //     'public/css/whatsapp.css',
    // ], 'public/dist/vendor.css')
    .styles([
        'resources/assets/css/variable.css',
        // 'resources/assets/css/fixed-social-bar.css',
        'resources/assets/css/rtl.css',
        'resources/assets/css/custom.css',
        'resources/assets/css/responsive.css',
    ], 'public/dist/rtl-all.css')
    .styles([
        'resources/assets/css/variable.css',
        // 'resources/assets/css/fixed-social-bar.css',
        'resources/assets/css/ltr.css',
        'resources/assets/css/custom.css',
        'resources/assets/css/responsive.css',
    ], 'public/dist/ltr-all.css');
    // .options({
    //     processCssUrls: true
    // });
    // .purgeCss({
    //     enabled: true
    // });
mix
    // .scripts([
    //     // 'public/js/material.min.js',
    //     // 'public/js/mdl-selectfield.min.js',
    //     'public/js/moment.min.js',
    //     'public/js/fullcalendar.min.js',
    //     'public/js/owl.carousel.min.js',
    //     'public/js/jquery-scrolltofixed.min.js',
    //     'public/js/jquery.magnific-popup.min.js',
    //     'public/js/jquery.waypoints.min.js',
    //     'public/js/jquery.counterup.js',
    //     'public/js/smoothscroll.min.js',
    //     'public/js/jquery.lazy.min.js',
    //     'public/js/jquery.lazy.youtube.min.js',
    //     'public/js/toastr.min.js',
    //     'public/js/lazyload.min.js',
    //     'public/js/whatsapp.js',
    // ],'public/dist/vendor.js')
    .scripts([
        'resources/assets/js/rtl.js',
        'resources/assets/js/custom.js',
    ],'public/dist/rtl-all.js')
    .scripts([
        'resources/assets/js/ltr.js',
        'resources/assets/js/custom.js',
    ],'public/dist/ltr-all.js')
    // .options({
    //     uglify: true
    // })
    ;

// if (mix.inProduction()) {
//     mix.version();
// }