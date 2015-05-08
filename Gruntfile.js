 //Gruntfile
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
        }

      });

    // Plugin loading
    grunt.loadNpmTasks('grunt-contrib-less');
    
    // Task definition

  };