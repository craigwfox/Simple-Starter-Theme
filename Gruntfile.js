module.exports = function(grunt) {
	// Do grunt-related things in here

	// Load SASS
	grunt.initConfig({
		sass: {                              // Task
			dist: {                            // Target
				options: {                       // Target options
					style: 'compressed'
				},
				files: {                         // Dictionary of files
					'library/css/screen.css': 'library/sass/screen.scss',       // 'destination': 'source'
				}
			}
		},
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass'],
				options: {
					livereload: true,
				},
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.registerTask('default',['watch']);
	grunt.loadNpmTasks('grunt-notify');
};