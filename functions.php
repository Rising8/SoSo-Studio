<?php

function sosostudio_enqueue_styles() 
{
    // Main stylesheet of the theme
    wp_enqueue_style('sosostudio-style', get_stylesheet_uri());

    // jQuery (core WP registered)
    wp_enqueue_script('jquery');

    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');

    // Bootstrap JS
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    // Custom CSS
    wp_enqueue_style('sosostudio-custom', get_template_directory_uri() . '/assets/css/style.css');

    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Marcellus&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), null);

    // FontAwesome Icons
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);

    // === CUSTOM JS === //
    // About JS
    wp_enqueue_script('about-js', get_template_directory_uri() . '/assets/js/about.js', array('swiper-js'), '1.0', true);  

    // Search Toggle JS    
    wp_enqueue_script('search-toggle', get_template_directory_uri() . '/assets/js/search-toggle.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'sosostudio_enqueue_styles');

// Favicon function (we can change this later)
function add_favicon() 
{
    echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/favicon.jpg" />';
}
add_action('wp_head', 'add_favicon');

