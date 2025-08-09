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
                        ['Design', 'Click below to use our design partner tool or skip this step.', 'https://www.customink.com/ndx/#/welcomeBack', 'Open Design Tool'],
                        ['Fill Out The Form', 'Tell us what you envision you can upload your design or reference.', '', ''],
                        ['Submit', 'We’ll review your request and be in touch for confirmation.', '', ''],
                        ['Production Begins', 'After confirmation and deposit, your rug enters creation phase!', '', '']
                    ];
                    foreach ($steps as $index => $step) :
                    ?>
                        <div class="col-md-3 d-flex">
                            <div class="hiw-step-box w-100 h-100 d-flex flex-column align-items-center text-center p-4 rounded shadow-sm">
                                <h4 class="text-body-emphasis"><?= $step[4] ?> Step <?= $index + 1 ?>: <?= $step[0] ?></h4>
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
                        <!-- <p class="lead text-muted text-center">We can’t wait to hear your idea!</p> -->
                        <form class="shadow p-4 rounded commission-form rounded-4 border">
                            <div class="row g-3">
                                <!-- Name -->
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                </div>
                                <!-- Rug Size -->
                                <div class="col-md-6">
                                    <label for="rug-size" class="form-label">Rug Size</label>
                                    <select id="rug-size" name="rug-size" class="form-select" required>
                                        <option value="">Choose...</option>
                                        <option value="Tiny">Tiny</option>
                                        <option value="So-So">So-So</option>
                                        <option value="Big">Big</option>
                                        <option value="Custom">Custom (describe below)</option>
                                    </select>
                                </div>
                                <!-- Texture -->
                                <div class="col-md-6">
                                    <label for="texture" class="form-label">
                                        Texture
                                        <a href="<?php echo site_url('/gallery'); ?>" target="_blank" class="texture-help-icon ms-2 text-decoration-none" title="View texture examples">
                                            <i class="bi bi-question-circle-fill" style="font-size: 1rem;"></i>
                                        </a>
                                    </label>
                                    <select id="texture" name="texture" class="form-select" required>
                                        <option value="">Choose...</option>
                                        <option value="Flatwave">Flatwave</option>
                                        <option value="Shag">Shag</option>
                                        <option value="Tufted">Tufted</option>
                                    </select>
                                </div>
                                <!-- Budget -->
                                <div class="col-md-6">
                                    <label for="budget" class="form-label">Budget Range</label>
                                    <input type="text" id="budget" name="budget" class="form-control" required>
                                </div>
                                <!-- Usage -->
                                <div class="col-md-6">
                                    <label for="usage" class="form-label">Where will the rug be used?</label>
                                    <input type="text" id="usage" name="usage" class="form-control">
                                </div>
                                <!-- Colors -->
                                <div class="col-md-6">
                                    <label for="colors" class="form-label">Preferred Colors</label>
                                    <input type="text" id="colors" name="colors" class="form-control">
                                </div>
                                <!-- Reference File -->
                                <div class="col-12">
                                    <label for="reference" class="form-label">Upload Reference Image</label>
                                    <input type="file" id="reference" name="reference" class="form-control">
                                </div>
                                <!-- Notes -->
                                <div class="col-12">
                                    <label for="notes" class="form-label">Additional Notes</label>
                                    <textarea id="notes" name="notes" rows="4" class="form-control"></textarea>
                                </div>
                            </div>

                            <!-- Submit -->
                            <button type="submit" class="btn btn-primary w-100 mt-4">Submit Commission</button>

                            <!-- Tips -->
                            <div class="alert alert-info mt-4">
                                <strong>Commissioning Tips:</strong>
                                <ul class="mb-0 small">
                                    <li>Use high-contrast colors for better clarity.</li>
                                    <li>Include a sketch, reference photo, or moodboard.</li>
                                    <li>Tell us where it’ll live — hallway, wall, lounge?</li>
                                </ul>
                            </div>
                        </form>
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