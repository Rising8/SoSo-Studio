<?php
/**
 * Template Name: Workshop Page
 */
get_header(); ?>

<div class="workshop-wrapper">
    <!-- Workshop Page - Hero Section -->
    <div class="workshop-content-1">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-4 d-flex flex-column align-items-start">
                    <h1 class="landing-heading display-5 text-body-emphasis text-first py-3 d-block" style="width: 80%;">Let's Create Your Rug!</h1>
                    <p class="fs-6 fs-md-5 fs-lg-4" style="width: 80%; color: #875DA6 !important;">Join our workshop and turn your imagination into a beautifull custom rug.</p>
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
    <div class="workshop-content-2">
        <div class="container">
            <h1 class="text-body-emphasis fs-3 fs-md-2 fs-lg-1 p-5 text-center">Experience the Joy of Making Something Real</h1>
            <div class="row">
                <!-- Workshop Session 1 -->
                <div class="col">
                    <div class="workshop-card card">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/workshop-page/workshop1.jpeg" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Introduction to Rugs</h5>
                            <p class="card-text">A beginner-friendly session where you'll create a small rug and learn the basics. No experience required!</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">🕒 Duration: 3 hours</li>
                            <li class="list-group-item">📍 Location: Perth Stadium</li>
                            <li class="list-group-item">💰 Price: $200</li>
                        </ul>
                        <div class="card-body d-flex justify-content-between">
                            <a href="https://classbento.com.au/rug-tufting-workshop-perth-1" target="_blank" rel="noopener noreferrer" class="card-link">Book Now</a>
                            <a href="#" class="btn btn-primary">More Information</a>
                        </div>
                    </div>
                </div>
                <!-- Workshop Session 2 -->
                <div class="col">
                    <div class="workshop-card card">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/workshop-page/workshop2.jpeg" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Intermediate Rug Learners</h5>
                            <p class="card-text">For returning participants or confident beginners, this session allows you to create a larger or more detailed work of art!</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">🕒 Duration: 4 hours</li>
                            <li class="list-group-item">📍 Location: Optus Stadium</li>
                            <li class="list-group-item">💰 Price: $300</li>
                        </ul>
                        <div class="card-body d-flex justify-content-between">
                            <a href="https://classbento.com.au/rug-tufting-workshop-perth-1" target="_blank" rel="noopener noreferrer" class="card-link">Book Now</a>
                            <a href="#" class="btn btn-primary">More Information</a>
                        </div>
                    </div>
                </div>
                <!-- Workshop Session 3 -->
                <div class="col">
                    <div class="workshop-card card">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/workshop-page/workshop3.jpeg" class="card-img-top w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Intermediate Rug Learners</h5>
                            <p class="card-text">For returning participants or confident beginners, this session allows you to create a larger or more detailed work of art!</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">🕒 Duration: 4 hours</li>
                            <li class="list-group-item">📍 Location: Optus Stadium</li>
                            <li class="list-group-item">💰 Price: $300</li>
                        </ul>
                        <div class="card-body d-flex justify-content-between">
                            <a href="https://classbento.com.au/rug-tufting-workshop-perth-1" target="_blank" rel="noopener noreferrer" class="card-link">Book Now</a>
                            <a href="#" class="btn btn-primary">More Information</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Workshop Page - Testimonials Section -->
    <div class="workshop-content-3 p-5">
        <div class="workshop-testimonials p-5 text-center rounded-3">
            <h2 class="text-body-emphasis fs-3 fs-md-2 fs-lg-1 pb-3">Why They Chose Us</h2>
            <!-- Bootstrap Carousel for Testimonials -->
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Testimonial 1 -->
                    <div class="carousel-item active">
                        <p class="workshop-testimonials-p col-lg-8 mx-auto text-muted fs-6 fs-md-5 fs-lg-4">“I absolutely love the rug I bought! It added the perfect pop of color to my living room, and it’s so soft underfoot. It feels like walking on a cloud. I’ve already gotten compliments from guests!”</p>
                        <div>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <p>— Sarah T., Austin, TX</p>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="carousel-item">
                        <p class="workshop-testimonials-p col-lg-8 mx-auto text-muted fs-6 fs-md-5 fs-lg-4">“Great customer service and fast shipping! The rug looks exactly like the pictures, and the quality is top-notch.”</p>
                        <div>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star-half-stroke"></i>
                        </div>
                        <p>— Michael R., Seattle, WA</p>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="carousel-item">
                        <p class="workshop-testimonials-p col-lg-8 mx-auto text-muted fs-6 fs-md-5 fs-lg-4">“Beautiful, well-made rug. It arrived in perfect condition and really completes our dining room space. Highly recommend!”</p>
                        <div>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <p>— Jessica M., New York, NY</p>
                    </div>
                </div>
                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
