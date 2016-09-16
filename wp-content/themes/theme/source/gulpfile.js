var gulp = require('gulp'),
stylus = require('gulp-stylus'),
clean = require('gulp-clean'),
cleanCSS = require('gulp-clean-css'),
plumber = require('gulp-plumber'),
imagemin = require('gulp-imagemin'),
uglify = require('gulp-uglify'),
concat = require('gulp-concat'),
rename = require('gulp-rename'),
jeet        = require('jeet'),
rupture     = require('rupture'),
koutoSwiss  = require('kouto-swiss'),
prefixer    = require('autoprefixer-stylus');

// Copiar arquivos para pasta dist
gulp.task('copy', function() {
    return gulp.src(['source/{fonts,libraries,images}/**/*'], {base: 'source'})
        .pipe(gulp.dest('../assets/'));
});

// Apaga os arquivos
gulp.task('clean', function() {
    return gulp.src('../assets/', {read: false})
        .pipe(clean());
});

// Compilar Stylus para CSS
gulp.task('stylus', function(){
    gulp.src('source/stylus/main.styl')
    .pipe(plumber())
    .pipe(stylus({
        'use'        : [prefixer({ browsers: ['ie 7', 'ie 8'] }),koutoSwiss(),jeet(),rupture()],
        'import'     : ['jeet','rupture','kouto-swiss'],
        'url'        : 'embedurl'
    }))
    .pipe(gulp.dest('source/stylesheets/'))
});

// Minificar HTML
gulp.task('minify-html', function() {
  return gulp.src('source/*.html')
    .pipe(htmlmin({collapseWhitespace: true}))
    .pipe(gulp.dest('../assets/'))
});

// Minificar JS
gulp.task('uglify', function(){
    return gulp.src('source/scripts/**/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('../assets/scripts/'))
        .pipe(rename('all.min.js'))
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest('../assets/scripts/'))
});

// Minificar CSS
gulp.task('minify-css', function() {
  return gulp.src('source/stylesheets/*.css')
    .pipe(plumber())
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('../assets/stylesheets/'))
});

// Otimizar Imagens
gulp.task('imagemin', function() {
    return gulp.src('source/images/**/*')
        .pipe(plumber())
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [
                {removeViewBox: false},
                {cleanupIDs: false}
            ],
            interlaced: true,
            optimizationLevel: 3
        }))
        .pipe(plumber())
        .pipe(gulp.dest('../assets/images/'))
});

// Escuta

/* Alias */
gulp.task('default', ['stylus', 'uglify', 'imagemin', 'copy', 'minify-css', 'minify-html', 'watch']);
gulp.task('watch', function(){
    gulp.watch('source/images/**/*', ['imagemin']);
    gulp.watch('source/stylus/**/*.styl', ['stylus']);
    gulp.watch('source/stylesheets/*.css', ['minify-css']);
    gulp.watch('source/*.html', ['minify-html']);
    gulp.watch('source/scripts/**/*.js', ['uglify']);
    gulp.watch(['source/{fonts,libraries}/**/*'], ['copy']);
});
