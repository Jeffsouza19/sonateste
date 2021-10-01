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

mix
.styles([
    'resources/views/site/css/style.css'
],  'public/site/css/style.css')

.styles([
    'node_modules/bootstrap/dist/css/bootstrap.min.css'
],  'public/site/css/bootstrap.css')

.scripts([
    'resources/views/site/js/script.js'
],  'public/site/js/script.js')

.scripts([
    'resources/views/site/js/jquery.mask.min.js'
],  'public/site/js/jquery.mask.js')

.scripts([
    'node_modules/jquery/dist/jquery.min.js'
],  'public/site/js/jquery.min.js')

.scripts([
    'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'    
],  'public/site/js/bootstrap.min.js')

.version();
