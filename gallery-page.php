<?php
/**
 * Template Name: Gallery Page
 */
get_header(); ?>

<div class="gallery-wrapper p-0">
    <!-- Gallery Page - Hero Section -->
    <div class="gallery-content-1">
        <h1 class="landing-heading display-5 text-body-emphasis text-center pt-5 pb-2 d-block mx-auto">
            Step Into Our World of Threads!
        </h1>
        <div class="img-mobile">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/gallery-page.png" class="img-fluid scroll-image" alt="Image description">
        </div>
    </div>

    <!-- Gallery Page - Dynamic Gallery Section -->
    <div class="gallery-content-2 pt-2">
        <div class="container text-center justify-content-center">
            
            <!-- Filter Buttons -->
            <div class="gallery-filter mb-4">
                <button class="btn filter-btn active" data-filter="all">All</button>
                <?php
                $terms = get_terms(['taxonomy' => 'rug_type', 'hide_empty' => false]);
                if (!empty($terms) && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        echo '<button class="btn filter-btn" data-filter="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</button>';
                    }
                }
                ?>
            </div>
            
            <p class="gallery-instruction text-center fst-italic">Tap or click on an image to see more details</p>

            <!-- Dynamic Rug Grid -->
            <div class="row g-4 mt-4">
                <?php
                $args = [
                    'post_type' => 'rug',
                    'posts_per_page' => -1
                ];
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();

                        $tags = get_the_terms(get_the_ID(), 'rug_type');
                        $tag_slugs = [];
                        $tag_names = [];

                        if ($tags && !is_wp_error($tags)) {
                            foreach ($tags as $tag) {
                                $tag_slugs[] = esc_attr($tag->slug);
                                $tag_names[] = esc_html($tag->name);
                            }
                        }
                        $data_tags = implode(' ', $tag_slugs);
                        $tag_display = implode(', ', $tag_names);

                        echo '<div class="col-md-4 gallery-item" data-tags="' . $data_tags . '">
                                <a href="' . get_permalink() . '" class="gallery-card-link">
                                    <div class="gallery-card shadow-sm">';

                        if (has_post_thumbnail()) {
                            echo get_the_post_thumbnail(null, 'rug-thumb', ['class' => 'img-fluid']);
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/assets/images/default-rug.jpg" class="img-fluid" alt="Default rug">';
                        }

                        echo        '<div class="gallery-overlay-caption">
                                        <h5>' . get_the_title() . '</h5>
                                        <p>' . wp_trim_words(get_the_excerpt(), 12) . '</p>
                                    </div>
                                    <span class="gallery-tag">' . $tag_display . '</span>
                                </div>
                            </a>
                            </div>';
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No rugs found.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>

    <!-- Gallery Page - Categories Section -->
    <div class="gallery-content-3 pt-5">
        <!-- Section Divider -->
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/line-style.png" class="img-fluid" alt="Image description">                
        <div class="row g-0">
            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/texture1.png" class="img-fluid w-100" alt="Left image">
            </div>
            <div class="col-md-6 gallery-category-bg d-flex align-items-center justify-content-center">
                <div class="col-lg-8 ">
                    <h3 class="display-5 text-body-emphasis lh-1 mb-3 fs-md-2 fs-lg-1">Flatweave Rugs</h3>
                    <p class="lead fs-6 fs-md-5 fs-lg-4">Flatweave rugs are lightweight, durable, and woven without any pile, making them perfect for high-traffic areas like hallways or living rooms. Their thin profile also makes them easy to clean and ideal for layering under furniture. With patterns often inspired by traditional designs, flatweave rugs bring a stylish and practical touch to any space.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="gallery-content-3">
        <div class="row g-0">
            <div class="col-md-6 gallery-category-bg d-flex align-items-center justify-content-center">
                <div class="col-lg-8 ">
                    <h3 class="display-5 text-body-emphasis lh-1 mb-3 fs-md-2 fs-lg-1">Tufted Rugs</h3>
                    <p class="lead fs-6 fs-md-5 fs-lg-4">Tufted rugs are created by punching yarn into a fabric base, resulting in a thick, cushioned feel underfoot. They offer a great balance between style and comfort, with a wide range of patterns and textures available. These rugs are ideal for adding a decorative element to living rooms or dining areas.</p>
                </div>
            </div>

            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/texture2.png" class="img-fluid w-100" alt="Left image">
            </div>
        </div>
    </div>
              
    <div class="gallery-content-3">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/texture3.png" class="img-fluid w-100" alt="Left image">
            </div>
            <div class="col-md-6 gallery-category-bg d-flex align-items-center justify-content-center">
                <div class="col-lg-8 ">
                    <h3 class="display-5 text-body-emphasis lh-1 mb-3 fs-md-2 fs-lg-1"> Shag Rugs</h3>
                    <p class="lead fs-6 fs-md-5 fs-lg-4">Shag rugs are known for their soft, plush texture and deep pile that adds a cozy, luxurious feel to a room. They’re perfect for bedrooms or chill-out areas where comfort is a priority. Available in a variety of colors and textures, shag rugs make a bold statement and invite you to sink your feet into softness.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>