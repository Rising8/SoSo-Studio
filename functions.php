<?php

function sosostudio_enqueue_styles() {
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
function add_favicon() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="'.get_template_directory_uri().'/favicon.jpg" />';
}
add_action('wp_head', 'add_favicon');

// Enable featured images + image size for gallery thumbs
add_theme_support('post-thumbnails');
add_image_size('rug-thumb', 500, 500, true);

// Register custom post type for Showcases
function register_showcase_post_type() {
    register_post_type('showcase', [
        'labels' => [
            'name' => 'Index Showcases',
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

// Register custom post type for Rug Categories
function register_rug_category() {
    register_post_type('rug_category', array(
        'labels' => array(
            'name' => 'Rug Categories',
            'singular_name' => 'Rug Category',
        ),
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-images-alt2',
        'supports'    => array('title', 'editor', 'thumbnail', 'page-attributes'),
    ));
}
add_action('init', 'register_rug_category');

// Register custom post type for Index Hero images
function register_index_hero_images() {
    $labels = array(
        'name' => __('Index Hero Images'),
        'singular_name' => __('Hero Image'),
        'add_new' => __('Add New Hero Image'),
        'add_new_item' => __('Add New Hero Image'),
        'edit_item' => __('Edit Hero Image'),
        'new_item' => __('New Hero Image'),
        'view_item' => __('View Hero Image'),
        'all_items' => __('All Hero Images'),
        'search_items' => __('Search Hero Images'),
        'not_found' => __('No Hero Images found.'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'thumbnail'),
        'menu_position' => 20,
        'show_in_rest' => true,
    );

    register_post_type('hero_image', $args);
}
add_action('init', 'register_index_hero_images');

// Render the images in the index hero section 
function render_index_hero_images() {
    $args = array(
        'post_type' => 'hero_image',
        'posts_per_page' => 5, // Max 5 images displayed
        'orderby' => 'menu_order', // Drag-and-drop ordering
        'order' => 'ASC',
    );

    $hero_query = new WP_Query($args);

    if ($hero_query->have_posts()) {
        echo '<div class="hero-img-section text-center py-5">';
        echo '<div class="d-flex flex-wrap justify-content-center index-hero-layout align-items-center pt-3 pb-5">';
        
        while ($hero_query->have_posts()) {
            $hero_query->the_post();
            $size = get_field('image_size'); // ACF: Small/Medium/Big
            $size_class = 'hero-img-' . strtolower($size);
            $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
            $alt = get_the_title();

            // Output each hero image with the appropriate size class
            echo '<img src="' . esc_url($image_url) . '" class="hero-img ' . esc_attr($size_class) . ' rounded-5" alt="' . esc_attr($alt) . '">';
        }

        echo '</div>';
        echo '<img src="' . get_stylesheet_directory_uri() . '/assets/img/landing-page/hero-background.png" alt="Background" class="hero-background img-fluid">';
        echo '</div>';
        wp_reset_postdata();
    }
}
// Adds a shortcode to display Hero Images in index.php 
add_shortcode('hero_images', 'render_index_hero_images');

// Register custom post type for Gallery Images
function register_gallery_images() {
    $labels = array(
        'name' => __('Gallery Hero Images'),
        'singular_name' => __('Gallery Image'),
        'add_new' => __('Add New Gallery Image'),
        'add_new_item' => __('Add New Gallery Image'),
        'edit_item' => __('Edit Gallery Image'),
        'new_item' => __('New Gallery Image'),
        'view_item' => __('View Gallery Image'),
        'all_items' => __('All Gallery Images'),
        'search_items' => __('Search Gallery Images'),
        'not_found' => __('No Gallery Images found.'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'thumbnail'),
        'menu_position' => 21,
        'show_in_rest' => true,
    );

    register_post_type('gallery_image', $args);
}
add_action('init', 'register_gallery_images');

// Render the images in the gallery hero section 
function render_gallery_images() {
    $args = array(
        'post_type'      => 'gallery_image',
        'posts_per_page' => 7, // 7 images
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    );

    $gallery_query = new WP_Query($args);

    if ($gallery_query->have_posts()) {
        $images = [];
        while ($gallery_query->have_posts()) {
            $gallery_query->the_post();
            $images[] = array(
                'url' => get_the_post_thumbnail_url(get_the_ID(), 'full'),
                'alt' => get_the_title(),
            );
        }
        wp_reset_postdata();

        echo '<div class="gallery-content-1">';
        echo '<div class="gallery-layout pt-5">';

        // Row 1
        echo '<div class="gallery-row row-1">';
        if (!empty($images[0])) echo '<img src="' . esc_url($images[0]['url']) . '" alt="' . esc_attr($images[0]['alt']) . '">';
        if (!empty($images[1])) echo '<img src="' . esc_url($images[1]['url']) . '" alt="' . esc_attr($images[1]['alt']) . '">';
        echo '</div>';

        // Row 2
        echo '<div class="gallery-row row-2">';
        if (!empty($images[2])) echo '<img src="' . esc_url($images[2]['url']) . '" alt="' . esc_attr($images[2]['alt']) . '">';
        echo '</div>';

        // Row 3
        echo '<div class="gallery-row row-3">';
        if (!empty($images[3])) echo '<img src="' . esc_url($images[3]['url']) . '" alt="' . esc_attr($images[3]['alt']) . '">';
        if (!empty($images[4])) echo '<img src="' . esc_url($images[4]['url']) . '" alt="' . esc_attr($images[4]['alt']) . '">';
        echo '</div>';

        // Row 4
        echo '<div class="gallery-row row-4">';
        if (!empty($images[5])) echo '<img src="' . esc_url($images[5]['url']) . '" alt="' . esc_attr($images[5]['alt']) . '">';
        if (!empty($images[6])) echo '<img src="' . esc_url($images[6]['url']) . '" alt="' . esc_attr($images[6]['alt']) . '">';
        echo '</div>';

        echo '</div>'; // .gallery-layout

        // Heading hard-coded
        echo '<h1 class="gallery-hero-heading index-header display-5 text-body-emphasis text-center pt-5 pb-3 d-block mx-auto">';
        echo 'Step Into Our <br> World of Threads!';
        echo '</h1>';

        // Background hard-coded
        echo '<img src="' . get_stylesheet_directory_uri() . '/assets/img/gallery-page/hero-background.png" alt="Background" class="gallery-hero-background img-fluid">';

        echo '</div>'; // .gallery-content-1
    }
}
add_shortcode('gallery_images', 'render_gallery_images');

// Add instructions meta box to any CPT
function add_cpt_instructions_meta_box($cpt_slug, $title, $instructions = [], $tip = '') {
    add_meta_box(
        "{$cpt_slug}_instructions",
        $title,
        function() use ($instructions, $tip) {
            echo '<p><strong>Instructions:</strong></p>';
            echo '<ul style="padding-left: 18px;">';
            foreach ($instructions as $instruction) {
                echo "<li>{$instruction}</li>";
            }
            echo '</ul>';
            if ($tip) {
                echo "<p><em>Tip:</em> {$tip}</p>";
            }
        },
        $cpt_slug,
        'side',
        'high'
    );
}

// Register all CPT instructions at once
function register_cpt_instructions() {
    // Hero Images
    add_cpt_instructions_meta_box('hero_image', 'Hero Images Instructions', [
        'Upload <strong>5 images</strong>.',
        'Order them using drag-and-drop (Post Types Order plugin).',
        'Each image should have a featured image set.',
        'Use the <strong>Image Size</strong> field (Small/Medium/Big) to control layout.',
        'The first image will appear on the far left, followed by the next in order.',
    ], 'Keep images consistent in style for the best visual layout.');

    // Gallery Images
    add_cpt_instructions_meta_box('gallery_image', 'Gallery Images Instructions', [
        'Upload 7 images.',
        'Order them using drag-and-drop (Post Types Order plugin).',
        '<strong>Row 1 → images 1 & 2</strong>',
        '<strong>Row 2 → image 3</strong>',
        '<strong>Row 3 → images 4 & 5</strong>',
        '<strong>Row 4 → images 6 & 7</strong>',
    ], 'Make sure all slots are filled for proper layout.');

    // Showcases
    add_cpt_instructions_meta_box('showcase', 'Rug Showcases Instructions', [
        'Give each showcase rug a descriptive title (e.g., "Mushroom Party").',
        'Use the editor to add a description about the individual rug.',
        'Upload a featured image to represent the showcase visually.',
        'Use custom fields to add additional data like size and material.',
        'Reorder showcases using drag-and-drop (Post Types Order plugin) on the reorder tab.',
    ], 'Keep titles consistent for easier filtering and display on the front end.');

    // Rugs
    add_cpt_instructions_meta_box('rug', 'Rug Instructions', [
        'Upload a featured image for each rug.',
        'Use the fields below to add rug details (size, material, etc.).',
        'You can categorize rugs using the <strong>Rug Types</strong> taxonomy.',
        'Reorder rugs using drag-and-drop (Post Types Order plugin) in the reorder tab.',
    ], 'Keep rug titles descriptive (e.g. “Sunflower Rug”) for easier searching.');

    // Rug Categories
    add_cpt_instructions_meta_box('rug_category', 'Rug Categories Instructions', [
        'Give each rug category a descriptive title (e.g., "Flatweave Rugs", "Shag Rugs").',
        'Use the editor to add any description or notes about this category.',
        'Upload a featured image to visually represent the category.',
        'Reorder categories using drag-and-drop (Post Types Order plugin) on the reorder tab.',
    ], 'Keep category titles consistent for easier management and filtering.');

    // Workshops
    add_cpt_instructions_meta_box('workshop', 'Workshop Instructions', [
        'Give each workshop a clear and descriptive title (e.g., "Intro to Rug Weaving").',
        'Use the editor to add a small description about the workshop.',
        'Upload a featured image to visually represent the workshop.',
        'Use custom fields to add additional data like duration, location and price.',
        'Ensure you link your ClassBento workshop URL to the "Booking URL" custom field.',
        'Reorder workshops using drag-and-drop (Post Types Order plugin) on the reorder tab.',
    ], 'Keep titles and summaries concise for easier display on the front end.');
}
add_action('add_meta_boxes', 'register_cpt_instructions');

// Add instructions to a taxonomy term form (add/edit) 
 function add_taxonomy_instructions($taxonomy_slug, $add_instructions = [], $edit_instructions = []) {

    // Add form
    if ($add_instructions) {
        add_action("{$taxonomy_slug}_add_form_fields", function() use ($add_instructions) {
            echo '<div class="notice notice-info inline" style="margin:10px 0;padding:10px;">';
            echo '<ul style="padding-left:18px;margin:0;">';
            foreach ($add_instructions as $item) {
                echo "<li>{$item}</li>";
            }
            echo '</ul>';
            echo '</div>';
        });
    }

    // Edit form
    if ($edit_instructions) {
        add_action("{$taxonomy_slug}_edit_form_fields", function($term) use ($edit_instructions) {
            echo '<tr class="form-field">';
            echo '<th scope="row"><label>Instructions</label></th>';
            echo '<td>';
            echo '<ul style="padding-left:18px;margin:0;">';
            foreach ($edit_instructions as $item) {
                echo "<li>{$item}</li>";
            }
            echo '</ul>';
            echo '</td></tr>';
        }, 10, 2);
    }
}

// Register Rug Types instructions
function register_rug_type_instructions() {
    add_taxonomy_instructions(
        'rug_type',
        [ // Add form instructions
            'Use descriptive names for rug types (e.g., "Flatweave", "Shag", "Tufted").',
            'You can assign multiple rugs to the same type.',
            'Reorder rugs within each type using the Post Types Order plugin.'
        ],
        [ // Edit form instructions
            'Keep the name short and descriptive.',
            'The slug is used in the URL (keep it simple and lowercase).',
            'You can safely reorder rugs in this type using drag-and-drop.'
        ]
    );
}
add_action('admin_init', 'register_rug_type_instructions');
