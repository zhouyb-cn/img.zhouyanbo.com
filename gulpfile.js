const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')

    .webpack('app.js')

    .scripts([
        'libs/sweetalert-dev.js'
    ], './public/js/libs.js')

    .styles([
        'libs/sweetalert.css',
    ], './public/css/libs.css')

    .styles([
        'libs/jumbotron-narrow.css',
    ], './public/css/narrow.css')
});