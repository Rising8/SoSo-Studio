<?php
/**
 * Template Name: Commission Main (How It Works + FAQ)
 */
get_header(); ?>

<div class="commission-wrapper">
    <!-- Commission Page - Hero Section -->
    <div class="commission-content-1">
        <section class="commission-hero py-5 text-center">
            <div class="container">
                <h1 class="landing-heading display-5 text-body-emphasis text-center d-block mx-auto">
                    Bring Your 
                    <span class="commission-hero-d">D </span>
                    <span class="commission-hero-r">r </span>
                    <span class="commission-hero-e">e </span>
                    <span class="commission-hero-a">a </span>
                    <span class="commission-hero-m">m </span>
                        to Life
                </h1>
                <p class="lead text-muted">
                    Design a custom rug that’s truly yours. Soft, unique and full of personality.
                </p>
            </div>
        </section>
    </div>

    <!-- Commission Page - How It Works Section -->
    <div class="commission-content-2">
        <section class="ss-stepper py-5" aria-labelledby="ss-hiw-heading">
            <div class="container">
                <h2 id="ss-hiw-heading" class="text-center mb-2">How It Works</h2>
                <p class="text-center text-muted mb-4">Four simple steps quick and easy.</p>

                <div class="ss-step" role="listitem" aria-labelledby="ss-step-title-1">
                    <div class="ss-badge" aria-hidden="true">1</div>
                    <div class="ss-content">
                        <h3>Design</h3>
                        <p class="ss-desc">Use our design tool and sketch your marvellous creations.</p>
                        <p class="mt-3">
                            <a href="<?php echo esc_url( home_url( '/custom' ) ); ?>" class="ss-btn">
                                Start Designing
                            </a>
                        </p>
                    </div>
                </div>

                <div class="ss-step" role="listitem" aria-labelledby="ss-step-title-2">
                    <div class="ss-badge" aria-hidden="true">2</div>
                    <div class="ss-content">
                        <h3>Submit Request</h3>
                        <p class="ss-desc">Complete the request form and upload any designs or references.</p>
                        <p class="mt-3">
                        <a href="<?php echo esc_url( home_url( '/commission-form' ) ); ?>" class="ss-btn">
                            Request Form
                        </a>
                        </p>
                    </div>
                </div>

                <div class="ss-step" role="listitem" aria-labelledby="ss-step-title-3">
                    <div class="ss-badge" aria-hidden="true">3</div>
                    <div class="ss-content">
                        <h3>Review</h3>
                        <p class="ss-desc">We’ll review your request and provide feedback along with further instructions.</p>
                    </div>
                </div>

                <div class="ss-step" role="listitem" aria-labelledby="ss-step-title-4">
                    <div class="ss-badge" aria-hidden="true">4</div>
                    <div class="ss-content">
                        <h3>Crafting Process</h3>
                        <p class="ss-desc">With confirmation, your envisioned rug moves into craftsmanship.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Commission Page - FAQ Section -->
    <div class="commission-content-3">
        <section class="commission-faq-section pt-4 pb-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h4 class="text-center mb-4 fw-semibold">Frequently Asked Questions</h4>
                        <div class="accordion" id="commissionFaq">
                            <?php
                            $faqs = [
                                ['How long does a custom rug take?', 'Most commissions take 4–6 weeks depending on complexity and material.'],
                                ['Can I request changes after submitting?', 'Absolutely! We’ll contact you before production to confirm and refine your design.'],
                                ['What materials do you use?', 'We use high-quality acrylic or wool blends, chosen based on where the rug will be placed and your preferences.']
                            ];
                            foreach ($faqs as $i => $faq) :
                                $id = 'faq' . ($i + 1);
                                $collapseId = 'collapse' . ($i + 1);
                            ?>
                                <div class="accordion-item my-3">
                                    <h2 class="accordion-header" id="<?= $id ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>">
                                            <?= $faq[0] ?>
                                        </button>
                                    </h2>
                                    <div id="<?= $collapseId ?>" class="accordion-collapse collapse" data-bs-parent="#commissionFaq">
                                        <div class="accordion-body text-muted"><?= $faq[1] ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="commission-view-more-faqs mt-4 text-center">
                            <a href="<?= home_url('/faq'); ?>" class="btn btn-outline-secondary mt-2 px-3">View More FAQs</a>
                            <p class="small text-muted mt-3">
                                <i class="fa fa-shield-alt me-2"></i>
                                Your design is safe with us. Every rug is crafted with care, privacy, and love.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Commission Page - Explore More Buttons -->
    <div class="commission-content-4">
        <section class="commission-continue-exploring text-center py-5">
            <div class="container">
                <h4 class="mb-4 fw-semibold pb-3">Continue Exploring</h4>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="<?= home_url(); ?>" class="btn btn-outline-primary px-4 py-2 rounded-pill">Back to Home</a>
                    <a href="<?= home_url('/gallery'); ?>" class="btn btn-outline-primary px-4 py-2 rounded-pill">View Gallery</a>
                    <a href="<?= home_url('/commission-form'); ?>" class="btn btn-outline-primary px-4 py-2 rounded-pill">Request a Custom Rug</a>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>