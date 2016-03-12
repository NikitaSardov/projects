var gulp        = require('gulp');
	minifyCss   = require('gulp-minify-css');
	less        = require('gulp-less');
	notify      = require('gulp-notify');
	browserSync = require('browser-sync');
	reload      = browserSync.reload;
	html = {
		cosmos:['dev/cosmos/index.html'],
		psd_1:['dev/psd-1/index.html']
	};
	css	= {
		cosmos:['dev/cosmos/**/*.css'],
		psd_1:['dev/psd-1/**/*.css']
	};
	img	= {
		cosmos:['dev/cosmos/img/*.*'],
		psd_1:['dev/psd-1/img/*.*']
	};

//////////
// HTML //
//////////
gulp.task('html_cosmos', function(){
  return gulp.src(html.cosmos)
    .pipe(gulp.dest('build/cosmos'))
    /*.pipe(reload({stream:true}))*/
	.pipe(notify('cosmos HTML built! Check new files'));
});
gulp.task('html_psd_1', function(){
  return gulp.src(html.psd_1)
    .pipe(gulp.dest('build/psd-1'))
    /*.pipe(reload({stream:true}))*/
	.pipe(notify('psd-1 HTML built! Check new files'));
});

/////////	
// CSS //
/////////
gulp.task('css_cosmos', function(){
  return gulp.src(css.cosmos)
    .pipe(minifyCss())
    .pipe(gulp.dest('build/cosmos'))
    /*.pipe(reload({stream:true}))*/
	.pipe(notify('cosmos CSS built! Check new files'));
});


gulp.task('css_psd_1', function(){
  return gulp.src(css.psd_1)
    .pipe(minifyCss())
    .pipe(gulp.dest('build/psd-1'))
    /*.pipe(reload({stream:true}))*/
	.pipe(notify('psd-1 CSS built! Check new files'));
});

/////////	
// IMG //
/////////
gulp.task('img_cosmos', function(){
  return gulp.src(img.cosmos)
    .pipe(gulp.dest('build/cosmos/img'))
    /*.pipe(reload({stream:true}))*/
	.pipe(notify('cosmos IMG built! Check new files'));
});


gulp.task('img_psd_1', function(){
  return gulp.src(img.psd_1)
    .pipe(gulp.dest('build/psd-1/img'))
    /*.pipe(reload({stream:true}))*/
	.pipe(notify('psd-1 IMG built! Check new files'));
});

gulp.task('watcher', function(){
  gulp.watch(html.cosmos, ['html_cosmos']);
  gulp.watch(html.psd_1, ['html_psd_1']);
  gulp.watch(css.cosmos, ['css_cosmos']);
  gulp.watch(css.psd_1, ['css_psd_1']);
  gulp.watch(img.cosmos, ['img_cosmos']);
  gulp.watch(img.psd_1, ['img_psd_1']);
});

gulp.task('default', ['html_cosmos', 'html_psd_1', 'css_cosmos', 'css_psd_1', 'img_cosmos', 'img_psd_1', 'watcher']); 

/*
// ////////////////////////////////////////////////
// HTML 
// ///////////////////////////////////////////////
gulp.task('html', function(){
  gulp.src(paths.html)
  .pipe(reload({stream:true}))
  .pipe(notify('HTML built! Browser refreshed'));
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
*/
