module.exports = function(grunt) {
  // Do grunt-related things in here

  grunt.initConfig({

  // Watch
    watch: {
      css: {
        files: 'assets-build/sass/**/*.scss',
        tasks: ['sass', 'autoprefixer'],
        options: {
          livereload: true,
        },
      },

      scripts: {
        files: ['assets-build/js/**/*.js'],
        tasks: ['uglify'],
        options: {
          spawn: false,
        },
      },

    },

  // CSS
    sass: {
      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'assets/css/screen.css': 'assets-build/sass/screen.scss',
        }
      },
    },
    autoprefixer: {
      options: {
        browsers: ['last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4']
      },single_file: {
      options: {
        // Target-specific options go here.
      },
        src: 'assets/css/screen.css',
        dest: 'assets/css/screen.min.css'
      },
    },

  // JS
    uglify: {
      my_target: {
        files: {
          'assets/js/main.min.js': ['assets-build/js/**/*.js', '!assets-build/js/home/**/*.js'],
          'assets/js/home.min.js': ['assets-build/js/home/**/*.js']
        }
      }
    },

  // Images
    imageoptim: {
      imageOp: {
        src: ['assets/images']
      }
    },

  });


  grunt.loadNpmTasks('grunt-imageoptim');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default',['watch']);
  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-autoprefixer');
};