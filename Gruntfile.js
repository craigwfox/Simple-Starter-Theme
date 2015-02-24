module.exports = function(grunt) {
  // Do grunt-related things in here

  grunt.initConfig({

  // Watch
    watch: {
      css: {
        files: 'src/sass/**/*.scss',
        tasks: ['sass', 'autoprefixer'],
        options: {
          livereload: true,
        },
      },

      scripts: {
        files: ['src/js/**/*.js'],
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
          'assets/css/screen.css': 'src/sass/screen.scss',
        }
      },
    },
    autoprefixer: {
      options: {
        browsers: ['last 4 version']
      },single_file: {
      options: {
        // Target-specific options go here.
      },
        src: 'assets/css/screen.css',
        dest: 'style.css'
      },
    },

  // JS
    uglify: {
      my_target: {
        files: {
          'assets/js/main.min.js': ['src/js/**/*.js', '!src/js/home/**/*.js'],
          'assets/js/home.min.js': ['src/js/home/**/*.js']
        }
      }
    },

  // Images
    imageoptim: {
      imageOp: {
        src: ['assets/images']
      }
    },

  // browserSync
    browserSync: {
      dev: {
        bsFiles: {
          src : 'assets/css/screen.min.css'
        },
        options: {
          proxy: "local.dev",
          watchTask: true
        }
      }
    }

  });


  grunt.loadNpmTasks('grunt-imageoptim');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-browser-sync');


  grunt.registerTask('default',['browserSync','watch']);
};