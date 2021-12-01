var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));

gulp.task("sass", function(done) {
    return gulp
        .src("./sass/**/*.scss")
        .pipe(sass({ outputStyle: "expanded" }))
        .pipe(gulp.dest("./sass/css"));
    done();
});
gulp.task('sass:watch', function() {
    gulp.watch('./**/*.scss', gulp.task('sass'));
});