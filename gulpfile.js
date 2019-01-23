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

      // Fonts need to be put in the correct spots for CSS versioning
// 	  mix.copy('./resources/assets/font-awesome/fonts/fontawesome-webfont.*', './web/build/fonts/');
// 	  mix.copy('./resources/assets/font-awesome/fonts/FontAwesome.otf', './web/build/fonts/');
// 	  mix.copy('./node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.*', './web/build/fonts/bootstrap/');

	  // The blog uses these since it cannot get versioned files...yet
	  mix.copy('./resources/assets/font-awesome/fonts/fontawesome-webfont.*', './web/fonts/');
	  mix.copy('./resources/assets/font-awesome/fonts/FontAwesome.otf', './web/fonts/');
	  mix.copy('./node_modules/bootstrap/dist/fonts/glyphicons-halflings-regular.*', './web/fonts/bootstrap/');

	  mix.sass([
	    	'app.scss',
	       ],
	       './web/css/sass.css')

	      .styles([
	         '../font-awesome/css/font-awesome.css',
	         './web/css/sass.css'
	      ],
	      './web/css/all.css')
	      .scripts([
			'./node_modules/jquery/dist/jquery.js',
			'./node_modules/bootstrap/dist/js/bootstrap.js',
			'./resources/assets/js/app.js'
		],
		'./web/js/app.js')
		.version(['web/css/all.css', 'web/js/app.js']);

	    // We combine our SASS CSS file into our all.css, but browsers complain without mapping file.
	    mix.copy('./web/css/sass.css.map', './web/build/css/');

});
