<?php

function abc_dev_load_scripts()
{
    // Styles 
    wp_enqueue_style('abcdev-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('abcdev-reset', get_theme_file_uri('/styles/reset.css'), array(), filemtime(get_template_directory() . '/styles/reset.css'), 'all');
    // Fonts 

    // Javascript 
}

add_action('wp_enqueue_scripts', 'abc_dev_load_scripts');
