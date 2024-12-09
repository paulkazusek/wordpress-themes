<?php

function enqueue_theme_styles() {

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri(), array(), $version, 'all' );

    wp_enqueue_style( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css", array(), '5.3.3', 'all' );
}

function enqueue_theme_scripts() {

    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true );

    wp_enqueue_script( 'floating-ui-core', 'https://cdn.jsdelivr.net/npm/@floating-ui/core@1.6.8', array(), '1.6.8', true );
    wp_enqueue_script( 'floating-ui-dom', 'https://cdn.jsdelivr.net/npm/@floating-ui/dom@1.6.12', array(), '1.6.8', true );

    wp_enqueue_script( 'main-script', get_template_directory_uri().'/assets/js/main.js', array(), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles' );
add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );

?>