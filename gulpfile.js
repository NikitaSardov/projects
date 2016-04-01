/*var minifyCss   = require('gulp-minify-css');
	less        = require('gulp-less');
	notify      = require('gulp-notify');
	autoprefix = require('gulp-autoprefixer');
	browserSync = require('browser-sync');
	reload      = browserSync.reload;
	concat = require('gulp-concat');*/
var gulp        = require('gulp');
	gulpLoadPlugins = require('gulp-load-plugins');
	plugins = gulpLoadPlugins();
    pngquant = require('imagemin-pngquant');
	browserSync = require('browser-sync');
	reload  = browserSync.reload;
	html = {
		cosmos:['dev/cosmos/index.html'],
		psd_1:['dev/psd-1/index.html'],
		final:['dev/final/index.html']
	};
	js = {
		final:['dev/final/js/*.*']
	};
	css	= {
		cosmos:['dev/cosmos/**/*.*ss'],
		header_cosmos: ['dev/cosmos/css/header/header.les_s'],
		psd_1:['dev/psd-1/**/*.*ss'],
		header_psd_1: ['dev/psd-1/css/header/header.les_s'],
		final:['dev/final/**/*.*ss'],
		header_final: ['dev/final/css/header/header.les_s']
	};
	img	= {
		cosmos:['dev/cosmos/img/*.*'],
		psd_1:['dev/psd-1/img/*.*'],
		final:['dev/final/img/*.*']
	};

//////////
// HTML //
//////////
gulp.task('html_cosmos', function(){
  return gulp.src(html.cosmos)
    .pipe(gulp.dest('build/cosmos'))
    // .pipe(reload({stream:true}))
	.pipe(plugins.notify('cosmos HTML built! Check new files'));
});
gulp.task('html_psd_1', function(){
  return gulp.src(html.psd_1)
    .pipe(gulp.dest('build/psd-1'))
    .pipe(reload({stream:true}))
	.pipe(plugins.notify('psd-1 HTML built! Check new files'));
});
gulp.task('html_final', function(){
  return gulp.src(html.final)
    .pipe(gulp.dest('build/final'))
    .pipe(reload({stream:true}))
	.pipe(plugins.notify('FINAL HTML built! Check new files'));
});


//////////
// JS //
//////////
gulp.task('js_final', function(){
  return gulp.src(js.final)
    .pipe(gulp.dest('build/final/js'))
    .pipe(reload({stream:true}))
	.pipe(plugins.notify('JS built! Check new files'));
});

//////////////	
// LESS+CSS //
//////////////
gulp.task('header_cosmos', function(){
  return gulp.src(css.header_cosmos)
	.pipe(plugins.less())
	.pipe(plugins.autoprefixer({
		browsers: ['last 2 version'],
		cascade: false
	}))
    .pipe(plugins.minifyCss())
    .pipe(gulp.dest('build/cosmos/css'))
    // .pipe(reload({stream:true}))
	.pipe(plugins.notify('cosmos CSS for header built! Check new files'));
});

gulp.task('css_cosmos', function(){
  return gulp.src(css.cosmos)
	.pipe(plugins.concat('css/style.css'))
	.pipe(plugins.less())
	.pipe(plugins.autoprefixer({
		browsers: ['last 2 version'],
		cascade: false
	}))
    .pipe(plugins.minifyCss())
    .pipe(gulp.dest('build/cosmos'))
    // .pipe(reload({stream:true}))
	.pipe(plugins.notify('cosmos CSS built! Check new files'));
});

gulp.task('header_psd_1', function(){
  return gulp.src(css.header_psd_1)
	.pipe(plugins.less())
	.pipe(plugins.autoprefixer({
		browsers: ['last 2 version'],
		cascade: false
	}))
    .pipe(plugins.minifyCss())
    .pipe(gulp.dest('build/psd-1/css'))
    .pipe(reload({stream:true}))
	.pipe(plugins.notify('psd-1 CSS for header built! Check new files'));
});

gulp.task('css_psd_1', function(){
  return gulp.src(css.psd_1)
	.pipe(plugins.less())
	.pipe(plugins.autoprefixer({
		browsers: ['last 2 version'],
		cascade: false
	}))
    .pipe(plugins.minifyCss())
	.pipe(plugins.concat('css/style.css'))
    .pipe(gulp.dest('build/psd-1'))
    .pipe(reload({stream:true}))
	.pipe(plugins.notify('psd-1 CSS built! Check new files'));
});



gulp.task('header_final', function(){
  return gulp.src(css.header_final)
	.pipe(plugins.less())
	.pipe(plugins.autoprefixer({
		browsers: ['last 2 version'],
		cascade: false
	}))
    .pipe(plugins.minifyCss())
    .pipe(gulp.dest('build/final/css'))
    .pipe(reload({stream:true}))
	.pipe(plugins.notify('FINAL CSS for header built! Check new files'));
});

gulp.task('css_final', function(){
  return gulp.src(css.final)
	.pipe(plugins.concat('css/style.css'))
	.pipe(plugins.less())
	.pipe(plugins.autoprefixer({
		browsers: ['last 2 version'],
		cascade: false
	}))
    .pipe(plugins.minifyCss())
    .pipe(gulp.dest('build/final'))
    .pipe(reload({stream:true}))
	.pipe(plugins.notify('FINAL CSS built! Check new files'));
});


/////////	
// IMG //
/////////
gulp.task('img_cosmos', function(){
  return gulp.src(img.cosmos)
	.pipe(plugins.imagemin({
		progressive: true,
		svgoPlugins: [{removeViewBox:false}],
		use: [pngquant()],
		interlaced: true
	}))
    .pipe(gulp.dest('build/cosmos/img'))
    // .pipe(reload({stream:true}))
	/* .pipe(plugins.notify('cosmos IMG built! Check new files')); */
});

gulp.task('img_psd_1', function(){
  return gulp.src(img.psd_1)
  	.pipe(plugins.imagemin({
		progressive: true,
		svgoPlugins: [{removeViewBox:false}],
		use: [pngquant()],
		interlaced: true
	}))
    .pipe(gulp.dest('build/psd-1/img'))
    .pipe(reload({stream:true}))
/* 	.pipe(plugins.notify('psd-1 IMG built! Check new files')); */
});

gulp.task('img_final', function(){
  return gulp.src(img.final)
  	.pipe(plugins.imagemin({
		progressive: true,
		svgoPlugins: [{removeViewBox:false}],
		use: [pngquant()],
		interlaced: true
	}))
    .pipe(gulp.dest('build/final/img'))
    .pipe(reload({stream:true}))
/* 	.pipe(plugins.notify('psd-1 IMG built! Check new files')); */
});

// ////////////////////////////////////////////////
// Browser-Sync
// // /////////////////////////////////////////////
gulp.task('bsync_cosmos', function() {
  browserSync({
    server: {
      baseDir: "./build/cosmos"
    },
    port: 8080,
    open: true,
    notify: true
  });
});

gulp.task('bsync_psd_1', function() {
  browserSync({
    server: {
      baseDir: "./build/psd-1"
    },
    port: 8080,
    open: true,
    notify: true
  });
});

gulp.task('bsync_final', function() {
  browserSync({
    server: {
      baseDir: "./build/final"
    },
    port: 8080,
    open: true,
    notify: true
  });
});


gulp.task('watcher_cosmos', function(){
  gulp.watch(html.cosmos, ['html_cosmos']);
  gulp.watch(css.cosmos, ['css_cosmos']);
  gulp.watch(css.header_cosmos, ['header_cosmos']);
  gulp.watch(img.cosmos, ['img_cosmos']);
});


gulp.task('watcher_psd_1', function(){
  gulp.watch(html.psd_1, ['html_psd_1']);
  gulp.watch(css.psd_1, ['css_psd_1']);
  gulp.watch(css.header_psd_1, ['header_psd_1']);
  gulp.watch(img.psd_1, ['img_psd_1']);
});


gulp.task('watcher_final', function(){
  gulp.watch(html.final, ['html_final']);
  /*gulp.watch(js.final, ['js_final']);*/
  gulp.watch(css.final, ['css_final']);
  gulp.watch(css.header_final, ['header_final']);
  gulp.watch(img.final, ['img_final']);
});




gulp.task('compile_cosmos', ['html_cosmos', 'header_cosmos', 'css_cosmos', 'img_cosmos']);

gulp.task('compile_psd_1', ['html_psd_1', 'header_psd_1', 'css_psd_1', 'img_psd_1']);

gulp.task('compile_final', ['html_final', 'header_final', 'css_final', 'img_final']);

//gulp.task('default', ['html_cosmos', 'header_cosmos', 'css_cosmos', 'img_cosmos', 'watcher_cosmos', 'bsync_cosmos']); 

//gulp.task('default', ['html_psd_1', 'header_psd_1', 'css_psd_1', 'img_psd_1', 'watcher_psd_1', 'bsync_psd_1']); 

gulp.task('default', ['html_final', /*'js_final',*/ 'header_final', 'css_final', 'img_final', 'watcher_final', 'bsync_final']); 