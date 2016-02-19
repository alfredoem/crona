var gulp = require('gulp');
var sass = require('gulp-sass');
var cssnano = require('gulp-cssnano');

var path = {
    bootstrap: './node_modules/bootstrap-sass',
    public: './public'
};

/*
 |--------------------------------------------------------------------------
 | Gulp
 |--------------------------------------------------------------------------
 */

gulp.task('css', function(){
    return gulp.src('./resources/assets/sass/app.scss')
        .pipe(sass({
            includePaths: [path.bootstrap + '/assets/stylesheets']
        }))
        .pipe(cssnano())
        .pipe(gulp.dest(path.public + '/css'))
});

gulp.task('icon', function(){
    return gulp.src(path.bootstrap + '/assets/fonts/**/*')
        .pipe(gulp.dest(path.public  + '/fonts'))
});

gulp.task('default', ['css', 'icon']);