// Load plugins
var gulp = require('gulp');
var watchify = require('watchify');
var browserify = require('browserify');
var plugins = require('gulp-load-plugins')({ camelize: true });
var lr = require('tiny-lr');
var assign = require('lodash.assign');
var server = lr();
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var browserSync = require('browser-sync').create();

var banner = [
  '/*',
  'Theme Name: tacocatracing',
  'Author: Kyle Lengling',
  'Author URI: http://kylelengling.com/',
  'Description: Custom Theme for TacoCat Racing based on blankslate starter theme',
  'Version: 0.0.1',
  'License: GNU General Public License',
  'License URI: https://www.gnu.org/licenses/gpl.html',
  'Tags:',
  'Text Domain:',
  '*/',
''].join('\n');

// Styles
gulp.task('styles', function() {
  return gulp.src('assets/styles/source/**/*.scss')
	.pipe(plugins.sass({ style: 'expanded', compass: true }))
	.pipe(plugins.autoprefixer('last 2 versions'))
	.pipe(gulp.dest('assets/styles/build'))
	.pipe(plugins.minifyCss({ keepSpecialComments: 1 }))
  .pipe(plugins.header(banner))
	.pipe(gulp.dest('./'))
});

// Vendor Plugin Scripts
gulp.task('plugins', function() {
  return gulp.src(['assets/js/source/plugins.js', 'assets/js/vendor/**/*.js'])
	.pipe(plugins.concat('plugins.js'))
	.pipe(gulp.dest('assets/scripts/build'))
	.pipe(plugins.rename({ suffix: '.min' }))
	.pipe(plugins.uglify())
	.pipe(gulp.dest('assets/scripts/build'))
});

var customOpts = {
  entries: ['assets/scripts/source/main.js'],
  debug: true
};
var opts = assign({}, watchify.args, customOpts);
var b = watchify(browserify(opts));

gulp.task('scripts', bundle);
b.on('update', bundle);
b.on('log', plugins.util.log);

function bundle() {

	return b.transform('babelify', {presets: ['es2015']}).bundle()
    .on('error', plugins.util.log.bind(plugins.util, 'Browserify Error'))
    .pipe(source('main.js'))
    .pipe(buffer())
		.pipe(plugins.rename({ suffix: '.min' }))
    // .pipe(plugins.uglify())
    .pipe(gulp.dest('assets/scripts/build'));
}

// Images
gulp.task('images', function() {
  return gulp.src('assets/images/**/*')
	.pipe(plugins.cache(plugins.imagemin({ optimizationLevel: 7, progressive: true, interlaced: true })))
	.pipe(gulp.dest('assets/images'))
});

// Watch
gulp.task('watch', function() {
	// Watch .scss files
	gulp.watch('assets/styles/source/**/*.scss', ['styles']);

	// Watch .js files
	gulp.watch('assets/scripts/**/*.js', ['plugins', 'scripts']);

	// Watch image files
	gulp.watch('assets/images/**/*', ['images']);
});

// Default task
gulp.task('default', ['styles', 'plugins', 'scripts', 'images', 'watch']);
