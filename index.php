<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<div class="home-wrapper">
    <!-- Index Page - Hero Section -->
    <div class="index-content-1 text-center">
        <h1 class="index-header display-5 text-body-emphasis text-center pt-5 pb-3 d-block mx-auto">
            You Bring The Vibes We Bring The Rugs
        </h1>
        <div class="d-flex gap-2 justify-content-center">
            <a href="<?php echo site_url('/commission'); ?>">
                <!-- CTA Button Left - Links to Commission Page -->
                <button class="index-rug-button btn btn-outline-secondary btn-lg rounded-pill px-5 fs-6 fs-md-5" type="button">
                    Get Rug
                </button>
            </a>
            <a href="<?php echo site_url('/workshop'); ?>">
                <!-- CTA Button Right - Links to Workshop Page -->
                <button class="index-workshop-button btn btn-outline-secondary btn-lg rounded-pill px-5 fs-6 fs-md-5" type="button">
                    Explore Workshop
                </button>
            </a>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/landing_page.png" class="img-fluid" alt="Image description">
    </div>

    <!-- Index Page - About Section -->
    <div class="index-content-2 px-5">
        <div class="p-5 text-center index-about rounded-3">
            <h2 class="text-body-emphasis fs-3 fs-md-2 fs-lg-1">Welcome to SoSo Studio where every rug has a story</h2>
            <p class="col-lg-8 mx-auto text-muted fs-6 fs-md-5 fs-lg-4">
                Discover woven beauty with our handcrafted rugs—each piece blending culture, art, and nature to add warmth and style to modern homes. From bold statements to subtle elegance, there’s a rug for every space. 
            </p>
        </div>
    </div>

    <!-- Index Page - Showcases Section -->
    <div class="index-content-3 py-5">
        <div class="container">
            <h2 class="fs-3 fs-md-2 fs-lg-1 mb-4 text-center">Showcases</h2>
            <div class="d-flex overflow-auto gap-4 px-2 index-showcases-scroll">
                <!-- Collection Items - Will be updated later with an ACF plugin -->
                <div class="index-showcases-border flex-shrink-0">
                    <div class="index-showcases position-relative rounded overflow-hidden">
                        <img class="w-100 h-100 object-fit-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/rug1.jpeg" alt="Rug 1">
                        <div class="index-showcases-overlay d-flex flex-column justify-content-center align-items-center text-white">
                            <p class="fw-semibold mb-2">Purple Flower</p>
                            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalRug1">View</a>
                        </div>
                    </div>
                </div>

                <div class="index-showcases-border flex-shrink-0">
                    <div class="index-showcases position-relative rounded overflow-hidden">
                        <img class="w-100 h-100 object-fit-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/rug2.jpeg" alt="Rug 1">
                        <div class="index-showcases-overlay d-flex flex-column justify-content-center align-items-center text-white">
                            <p class="fw-semibold mb-2">White Flower</p>
                            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalRug2">View</a>
                        </div>
                    </div>
                </div>

                <div class="index-showcases-border flex-shrink-0">
                    <div class="index-showcases position-relative rounded overflow-hidden">
                        <img class="w-100 h-100 object-fit-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/rug3.jpeg" alt="Rug 1">
                        <div class="index-showcases-overlay d-flex flex-column justify-content-center align-items-center text-white">
                            <p class="fw-semibold mb-2">Red Flower</p>
                            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalRug3">View</a>
                        </div>
                    </div>
                </div>

                <div class="index-showcases-border flex-shrink-0">
                    <div class="index-showcases position-relative rounded overflow-hidden">
                        <img class="w-100 h-100 object-fit-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/rug4.jpeg" alt="Rug 1">
                        <div class="index-showcases-overlay d-flex flex-column justify-content-center align-items-center text-white">
                            <p class="fw-semibold mb-2">Sun Flower</p>
                            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalRug4">View</a>
                        </div>
                    </div>
                </div>

                <div class="index-showcases-border flex-shrink-0">
                    <div class="index-showcases position-relative rounded overflow-hidden">
                        <img class="w-100 h-100 object-fit-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/rug5.jpeg" alt="Rug 1">
                        <div class="index-showcases-overlay d-flex flex-column justify-content-center align-items-center text-white">
                            <p class="fw-semibold mb-2">Red Mushroom</p>
                            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalRug5">View</a>
                        </div>
                    </div>
                </div>

                <div class="index-showcases-border flex-shrink-0">
                    <div class="index-showcases position-relative rounded overflow-hidden">
                        <img class="w-100 h-100 object-fit-cover" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/rug6.jpeg" alt="Rug 1">
                        <div class="index-showcases-overlay d-flex flex-column justify-content-center align-items-center text-white">
                            <p class="fw-semibold mb-2">Yellow Flower</p>
                            <a href="#" class="btn btn-outline-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalRug6">View</a>
                        </div>
                    </div>
                </div>

                <!-- "See More" button which links to the gallery page -->
                <div class="index-showcases-seemore flex-shrink-0 d-flex align-items-center justify-content-center">
                    <a href="<?php echo site_url('/gallery'); ?>" class="index-seemore-btn text-decoration-none text-dark">
                        See more
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Index Page - Design Your Own Rug Section -->
    <div class="index-content-4">
        <div class="container px-4 py-2"> 
            <h2 class="text-center text-body-emphasis fs-3 fs-md-2 fs-lg-1 border-bottom index-design-own rounded-3 p-2">Design Your Own Rug</h2> 
            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5 border">
                <div class="col d-flex flex-column align-items-start gap-2"> 
                    <h3 class="text-body-emphasis fs-3 fs-md-2 fs-lg-1">Can’t Find the Perfect Rug? Custom a Rug as Unique as Your Space</h3>
                    <p class="text-body-secondary">Got an idea, a favorite color, or a vibe you love? Let’s turn it into a rug that’s completely yours. Whether it’s a sketch, a fabric you like, or just a feeling you want in your space you bring the inspiration, and we’ll handle the craft. Made by hand, made with heart, made for you.</p> 
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
                            <p class="text-body-secondary">Each rug is carefully handmade for unique design and superior craftsmanship.</p>
                        </div>
                        
                        <div class="col d-flex flex-column gap-2"> 
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-start fs-4 rounded-3"> 
                                <i class="fa-solid fa-star"></i>
                            </div> 
                            <h4 class="mb-0 text-body-emphasis">Premium Materials</h4>
                            <p class="text-body-secondary">We use high-quality, sustainable materials for durability and comfort.</p>
                        </div>
                        
                        <div class="col d-flex flex-column gap-2"> 
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-start fs-4 rounded-3"> 
                                <i class="fa-solid fa-web-awesome"></i>
                            </div> 
                            <h4 class="mb-0 text-body-emphasis">Built to Last</h4>
                            <p class="text-body-secondary">Our rugs are designed to endure everyday use while keeping their beauty.</p>
                        </div> 

                        <div class="col d-flex flex-column gap-2"> 
                            <div class="feature-icon-small d-inline-flex align-items-center justify-content-start fs-4 rounded-3"> 
                                <i class="fa-solid fa-earth-americas"></i>
                            </div> 
                            <h4 class="mb-0 text-body-emphasis">Eco-Friendly</h4>
                            <p class="text-body-secondary">Sustainably made, our rugs are as kind to the planet as they are to your space.  </p>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Index Page - Workshop Section -->
    <div class="index-content-5">
        <div class="container col-xxl-7 px-4 py-3">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/workshop.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h3 class="display-5 text-body-emphasis lh-1 mb-3 fs-md-2 fs-lg-1">Step Into Our Rug Workshop</h3>
                    <p class="lead fs-6 fs-md-5 fs-lg-4">
                        Curious how our rugs come to life? Visit our workshop page to discover the heart of our craft. From design sketches to handwoven finishes, you’ll get a behind-the-scenes look at the passion, skill, and tradition woven into every piece. See where creativity meets craftsmanship and find out how we bring your ideas to life.
                    </p>
                    <!-- Links to the workshop page for users to get started -->
                    <a href="<?php echo site_url('/workshop'); ?>">
                        <button class="btn btn-outline-secondary btn-lg rounded-pill px-3 py-2 fs-6 fs-md-5" type="button">
                            Workshop
                        </button>
                    </a> 
                </div>
            </div>
        </div>
    </div>

    <!-- Index Page - Testimonials Section -->
    <div class="index-content-6 px-5">
        <div class="index-testimonials-bg p-5 text-center rounded-3">
            <h2 class="text-body-emphasis fs-3 fs-md-2 fs-lg-1 pb-3">Why They Chose Us</h2>
            <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Testimonial 1 -->
                    <div class="carousel-item active">
                        <p class="index-testimonials-p col-lg-8 mx-auto text-muted fs-6 fs-md-5 fs-lg-4">
                            “I absolutely love the rug I bought! It added the perfect pop of color to my living room, and it’s so soft underfoot. It feels like walking on a cloud. I’ve already gotten compliments from guests!”
                        </p>
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
                        <p class="index-testimonials-p col-lg-8 mx-auto text-muted fs-6 fs-md-5 fs-lg-4">
                            “Great customer service and fast shipping! The rug looks exactly like the pictures, and the quality is top-notch.”
                        </p>
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
                        <p class="index-testimonials-p col-lg-8 mx-auto text-muted fs-6 fs-md-5 fs-lg-4">
                            “Beautiful, well-made rug. It arrived in perfect condition and really completes our dining room space. Highly recommend!”
                        </p>
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

    <!-- Index Page - Quote Section -->
    <div class="index-content-8">
        <div class="p-5 text-center">
            <p class="col-lg-8 mx-auto text-muted fs-6 fs-md-5 fs-lg-4">
                “Creating rugs that reflect your style is our passion. Each piece is carefully crafted to bring warmth, comfort, and character to your home. We’re honored to be a part of your space.”
            </p>
            <p class="col-lg-8 mx-auto text-muted fs-6 fs-md-5 fs-lg-4">~ Daniel</p>
        </div>
    </div>

    <!-- Modal Showcases Rug 1 -->
    <div class="modal fade" id="modalRug1" tabindex="-1" aria-labelledby="modalRug1Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRug1Label">Purple Flower Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/rug1.jpeg" class="img-fluid rounded mb-3" alt="Handcrafted Wool Rug">
                    <p><strong>Size:</strong> 150cm x 220cm (Approx. 5ft x 7ft)</p>
                    <p><strong>Material:</strong> 100% Australian Merino Wool</p>
                    <p><strong>Craftsmanship:</strong> Each rug is handwoven with care, using traditional techniques passed down through generations.</p>
                    <p><strong>Care Instructions:</strong> Vacuum regularly with gentle setting. Spot clean using mild natural detergents. Avoid prolonged direct sunlight.</p>
                    <p>This warm, durable wool rug brings authentic Aussie charm and artisanal quality to your home.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Showcases Rug 2 -->
    <div class="modal fade" id="modalRug2" tabindex="-1" aria-labelledby="modalRug2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRug2Label">White Flower Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/rug2.jpeg" class="img-fluid rounded mb-3" alt="Modern Design Rug">
                    <p><strong>Size:</strong> 120cm x 180cm (Approx. 4ft x 6ft)</p>
                    <p><strong>Material:</strong> Mixed natural fibers sourced locally</p>
                    <p><strong>Craftsmanship:</strong> Contemporary patterns handwoven with eco-friendly dyes and natural materials.</p>
                    <p><strong>Care Instructions:</strong> Gentle vacuum and spot clean only. Keep dry and avoid harsh sunlight.</p>
                    <p>A beautiful blend of modern style and traditional handmade craftsmanship, perfect for any contemporary home.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Showcases Rug 3 -->
    <div class="modal fade" id="modalRug3" tabindex="-1" aria-labelledby="modalRug3Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRug3Label">Red Flower Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/rug3.jpeg" class="img-fluid rounded mb-3" alt="Cozy Handwoven Rug">
                    <p><strong>Size:</strong> 180cm x 270cm (Approx. 6ft x 9ft)</p>
                    <p><strong>Material:</strong> 100% Natural Wool with Cotton Backing</p>
                    <p><strong>Craftsmanship:</strong> Handwoven with traditional looms, ensuring softness and durability.</p>
                    <p><strong>Care Instructions:</strong> Professional cleaning recommended. Spot clean carefully with natural cleaners.</p>
                    <p>A warm and inviting rug that adds a handmade touch of Australian heritage to your living space.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Showcases Rug 4 -->
    <div class="modal fade" id="modalRug4" tabindex="-1" aria-labelledby="modalRug4Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRug4Label">Sun Flower Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/rug4.jpeg" class="img-fluid rounded mb-3" alt="Eco-Friendly Jute Rug">
                    <p><strong>Size:</strong> 150cm x 240cm (Approx. 5ft x 8ft)</p>
                    <p><strong>Material:</strong> 100% Sustainable Jute Fiber</p>
                    <p><strong>Craftsmanship:</strong> Handcrafted with eco-conscious methods, perfect for natural home decor lovers.</p>
                    <p><strong>Care Instructions:</strong> Vacuum regularly. Avoid moisture. Spot clean with a dry cloth.</p>
                    <p>A sustainable and stylish choice for eco-friendly homes, made with love by Australian artisans.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Showcases Rug 5 -->
    <div class="modal fade" id="modalRug5" tabindex="-1" aria-labelledby="modalRug5Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRug5Label">Red Mushroom Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/rug5.jpeg" class="img-fluid rounded mb-3" alt="Soft Plush Rug">
                    <p><strong>Size:</strong> 120cm x 180cm (Approx. 4ft x 6ft)</p>
                    <p><strong>Material:</strong> High-quality Polyester Blend</p>
                    <p><strong>Craftsmanship:</strong> Carefully crafted for ultimate softness and comfort, ideal for bedrooms and cozy corners.</p>
                    <p><strong>Care Instructions:</strong> Machine washable. Use gentle cycle and air dry.</p>
                    <p>A plush, cozy rug that brings warmth and softness, created with care by local artisans.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Showcases Rug 6 -->
    <div class="modal fade" id="modalRug6" tabindex="-1" aria-labelledby="modalRug6Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRug6Label">Yellow Flower Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/landing-page/rug6.jpeg" class="img-fluid rounded mb-3" alt="Classic Cotton Rug">
                    <p><strong>Size:</strong> 90cm x 150cm (Approx. 3ft x 5ft)</p>
                    <p><strong>Material:</strong> 100% Organic Cotton</p>
                    <p><strong>Craftsmanship:</strong> Handwoven with natural dyes for a soft, breathable rug perfect for any room.</p>
                    <p><strong>Care Instructions:</strong> Machine washable with mild detergent. Tumble dry low or air dry.</p>
                    <p>A lightweight and durable rug with classic design, perfect for adding a natural touch to your home.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>


