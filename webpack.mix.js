const mix = require('laravel-mix');

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

mix.js('resources/js/theme.min.js', 'public/js/theme.min.js')
   .styles('resources/css/theme-dark.min.css', 'public/css/theme-dark.min.css')
   .styles('resources/css/custom.css', 'public/css/custom.css');

   
