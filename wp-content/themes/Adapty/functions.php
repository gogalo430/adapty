<?php
function adapty_enqueue_styles() {
    // Register and enqueue your stylesheet
    wp_register_style('adapty-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('adapty-style');
}
add_action('wp_enqueue_scripts', 'adapty_enqueue_styles');


function add_font_awesome() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'add_font_awesome' );
