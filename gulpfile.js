const gulp = require('gulp');
const stylus = require('gulp-stylus');

gulp.task('css', () => {
	return gulp.src('src/css/style.styl').pipe(stylus()).pipe(gulp.dest('public/dist/css'));
});

gulp.task('watch', () => {
	return gulp.watch('src/css/**/*.styl', ['css']);
});

gulp.task('default', ['css', 'watch']);