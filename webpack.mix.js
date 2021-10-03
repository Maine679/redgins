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

mix.js('resources/assets/js/app.js', 'public/js')
    .postCss('resources/assets/css/app.css', 'public/css', [
        //
    ])
    .js('resources/assets/js/admin/app-admin.js', 'public/js/admin')
    .js('resources/assets/js/public/app-public.js', 'public/js/public')
    .sass('resources/assets/sass/admin/app-admin.scss', 'public/css/admin')
    .sass('resources/assets/sass/public/app-public.scss', 'public/css/public');
