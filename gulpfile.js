var  gulp = require('gulp')
	,imagemin = require('gulp-imagemin')
	,concat = require('gulp-concat')
	,htmlReplace = require('gulp-html-replace')
	,uglify = require('gulp-uglify')
	,browserSync = require('browser-sync')
	,usemin = require('gulp-usemin')
    ,cssmin = require('gulp-cssmin')
	,path = require('gulp-path')
	,sass = require('gulp-sass')
	,runSequence = require('run-sequence')
	,sourcemaps = require('gulp-sourcemaps')
	,autoprefixer = require('gulp-autoprefixer')
	,clean = require('gulp-clean');
	
var input = 'src/p8queiroz/scss/**/*.scss';
var output = 'src/p8queiroz/css';
var sassOptions = {
					  errLogToConsole: true,
					  outputStyle: 'expanded'
					};

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};


	gulp.task('default', function(callback) {
		runSequence('copylocal', ['copyremote'], callback);
	});


////
	gulp.task('copylocal', ['cleanlocal'], function() {
		return gulp
			.src('src/p8queiroz/**/*')
			.pipe(gulp.dest('dist/p8queiroz'));
	});

	//gulp.task('cleanlocal', ['buildimg', 'sass'], function() {
	gulp.task('cleanlocal', function() {
		return gulp
			.src('dist')
			.pipe(clean({force: true}));
			
	});
////--

////
	gulp.task('buildimg', function() {
		return gulp
			.src('src/p8queiroz/images/**/*')
			.pipe(imagemin())
			.pipe(gulp.dest('src/p8queiroz/images'));
	});
////--

////
	gulp.task('copyremote', ['cleanremote'], function() {
		return gulp
			.src('dist/p8queiroz/**/*')
			.pipe(gulp.dest('C:/Program Files/VertrigoServ/www/p8queiroz/wp-content/themes/p8queiroz'));
	});

	gulp.task('cleanremote', function() {
		return gulp
			.src('C:/Program Files/VertrigoServ/www/p8queiroz/wp-content/themes/p8queiroz')
			.pipe(clean({force: true}));
			
	});
////--


////
	gulp.task('sass', function () {
	  return gulp
				.src(input)
				//.pipe(sourcemaps.init())
				.pipe(sass(sassOptions).on('error', sass.logError))
				///.pipe(sourcemaps.write())
				.pipe(autoprefixer(autoprefixerOptions))
				.pipe(gulp.dest(output));
	});


	
	gulp.task('watchsass', function() {
	  return gulp
		 	.watch(input, ['sass'])
			.on('change', function(event) {
			 console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
		});
	});

////--
