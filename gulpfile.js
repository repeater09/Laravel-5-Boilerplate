var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.less([
        "style.less"
    ]);

    mix.scripts([
        "jquery.js",
        "sidr.min.js",
        "sticky.js",
        "alert.js",
        "tab.js"
    ]);

});

