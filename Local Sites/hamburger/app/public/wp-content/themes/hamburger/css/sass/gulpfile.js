var gulp = require("gulp");
var sass = require("gulp-sass")(require("sass"));

const compileSass = () =>
    src("./sass/**/*.scss")
    // Sassのコンパイルを実行
    .pipe(
        sass({
            outputStyle: "compressed",
        })
        // Sassのコンパイルエラーを表示
        // (これがないと自動的に止まってしまう)
        .on("error", sass.logError)
    )
    // sassの後に指定
    .pipe(sass({ outputStyle: "expanded" }))
    // cssフォルダー以下に保存
    .pipe(gulp.dest("./css/sass"));

// Sassファイルを監視
const watchSassFiles = () =>
    watch("./**/*.scss", compileSass);

// gulp.task("sass", function(done) {
//     return gulp
//         .src("./sass/**/*.scss")
//         .pipe(sass({ outputStyle: "expanded" }))
//         .pipe(gulp.dest("./css"));
//     done();
// });
// gulp.task('sass:watch', function() {
//     gulp.watch('./**/*.scss', gulp.task('sass'));
// });