<?php
/**
 * Template Name: Terms and Conditions Page
 */
get_header(); ?>

<!-- Hero with fixed bg (image path set inline) -->
<section class="tandc-hero"
  style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-page/us1.png);">
  <div class="tandc-hero__inner">
    <h1 class="tandc-hero__title">Terms and Conditions</h1>
    <p class="tandc-hero__lead">Please read these terms before using our website or purchasing our products.</p>
  </div>
</section>

<!-- Main content -->
<div class="tandc-wrapper">
  <div class="tandc-content container py-5">
    <p>Welcome to SoSo Studio. By accessing or using our website (<a href="<?php echo home_url(); ?>">sosostudio.com</a>) and purchasing our products, you agree to comply with and be bound by the following Terms and Conditions. Please read them carefully before using our site.</p>

    <h2>1. General Information</h2>
    <p>These Terms and Conditions (“Terms”) apply to all visitors, customers, and users of SoSo Studio. By browsing or making a purchase through our website, you agree to these Terms in full. If you disagree with any part of these Terms, please do not use our website.</p>

    <h2>2. Product Information</h2>
    <p>We aim to ensure that all product descriptions, images, and prices displayed on our website are accurate. However, slight variations in color or texture may occur due to lighting and screen differences. Handcrafted rugs and textiles may also contain minor imperfections — these are part of their natural character and uniqueness.</p>

    <h2>3. Pricing and Availability</h2>
    <p>All prices listed are in Australian Dollars (AUD) and include GST where applicable. Product availability is subject to change without notice. We reserve the right to modify prices or discontinue products at any time.</p>

    <h2>4. Orders and Payments</h2>
    <p>Orders can be placed through our website using accepted payment methods shown at checkout. By submitting an order, you confirm that the information provided is accurate and that you are authorized to use the chosen payment method. Once an order is placed, you will receive a confirmation email.</p>

    <h2>5. Shipping and Delivery</h2>
    <p>We ship Australia-wide and internationally where applicable. Delivery times vary depending on your location. Once shipped, SoSo Studio is not responsible for delays caused by postal or courier services. Please ensure your shipping details are correct before placing your order.</p>

    <h2>6. Returns and Exchanges</h2>
    <p>We want you to love your SoSo Studio piece. If you’re not satisfied with your purchase, please contact us within 7 days of receiving your order. Returns are accepted for unused items in original condition. Custom or made-to-order rugs are not eligible for return unless faulty.</p>

    <h2>7. Intellectual Property</h2>
    <p>All images, text, and designs featured on this website are the property of SoSo Studio. You may not copy, reproduce, or distribute any content without written permission. Our rug designs and photographs are protected under Australian copyright law.</p>

    <h2>8. Limitation of Liability</h2>
    <p>SoSo Studio will not be held liable for any indirect, incidental, or consequential damages arising from your use of this website or our products. We make no warranties beyond those required by Australian Consumer Law.</p>

    <h2>9. Privacy</h2>
    <p>We respect your privacy. Any personal information collected is handled in accordance with our >Privacy Policy. We do not sell or share your details with third parties without consent.</p>

    <h2>10. Governing Law</h2>
    <p>These Terms and Conditions are governed by the laws of Western Australia. Any disputes will be subject to the exclusive jurisdiction of the courts of Western Australia.</p>  </div>
</div>

<!-- Bottom CTA with fixed bg (image path set inline) -->
<section
  class="tandc-cta"
  style="background-image:
    linear-gradient(180deg, rgba(10,10,15,.65) 0%, rgba(10,10,15,.75) 100%),
    url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/about-page/us1.png');">
  <div class="tandc-cta__inner container">
    <h2 class="tandc-cta__title">Questions about your order or design?</h2>
    <p class="tandc-cta__lead">
      Reach out any time. The team will guide you through commissions, workshops, and custom designs.
    </p>

    <div class="tandc-cta__actions">
      <!-- Keep only modal trigger (no internal link) -->
      <a
        href="#"
        class="btn index-rug-button rounded-pill px-4 py-2 fw-semibold"
        data-bs-toggle="modal"
        data-bs-target="#contactModal"
        aria-label="Open contact form modal">
        Let’s Talk
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>