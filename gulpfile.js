var gulp = require( 'gulp' ),
  gulp_rename  = require('gulp-rename'),
  gulp_plumber = require ('gulp-plumber'),
  gulp_sourcemaps = require ('gulp-sourcemaps'),
  gulp_notify = require('gulp-notify'),
  gulp_babel = require('gulp-babel')
  gulp_cssnano = require('gulp-cssnano'),
  gulp_autoprefixer = require ( 'gulp-autoprefixer' ),
  gulp_sass = require('gulp-sass'),

  gulp_uglify  = require('gulp-uglify'),
  gulp_concat = require('gulp-concat'),


  gulp_imagmin = require ('gulp-imagemin');

var config = {
  dist: 'dist/',
  src : 'src/',
  assets: 'dist/assets/'
}

gulp.task('default', ['watch'], function() {});

gulp.task('sass', function () {
  return gulp.src(config.src + 'scss/*.scss')
  .pipe(gulp_plumber({
      errorHandler: gulp_notify.onError('SASS Erro  <%= error.message %>')
  }))
  .pipe(gulp_sourcemaps.init())
  .pipe(gulp_sass({
      outputStyle: 'compressed'}).on('error', gulp_sass.logError))
  .pipe(gulp_sourcemaps.write())
  .pipe(gulp_autoprefixer({
      browsers: ['last 2 versions'],
  cascade: false
}))
  .pipe(gulp_rename('style.min.css'))
  .pipe(gulp.dest(config.assets + 'css'))
  // .pipe(gulp_notify('SASS has been compiled !'))
});

gulp.task('styles', function() {
  return gulp.src(config.src + 'styles/*.css')
  .pipe(gulp_plumber({errorHandler: gulp_notify.onError('STYLES Erro  <%= error.message %>')}))
  .pipe(gulp_sourcemaps.init())
  .pipe(gulp_cssnano())
  .pipe(gulp_sourcemaps.write())
  .pipe(gulp_autoprefixer({
    browsers: ['last 2 versions'],
    cascade: false
  }))
  .pipe(gulp_rename('library.min.css'))
  .pipe(gulp.dest(config.assets + 'css'))
  // .pipe(gulp_notify('CSS minified!'))
});



gulp.task( 'javascript', function()
{
  return gulp.src([
    config.src + 'js/*.js'
  ])
  .pipe(gulp_plumber({
      errorHandler: gulp_notify.onError("JS Error: <%= error.message %>")}))
  .pipe(gulp_sourcemaps.init())
  .pipe( gulp_concat('main.min.js'))
  .pipe(gulp_babel({presets: ['babel-preset-es2015'].map(require.resolve)}))
  .pipe( gulp_uglify())
  .pipe(gulp_sourcemaps.write())
  .pipe( gulp.dest(config.assets + 'js'));
  // .pipe(gulp_notify('JS minified!'))
});



gulp.task('imagemin', function()
{
  return gulp.src(config.src + 'img/*')
  .pipe(gulp_imagmin())
  .pipe(gulp.dest(config.assets + 'img'))
  // .pipe(gulp_notify('Images minified!'))
});

gulp.task( 'watch', ['sass', 'javascript', 'imagemin'], function() {
  gulp.watch(config.src + 'scss/**/*.scss', ["sass"]);
  gulp.watch(config.src + 'js/**/*.js', ["javascript"]);
});
