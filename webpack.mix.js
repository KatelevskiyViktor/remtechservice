const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/css/bootstrap.css',
    'resources/css/style.css',
    'resources/css/responsive.css',
    'resources/css/ekko-lightbox.css',
    'resources/css/app.css'
], 'public/css/app.css');

mix.scripts([
    'resources/js/jquery-3.4.1.min.js',
    'resources/js/fontawesome-free-6.1.1-web/js/all.js',
    'resources/js/bootstrap.js',
    'resources/js/ekko-lightbox.min.js',
    'resources/js/app.js',
], 'public/js/app.js');


/*mix.copyDirectory('resources/fonts', 'public/fonts');*/
mix.browserSync('romtehservice');
