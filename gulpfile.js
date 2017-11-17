var  gulp = require('gulp')
	,browserSync = require('browser-sync')
	,path = require('gulp-path');

gulp.task('default', function() {
	gulp.start('move-file');
});

gulp.task('server', function() {
	browserSync.init({
		server: {
			baseDir: 'src'
		}
	});

	gulp.watch('src/**/*').on('change', browserSync.reload);


});


gulp.task('move-file', function() {

	return gulp.src('src/p8queiroz/**/*')
		.pipe(gulp.dest('C:/Program Files/VertrigoServ/www/p8queiroz/wp-content/themes/p8queiroz'));
});
