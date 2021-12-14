var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));

gulp.task("sass", function(done) {
    return gulp
        .src("./sass/**/*.scss")
        .pipe(sass({ outputStyle: "expanded" }))
        .pipe(gulp.dest("./css"));
    done();
});
gulp.task('sass:watch', function() {
    gulp.watch('./**/*.scss', gulp.task('sass'));
});

// var sass = require('gulp');
// var sass = require('gulp-sass')(require("sass"));
// (require("sass"));

// // プラグインの処理をまとめる
// const cssSass = () => {
//     return src('src/css/**/*.scss') //コンパイル元
//         .pipe(sass({ outputStyle: 'expanded' }))
//         // .pipe(dest('./css')) //コンパイル先
//         .pipe(gulp.dest('./css'));
// }

// // タスクをまとめて実行
// exports.default = series(cssSass);

// gulp.task('sass:watch', function() {
//     gulp.watch('./*.scss', gulp.task('sass'));
// });