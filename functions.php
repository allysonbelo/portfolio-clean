<?php

require get_template_directory() . '/inc/customizer.php';

function abc_dev_load_scripts()
{
    // Styles 
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0', 'all');
    wp_enqueue_style('all-styles', get_theme_file_uri('/styles/all-styles.css'), array(), filemtime(get_template_directory() . '/styles/all-styles.css'), 'all');

    // Fonts 
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;600&family=Roboto:wght@300;400;500&display=swap', array(), null);

    // Javascript 
    wp_enqueue_script('main-js', get_theme_file_uri('./build/index.js'), array(), filemtime(get_template_directory() . './build/index.js'), true);
}

add_action('wp_enqueue_scripts', 'abc_dev_load_scripts');

/**
 * Configuration for ABC theme.
 */
if (function_exists('add_theme_support')) {
    function abc_dev_config()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');

        add_theme_support('custom-logo', array(
            'height' => 100,
            'width' => 400,
            'flex-height' => true,
            'flex-width' => true,
        ));

        register_nav_menus(
            array(
                'abc_header_menu' => 'Header Menu',
                'abc_footer_menu' => 'Footer Menu'
            )
        );

        $args  = array(
            'height'    => 303,
            'width'     => 1920
        );
        add_theme_support( 'custom-header', $args );
    }
}
add_action('after_setup_theme', 'abc_dev_config', 0);

add_filter('show_admin_bar', '__return_false'); //Other option : __return_false

//limitando a quantidade de caracteres em uma palavra
function custom_trim_url($url, $limit) {
    if (strlen($url) <= $limit) {
        return $url;
    } else {
        // Remove protocol and www. to account for shorter URLs
        $url = preg_replace('#^https?://(?:www\.)?#i', '', $url);

        // Trim the URL to the desired length
        $url = substr($url, 0, $limit);

        return $url . '...';
    }
}

// Adiciona bibioteca do lottiesfiles
function lottie_file_script(){
    echo '<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>';
}
add_action('wp_head', "lottie_file_script");