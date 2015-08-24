<?php
/**
 * Authority hacker child theme functions file
 */


add_action( 'wp_enqueue_scripts', 'ahc_enqueue_child_style' );

/**
 * Load Javascript / CSS Files used by the child theme
 */
function ahc_enqueue_child_style() {
    // Enqueue main child theme style.css file and make sure parent theme files are set as dependencies
    //wp_enqueue_style("thrive_child_css", get_stylesheet_uri(), array("thrive-main-style", "thrive-reset"));

    // Example for how to Enqueue a separate css file "/css/custom.css".
    //wp_enqueue_style("thrive_example_css", get_stylesheet_directory_uri() . "/css/custom.css", array("thrive-main-style", "thrive-reset", "thrive_child_css"));

    // Example for how to enqueue a separate js file "/js/example.js".  Dependant on jQuery.
    //wp_enqueue_script("thrive_example_javascript", get_stylesheet_directory_uri() . "/js/example.js", array("jquery"));
}




