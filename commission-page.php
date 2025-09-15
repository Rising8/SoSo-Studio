<?php
/**
 * Template Name: Commission Page
 */
get_header(); ?>

<div class="commission-wrapper">
    <!-- Commission Page - Hero Section -->
    <div class="commission-content-1">
        <section class="commission-hero py-5 text-center">
            <div class="container">
                <h1 class="landing-heading display-5 text-body-emphasis text-center d-block mx-auto">Bring Your Dream to Life</h1>
                <p class="lead text-muted">Design a custom rug that’s truly yours soft, unique, and full of personality.</p>
            </div>
        </section>
    </div>

    <!-- Commission Page - How It Works Section -->
    <div class="commission-content-2">
        <section class="hiw-section pb-5 bg-white">
            <div class="container">
                <h2 class="fs-3 fs-md-2 fs-lg-1 mb-4 text-center">How It Works</h2>
                <div class="row g-4">
                    <?php
                    $steps = [
                        ['Design', 'Click below to use our design partner tool or skip this step.', site_url('/custom'), 'Open Design Tool'],
                        ['Fill Out The Form', 'Tell us what you envision you can upload your design or reference.', '', ''],
                        ['Submit', 'We’ll review your request and be in touch for confirmation.', '', ''],
                        ['Production Begins', 'After confirmation and deposit, your rug enters creation phase!', '', '']
                    ];
                    foreach ($steps as $index => $step) :
                    ?>
                        <div class="col-md-3 d-flex">
                            <div class="hiw-step-box w-100 h-100 d-flex flex-column align-items-center text-center p-4 rounded shadow-sm">
                                <h4 class="text-body-emphasis">Step <?= $index + 1 ?>: <?= $step[0] ?></h4>
                                <p class="text-body-secondary"><?= $step[1] ?></p>
                                <?php if (!empty($step[2])) : ?>
                                    <a href="<?= $step[2] ?>" target="_blank" class="btn design-tool-btn mt-2"><?= $step[3] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>

        <!-- Commission Page - Commission Form Section --> 
<div class="commission-content-3">
    <section class="commission-form-section pb-5 pt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <h2 class="fs-3 fs-md-2 fs-lg-1 mb-4 text-center">Commission Request Form</h2>                 
                    
                    <div class="shadow p-4 rounded commission-form rounded-4 border">
                        <?php echo do_shortcode('[contact-form-7 id="bf61845" title="Commission Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- Commission Page - FAQ Section -->
    <div class="commission-content-4">
        <section class="commission-faq-section pt-4 pb-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h4 class="text-center mb-4 fw-semibold">Frequently Asked</h4>
                        <div class="accordion" id="commissionFaq">
                            <?php
                            $faqs = [
                                ['How long does a custom rug take?', 'Most commissions take 4–6 weeks depending on complexity and material.'],
                                ['Can I request edits after submitting?', 'Absolutely! We’ll contact you first before production to confirm and refine your design.'],
                                ['What materials do you use?', 'We primarily use high-quality acrylic or wool blends, chosen based on usage location and your preferences.']
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
                            <p class="small text-muted mt-3"><i class="fa fa-shield-alt me-2"></i>Your design is safe with us. Every rug is crafted with care, privacy, and love.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Commission Page - Explore More Buttons -->
    <div class="commission-content-5">
        <section class="commission-continue-exploring text-center py-5">
            <div class="container">
                <h4 class="mb-4 fw-semibold pb-3">Continue Exploring</h4>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="<?= home_url(); ?>" class="btn btn-outline-primary px-4 py-2 rounded-pill">Back to Home</a>
                    <a href="<?= home_url('/gallery'); ?>" class="btn btn-outline-primary px-4 py-2 rounded-pill">View Gallery</a>
                    <a href="<?= home_url('/commission'); ?>" class="btn btn-outline-primary px-4 py-2 rounded-pill">Submit Another Request</a>
                </div>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>