var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass('app.scss')

        .scripts([
         'theme/*.js'
        ], './public/js/theme.js')

        .scripts([
            'libs/*.js'
        ], './public/js/libs.js')

        .styles([
         'theme/*.css'
        ], './public/css/theme.css')

        .styles([
            'libs/*.css'
        ], './public/css/libs.css')

        .styles([
            'fonts/*.css'
        ], './public/font-awesome/css/font-awesome.css')

});
