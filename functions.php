<?php
    
    /*the first argument instructs WP what type of instructions were giving; this code is then run at "different times" to load a file we use the following first argument. the second argument is the name of a function that we want to run (here it is created by us). finish the code to upload styles file*/
    add_action('wp_enqueue_scripts', 'learn_land_files');

?>
