var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));

gulp.task('sass', function(done) {
  return gulp.src('./sass/**/*.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(gulp.dest('./css'));
    done();
});

gulp.task('sass:watch', function() {
  gulp.watch('./sass/**/*.scss', gulp.task('sass'));
});


