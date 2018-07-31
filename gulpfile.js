const gulp = require("gulp"),
  browserSync = require("browser-sync").create(),
  sass = require("gulp-sass"),
  concat = require("gulp-concat");

//compile sass
gulp.task("sass", function() {
  gulp
    .src("src/scss/*.scss") // './scss/*.scss'
    .pipe(sass())
    .pipe(concat("style.css"))
    .pipe(gulp.dest("./")) // output to theme root
    .pipe(browserSync.stream());
});

//Watch and serve
gulp.task("serve", ["sass"], function() {
  browserSync.init({
    proxy: "http://sailors.local/"
  });

  gulp.watch(["src/scss/*.scss"], ["sass"]);
  gulp.watch(["src/*.html"]).on("change", browserSync.reload);
});

// Default
gulp.task("default", ["serve"]);
