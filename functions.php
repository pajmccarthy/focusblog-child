<?php

add_action('wp_enqueue_scripts', 'ahc_enqueue_child_style');

// register post types
add_action('init', 'ahc_register_post_types');


/**
 * Load Javascript / CSS Files used by the child theme
 */
function ahc_enqueue_child_style()
{
    // Enqueue main child theme style.css file and make sure parent theme files are set as dependencies
    //wp_enqueue_style("thrive_child_css", get_stylesheet_uri(), array("thrive-main-style", "thrive-reset"));

    // Example for how to Enqueue a separate css file "/css/custom.css".
    //wp_enqueue_style("thrive_example_css", get_stylesheet_directory_uri() . "/css/custom.css", array("thrive-main-style", "thrive-reset", "thrive_child_css"));

    // Example for how to enqueue a separate js file "/js/example.js".  Dependant on jQuery.
    //wp_enqueue_script("thrive_example_javascript", get_stylesheet_directory_uri() . "/js/example.js", array("jquery"));
}

/**
 * Register all posts types used on the site
 */
function ahc_register_post_types()
{

    $labels = array(
        'name' => _x('Product reviews', 'post type general name', 'ahc-child'),
        'singular_name' => _x('Product review', 'post type singular name', 'ahc-child'),
        'menu_name' => _x('Product reviews', 'admin menu', 'ahc-child'),
        'name_admin_bar' => _x('Review', 'add new on admin bar', 'ahc-child'),
        'add_new' => _x('Add New', 'review', 'ahc-child'),
        'add_new_item' => __('Add New Review', 'ahc-child'),
        'new_item' => __('New Review', 'ahc-child'),
        'edit_item' => __('Edit Review', 'ahc-child'),
        'view_item' => __('View Review', 'ahc-child'),
        'all_items' => __('All Reviews', 'ahc-child'),
        'search_items' => __('Search Reviews', 'ahc-child'),
        'parent_item_colon' => __('Parent Reviews:', 'ahc-child'),
        'not_found' => __('No reviews found.', 'ahc-child'),
        'not_found_in_trash' => __('No reviews found in Trash.', 'ahc-child')
    );

    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'ahc-child'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'review'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')
    );

    register_post_type('review', $args);

    register_taxonomy("Review Category",
        array("review"),
        array(
            "hierarchical" => true,
            "label" => "Review Categories",
            "singular_label" => "Review Category",
            "rewrite" => true
        )
    );


}


