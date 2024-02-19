var gulp = require('gulp');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');
var sourcemaps = require('gulp-sourcemaps');


gulp.task('sass', gulp.series(function(){
	var plugins = [
        autoprefixer({browsers: ['> 0%']}),
        // cssnano()
    ];

	return gulp.src('./assets/css/sass/style.sass')
	.pipe(sourcemaps.init())
	.pipe(sass())
	.pipe(postcss(plugins))
	.pipe(sourcemaps.write('.'))
	.pipe(gulp.dest('./assets/css'))
}));


gulp.task('watch', gulp.series(function() {
	gulp.watch('./assets/css/sass/**/*.sass', gulp.series(['sass']));
	gulp.watch('./assets/css/sass/**/*.scss', gulp.series (['sass']));

}));

gulp.task('default', gulp.series(['sass','watch']));
