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
    <div class="workshop-content-2 py-5">
        <div class="container">
            <h2 class="text-body-emphasis fs-1 fw-bold pb-4 text-center">
                Experience the Joy of Making Something Real
            </h2>

            <?php
            $workshop_query = new WP_Query([
                'post_type'      => 'workshop',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'ASC'
            ]);

            if ($workshop_query->have_posts()) : ?>
                <div id="workshopCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="8000">
                    <div class="carousel-inner">
                        <?php
                        $i = 0;
                        while ($workshop_query->have_posts()) :
                            $workshop_query->the_post();

                            $active     = ($i === 0) ? 'active' : '';
                            $date       = get_field('workshop_date') ?: '';
                            $duration   = get_field('workshop_duration') ?: '';
                            $location   = get_field('workshop_location') ?: '';
                            $price_raw  = get_field('workshop_price');
                            $price      = $price_raw ? preg_replace('/^\$?/', '$', trim($price_raw)) : '';
                            $bookingUrl = esc_url(get_field('workshop_booking_url'));
                        ?>
                            <div class="carousel-item <?php echo $active; ?>">
                                <div class="d-flex justify-content-center">
                                    <div class="col-12 col-md-10 col-lg-8">
                                        <div class="workshop-card card border-0 shadow-lg rounded-4">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="workshop-image position-relative">
                                                    <?php the_post_thumbnail('large', ['class' => 'card-img-top']); ?>
                                                    <?php if ($date): ?>
                                                        <span class="workshop-date-badge">
                                                            <?php echo esc_html(date_i18n('j F Y', strtotime($date))); ?>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>

                                            <div class="card-body d-flex flex-column">
                                                <h3 class="card-title"><?php the_title(); ?></h3>
                                                <p class="card-text"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 26)); ?></p>

                                                <ul class="workshop-meta list-unstyled">
                                                    <?php if ($date): ?><li><i class="bi bi-calendar-event"></i> <?php echo esc_html(date_i18n('j F Y', strtotime($date))); ?></li><?php endif; ?>
                                                    <?php if ($duration): ?><li><i class="bi bi-clock"></i> <?php echo esc_html($duration); ?></li><?php endif; ?>
                                                    <?php if ($location): ?><li><i class="bi bi-geo-alt"></i> <?php echo esc_html($location); ?></li><?php endif; ?>
                                                    <?php if ($price): ?><li><i class="bi bi-cash-coin"></i> <?php echo esc_html($price); ?></li><?php endif; ?>
                                                </ul>

                                                <?php if ($bookingUrl): ?>
                                                    <a href="<?php echo $bookingUrl; ?>" target="_blank" rel="noopener" class="btn btn-book mt-auto">
                                                        Book Now
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        $i++;
                        endwhile; ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#workshopCarousel" data-bs-slide="prev" aria-label="Previous">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#workshopCarousel" data-bs-slide="next" aria-label="Next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p class="text-center">No workshops available right now. Please check back later!</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
