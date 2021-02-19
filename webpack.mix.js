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

 mix.scripts('node_modules/materialize-css/dist/js/materialize.js','public/js/materialize.js')
    .sass('node_modules/materialize-css/sass/materialize.scss','public/css/materialize.css')
    .scripts('node_modules/jquery/dist/jquery.min.js','public/js/jquery.js');