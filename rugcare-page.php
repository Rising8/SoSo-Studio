<?php
/**
 * Template Name: Rugcare Page
 */
get_header(); ?>

<div class="rugcare-wrapper">
    <!-- Rugcare Page - Hero Section -->
    <div class="rugcare-content-1 text-center">
        <h1 class="landing-heading display-5 text-body-emphasis text-center pt-5 pb-3 d-block mx-auto">
            Rug Care and Maintenance Guide
        </h1>
        <p class="rugcare-hero-p fs-6 fs-md-5 fs-lg-4">
            Keep your rugs fresh, vibrant and long-lasting with these expert tips
        </p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/style.png" class="img-fluid" alt="Image description">
    </div>

    <!-- Rugcare Page - Quick Everyday Tips -->
    <!-- Tips will be updated accordingly later -->
    <div class="rugcare-content-2 text-center">
        <h2 class="mb-4 text-center">Quick Everyday Tips</h2>
        <div class="container py-4">
            <div class="row align-items-md-stretch g-3">
                <div class="col-md-3">
                    <div class="h-100 border rounded-5 p-3 bg-light">
                        <i class="fa-solid fa-broom fa-2x mb-2"></i>
                        <p>Vacuum weekly to prevent dust buildup</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="h-100 border rounded-5 p-3 bg-light">
                        <i class="fa-solid fa-wine-glass fa-2x mb-2"></i>
                        <p>Soak up spills immediately with a clean cloth</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="h-100 border rounded-5 p-3 bg-light">
                          <i class="fa-solid fa-sun fa-2x mb-2"></i>
                          <p>Keep out of direct sunlight to avoid fading</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="h-100 border rounded-5 p-3 bg-light">
                        <i class="fa-solid fa-shoe-prints fa-2x mb-2"></i>
                        <p>Rotate rugs every few months</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/style2.png" class="img-fluid" alt="Image description">
    </div>

    <!-- Rugcare Page - Care by Material Section -->
    <!-- Material care will be updated -->
    <div class="rugcare-content-3 text-center">
        <h2 class="mb-4 text-center">What Not To Do</h2>
            <div class="container py-4">
                <div class="row align-items-md-stretch g-3">
                <div class="col-md-4">
                    <div class="rugcare-materials h-100 border rounded-5 p-3">
                        <h5>Wool Rugs</h5>
                        <p>are durable and soft. Vacuum regularly with a brushless attachment and avoid soaking them during cleaning.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rugcare-materials h-100 border rounded-5 p-3">
                        <h5>Cotton Rugs</h5>
                        <p>can often be machine-washed, but always check the label. Use gentle deteregent and air-dry.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="rugcare-materials h-100 border rounded-5 p-3">
                        <h5>Synthetic Rugs</h5>
                        <p>resist stains well. Spot clean with mild soap and a soft brush as needed.</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/style.png" class="img-fluid" alt="Image description">
    </div>

    <!-- Rugcare Page - Video on how to clean -->
    <div class="rugcare-content-4">
        <h2 class="p-3 text-center"> Watch: How to Clean Like a Pro</h2>
        <div class="container text-center">
            <div class="row gy-4">
                <div class="col-12 col-md-6 pb-5">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/CLGk8Mmj1WQ" title="Rug Cleaning Tutorial 1" allowfullscreen></iframe>  
                    </div>
                </div>
                <div class="col-12 col-md-6 pb-5">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/ONNEKa36Es4" title="Rug Cleaning Tutorial 2" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/style2.png" class="img-fluid" alt="Image description">
    </div>

    <!-- Rugcare Page - PDF file for offline access -->
    <div class="rugcare-content-5 text-center">
        <div class="container pb-2">
            <h2 class="mb-4">Need a Handy Guide?</h2>
            <a href="assets/pdf/Assessment-1-SolutionReport.pdf" class="btn btn-outline-primary btn-lg" target="_blank" rel="noopener">
                <i class="fa-solid fa-file-arrow-down me-2"></i>Download PDF
            </a>
        </div>
    </div>

    <!-- Rugcare Page - Contact Button -->
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/style.png" class="img-fluid" alt="Image description">
    <div class="rugcare-content-6 text-center pb-5">
        <div class="container">
            <h2 class="test mb-3">Need More Help?</h2>
            <p>Contact us for a personalized rug consultation or more advanced cleaning needs.</p>
            <a href="" class="btn btn-outline-secondary">Contact Us</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>