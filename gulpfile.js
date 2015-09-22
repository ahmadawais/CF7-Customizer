/**
 * Gulpfile setup
 *
 * @since 0.0.1
 * @author Ahmad Awais
 * @package CFC
 *
 */

// Project configuration
var project 	= 'cfc', // Project name, used for build zip.
	url 		= 'cf7.dev/customizer/', // Local Development URL for BrowserSync. Change as-needed.
	bower 		= './assets/bower_components/'; // Not truly using this yet, more or less playing right now. TO-DO Place in Dev branch

// Load plugins
	var gulp     = require('gulp'),
	browserSync  = require('browser-sync'), // Asynchronous browser loading on .scss file changes
	reload       = browserSync.reload,
	autoprefixer = require('gulp-autoprefixer'), // Autoprefixing magic
	minifycss    = require('gulp-uglifycss'),
	filter       = require('gulp-filter'),
	size         = require('gulp-filesize');
	uglify       = require('gulp-uglify'),
	imagemin     = require('gulp-imagemin'),
	newer        = require('gulp-newer'),
	rename       = require('gulp-rename'),
	concat       = require('gulp-concat'),
	notify       = require('gulp-notify'),
	sass         = require('gulp-sass'),
	ignore       = require('gulp-ignore'), // Helps with ignoring files and directories in our run tasks
	plumber      = require('gulp-plumber'), // Helps prevent stream crashing on errors
	cache        = require('gulp-cache'),
	sourcemaps   = require('gulp-sourcemaps');


/**
 * Browser Sync
 *
 * The 'cherry on top!' Asynchronous browser syncing of assets across multiple devices!! Watches for changes to js, image and php files
 * Although, I think this is redundant, since we have a watch task that does this already.
*/
gulp.task('browser-sync', function() {
	var files = [
					'**/*.php',
					'**/*.{png,jpg,gif}'
				];
	browserSync.init(files, {
		// Read here http://www.browsersync.io/docs/options/
		proxy: url,
		//port: 8080,
		// Tunnel the Browsersync server through a random Public URL
		//tunnel: true,

		// Attempt to use the URL "http://my-private-site.localtunnel.me"
		//tunnel: "ppress",

		// Inject CSS changes
		injectChanges: true

	});
});


/**
 * Styles
 *
 * Looking at src/sass and compiling the files into Expanded format, Autoprefixing and sending the files to the build folder
 *
 * Sass output styles: https://web-design-weekly.com/2014/06/15/different-sass-output-styles/
*/
gulp.task('styles', function () {
	 	gulp.src('./assets/css/*.scss')
				.pipe(plumber())
				.pipe(sourcemaps.init())
				.pipe(sass({
					errLogToConsole: true,
					//outputStyle: 'compressed',
					outputStyle: 'compact',
					// outputStyle: 'nested',
					// outputStyle: 'expanded',
					precision: 10
				}))
				.pipe(sourcemaps.write({includeContent: false}))
				.pipe(sourcemaps.init({loadMaps: true}))
				.pipe(autoprefixer('last 2 version', '> 1%', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
				.pipe(sourcemaps.write('.'))
				.pipe(plumber.stop())
				.pipe(gulp.dest('./assets/css/'))
				.pipe(filter('style.css')) // Filtering stream to only css files
				.pipe(size()) // Size style.css: 2..53 kB
				//.pipe(cmq()) // Combines Media Queries
				.pipe(reload({stream:true})) // Inject Styles when style file is created
				.pipe(rename({ suffix: '.min' }))
				.pipe(minifycss({
					maxLineLen: 80
				}))
				.pipe(gulp.dest('./assets/css/'))
				.pipe(size()) // Size style.min.css: 2.53 kB
				.pipe(reload({stream:true})) // Inject Styles when min style file is created
				.pipe(notify({ message: 'Styles task complete', onLast: true }))
});


/**
 * Scripts: Vendors
 *
 * Look at src/js and concatenate those files, send them to assets/js where we then minimize the concatenated file.
*/

gulp.task('vendorsJs', function() {
	return 	gulp.src(['./assets/js/vendor/*.js', bower+'**/*.js'])
				.pipe(concat('vendors.js'))
				.pipe(gulp.dest('./assets/js'))
				.pipe(rename( {
					basename: "vendors",
					suffix: '.min'
				}))
				.pipe(uglify())
				.pipe(gulp.dest('./assets/js/'))
				.pipe(size()) // Size vendor.min.js: 2.53 kB
				.pipe(notify({ message: 'Vendor scripts task complete', onLast: true }));
});


/**
 * Scripts: Custom
 *
 * Look at src/js and concatenate those files, send them to assets/js where we then minimize the concatenated file.
*/

gulp.task('scriptsJs', function() {
	return 	gulp.src('./assets/js/custom/*.js')
				.pipe(concat('custom.js'))
				.pipe(gulp.dest('./assets/js'))
				.pipe(rename( {
					basename: "custom",
					suffix: '.min'
				}))
				.pipe(uglify())
				.pipe(gulp.dest('./assets/js/'))
				.pipe(size()) // Size custom.min.js: 2.53 kB
				.pipe(notify({ message: 'Custom scripts task complete', onLast: true }));
});


/**
 * Images
 *
 * Look at src/images, optimize the images and send them to the appropriate place
*/
gulp.task('images', function() {
	return 	gulp.src(['./assets/img/**/*.{png,jpg,gif}'])
				//.pipe(newer('./assets/img/')) // Add the newer pipe to pass through newer images only
				.pipe(imagemin({ optimizationLevel: 7, progressive: true, interlaced: true }))
				.pipe(gulp.dest('./assets/img/'))
				.pipe( notify( { message: 'Images task complete', onLast: true } ) );
});


/**
 * Clean gulp cache
 */
 gulp.task('clear', function () {
   cache.clearAll();
 });



 // ==== TASKS ==== //
 /**
  * Gulp Default Task
  *
  * Compiles styles, fires-up browser sync, watches js and php files. Note browser sync task watches php files
  *
 */

 gulp.task('default', ['styles', 'vendorsJs', 'scriptsJs', 'images', 'browser-sync'], function () {
 	gulp.watch('./assets/img/**/*.{png,jpg,gif}', ['images']); //Some issue, have to run manual for now
 	gulp.watch('./assets/css/**/*.scss', ['styles']);
 	gulp.watch('./assets/js/custom/**/*.js', ['scriptsJs', browserSync.reload]);
 	gulp.watch('./assets/js/vendor/**/*.js', ['vendorsJs', browserSync.reload]);

 });
