<?php
function causalfunnel_enqueue_styles() {
    wp_enqueue_style('tailwindcss', 'https://cdn.tailwindcss.com', array(), null);
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

add_theme_support( 'post-thumbnails' );
add_action('wp_enqueue_scripts', 'causalfunnel_enqueue_styles');
?>
