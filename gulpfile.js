var gulp = require('gulp'),
  sass = require('gulp-ruby-sass'),
  autoprefixer = require('gulp-autoprefixer'),
  minifycss = require('gulp-minify-css'),
  jshint = require('gulp-jshint'),
  uglify = require('gulp-uglify'),
  imagemin = require('gulp-imagemin'),
  rename = require('gulp-rename'),
  clean = require('gulp-clean'),
  concat = require('gulp-concat'),
  notify = require('gulp-notify'),
  cache = require('gulp-cache'),
  livereload = require('gulp-livereload');

// ------- Tasks
  // SASS -> CSS
  gulp.task('styles', function() {
    return gulp.src('assets-build/sass/screen.scss')
      .pipe(sass({ style: 'expanded' }))
      .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
      .pipe(gulp.dest('assets/css'))
      .pipe(minifycss())
      .pipe(gulp.dest('assets/css'))
      .pipe(notify({ message: 'Styles task complete' }));
  });

  // JS Compress & Minify
  gulp.task('scripts', function() {
    return gulp.src('assets-build/js/**/*.js')
      // .pipe(jshint('.jshintrc'))
      .pipe(jshint.reporter('default'))
      .pipe(concat('main.js'))
      .pipe(gulp.dest('assets/js'))
      .pipe(rename({suffix: '.min'}))
      .pipe(uglify())
      .pipe(gulp.dest('assets/js'))
      .pipe(notify({ message: 'Scripts task complete' }));
  });

  // Imagemin
  gulp.task('images', function() {
    return gulp.src('assets-build/images/**/*')
      .pipe(imagemin({ optimizationLevel: 3, progressive: true, interlaced: true }))
      .pipe(gulp.dest('assets/images'))
      .pipe(notify({ message: 'Images task complete' }));
  });


  // Run All Tasks
  gulp.task('default', function() {
      gulp.start('styles', 'scripts', 'images');
  });

  // Watch css, js, and images for changes
  gulp.task('watch', function() {
    // Watch .scss files
    gulp.watch('assets-build/sass/**/*.scss', ['styles']);
    // Watch .js files
    gulp.watch('assets-build/js/**/*.js', ['scripts']);
    // Watch image files
    gulp.watch('assets-build/images/**/*', ['images']);

    // Create LiveReload server
    var server = livereload();

    // Watch any files in dist/, reload on change
    gulp.watch(['assets-build/**']).on('change', function(file) {
      server.changed(file.path);
    });
  });