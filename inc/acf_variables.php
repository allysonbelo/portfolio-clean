<?php 

// Banner página inicial - Start
$main_title_banner = get_field('main_title');
$main_title_banner = ($main_title_banner !== "") ? $main_title_banner : "Put Your Title Here"; //Add default value if the user don't put any value

$sub_title = get_field('sub_title');
$sub_title = ($sub_title !== "") ? $sub_title : "This is me";

$banner_text_area = get_field('banner_text_area');
$banner_text_area = ($banner_text_area !== "") ? $banner_text_area : "Put Your Text Here";

$front_skills = get_field('front_page_skills');
$front_skills = (empty($front_skills)) ? "<h5>Put Your Skills Here</h5>" : $front_skills;

// Banner página inicial - End