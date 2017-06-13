const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

elixir(mix => {
    mix.sass('app.scss').webpack('app.js');
	mix.version(['css/app.css', 'js/app.js']);
	mix.browserSync({proxy: 'localhost/laravel-project'});
});