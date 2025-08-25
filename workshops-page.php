<?php
/**
 * Template Name: Workshops Page
 */
get_header(); ?>

<div class="workshop-wrapper">
    <!-- Workshop Page - Hero Section -->
    <div class="workshop-content-1">
        <div class="container text-center">
            <h1 class="index-header display-5 text-body-emphasis text-center pt-5 pb-3 d-block mx-auto">
                Let's Craft Your <br>
                Dream Piece
            </h1>
            <p class="workshop-hero lead text-muted">A hands-on workshop to design and create your own unique rug.</p>
            <a href="https://classbento.com.au/rug-tufting-workshop-perth-1" target="_blank" rel="noopener noreferrer">
                <!-- CTA Button Left - Links to Commission Page -->
                <button class="index-rug-button btn btn-outline-secondary btn-lg rounded-pill px-5 fs-6 fs-md-5 mt-32" type="button">
                    Book Now
                </button>
            </a>
        </div>
        <div class="container text-center my-5 rounded-5">
            <!-- <p>Workshop Image</p> -->
            <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/workshop-page/workshop-hero.png" alt="Background" class="workshop-hero-img img-fluid"> -->
             <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="1000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/workshop-page/workshop-hero1.png" alt="Background" class="workshop-hero-img img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/workshop-page/workshop-hero2.png" alt="Background" class="workshop-hero-img img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Workshop Page - Workshop Session Section -->
    <div class="workshop-content-2 pb-5">
        <div class="container">
            <h2 class="text-body-emphasis fs-3 fs-md-2 fs-lg-1 pb-5 text-center">
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
