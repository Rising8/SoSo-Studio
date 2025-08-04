<?php
/**
 * Template Name: FAQ Page
 */
get_header(); ?>

<div class="faq-wrapper py-5">
    <!-- FAQ Page - Hero Section -->
    <div class="faq-content-1">
        <div class="container">
            <div class="text-center mb-4">
                <h1 class="fs-3 fs-md-2 fs-lg-1" style="color: #4b0082;">Frequently Asked Questions</h1>
                <p class="text-muted">Need help? Find answers to some common questions below.</p>
            </div>

            <!-- FAQ Page - Accordion for FAQs -->
            <!-- FAQs will be updated accordingly -->
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item mb-3 border-0 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                            What is your return policy?
                        </button>
                    </h2>
                    <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            We offer returns within 30 days of receiving your item. Items must be unused and in original packaging.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3 border-0 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                            How do I track my order?
                        </button>
                    </h2>
                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            You’ll receive a tracking link via email once your order ships.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3 border-0 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                            Do you ship internationally?
                        </button>
                    </h2>
                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Yes, we ship worldwide. International shipping rates and delivery times vary.
                        </div>
                    </div>
                </div>

                <div class="accordion-item mb-3 border-0 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                            Can I customize my rug?
                        </button>
                    </h2>
                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Absolutely! Visit our <a href="<?php echo site_url('/custom'); ?>">Custom Page</a> to start designing your unique rug.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>