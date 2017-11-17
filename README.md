# (GitHub-wp-template) Wordpress Template

This project will guide you through the process of creating a simple Wordpress theme from scratch. The following tech are used:

 * PHP
 * Bootstrap
 * Javascript/jQuery

NPM

Install projects dependencies:

 * npm install

To run a Gulp task:

 * npm run gulp taskName
 
 
 
To run a default npm Gulp task:

 * npm run gulp
 

And here's an example of a Gulp task! :+1:

```javascript
var gulp = require('gulp')
	,browserSync = require('browser-sync');

gulp.task('default', function() {
	gulp.start('server');
});

gulp.task('server', function() {
	browserSync.init({
		server: {
			baseDir: 'src'
		}
	});

gulp.watch('src/**/*').on('change', browserSync.reload);


});
```

This is [on GitHub](https://github.com/jbt/markdown-editor) so let me know if I've borked it somewhere.

### Useful commands

npm install --save-dev gulp-path
npm install gulp-clean@0.3.1 --save-dev

### Useful links:

