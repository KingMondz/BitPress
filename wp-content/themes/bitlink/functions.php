<?php

function website_files(){
    wp_enqueue_style('website_main_styles',get_stylesheet_uri('/css/style.css'));
}

add_action('wp_enqueue_scripts','website_files');

function website_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme','website_features');


?>