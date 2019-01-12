<?php
    
    //define the function called in add_action below as 2nd argument. 
    function learn_land_files() {
        //feel free to add as much css or javaScript in here as you want!
        
        //add the style.css file.  1st argument: arbitrary nickname for style-sheet. 2nd argument: location that points towards file--we can point to specific file directories but here we'll use get_stylesheet_uri() to access WP's default stylesheet "style.css".  we can duplicate the line below to get a 2nd or 3rd stylesheet
        // if a javascript file was desired, we'd use wp_enqueue_script()
        wp_enqueue_style('learn_land_main_styles', get_stylesheet_uri() );

        //let's load in the icons from the html code we're using 
        wp_enqueue_style('font_awesome_copied_link', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

        //let's load in the font used in the code that we're modifying
        wp_enqueue_style('font_from_theme', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

        //load javaScript that enables slide function of images.  note: the 3 arguments after the get_theme_file_uri below correspond to 1. any listed dependences, 2. a version (here we make it up "1.0"), and 3. whether we want to load the js at the bottom of the html file for speed's sake.
        wp_enqueue_script('main_page_js', get_theme_file_uri('/js/scripts-bundled.js'), null, "1.0", true);
    };
    
    /*add_action will be used extensively.  the first argument instructs WP what type of instructions we're giving; this code is then run at "different times". the first argument here tells WP to load css or javasript etc. the second argument is the name of a function that we want to run (here it is created by us). finish the code to upload styles file*/
    //simply, the 2nd argument is the function called at a "specific moment".  the "specific moment" here is the 1st argument wp_enqueue_scripts.  in addtion to wp_enqueue_scripts, WP has many other hooks/moments that we can use
    //note that the function learn_land_files is written below without parentheses.  it is not called immediately below within add_action but after the first argument occurs. in other words, the function is referenced by name below but not immediately called!
    add_action('wp_enqueue_scripts', 'learn_land_files');


