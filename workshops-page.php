<?php
/**
 * Template Name: Workshops Page
 */
get_header(); ?>

<div class="workshop-wrapper">
    <!-- Workshop Page - Hero Section -->
    <div class="workshop-content-1">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="workshop-hero col-md-4 d-flex flex-column align-items-start">
                    <h1 class="landing-heading display-5 text-body-emphasis text-first py-3 d-block">Let's Create Your Rug!</h1>
                    <p class="fs-6 fs-md-5 fs-lg-4">Join our workshop and turn your imagination into a beautifull custom rug.</p>
                    <!-- CTA Button Right - Links to ClassBento Website -->
                    <a href="https://classbento.com.au/rug-tufting-workshop-perth-1" target="_blank" rel="noopener noreferrer"><button class="workshop-book-button btn btn-outline-secondary btn-lg rounded-pill px-5 py-2 fs-6 fs-md-5" type="button">Book Now</button></a>
                </div>
                <div class="col-md-8">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/workshop-page/workshop-page.png" class="workshop-hero-img img-fluid rounded-5 border" alt="Image description">
                </div>
            </div>
        </div>
    </div>

    <!-- Workshop Page - Workshop Session Section -->
    <div class="workshop-content-2 pb-5">
        <div class="container">
            <h2 class="text-body-emphasis fs-3 fs-md-2 fs-lg-1 p-5 text-center">
                Experience the Joy of Making Something Real
            </h2>
            <div class="row g-4">
                <?php
                $workshops = new WP_Query([
                    'post_type' => 'workshop',
                    'posts_per_page' => -1,
                    'orderby' => 'date',
                    'order' => 'ASC'
                ]);

                if ( $workshops->have_posts() ) :
                    while ( $workshops->have_posts() ) : $workshops->the_post(); ?>
                    
                        <div class="col-md-6">
                            <div class="workshop-card card h-100 shadow-sm">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <!-- If we want images on the workshop then we can keep this, else we will remove it -->
                                    <?php the_post_thumbnail('large', ['class' => 'card-img-top']); ?>
                                <?php endif; ?>

                                <div class="card-body">
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <ul class="workshop-meta list-unstyled text-start">
                                        <li><strong>Duration:</strong> <?php the_field('workshop_duration'); ?></li>
                                        <li><strong>Location:</strong> <?php the_field('workshop_location'); ?></li>
                                        <?php 
                                            $price = get_field('workshop_price');
                                            $price = preg_replace('/^\$?/', '$', $price);
                                        ?>
                                        <li><strong>Price:</strong> <?php echo esc_html($price); ?></li>
                                    </ul>
                                    <a href="<?php the_field('workshop_booking_url'); ?>" target="_blank" class="btn btn-primary mt-3">Book Now</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p class="text-center">No workshops available right now. Please check back later!</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
