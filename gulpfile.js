var	gulp      = require('gulp'),
	minifyCSS = require('gulp-minify-css'),
	less      = require('gulp-less'),
	path      = require('path'),
	concat    = require('gulp-concat'),
	uglify    = require('gulp-uglify'),
	notify    = require('gulp-notify'),
  rename    = require('gulp-rename');

gulp.task('concat-libraries', function() {
  gulp.src([
    './bower_components/jquery/dist/jquery.js',
    './bower_components/bootstrap/dist/js/bootstrap.js',
    './bower_components/angular/angular.js',
    './bower_components/angular-route/angular-route.js',
    './node_modules/lodash/dist/lodash.js'])
    .pipe(concat('libraries.js'))
    .pipe(gulp.dest('./public/assets/scripts'));
});

gulp.task('concat-modules', function() {
  gulp.src([
    './app/frontend/modules/lodash.js'])
    .pipe(concat('modules.js'))
    .pipe(gulp.dest('./public/assets/scripts'));
});

gulp.task('concat-app', function() {
  gulp.src([
    './app/frontend/app.js',
    './app/frontend/config.js',
    './app/frontend/controllers/*.js',
    './app/frontend/directives/*.js'])
    .pipe(concat('app.js'))
    .pipe(gulp.dest('./public/assets/scripts'));
});

gulp.task('uglify', function(){
  gulp.src(['./public/assets/scripts/*.js','!./public/assets/scripts/*.min.js'])
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('./public/assets/scripts/'))
});

gulp.task('less', function () {
  gulp.src('./app/assets/styles/styles.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(gulp.dest('./public/assets/styles'));
});

gulp.task('compress', function(){
	gulp.src(['./public/assets/styles/*.css','!./public/assets/styles/*.min.css'])
    .pipe(rename({suffix: '.min'}))
		.pipe(minifyCSS())
		.pipe(gulp.dest('./public/assets/styles/'))
});

gulp.task('watch', function(){
	gulp.watch('./app/assets/styles/*.less', ['less']);
	gulp.watch('./app/assets/scripts/*.js', ['concat-app']);
});

gulp.task('default', ['concat-libraries','concat-modules','concat-app','less','watch']);