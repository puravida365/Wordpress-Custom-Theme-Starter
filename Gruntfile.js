 //Gruntfile
    module.exports = function(grunt) {

    //Initializing the configuration object
      grunt.initConfig({

        // Task configuration
        concat: {
          options: {
            separator: ';',
          },
          js_frontend: {
            src: [
              './bower_components/jquery/jquery.js',
              './bower_components/bootstrap/dist/js/bootstrap.js',
              './app/assets/javascript/frontend.js'
            ],
            dest: './public/assets/javascript/frontend.js',
          },
        },
        less{
          //...
        },
        uglify{
          //...
        },
        phpunit{
          //...
        },
        watch{
          //...
        },
        // fontAwesomeVars: {
        //   main: {
        //     variablesLessPath: 'variables.less',
        //     fontPath: '../bower_components/font-awesome/fonts'      //NOTE: this must be relative to FINAL, compiled .css file - NOT the variables.less file! For example, this would be the correct path if the compiled css file is main.css which is in 'src/build' and the font awesome font is in 'src/bower_components/font-awesome/fonts' - since to get from main.css to the fonts directory, you first go back a directory then go into bower_components > font-awesome > fonts. 
        //   }
        // }
      });

    // Plugin loading

    // Task definition

  };