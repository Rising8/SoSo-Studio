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

    <!-- Gallery Page - Image Display Section -->
    <div class="gallery-content-2 pt-5">
        <!-- Row 1 Display -->
        <div class="container text-center justify-content-center">
            <div class="row">
                <div class="col pb-4">
                    <div class="gallery-card position-relative overflow-hidden" style="width: 25rem;">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/ig1.jpeg" class="card-img-top w-100" alt="...">
                        <div class="gallery-hover-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="text-white">Sun Flower</h5>
                            <button type="button" class="btn btn-light mt-2" data-bs-toggle="modal" data-bs-target="#rugModal1">
                                View
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col pb-4">
                    <div class="gallery-card position-relative overflow-hidden" style="width: 25rem;">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/ig2.jpeg" class="card-img-top w-100" alt="...">
                        <div class="gallery-hover-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="text-white">Pink Love</h5>
                            <button type="button" class="btn btn-light mt-2" data-bs-toggle="modal" data-bs-target="#rugModal2">
                                View
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col pb-4">
                    <div class="gallery-card position-relative overflow-hidden" style="width: 25rem;">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/ig3.jpeg" class="card-img-top w-100" alt="...">
                        <div class="gallery-hover-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="text-white">Cute One</h5>
                            <button type="button" class="btn btn-light mt-2" data-bs-toggle="modal" data-bs-target="#rugModal3">
                                View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row 2 Display -->
        <div class="container text-center justify-content-center">
            <div class="row">
                <div class="col pb-4">
                    <div class="gallery-card position-relative overflow-hidden" style="width: 25rem;">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/ig1.jpeg" class="card-img-top w-100" alt="...">
                        <div class="gallery-hover-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="text-white">Rug Name</h5>
                            <button type="button" class="btn btn-light mt-2" data-bs-toggle="modal" data-bs-target="#rugModal1">
                                View
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col pb-4">
                    <div class="gallery-card position-relative overflow-hidden" style="width: 25rem;">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/ig2.jpeg" class="card-img-top w-100" alt="...">
                        <div class="gallery-hover-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="text-white">Rug Name</h5>
                            <button type="button" class="btn btn-light mt-2" data-bs-toggle="modal" data-bs-target="#rugModal2">
                                View
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col pb-4">
                    <div class="gallery-card position-relative overflow-hidden" style="width: 25rem;">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/ig3.jpeg" class="card-img-top w-100" alt="...">
                        <div class="gallery-hover-overlay d-flex flex-column justify-content-center align-items-center">
                            <h5 class="text-white">Rug Name</h5>
                            <button type="button" class="btn btn-light mt-2" data-bs-toggle="modal" data-bs-target="#rugModal3">
                                View
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gallery Page - Categories Section -->
    <div class="gallery-content-3 pt-2">
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

    <!-- Rug Display Section Modals -->
    <div class="modal fade" id="rugModal1" tabindex="-1" aria-labelledby="rugModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rugModalLabel1">Hand-Tufted Rug</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/ig1.jpeg" class="img-fluid rounded mb-3" alt="Rug Image">
                    <p><strong>Origin:</strong> Handmade in Perth, Australia by a local artisan couple.</p>
                    <p><strong>Material:</strong> 100% New Zealand wool</p>
                    <p><strong>Size:</strong> 120cm x 180cm</p>
                    <p><strong>Description:</strong> This beautifully crafted rug is part of our bespoke collection, made with love and intention to bring warmth and creativity to any space.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-primary">Request This Rug</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rugModal2" tabindex="-1" aria-labelledby="rugModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rugModalLabel1">Hand-Tufted Rug</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/ig2.jpeg" class="img-fluid rounded mb-3" alt="Rug Image">
                    <p><strong>Origin:</strong> Handmade in Perth, Australia by a local artisan couple.</p>
                    <p><strong>Material:</strong> 100% New Zealand wool</p>
                    <p><strong>Size:</strong> 120cm x 180cm</p>
                    <p><strong>Description:</strong> This beautifully crafted rug is part of our bespoke collection, made with love and intention to bring warmth and creativity to any space.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-primary">Request This Rug</a>
                </div>
            </div>
        </div>
     </div>

    <div class="modal fade" id="rugModal3" tabindex="-1" aria-labelledby="rugModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rugModalLabel1">Hand-Tufted Rug</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/gallery-page/ig3.jpeg" class="img-fluid rounded mb-3" alt="Rug Image">
                    <p><strong>Origin:</strong> Handmade in Perth, Australia by a local artisan couple.</p>
                    <p><strong>Material:</strong> 100% New Zealand wool</p>
                    <p><strong>Size:</strong> 120cm x 180cm</p>
                    <p><strong>Description:</strong> This beautifully crafted rug is part of our bespoke collection, made with love and intention to bring warmth and creativity to any space.</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-primary">Request This Rug</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>