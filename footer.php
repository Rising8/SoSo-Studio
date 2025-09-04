<div class="footer-wrapper pt-5">
    <div class="container">
        <footer class="pb-4">
            <div class="row text-center text-md-start px-5">

                <!-- Column 1 -->
                <div class="col-md-6">
                    <div class="pb-3 logo-footer d-flex align-items-center">
                        <a href="<?php echo site_url('/'); ?>" class="me-2">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Logo" style="max-width: 50px;">
                        </a>
                        <div class="footer-font fs-5 fw-bold mb-0">SoSo Studio</div>
                    </div>
                    <div class="col-md-9">
                        <h5 class="footer-font fw-bold mb-3">Newsletter</h5>
                        <form class="newsletter-form" novalidate>
                            <p class="newsletter-p">Monthly digest of what’s new and exciting from us.</p>
                            <div class="input-group has-validation">
                            <input type="email" class="form-control" placeholder="Email Address" required>
                            <button class="btn btn-light" type="submit">Subscribe</button>
                            <div class="invalid-feedback text-start">
                                Please enter a valid email address.
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <!-- Column 2 -->
                <div class="col-md-3 mb-4">
                    <h5 class="footer-font fw-bold mb-3">Information</h5>
                    <ul class="list-unstyled footer-font footer-links">
                        <li><a href="<?php echo site_url('/about'); ?>" class="footer-link">About Us</a></li>
                        <li><a href="#" class="footer-link">Blogs</a></li>
                        <li><a href="#" class="footer-link">Terms & Conditions</a></li>
                        <li><a href="#" class="footer-link">Privacy Policy</a></li>
                        <li><a href="#" class="footer-link">Cookie Statement</a></li>
                    </ul>
                </div>

                <!-- Column 3 -->
                <div class="col-md-3 mb-4">
                    <h5 class="footer-font fw-bold mb-3">Support</h5>
                    <ul class="list-unstyled footer-font footer-links">
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#contactModal" class="footer-link">Contact Us</a></li>
                        <li><a href="<?php echo site_url('/faq'); ?>" class="footer-link">FAQs</a></li>
                        <li><a href="<?php echo site_url('/commission'); ?>" class="footer-link">Commission Request</a></li>
                        <li><a href="<?php echo site_url('/custom'); ?>" class="footer-link">Custom Request</a></li>
                        <li><a href="#" class="footer-link">News</a></li>
                    </ul>
                </div>
        </div>

        <!-- Footer bottom -->
        <div class="mt-5 pt-4 border-top border-light d-flex flex-column align-items-center text-center">
            <a href="https://www.instagram.com/so.so.studio/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary rounded-pill px-3 py-2 instagram-btn d-flex align-items-center">
                <i class="fa-brands fa-instagram fs-4"></i>
            </a>
            <p class="footer-font py-3">© 2025 SoSo Studio, All Rights Reserved.</p>
        </div>
        </footer>
  </div>
</div>

<?php wp_footer(); ?>

<?php
if (is_singular('rug')) {
    get_template_part('modals/rug-enquiry');
}
?>

<?php include 'modals/contact-form.php'; ?>

</body>
</html>