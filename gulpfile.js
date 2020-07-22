var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir.config.assetsPath = 'themes/testing/assets/';
elixir.config.publicPath = 'themes/testing/assets/compiled/';

elixir(function(mix){

    mix.sass('style.scss');

    mix.scripts([
        'jquery.js',
        'app.js'
    ]);

    mix.livereload([
        'themes/testing/assets/compiled/css/style.css',
        'themes/testing/**/*.htm',
        'themes/testing/assets/compiled/js/*.js'
    ]);

});