<div class="footer-wrapper pt-5">
    <div class="container">
        <footer class="pb-4">
            <div class="row text-center text-md-start">
                <!-- Information -->
                <div class="col-md-3 mb-4 text-center">
                    <h5 class="footer-font fw-bold mb-3 pt-5">Information</h5>
                    <ul class="list-unstyled footer-font footer-links text-center">
                        <li><a href="<?php echo site_url('/about'); ?>" class="footer-link footer-font">About Us</a></li>
                        <li><a href="#" class="footer-link footer-font">Blogs</a></li>
                        <li><a href="#" class="footer-link footer-font">Terms & Conditions</a></li>
                        <li><a href="#" class="footer-link footer-font">Privacy Policy</a></li>
                        <li><a href="#" class="footer-link footer-font">Cookie Statement</a></li>
                    </ul>
                </div>

                <!-- Logo and Newsletter -->
                <div class="col-md-6 d-flex flex-column align-items-center">
                    <div class="footer-font mb-3 fs-4 fw-bold">SoSo Studio</div>
                    
                    <a href="<?php echo site_url('/'); ?>" style="display: inline-block">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Logo" style="max-width: 160px;">
                    </a>

                    <form class="mt-4 w-100 text-center" style="max-width: 350px;">
                        <h6 class="footer-font mb-2">Subscribe to our newsletter</h6>
                        <p class="footer-font small">Monthly digest of what's new and exciting from us.</p>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email Address">
                            <button class="btn btn-light" type="submit">Subscribe</button>
                        </div>
                    </form>
                    
                    <div class="social-icons mt-3">
                        <a href="https://www.instagram.com/so.so.studio/" target="_blank" rel="noopener noreferrer">
                            <i class="fa-brands fa-instagram fs-4 mx-2"></i>
                        </a>
                    </div>
                </div>  
          
                <!-- Support -->
                <div class="col-md-3 mb-4 text-center">
                    <h5 class="footer-font fw-bold mb-3 pt-5">Support</h5>
                    <ul class="list-unstyled footer-font footer-links text-center">
                        <li><a href="" class="footer-link footer-font">Contact Us</a></li>
                        <li><a href="<?php echo site_url('/faq'); ?>" class="footer-link footer-font">FAQs</a></li>
                        <li><a href="<?php echo site_url('/commission'); ?>" class="footer-link footer-font">Commission Request</a></li>
                        <li><a href="<?php echo site_url('/custom'); ?>" class="footer-link footer-font">Custom Request</a></li>
                        <li><a href="#" class="footer-link footer-font">News</a></li>
                    </ul>
                </div>       
            </div>
          
            <!-- Footer bottom -->
            <div class="text-center mt-5 pt-4 border-top border-light">
                <p class="footer-font mb-0">© 2025 SoSo Studio, All Rights Reserved.</p>
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

</body>
</html>