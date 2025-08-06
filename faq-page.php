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
                <p class="text-muted">Answers to your most common curiosities, rug-related or not.</p>
            </div>

            <!-- Tabs -->
            <div class="container">
                <!-- Category Tabs -->
                <ul class="nav faq-nav-pills justify-content-center mb-4" id="faqTabs" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#general">🧺 General</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#shipping">📦 Shipping</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="pill" data-bs-target="#care">🧼 Rug Care</button>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- General Tab -->
                    <div class="tab-pane fade show active" id="general">
                        <div class="accordion" id="generalFAQ">
                            <!-- General FAQ 1 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genA1">
                                        What makes your rugs unique?
                                    </button>
                                </h2>
                                <div id="genA1" class="accordion-collapse collapse" data-bs-parent="#generalFAQ">
                                    <div class="accordion-body">
                                        Each rug is handmade with love, no two are the same.
                                    </div>
                                </div>
                            </div>

                            <!-- General FAQ 2 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genA2">
                                        Can I customise my own rug?
                                    </button>
                                </h2>
                                <div id="genA2" class="accordion-collapse collapse" data-bs-parent="#generalFAQ">
                                    <div class="accordion-body">
                                        Absolutely! You can submit your design ideas via our <a href="<?php echo site_url('/commission'); ?>">Commission page</a> and we'll bring them to life.
                                    </div>
                                </div>
                            </div>

                            <!-- General FAQ 3 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#genA3">
                                        Do I need experience to attend a workshop?
                                    </button>
                                </h2>
                                <div id="genA3" class="accordion-collapse collapse" data-bs-parent="#generalFAQ">
                                    <div class="accordion-body">
                                        Not at all! Our workshops are designed for beginners and all materials are included.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping Tab -->
                    <div class="tab-pane fade" id="shipping">
                        <div class="accordion" id="shippingFAQ">
                            <!-- Shipping FAQ 1 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#shipA1">
                                        How long does shipping take?
                                    </button>
                                </h2>
                                <div id="shipA1" class="accordion-collapse collapse" data-bs-parent="#shippingFAQ">
                                    <div class="accordion-body">
                                        Shipping usually takes 5–10 business days depending on your location.
                                    </div>
                                </div>
                            </div>

                            <!-- Shipping FAQ 2 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#shipA2">
                                        Do you offer international delivery?
                                    </button>
                                </h2>
                                <div id="shipA2" class="accordion-collapse collapse" data-bs-parent="#shippingFAQ">
                                    <div class="accordion-body">
                                        Yes, we ship worldwide! International shipping times may vary based on your country.
                                    </div>
                                </div>
                            </div>

                            <!-- Shipping FAQ 3 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#shipA3">
                                        How is my rug packaged?
                                    </button>
                                </h2>
                                <div id="shipA3" class="accordion-collapse collapse" data-bs-parent="#shippingFAQ">
                                    <div class="accordion-body">
                                        Each rug is rolled securely, wrapped in protective material, and boxed for safe delivery.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rug Care Tab -->
                    <div class="tab-pane fade" id="care">
                        <div class="accordion" id="careFAQ">
                            <!-- Rug Care FAQ 1 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#careA1">
                                        How do I clean my rug?
                                    </button>
                                </h2>
                                <div id="careA1" class="accordion-collapse collapse" data-bs-parent="#careFAQ">
                                    <div class="accordion-body">
                                        Vacuum lightly, avoid soaking, and check out our rug care guide for full steps.
                                    </div>
                                </div>
                            </div>

                            <!-- Rug Care FAQ 2 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#careA2">
                                        Can I place it in a high-moisture area like a bathroom?
                                    </button>
                                </h2>
                                <div id="careA2" class="accordion-collapse collapse" data-bs-parent="#careFAQ">
                                    <div class="accordion-body">
                                        We don’t recommend it — high humidity can affect the rug’s backing and durability.
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Rug Care FAQ 3 -->
                            <div class="accordion-item mb-3 border-0 shadow-sm">
                                <h2 class="accordion-header">
                                    <button class="accordion-button faq-accordion-btn collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#careA3">
                                        Are your rugs pet-friendly?
                                    </button>
                                </h2>
                                <div id="careA3" class="accordion-collapse collapse" data-bs-parent="#careFAQ">
                                    <div class="accordion-body">
                                        Yes! Our rugs are durable, but we recommend trimming pet nails to avoid snags.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact CTA -->
                <div class="text-center mt-5">
                    <h2 class="mb-3" style="color:#4b0082;">Need More Help?</h2>
                    <p class="text-muted">Contact us for a personalized rug consultation or more advanced cleaning needs.</p>
                    <a href="<?php echo site_url('/contact'); ?>" class="btn btn-outline-secondary">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>