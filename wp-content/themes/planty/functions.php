<?php

// Action to load scripts into the theme
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Load style.css of parent theme
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Load theme personalized css
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}