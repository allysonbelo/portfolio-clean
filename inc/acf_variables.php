<?php

// Banner página inicial - Start
$main_title_banner = get_field('main_title') ?: "Put Your Title Here"; // Use a null coalescing operator to assign a default value
$sub_title = get_field('sub_title') ?: "This is me";
$banner_text_area = get_field('banner_text_area') ?: "Put Your Text Here";
$banner_image = get_field('banner_image') ?: get_theme_file_uri('/img/allyson.webp');
$buttonUrl = get_field('banner_button_url');
// Banner página inicial - Fim

// Seção Skills página inicial - inicio
$title_skills = get_field('title_skills') ?: "My Skills";
$front_skills = get_field('front_page_skills') ?: "<h5>Put Your Skills Here</h5>";
$title_about = get_field('title_about') ?: "About myself";
$text_about = get_field('text_about') ?: "<p>Text About myself</p>";
// Seção Skills página inicial - Fim

// Seção Projects página inicial - Inicio
$title_projects = get_field('title_projects') ?: "My Projects";
$projects_button = get_field('projects_button') ?: "All Projects";
// Seção Projects página inicial - Fim

// Seção Contact página inicial - Inicio
$title_contact = get_field('title_contact') ?: "Contact Me";
$text_contact = get_field('text_contact') ?: "We are looking forward to hearing from you!";
$text_contact_button = get_field('contact_button_text') ?: "Send Message";
// Seção Contact página inicial - Fim

// Lottie File página inicial - Inicio
$lottie_url = get_field('lottie_url');
$lottie_bg_color = get_field('lottie_background_color');
$lottie_direction = get_field('lottie_direction'); // Fixed variable name
$lottie_speed = get_field('lottie_speed');
$lottie_loop = get_field('lottie_loop');
$lottie_autoplay = get_field('lottie_autoplay');
$lottie_hover = get_field('lottie_hover');
// Lottie File página inicial - Fim
