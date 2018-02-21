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

mix.js('resources/assets/js/app.js', 'public/js')
	.js('resources/assets/js/font-awesome.js', 'public/js')
	.js('resources/assets/js/swal.js', 'public/js')
	.js('resources/assets/js/vue.js', 'public/js')
	.js('resources/assets/js/handler.js', 'public/js')
	.scripts([
		'node_modules/datatables.net/js/jquery.dataTables.js',
		'node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js'
	], 'public/js/datatable.js')
	.styles(['node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css'], 'public/css/datatable.css')
	.sass('node_modules/balloon-css/src/balloon.scss', 'public/css')
   	.sass('resources/assets/sass/app.scss', 'public/css');