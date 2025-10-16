<?php
/**
 * Template Name: Gallery Page
 */
get_header(); ?>

<div class="gallery-wrapper p-0">
    <!-- Gallery Page - Hero Section -->
    <?php echo do_shortcode('[gallery_images]'); ?>

    <!-- Gallery Page - Dynamic Gallery Section -->
    <div class="gallery-content-2">
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
    <div class="gallery-content-3">
        <?php
        // Query Rug Categories - orders by title alphabetically
        $args = array(
            'post_type'      => 'rug_category',
            'posts_per_page' => -1,
            'orderby'        => array('menu_order' => 'ASC', 'title' => 'ASC'),
            'order'          => 'ASC',
        );

        $rug_query = new WP_Query($args);

        // Section divider before the list
        ?>
        <div id="gallery-categories-section" class="gallery-content-3 pt-5">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/img/line-style.png' ); ?>" class="img-fluid mobile-section-divider d-block" alt="">
        </div>

        <?php
        if ( $rug_query->have_posts() ):
            // Preloads posts for the "next section" arrow logic
            $posts = $rug_query->posts;
            $total = $rug_query->post_count;

            // Loops over each rug
            for ( $i = 0; $i < $total; $i++ ):
                $p = $posts[$i];
                setup_postdata( $p );

                // Generates variables for each rug
                $slug     = $p->post_name; // Unique section ID
                $title    = get_the_title( $p->ID ); // Rug title
                $content  = apply_filters( 'the_content', $p->post_content ); // Rug description
                $is_even  = ($i % 2 === 0); // Used for alternating layout, like a checkered box system
                $has_next = ($i + 1 < $total); // Checks if there is a next rug
                // Gets featured image, if none exists, it will fallback to placeholder
                $img_html = has_post_thumbnail( $p->ID )
                    ? get_the_post_thumbnail( $p->ID, 'large', array(
                        'class' => 'img-fluid w-100',
                        'alt'   => esc_attr( $title ),
                    ))
                    // Fallback image if featured image not set (replace path if you have a better default)
                    : '<img src="' . esc_url( get_stylesheet_directory_uri() . '/assets/img/placeholder.jpg' ) . '" class="img-fluid w-100" alt="">';
                ?>

                <!-- Rug section -->            
                <div class="gallery-content-3" id="<?php echo esc_attr( $slug ); ?>">
                    <div class="row g-0">

                        <?php if ( $is_even ): // Image on the left for even rows ?>
                            <div class="col-md-6">
                                <?php echo $img_html; ?>
                            </div>
                        <?php endif; ?>

                        <!-- Text Content Column -->
                        <div class="col-md-6 gallery-category-bg d-flex align-items-center justify-content-center">
                            <div class="col-lg-8 mt-5">
                                <!-- Rug Title -->
                                <h3 class="display-5 text-body-emphasis lh-1 mb-3 fs-md-2 fs-lg-1">
                                    <?php echo esc_html( $title ); ?> 
                                </h3>
                                <!-- Rug Description -->
                                <div class="lead fs-6 fs-md-5 fs-lg-4"><?php echo $content; ?></div>
                            </div>

                            <!-- If a next section exists, there will be an arrow to the next section -->
                            <?php if ( $has_next ): 
                                $next_slug = $posts[$i + 1]->post_name; ?>
                                <a href="#<?php echo esc_attr( $next_slug ); ?>" class="<?php echo $is_even ? 'right-arrow' : 'left-arrow'; ?>">
                                    <i class="fa-solid fa-arrow-down"></i>
                                </a>
                            <?php endif; ?>
                        </div>

                        <?php if ( ! $is_even ): // Image on the right for odd rows ?>
                            <div class="col-md-6">
                                <?php echo $img_html; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endfor; wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>