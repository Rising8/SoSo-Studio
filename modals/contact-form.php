<!-- Contact Form Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div id="formContent" class="modal-body">
                <!-- Contact Form 7 -->
                <?php echo do_shortcode('[contact-form-7 id="3400e5b" title="Contact form 1"]'); ?>
            </div>
            <div id="formSuccess" class="alert alert-success mt-3 text-center" style="display: none;">
                <h5>Thanks!</h5>
                <p>Your message was sent successfully.</p>
                <button class="btn mt-2" data-bs-dismiss="modal">Go Back</button>
            </div>
        </div>
    </div>
</div>