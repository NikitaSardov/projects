var gulp        = require('gulp');
var minifyCss   = require('gulp-minify-css');
var sass        = require('gulp-sass');
var notify      = require('gulp-notify');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;

var paths = {
  html:['index.html'],
  css:['style.css']
};

gulp.task('mincss', function(){
  return gulp.src(paths.css)
    .pipe(minifyCss())
    .pipe(gulp.dest('main'))
    .pipe(reload({stream:true}))
	.pipe(notify('CSS changed! Browser refreshed'));
});

// ////////////////////////////////////////////////
// HTML 
// ///////////////////////////////////////////////
gulp.task('html', function(){
  gulp.src(paths.html)
  .pipe(reload({stream:true}))
  .pipe(notify('HTML changed! Browser refreshed'));
});

// ////////////////////////////////////////////////
// Browser-Sync
// // /////////////////////////////////////////////
gulp.task('browserSync', function() {
  browserSync({
    server: {
      baseDir: "./"
    },
    port: 8080,
    open: true,
    notify: true
  });
});

gulp.task('watcher',function(){
  gulp.watch(paths.css, ['mincss']);
  gulp.watch(paths.html, ['html']);
});

gulp.task('default', ['watcher', 'browserSync']);