/**
 * Theme build
 *
 * Defines the Gulp tasks used to build the theme.
 *
 * @since 1.0.0
 */
var gulp 	= require( 'gulp' ),
	del 	= require( 'del' ),
	concat 	= require( 'gulp-concat' ),
	uglify 	= require( 'gulp-uglify' );

/**
 * Defines the default gulp task.
 *
 * @since 1.0.0
 */
gulp.task( 'default', [ 'scripts' ], function() {

} );

/**
 * Defines the scripts task.
 *
 * @since 1.0.0
 */
gulp.task( 'scripts', [ 'cleanup' ], function() {
	return gulp.src( 'assets/js/*.js' )
		.pipe( concat( 'scripts.min.js' ) )
		.pipe( uglify() )
		.pipe( gulp.dest( 'assets/js' ) );
} );

/**
 * Defines the cleanup task.
 *
 * @since 1.0.0
 */
gulp.task( 'cleanup', function() {
	return del( [
		'assets/js/scripts.min.js',
	] );
} );
