var elixir = require( 'laravel-elixir' );
require( 'laravel-elixir-browserify' );
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

elixir( function( mix ) {
	//mix.less('app.less');
	mix.sass( 'app.scss' );
	mix.copy( 'resources/assets/js', 'public/js' );


	//mix.browserify( 'mix-materialize.js' );
	mix.copy( 'resources/assets/vendor/materialize/dist/js/materialize.min.js', 'public/js' );
	mix.copy( 'resources/assets/vendor/materialize/js', 'public/js' );


	mix.copy( 'resources/assets/vendor/materialize/dist/font', 'public/font' );

	mix.copy( 'resources/assets/vendor/jquery/dist/jquery.min.js', 'public/js' );
	mix.copy( 'resources/assets/vendor/jquery/dist/jquery.min.map', 'public/js' );


	mix.copy( 'resources/assets/img', 'public/img' );

} );
