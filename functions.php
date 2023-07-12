<?php

function abc_dev_load_scripts()
{
    // Styles 
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style('all-styles', get_theme_file_uri('/styles/main-styles.css'), array(), filemtime(get_template_directory() . '/styles/main-styles.css'), 'all');

    // Fonts 
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;600&family=Roboto:wght@300;400;500&display=swap', array(), null);

    // Javascript 
    wp_enqueue_script('main-js', get_theme_file_uri('./build/index.js'), array(), filemtime(get_template_directory() . './build/index.js'), true);
}

add_action('wp_enqueue_scripts', 'abc_dev_load_scripts');

function abc_dev_config(){
    add_theme_support( 'post-thumbnails');
}

add_action('after_setup_theme', 'abc_dev_config');
