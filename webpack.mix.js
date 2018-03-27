let mix = require('laravel-mix');

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
 mix.styles([
	'public/vendor/hydro-master/css/bootstrap.min.css',
	'public/vendor/hydro-master/css/magnific-popup.css',
	'public/vendor/hydro-master/css/templatemo-style.css'
 	], 'public/css/all.css');


 mix.options({
    	minimize: true
	}).scripts([
 	'public/vendor/hydro-master/js/jquery.js',
 	'public/vendor/hydro-master/js/bootstrap.min.js',
 	'public/vendor/hydro-master/js/jquery.stellar.min.js',
 	'public/vendor/hydro-master/js/jquery.magnific-popup.min.js',
 	'public/vendor/hydro-master/js/smoothscroll.js',
 	'public/vendor/typed.js-master/lib/typed.min.js',
 	'public/vendor/hydro-master/js/custom.js'
 	],'public/js/app.min.js');
