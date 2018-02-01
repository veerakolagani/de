var gulp  = require('gulp');
var check = require('gulp-check');
var util = require('gulp-util');
 
gulp.task('check', function () {
  gulp.src(['index.php'])
    .pipe(check(/TODO/))
    .on('error', function (err) {
      util.beep();
      util.log(util.colors.red(err));
    });
});
module.exports = gulp;