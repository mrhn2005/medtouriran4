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
mix
    .sass('resources/assets/sass/app.scss', 'public/css')
    .sass('resources/assets/sass/languages/en.scss', 'public/css/languages')
    .sass('resources/assets/sass/languages/ar.scss', 'public/css/languages')
    .sass('resources/assets/sass/languages/ku.scss', 'public/css/languages')
    .sass('resources/assets/sass/languages/ru.scss', 'public/css/languages')
    .styles('resources/assets/css/package-timeline.css', 'public/css/package-timeline.css')
    .styles('resources/assets/css/services-timeline.css', 'public/css/services-timeline.css')
    .styles('resources/assets/css/voyager.css', 'public/css/voyager.css')
    .styles([
        'resources/assets/css/bootstrap4rtl.css',
        'resources/assets/css/variable.css',
        'resources/assets/css/rtl.css',
        'resources/assets/css/custom.css',
        'resources/assets/css/responsive.css',
    ], 'public/css/rtl-all.css')
    .styles([
        'resources/assets/css/variable.css',
        'resources/assets/css/ltr.css',
        'resources/assets/css/custom.css',
        'resources/assets/css/responsive.css',
    ], 'public/css/ltr-all.css')
    
    .js('resources/assets/js/app.js', 'public/js')
    .scripts([
        'resources/assets/js/bootstrap4rtl.min.js',
        'resources/assets/js/rtl.js',
        'resources/assets/js/custom.js',
    ],'public/js/rtl-all.js')
    .scripts([
        'resources/assets/js/ltr.js',
        'resources/assets/js/custom.js',
    ],'public/js/ltr-all.js')
    // .options({
    //     uglify: true
    // })
    ;

if (mix.inProduction()) {
    mix.version();
}

mix.copyDirectory('resources/assets/js/pages', 'public/js/pages');