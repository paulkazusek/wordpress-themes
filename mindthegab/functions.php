<?php
/**
 * Theme Functions
 * 
 * @package MindTheGab
 */


/**
 * Function to add and enqueue CSS files
 */
function theme_enqueue_styles() {

    // retrieve the theme version (dynamically read from the theme's style.css file)
    $version = wp_get_theme()->get( 'Version' );

    // enqueue the main stylesheet of the theme
    wp_enqueue_style(
        'main-style', 
        get_stylesheet_uri(), 
        array(), 
        $version,           // Version (theme version retrieved dynamically)
                            // filemtime( get_template_directory() . 'style.css' )
        'all'               // Media: for all devices
    );

    // enqueue Bootstrap CSS (external file from a CDN)
    wp_enqueue_style(
        'bootstrap', 
        "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", 
        array(), 
        '5.3.3',            // Bootstrap Version
        'all'               // Media: for all devices
    );
}

/**
 * Function to add and enqueue JavaScript files
 */
function theme_enqueue_scripts() {

    // enqueue Bootstrap JavaScript (external file from a CDN)
    wp_enqueue_script(
        'bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', 
        array(), 
        '5.3.3', 
        true
    );

    // enqueue Floating UI Core (external file from a CDN)
    wp_enqueue_script(
        'floating-ui-core', 
        'https://cdn.jsdelivr.net/npm/@floating-ui/core@1.6.8', 
        array(), 
        '1.6.8', 
        true
    );

    // enqueue Floating UI DOM (external file from a CDN)
    wp_enqueue_script(
        'floating-ui-dom', 
        'https://cdn.jsdelivr.net/npm/@floating-ui/dom@1.6.12', 
        array(), 
        '1.6.8', 
        true
    );

    // enqueue the main JavaScript file of the theme (main.js)
    wp_enqueue_script(
        'main-script', 
        get_template_directory_uri().
        '/assets/js/main.js', 
        array(), 
        '1.0', 
        true
    );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

?>