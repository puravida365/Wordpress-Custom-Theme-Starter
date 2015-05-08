module.exports = function(grunt) {

//Initializing the configuration object
  grunt.initConfig({

          less: {
        development: {
            options: {
              compress: true,  //minifying the result
            },
            files: {
              //compiling base.less into style.css
              "./public/assets/stylesheets/style.css":"./static/css/base.less"
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
        './static/js/main.js'
      ],
      dest: './public/assets/javascript/main.js',
    }
  },
  uglify: {
    options: {
      mangle: false  // Use if you want the names of your functions and variables unchanged
    },
    frontend: {
      files: {
        './public/assets/javascript/main.js': './public/assets/javascript/main.js',
      }
    },
  },
  watch: {
      js_frontend: {
        files: [
          //watched files
          './bower_components/jquery/jquery.js',
          './bower_components/bootstrap/dist/js/bootstrap.js',
          './static/js/main.js'
          ],   
        tasks: ['concat:js_frontend','uglify:frontend'],     //tasks to run
        options: {
          livereload: true                        //reloads the browser
        }
      },
      less: {
        files: ['./app/assets/stylesheets/*.less'],  //watched files
        tasks: ['less'],                          //tasks to run
        options: {
          livereload: true                        //reloads the browser
        }
      },
      tests: {
        files: ['app/controllers/*.php','app/models/*.php'],  //the task will run only when you save files in this location
        tasks: ['phpunit']
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