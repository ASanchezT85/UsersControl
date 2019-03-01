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

mix.js('resources/js/theme.min.js', 'public/js/theme.min.js').version()
   .js('resources/js/app.js', 'public/js/app.js').version()
   .js('resources/vendor/SmartWizard/js/smartwizard.js', 'public/js/smartwizard.js').version()
   .styles('resources/css/theme-dark.min.css', 'public/css/theme-dark.min.css')
   .styles('resources/css/custom.css', 'public/css/custom.css')
   .styles('resources/vendor/SmartWizard/css/smartwizard.css', 'public/css/smartwizard.css')
   .copyDirectory('node_modules/stacked-menu', 'vendor/stacked-menu');
   

   
