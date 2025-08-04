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
        <div class="d-flex justify-content-center py-5">
            <!-- Link will be changed later, most likely into an Instagram Reel -->
            <iframe width="800" height="450" 
                src="https://www.youtube.com/embed/xpdkJGUYIYg?si=XIxvgjV8hLKPan3B" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" 
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <!-- About Page - What We Do Section -->
    <div class="about-content-3">
        <div class="container px-4 py-2">
            <h2 class="pb-2 ">What We Do?</h2>
            <div class="row gx-4 gy-4">
                <!-- Commission Service -->
                <div class="col-md-4">
                    <div class="about-soso-card card h-100 p-3">
                        <div class="card-body">
                            <h5 class="card-title">Custom Rug Commissions</h5>
                            <p class="card-text">We bring your vision to life. Whether it's a unique pattern, color, or size, we create handcrafted rugs tailored just for you.</p>
                            <a href="<?php echo site_url('/commission'); ?>" class="btn btn-primary">Commission Request</a>
                        </div>
                    </div>
                </div>
                <!-- Workshops -->
                <div class="col-md-4">
                    <div class="about-soso-card card h-100 p-3">
                        <div class="card-body">
                            <h5 class="card-title">Creative Workshops</h5>
                            <p class="card-text">Join our hands-on workshops where we teach the basics of rug-making and textile arts in a friendly, welcoming space.</p>
                            <a href="<?php echo site_url('/workshops'); ?>" class="btn btn-primary">Explore Workshops</a>
                        </div>
                    </div>
                </div>
                <!-- Rug Care -->
                <div class="col-md-4">
                    <div class="about-soso-card card h-100 p-3">
                        <div class="card-body">
                            <h5 class="card-title">Rug Care & Advice</h5>
                            <p class="card-text">Keep your handmade rugs looking their best with our expert care tips and recommendations for long-lasting quality.</p>
                            <a href="<?php echo site_url('/rugcare'); ?>" class="btn btn-primary">Rug Care Tips</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Page - Story, Mission and Vision Slider -->
    <div class="about-content-4">
        <section id="tranding">
            <div class="container">
                <h2 class="text-center">Let's Get To Know Us</h2>
            </div>
            <div class="container">
                <div class="swiper tranding-slider">
                    <div class="swiper-wrapper">
                        <!-- Slide-1 -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img class="border" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-page/us1.png" alt="Tranding">
                            </div>
                            <div class="container tranding-slide-content">
                                <h3 class="title-us text-center">Our Story</h3>                                
                                <div class="tranding-slide-content-bottom">                                
                                    <p class="about-text">SoSo Studio began as a simple passion project—a space to explore the beauty of textile art and bring imaginative rug designs to life. What started as a hobby quickly grew into a creative hub where patterns, colors, and textures are used to tell stories.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-2 -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img class="border" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-page/us2.png" alt="Tranding">
                            </div>
                            <div class="container tranding-slide-content">
                                <h3 class="title-us text-body-emphasis ">Our Mission</h3>                                
                                <div class="tranding-slide-content-bottom">                                
                                    <p class="about-text">At SoSo Studio, our mission is to celebrate creativity and self-expression through unique, handcrafted rug designs. We aim to provide a platform where artistic ideas are brought to life, turning every rug into a story woven with passion and personality.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-3 -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img class="border" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-page/us3.png" alt="Tranding">
                            </div>
                            <div class="container tranding-slide-content">
                                <h3 class="title-us text-body-emphasis">Our Vision</h3>                                
                                <div class="tranding-slide-content-bottom">                                
                                    <p class="about-text">We envision a world where home décor becomes a canvas for creativity. SoSo Studio strives to become a go-to space for artists, hobbyists, and design lovers who seek original, meaningful, and visually inspiring rug pieces that spark joy and connection.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls-->
                    <div class="tranding-slider-control">
                        <div class="swiper-button-prev slider-arrow">
                            <ion-icon name="arrow-back-outline"></ion-icon>
                        </div>
                        <div class="swiper-button-next slider-arrow">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- About Page - Studio Vibes Image -->
    <div class="about-content-5 studio-vibes-img">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-page/vibes.png" alt="..." class="img-fluid scroll-image">
    </div>

    <!-- About Page - Contact Button -->
    <div class="about-content-6">
        <div class="text-center">
            <div class="card-body py-5">
                <h5 class="card-title">Need Help or Have a Question?</h5>
                <p class="card-text">We're here to help with plant care tips, product info, or anything garden-related! Reach out to us anytime we’d love to hear from you.</p>
                <button type="button" class="about-contact-btn btn btn-primary btn-lg px-4 me-md-2">Contact Us</button>
            </div>
        </div>     
    </div>
</div>

<?php get_footer(); ?>