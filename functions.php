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

    // Bootstrap Icons
    wp_enqueue_style( 'bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', array(), '1.10.5' );

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);

    // Snapshot of HTML and convert to images
    wp_enqueue_script('html2canvas', 'https://cdn.jsdelivr.net/npm/html2canvas@1.4.1/dist/html2canvas.min.js', array(), '1.4.1', true);

    // Canvas where users can add/edit text, images, shapes
    wp_enqueue_script('fabric-js', 'https://cdnjs.cloudflare.com/ajax/libs/fabric.js/5.2.4/fabric.min.js', array(), '5.2.4', true);

    // === CUSTOM JS === //
    // About JS
    wp_enqueue_script('about-js', get_template_directory_uri() . '/assets/js/about.js', array('swiper-js'), '1.0', true);  

    // Commission Form JS
    wp_enqueue_script('commission-form', get_template_directory_uri() . '/assets/js/commission-form.js', array(), '1.0', true);

    // Contact Form JS
    wp_enqueue_script('contact-form', get_template_directory_uri() . '/assets/js/contact-form.js', array(), '1.0', true);

    // Custom Page JS
    wp_enqueue_script('custom-page', get_template_directory_uri() . '/assets/js/custom-page.js', array('html2canvas', 'fabric-js'), '1.0', true);

    // Custom Size JS
    wp_enqueue_script('custom-size', get_template_directory_uri() . '/assets/js/custom-size.js', array(), '1.0', true);

    // Enquiry Form JS
    wp_enqueue_script('enquiry-form', get_template_directory_uri() . '/assets/js/enquiry-form.js', array(), '1.0', true);
    
    // Footer JS
    wp_enqueue_script('footer-js', get_template_directory_uri() . '/assets/js/footer.js', array('swiper-js'), '1.0', true);  

    // Gallery Filter JS
    wp_enqueue_script('gallery-js', get_template_directory_uri() . '/assets/js/gallery.js', array(), '1.0', true);

    // Index Page Workshop Section JS
    wp_enqueue_script('index-workshop-js', get_template_directory_uri() . '/assets/js/index-workshop.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'sosostudio_enqueue_styles');

// Favicon function (we can change this later)
function add_favicon() 
{
    echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/favicon.jpg" />';
}
add_action('wp_head', 'add_favicon');

// Register custom post type for Showcases
function register_showcase_post_type() {
    register_post_type('showcase', [
        'labels' => [
            'name' => 'Showcases',
            'singular_name' => 'Showcase',
            'add_new_item' => 'Add New Showcase',
            'edit_item' => 'Edit Showcase',
            'new_item' => 'New Showcase',
            'view_item' => 'View Showcase',
            'search_items' => 'Search Showcases',
        ],
        'public' => true,
        'rewrite' => ['slug' => 'showcases'],
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'show_in_rest' => true, 
    ]);
}
add_action('init', 'register_showcase_post_type');


// Register custom post type for Rugs
function register_rug_post_type() {
    register_post_type('rug', [
        'labels' => [
            'name' => 'Rugs',
            'singular_name' => 'Rug',
            'add_new_item' => 'Add New Rug',
            'edit_item' => 'Edit Rug',
            'new_item' => 'New Rug',
            'view_item' => 'View Rug',
            'search_items' => 'Search Rugs',
        ],
        'public' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'rugs'],
        'menu_icon' => 'dashicons-art',
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_rug_post_type');

// Register taxonomy for rug types
function register_rug_type_taxonomy() {
    register_taxonomy('rug_type', 'rug', [
        'label' => 'Rug Types',
        'hierarchical' => false, 
        'public' => true,
        'rewrite' => ['slug' => 'rug-type'],
        'show_admin_column' => true,
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_rug_type_taxonomy');

// Enable featured images + size for gallery thumbs
add_theme_support('post-thumbnails');
add_image_size('rug-thumb', 500, 500, true);

// Function to register a workshop
function register_workshop_post_type() {
    register_post_type('workshop', [
        'label' => 'Workshops',
        'public' => true,
        'menu_icon' => 'dashicons-hammer',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'has_archive' => true,
    ]);
}
add_action('init', 'register_workshop_post_type');