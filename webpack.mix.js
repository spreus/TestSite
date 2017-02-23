const { mix } = require('laravel-mix');

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

mix.copy('node_modules/admin-lte/dist', 'public/vendor/admin-lte', false)
    .copy('node_modules/jquery/dist', 'public/vendor/jquery', false)
    .copy('node_modules/toastr/build', 'public/vendor/toastr', false)
    .copy('node_modules/bootstrap-sass/assets/javascripts/bootstrap.js', 'public/vendor/bootstrap/bootstrap.js', false)
    // .js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .version();
    