module.exports = function(grunt) {
  // Do grunt-related things in here

  grunt.initConfig({

  // Watch
    watch: {
      css: {
        files: 'assets/sass/**/*.scss',
        tasks: ['sass'],
        options: {
          livereload: true,
        },
      },

      scripts: {
        files: ['assets/jsbin/*.js'],
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
          'assets/css/screen.css': 'assets/sass/screen.scss',
        }
      },
    },

  // JS
    uglify: {
      my_target: {
        files: {
          'assets/js/site.min.js': ['assets/jsbin/site.js']
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
};