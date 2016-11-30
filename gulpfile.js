/**
 * Created by tedyuen on 16-11-30.
 */
const gulp = require('gulp');

gulp.task('less',['delCss'], function () {
  return gulp.src('./app/sass/**/*.scss')
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('./app/sass/css'));
  gulp.run('concatcss');
  gulp.run('minify-css');
});

//--del
gulp.task('delCss',function(){
  del([
    './app/sass/css/*.*',
    './app/build/css/all.min.css'
  ]);
});
//--del

gulp.task('default',['nodeModule','js-build','sass']);
