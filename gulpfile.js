const gulp = require('gulp'); 
const cssnano = require('gulp-cssnano'); 
const sass = require('gulp-sass')(require('sass')); 
const concat = require('gulp-concat'); 
const uglify = require('gulp-uglify');

gulp.task('sass', function(){    
    return gulp.src('assets/src/scss/*.scss')       
        .pipe(sass())       
        .pipe(cssnano())       
        .pipe(gulp.dest('assets/dist/css')); 
});

gulp.task('js', function(){    
    return gulp.src(['assets/src/js/*.js'])          
        .pipe(concat('main.js'))       
        .pipe(uglify())       
        .pipe(gulp.dest('assets/dist/js')); 
});

gulp.task('watch', function(){       
	gulp.watch('assets/src/scss/*.scss', gulp.series('sass'));          
    gulp.watch('assets/src/js/*.js', gulp.series('js')); 
});

