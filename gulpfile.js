var chokidar = require('chokidar');

var sassSources = ['assets/sass/style.scss']

var gulp = require('gulp'),
  minifyCSS = require('gulp-minify-css'),
  sass = require('gulp-sass')

gulp.task( 'default', [ 'compile' ] )

gulp.task('compile', function(){
  return gulp.src( sassSources )
    .pipe(sass())
    .pipe(minifyCSS({}))
    .pipe(gulp.dest('./css/'))
})

gulp.task('watch', function () {
  var watcher = chokidar.watch('assets/sass/');
  watcher.on('ready', function () {
    watcher.on('all', function (e, path) {

    return gulp.src( sassSources )
    .pipe(sass())
    .pipe(minifyCSS({}))
    .pipe(gulp.dest('./css/'))

    
    })
  })
});
