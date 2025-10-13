<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<div class="about-wrapper">
    <!-- About Page - Hero Section -->
    <div class="about-content-1">
        <h1 class="landing-heading display-5 text-body-emphasis text-center pt-5 pb-3 d-block mx-auto">
            Behind Every Rug There’s Us!
        </h1>
    </div>

    <!-- About Page - About Us Video -->
    <div class="about-content-2">
        <div class="d-flex justify-content-center pt-3">
            <!-- Link will be changed later, most likely into an Instagram Reel -->
            <div class="ratio ratio-16x9 w-100" style="max-width: 900px;">
                <iframe
                    src="https://www.youtube.com/embed/xpdkJGUYIYg?si=XIxvgjV8hLKPan3B"
                    title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen
                    loading="lazy"
                ></iframe>
            </div>

        </div>
    </div>

    <!-- About Page - Story / Mission / Vision using View Transition API -->
    <div class="about-content-3">
    <section id="vt-trending">
        <div class="vt-heading container">
        <h2 class="text-center">Let's Get To Know Us</h2>
        </div>

        <div class="vt-wrap container" aria-roledescription="carousel">
        <button class="vt-btn vt-prev" aria-label="Previous slide">‹</button>

        <div class="vt-cards" id="vtCards">
            <article class="vt-card active" data-index="0">
            <div class="vt-media" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-page/us1.png')" role="img" aria-label="Our Story image"></div>
            <h3 class="vt-title">Our Story</h3>
            <p class="vt-copy">SoSo Studio began as a simple passion project a space to explore the beauty of textile art and bring imaginative rug designs to life. What started as a hobby quickly grew into a creative hub where patterns, colors, and textures are used to tell stories.</p>
            </article>

            <article class="vt-card" data-index="1">
            <div class="vt-media" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-page/us2.png')" role="img" aria-label="Our Mission image"></div>
            <h3 class="vt-title">Our Mission</h3>
            <p class="vt-copy">At SoSo Studio, our mission is to celebrate creativity and self-expression through unique, handcrafted rug designs. We aim to provide a platform where artistic ideas are brought to life, turning every rug into a story woven with passion and personality.</p>
            </article>

            <article class="vt-card" data-index="2">
            <div class="vt-media" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-page/us3.png')" role="img" aria-label="Our Vision image"></div>
            <h3 class="vt-title">Our Vision</h3>
            <p class="vt-copy">We envision a world where home décor becomes a canvas for creativity. SoSo Studio strives to become a go-to space for artists, hobbyists, and design lovers who seek original, meaningful, and visually inspiring rug pieces that spark joy and connection.</p>
            </article>
        </div>

        <button class="vt-btn vt-next" aria-label="Next slide">›</button>

        <div class="vt-dots" id="vtDots" role="tablist" aria-label="Slides pagination">
            <button class="vt-dot active" data-index="0" aria-label="Slide 1"></button>
            <button class="vt-dot" data-index="1" aria-label="Slide 2"></button>
            <button class="vt-dot" data-index="2" aria-label="Slide 3"></button>
        </div>
        </div>
    </section>
    </div>

    <!-- About Page - What We Offer Section -->
    <div class="about-content-4 p-3">
        <div class="container px-4 pb-5">
            <h2 class="py-4 text-center">What We Offer</h2>
            <div class="row gx-4 gy-4">
                <!-- Custom Rugs -->
                <div class="col-md-4">
                    <div class="about-soso-card card h-100 p-4">
                        <div class="card-body text-center">
                            <h5 class="card-title py-2">Custom Rugs</h5>
                            <p class="card-text py-2">Design and create one-of-a-kind rugs tailored to your style and space.</p>
                            <a href="<?php echo site_url('/commission'); ?>" class="btn btn-primary rounded-pill px-3">Commission a Rug</a>
                        </div>
                    </div>
                </div>
                <!-- Workshops -->
                <div class="col-md-4">
                    <div class="about-soso-card card h-100 p-4">
                        <div class="card-body text-center">
                            <h5 class="card-title py-2">Workshops</h5>
                            <p class="card-text py-2">Join our friendly workshops to learn tufting techniques and unleash your creativity.</p>
                            <a href="<?php echo site_url('/workshops'); ?>" class="btn btn-primary rounded-pill px-3">View Workshops</a>
                        </div>
                    </div>
                </div>
                <!-- Gallery -->
                <div class="col-md-4">
                    <div class="about-soso-card card h-100 p-4">
                        <div class="card-body text-center">
                            <h5 class="card-title py-2">Gallery</h5>
                            <p class="card-text py-2">Explore the vibrant creations made in our studio by our amazing community.</p>
                            <a href="<?php echo site_url('/gallery'); ?>" class="btn btn-primary rounded-pill px-3">View Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Page - Studio Vibes Image -->
    <div class="about-content-5 studio-vibes-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-page/vibes.png" alt="..." class="img-fluid scroll-image">
    </div>

    <!-- About Page - Contact Section -->
    <div class="about-content-6">
        <div class="text-center">
            <div class="card-body py-5">
                <h3 class="about-contact-heading fw-bold mb-3">
                    Ready to Join Our Creative Journey?
                </h3>
                <p class="about-contact-text text-muted mb-4">
                    Whether you're curious or ready to build your dream, <br>inspiration starts with us.</br>
                </p>
                <div class="about-instagram-container pt-3">
                    <a href="https://www.instagram.com/so.so.studio/" class="about-instagram-bounce" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-instagram fs-1"></i>
                    </a> 
                </div>
            </div>
        </div>     
    </div>
</div>

<?php get_footer(); ?>