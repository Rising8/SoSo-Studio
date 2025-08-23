<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<div class="home-wrapper">
    <!-- Index Page - Hero Section -->
    <div class="index-content-1 text-center">
        <h1 class="index-header display-5 text-body-emphasis text-center pt-5 pb-3 d-block mx-auto">
            You Bring The Vibes<br>
            We Bring The Rugs
        </h1>
        <div class="d-flex gap-2 justify-content-center">
            <a href="<?php echo site_url('/commission'); ?>">
                <!-- CTA Button Left - Links to Commission Page -->
                <button class="index-rug-button btn btn-outline-secondary btn-lg rounded-pill px-5 fs-6 fs-md-5" type="button">
                    Commission a Rug
                </button>
            </a>
            <a href="<?php echo site_url('/workshops'); ?>">
                <!-- CTA Button Right - Links to Workshop Page -->
                <button class="index-workshop-button btn btn-outline-secondary btn-lg rounded-pill px-5 fs-6 fs-md-5" type="button">
                    Explore Workshops
                </button>
            </a>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/landing_page.png" class="img-fluid" alt="Image description">
    </div>

    <!-- Index Page - Showcases Section -->
    <div class="index-content-3 px-5 pb-5">
        <div class="container">
            <h2 class="fs-3 fs-md-2 fs-lg-1 mb-4 text-center">Showcases</h2>
            <div class="d-flex overflow-auto gap-4 px-2 index-showcases-scroll">
                <div class="showcases-rock d-flex gap-4">
                    <?php
                    $showcases = new WP_Query([
                        'post_type' => 'showcase',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    ]);

                    if ($showcases->have_posts()):
                        while ($showcases->have_posts()): $showcases->the_post();
                            $post_id = get_the_ID();
                            ?>
                            <div class="index-showcases-border flex-shrink-0">
                                <div class="index-showcases position-relative rounded overflow-hidden">
                                    <?php if (has_post_thumbnail()): ?>
                                        <img class="w-100 h-100 object-fit-cover" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                    <div class="index-showcases-overlay d-flex flex-column justify-content-center align-items-center text-white">
                                        <p class="fw-semibold mb-2"><?php the_title(); ?></p>
                                        <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#showcase-<?php echo $post_id; ?>">View</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
                <!-- "See More" button -->
                <div class="flex-shrink-0 d-flex align-items-center justify-content-center">
                    <a href="<?php echo site_url('/gallery'); ?>" class="index-seemore-btn text-decoration-none text-dark">
                        See more
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals for each showcase -->
    <?php
    $showcases = new WP_Query([
        'post_type' => 'showcase',
        'posts_per_page' => -1,
    ]);
    if ($showcases->have_posts()):
        while ($showcases->have_posts()): $showcases->the_post();
            $post_id = get_the_ID(); 
            ?>
            <div class="modal fade showcase-modal" id="showcase-<?php echo $post_id; ?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><?php the_title(); ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body d-flex flex-column flex-md-row align-items-start gap-4">
                            <?php if (has_post_thumbnail()): ?>
                                <div class="showcase-modal-image flex-shrink-0">
                                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>" class="img-fluid rounded shadow">
                                </div>
                            <?php endif; ?>

                            <div class="showcase-modal-text">
                                <?php 
                                    $description = get_field('description');
                                    $size = get_field('size');
                                    $material = get_field('material');
                                ?>

                                <?php if($description): ?>
                                    <p><?php echo esc_html($description); ?></p>
                                <?php endif; ?>

                                <ul class="showcase-meta list-unstyled d-flex flex-wrap gap-2">
                                    <?php if($size): ?>
                                        <li><strong>Size:</strong> <?php echo esc_html($size); ?></li>
                                    <?php endif; ?>
                                    <?php if($material): ?>
                                        <li><strong>Material:</strong> <?php echo esc_html($material); ?></li>
                                    <?php endif; ?>
                                </ul>

                                <!-- CTA Buttons -->
                                <div class="showcases-cta-button d-flex flex-column flex-sm-row gap-3 mt-3">
                                    <a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" 
                                        class="btn btn-outline-primary flex-fill rounded-pill px-4 py-2">
                                        View More Information
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
    endif;
    ?>

    <!-- Index Page - Design Your Own Rug Section -->
    <div class="index-content-4">
        <div class="container px-4 py-2"> 
            <h2 class="text-center text-body-emphasis fs-3 fs-md-2 fs-lg-1 border-bottom index-design-own rounded-3 p-2">Design Your Own Rug</h2> 
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5 border">
                <div class="col d-flex flex-column align-items-start gap-2"> 
                    <h3 class="text-body-emphasis fs-3 fs-md-2 fs-lg-1">Can’t Find the Perfect Rug? Customize a Rug as Unique as Your Space</h3>
                    <p class="text-body-secondary">
                        Have a favourite colour, idea, or vibe you love? Let’s turn it into a rug that’s uniquely yours. 
                        Whether it’s a sketch, a fabric you adore, or simply a feeling you want to bring to your space, you bring the inspiration
                        and we’ll bring the craftsmanship. <em>Made by hand, made with heart, made for you.</em>
                    </p> 
                    <!-- Links to the custom design page for users to design their own rugs -->
                    <a href="<?php echo site_url('/custom'); ?>" class="btn index-design-cta btn-lg">Custom Rug</a> 
                </div> 

                <!-- Persuade users to purchase rugs -->
                <div class="col">
                    <div class="row row-cols-1 row-cols-sm-2 g-4">
                        <div class="col d-flex flex-column gap-2"> 
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-start  fs-4 rounded-3"> 
                                <i class="fa-solid fa-thumbs-up"></i>
                            </div> 
                            <h4 class="mb-0 text-body-emphasis">Handcrafted Quality</h4>
                            <p class="text-body-secondary">Each rug is handmade with unique design and superior craftsmanship.</p>
                        </div>
                        
                        <div class="col d-flex flex-column gap-2"> 
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-start fs-4 rounded-3"> 
                                <i class="fa-solid fa-star"></i>
                            </div> 
                            <h4 class="mb-0 text-body-emphasis">Premium Materials</h4>
                            <p class="text-body-secondary">We use premium, sustainable materials for lasting durability and comfort.</p>
                        </div>
                        
                        <div class="col d-flex flex-column gap-2"> 
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-start fs-4 rounded-3"> 
                                <i class="fa-solid fa-paintbrush"></i>
                            </div> 
                            <h4 class="mb-0 text-body-emphasis">Built to Last</h4>
                            <p class="text-body-secondary">Our rugs are designed to endure everyday use while keeping their beauty.</p>
                        </div> 

                        <div class="col d-flex flex-column gap-2"> 
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-start fs-4 rounded-3"> 
                                <i class="fa-solid fa-location-dot"></i>
                            </div> 
                            <h4 class="mb-0 text-body-emphasis">100% Australian Made</h4>
                            <p class="text-body-secondary">Proudly crafted in Australia, supporting local artisans and businesses.</p>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Index Page - Workshop Section -->
    <div class="index-content-5 py-5">
        <div class="container col-xxl-9 px-4 py-3">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">    
                <!-- Image -->
                <div class="col-10 col-sm-8 col-lg-5 workshop-animate delay-2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/workshop.png" 
                        class="d-block mx-lg-auto img-fluid" 
                        alt="Workshop Rug" width="700" height="500" loading="lazy">
                </div>
                
                <!-- Text -->
                <div class="col-lg-7 px-5">
                    <h3 class="display-5 text-body-emphasis lh-1 mb-3 fs-md-2 fs-lg-1 py-2 workshop-animate delay-1">
                    Step Into Our Rug Workshop
                    </h3>
                    <p class="lead fs-6 fs-md-5 fs-lg-4 py-2 workshop-animate delay-2">
                    Curious how our rugs come to life? <br>
                    Visit our workshop page to discover the heart of our craft. From design sketches to handwoven finishes, 
                    you’ll get a behind-the-scenes look at the passion, skill, and tradition woven into every piece. <br>
                    See where creativity meets craftsmanship and find out how we bring your ideas to life.
                    </p>
                    
                    <!-- Button -->
                    <a href="<?php echo site_url('/workshops'); ?>" class="workshop-animate delay-3">
                    <button class="btn btn-outline-secondary btn-lg rounded-pill px-3 py-2 fs-6 fs-md-5" type="button">
                        Discover the Process
                    </button>
                    </a>
                </div>   
            </div>
        </div>
    </div>

    <!-- Index Page - Follow The Thread Section (similar to blogs) -->
    <div class="index-content-7 pb-5">
        <div class="p-5 text-center">
            <h1 class="text-body-emphasis fs-3 fs-md-2 fs-lg-1">Follow the Thread</h1>
            <p class="col-lg-8 mx-auto text-muted fs-6 fs-md-5 fs-lg-4">
                Join us on Instagram for daily inspiration, handcrafted textures, and custom rug creations you won’t see anywhere else. 
            </p>
        </div>

        <div class="container text-center justify-content-center">
            <div class="row">
                <div class="col">
                    <div class="index-thread-card card">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/ig1.jpeg" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">From thread to texture — here’s a glimpse into how our rugs are made. Every weave tells a story.</h5>         
                            <!-- Placeholder Link - Must be updated -->
                            <a href="https://www.instagram.com/p/DJysRs7PKXs/?img_index=1" target="__blank" rel="noopener noreferrer" class="card-link">Instagram  link</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="index-thread-card card">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/ig2.jpeg" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Inspired by a seaside sunset, this custom rug brings warmth and calm to the space. Have an idea you’d love to see woven? Let’s make it happen.</h5>
                            <a href="#" class="card-link">Instagram link</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="index-thread-card card">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/ig3.jpeg" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">What a difference a rug makes! Swipe to see how this space went from plain to polished with just one handcrafted piece.</h5>
                            <a href="#" class="card-link">Instagram  link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>