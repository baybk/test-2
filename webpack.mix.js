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

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .copyDirectory('resources/img', 'public/img')
    .scripts([
        'resources/bootstrap/js/bootstrap.min.js',
      ], 'public/js/bootstrap/js/bootstrap.min.js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
