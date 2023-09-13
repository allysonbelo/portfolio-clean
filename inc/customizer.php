<?php

function abc_customizer($wp_customizer){

    // Copyright Section
    $wp_customizer->add_section(
        'sec_copyright',
        array(
            'title' => 'Copyright Settings',
            'description' => 'Copyright Settings'
        )
    );

    // Copyright Setting
    $wp_customizer->add_setting(
        'set_copyright', 
        array(
            'type' => 'theme_mod',
            'default' => 'Copyright ©2023 All rights reserved | This template is made with by Allyson Belo Cavalcante',
            'sanitize_callback' => 'sanitize_text_field'
        )
    );

    // Copyright Control
    $wp_customizer->add_control(
        'set_copyright',
        array(
            'label' => 'Copyright Information',
            'description' => 'Please, type your copyright here',
            'section' => 'sec_copyright',
            'type' => 'text'
        )
    );

    $wp_customizer->add_setting(
        'set_site_color',
        array(
            'type' => 'theme_mod',
            'default' => '#FFFFFF', // cor padrão do site
            'sanitize_callback' => 'sanitize_hex_color', // callback para garantir uma cor válida
        )
    );
    
    $wp_customizer->add_control(
        new WP_Customize_Color_Control(
            $wp_customizer,
            'set_site_color',
            array(
                'label' => 'Site Color',
                'description' => 'Choose the color for your site',
                'section' => 'colors',
            )
        )
    );
}

add_action('customize_register', 'abc_customizer');