module.exports = function(grunt) {

  filesJS=[
    'bower_components/jquery/dist/jquery.js',
    'bower_components/bootstrap/dist/js/bootstrap.js',
    'js/script.js'];
  filesCSS=[
    'bower_components/bootstrap/dist/css/bootstrap.css',
    'css/styles.css'];

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
      },
      concatJS: {
        src: filesJS,
        dest: 'js/all-js.js',
      },

      concatCSS: {
        src: filesCSS,
        dest: 'css/all-css.css',
      },
    },

    uglify: {
      my_target: {
        files: {
          'js/all-js.min.js': ['js/all-js.js']
        }
      },
    },

    postcss: {
      options: {
        processors: [
          require('pixrem')(), // add fallbacks for rem units
          require('autoprefixer')({browsers: 'last 2 versions'}), // add vendor prefixes
        ]
      },
      dist: {
        src: 'css/all-css.css'
      }
    },

    cssmin: {
      options: {
      },
      target: {
        files: {
          'css/all-css.min.css': ['css/all-css.css']
        }
      }
    },
    
    injector: {
      options: {addRootSlash: false,
      },
      dev: {
        files: {
          /*'index.html': [filesCSS, filesJS],
          'program.html': [filesCSS, filesJS],
          'login.html': [filesCSS, filesJS],
          'account.html': [filesCSS, filesJS],
          'account-program.html': [filesCSS, filesJS],*/
          'template.php': [filesCSS, filesJS],
        }
      },
      prod: {
        files: {
          /*'index.html': ['css/all-css.min.css', 'js/all-js.min.js'],
          'program.html': ['css/all-css.min.css', 'js/all-js.min.css'],
          'login.html': ['css/all-css.min.css', 'js/all-js.min.js'],
          'account.html': ['css/all-css.min.css', 'js/all-js.min.js'],
          'account-program.html': ['css/all-css.min.css', 'js/all-js.min.js'],*/
          'template.php': ['css/all-css.min.css', 'js/all-js.min.js'],
        }
      }
    }
  });
  
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-injector');
  grunt.loadNpmTasks('grunt-postcss');

  // Default task(s).
  grunt.registerTask('default', ['injector:dev']);
  grunt.registerTask('prod', ['concat', 'uglify', 'postcss', 'cssmin', 'injector:prod']);  
};