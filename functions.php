<?php

function abc_dev_load_scripts()
{
    // Styles 
    wp_enqueue_style('abcdev-reset-css', get_theme_file_uri('/styles/reset.css'), array(), filemtime(get_template_directory() . '/styles/reset.css'), 'all');
    wp_enqueue_style('abcdev-style-css', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('abcdev-base-css', get_theme_file_uri('/styles/base.css'), array(), filemtime(get_template_directory() . '/styles/base.css'), 'all');
    wp_enqueue_style('abcdev-header-css', get_theme_file_uri('/styles/header.css'), array(), filemtime(get_template_directory() . '/styles/header.css'), 'all');
    wp_enqueue_style('abcdev-front-page-css', get_theme_file_uri('/styles/front-page.css'), array(), filemtime(get_template_directory() . '/styles/front-page.css'), 'all');
    wp_enqueue_style('abcdev-parts-banner', get_theme_file_uri('/styles/styles-parts/banner.css'), array(), filemtime(get_template_directory() . '/styles/styles-parts/banner.css'), 'all');

    // Fonts 
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;600&family=Roboto:wght@300;400;500&display=swap', array(), null);

    // Javascript 
    wp_enqueue_script('main-js', get_theme_file_uri('./build/index.js'), array(), filemtime(get_template_directory() . './build/index.js'), true);
}

add_action('wp_enqueue_scripts', 'abc_dev_load_scripts');
