var	gulp      = require('gulp'),
	minifyCSS = require('gulp-minify-css'),
	less      = require('gulp-less'),
	path      = require('path'),
	concat    = require('gulp-concat'),
	uglify    = require('gulp-uglify'),
	notify    = require('gulp-notify');

gulp.task('concat-modules', function() {
  gulp.src([
    './app/assets/scripts/modules.js'])
    .pipe(concat('modules.js'))
    .pipe(gulp.dest('./public/assets/scripts'));
});

gulp.task('concat-angular', function() {
  gulp.src([
    './app/assets/scripts/app.js'])
    .pipe(concat('app.js'))
    .pipe(gulp.dest('./public/assets/scripts'));
});

gulp.task('concat', function() {
  gulp.src([
    './bower_components/jquery/dist/jquery.js',
    './bower_components/bootstrap/dist/js/bootstrap.js',
    './bower_components/angular/angular.js',
    './bower_components/angular-route/angular-route.js',
    './node_modules/lodash/dist/lodash.js'])
    .pipe(concat('built.js'))
    .pipe(gulp.dest('./public/assets/scripts'));
});

gulp.task('uglify', function(){
  gulp.src('./public/assets/scripts/*.js')
    .pipe(uglify())
    .pipe(gulp.dest('./public/assets/scripts/compress/'))
    .pipe(notify('Uglify'));
});

gulp.task('less', function () {
  gulp.src('./app/assets/styles/styles.less')
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(gulp.dest('./public/assets/styles'));
});

gulp.task('compress', function(){
	gulp.src('./public/assets/styles/styles.css')
		.pipe(minifyCSS())
		.pipe(gulp.dest('./public/assets/styles/compress/'))
		.pipe(notify('Compress'));
});

gulp.task('watch', function(){
	gulp.watch('./app/assets/styles/*.less', ['less']);
	gulp.watch('./app/assets/scripts/*.js', ['concat-angular']);
});

gulp.task('default', ['concat','concat-modules','concat-angular','less','watch']);