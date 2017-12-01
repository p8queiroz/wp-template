var  gulp = require('gulp')
	,imagemin = require('gulp-imagemin')
	,concat = require('gulp-concat')
	,htmlReplace = require('gulp-html-replace')
	,uglify = require('gulp-uglify')
	,browserSync = require('browser-sync')
	,usemin = require('gulp-usemin')
    ,cssmin = require('gulp-cssmin')
	,path = require('gulp-path')
	,runSequence = require('run-sequence')
	,clean = require('gulp-clean');


gulp.task('default', function(callback) {
    runSequence('copylocal', ['copyremote'], callback);
});


////
	gulp.task('copylocal', ['cleanlocal'], function() {
		return gulp.src('src/p8queiroz/**/*')
			.pipe(gulp.dest('dist/p8queiroz'));
	});

	gulp.task('cleanlocal', ['buildimg'], function() {
		return gulp.src('dist')
			.pipe(clean({force: true}));
			
	});
////--

////
	gulp.task('buildimg', function() {
		return gulp.src('src/p8queiroz/images/**/*')
			.pipe(imagemin())
			.pipe(gulp.dest('src/p8queiroz/images'));
	});
////--

////
	gulp.task('copyremote', ['cleanremote'], function() {
		return gulp.src('dist/p8queiroz/**/*')
			.pipe(gulp.dest('C:/Program Files/VertrigoServ/www/p8queiroz/wp-content/themes/p8queiroz'));
	});

	gulp.task('cleanremote', function() {
		return gulp.src('C:/Program Files/VertrigoServ/www/p8queiroz/wp-content/themes/p8queiroz')
			.pipe(clean({force: true}));
			
	});
////--




