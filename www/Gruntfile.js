module.exports = function(grunt) {

  //Initializing the configuration object
    grunt.initConfig({

      // Task configuration
    less: {
        development: {
            options: {
              compress: true,  //minifying the result
            },
            files: {
              //compiling frontend.less into frontend.css
              "./app/webroot/css/frontend.css":"./assets/stylesheets/frontend.less",
              //compiling backend.less into backend.css
              "./app/webroot/css/backend.css":"./assets/stylesheets/backend.less"
            }
        }
    },
    concat: {
      options: {
        separator: ';',
      },
      js_frontend: {
        src: [
          './bower_components/jquery/jquery.js',
          './bower_components/bootstrap/dist/js/bootstrap.js',
          './bower_components/bootstrap-material-design/dist/js/material.js',
          './bower_components/bootstrap-material-design/dist/js/ripples.js',
          './assets/javascript/frontend.js'
        ],
        dest: './app/webroot/js/frontend.js',
      },
      js_backend: {
        src: [
          './bower_components/jquery/jquery.js',
          './bower_components/bootstrap/dist/js/bootstrap.js',
          './assets/javascript/backend.js'
        ],
        dest: './app/webroot/js/backend.js',
      },
    },
    uglify: {
      options: {
        mangle: false  // Use if you want the names of your functions and variables unchanged
      },
      frontend: {
        files: {
          './app/webroot/js/frontend.min.js': './app/webroot/js/frontend.js',
        }
      },
      backend: {
        files: {
          './app/webroot/js/backend.min.js': './app/webroot/js/backend.js',
        }
      },
    },
    phpunit: {
        classes: {
        },
        options: {
        }
    },
    watch: {
        js_frontend: {
          files: [
            //watched files
            './bower_components/jquery/jquery.js',
            './bower_components/bootstrap/dist/js/bootstrap.js',
            './app/webroot/js/frontend.js'
            ],   
          tasks: ['concat:js_frontend','uglify:frontend'],     //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        },
        js_backend: {
          files: [
            //watched files
            './bower_components/jquery/jquery.js',
            './bower_components/bootstrap/dist/js/bootstrap.js',
            './app/webroot/js/backend.js'
          ],   
          tasks: ['concat:js_backend','uglify:backend'],     //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        },
        less: {
          files: ['./app/webroot/css/*.less'],  //watched files
          tasks: ['less'],                          //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        }
      }
    });

  // Plugin loading
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Task definition
  grunt.registerTask('default', ['watch']);

};