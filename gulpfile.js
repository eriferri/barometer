var gulp = require('gulp'),
util = require('gulp-util'),
prefix = require('gulp-autoprefixer'),
svgstore = require('gulp-svgstore'),
cat = require('gulp-concat'),
livereload = require('gulp-livereload'),
svg = require('gulp-livereload'),
inject = require('gulp-inject'),
svgmin = require('gulp-svgmin'),
notify = require('gulp-notify'),
sass = require('gulp-sass');

// sass task
// compiles sass
gulp.task('sass', function(){
	gulp.src('sass/**/*.scss')
	.pipe(sass())
	.on("error", notify.onError(function (error) {
     return "Error: " + error.message;
   }))
	.pipe(prefix())
	.pipe(cat('main.css'))
	.pipe(gulp.dest('css/'))
});

// watch
gulp.task('watch', function(){
	gulp.watch('sass/**/*.scss', ['sass']);
	gulp.watch('img/src/*.svg', ['svg']);
	livereload.listen();
	// gulp.watch('/').on('change', livereload.changed);
	gulp.watch('**/*.html').on('change', livereload.changed);
	gulp.watch('**/*.php').on('change', livereload.changed);
	gulp.watch('sass/**/*.scss').on('change', livereload.changed);
	gulp.watch('css/**/*.css').on('change', livereload.changed);
	gulp.watch('js/**/*.js').on('change', livereload.changed);
});

// Svg store
gulp.task('svg', function(){
	var svgs = gulp.src('img/icons/src/*.svg')
	function transformSvg ($svg, done) {
		$svg.attr('style', 'display:none')
		done(null, $svg)
	}
	function fileContents (filePath, file) {
		return file.contents.toString('utf8')
	}
	return gulp
	.src('img/src/inline-svg.html')
	.pipe(svgstore({ prefix: 'icon-', inlineSvg: true, transformSvg: transformSvg }))
	.pipe(inject(svgs, { transform: fileContents }))
	.pipe(gulp.dest('img/icons/'))
});

// Default task
gulp.task('default', ['sass', 'svg', 'watch']);
