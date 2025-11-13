<!-- Contact Form Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="contact-form shadow-lg pt-4 px-4 pb-3 rounded bg-body">
                <form id="contactForm" action="https://formspree.io/f/xzzyzebb" method="POST" enctype="multipart/form-data" novalidate>
                    <div class="mb-3">
                        <label for="contact-form-name" class="form-label">
                            Your Name <span class="text-danger">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="contact-form-name" 
                            name="contact-form-name" 
                            class="form-control" 
                            placeholder="Your full name" 
                            required
                        >
                        <div class="invalid-feedback">Please enter your name.</div>
                    </div>

                    <div class="mb-3">
                        <label for="contact-form-email" class="form-label">
                            Your Email <span class="text-danger">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="contact-form-email" 
                            name="contact-form-email" 
                            class="form-control" 
                            placeholder="you@example.com" 
                            required
                        >
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>

                    <div class="mb-3">
                        <label for="reason" class="form-label">Reason for Contact</label>
                        <select 
                            id="reason" 
                            name="your-reason" 
                            class="form-select"
                        >
                            <option value="Commission Inquiry">Commission Inquiry</option>
                            <option value="Workshop Signup">Workshop Signup</option>
                            <option value="General Question">General Question</option>
                        </select>
                    </div>

                    <!-- need to upgrade the plan to make the upload file works -->
                    <div class="mb-3">
                        <label for="image-attachment" class="form-label">Attach an Image (optional)</label>
                        <input 
                            type="file" 
                            id="image-attachment" 
                            name="image-attachment" 
                            class="form-control" 
                            accept=".jpg,.jpeg,.png,.gif"
                        >
                        <div class="form-text">
                            Maximum file size: 5MB. Allowed types: jpg, jpeg, png, gif.
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea 
                            id="message" 
                            name="message" 
                            class="form-control" 
                            rows="5" 
                            placeholder="Share your thoughts..."
                        ></textarea>
                    </div>

                    <button type="submit" class="submit-form btn w-100">
                        Send Message
                    </button>
                </form>
                <div id="formSuccess" class="alert alert-success mt-3 text-center" style="display: none;">
                    <h5>Thanks!</h5>
                    <p>Your message was sent successfully.</p>
                    <button class="btn mt-2" data-bs-dismiss="modal">Go Back</button>
                </div>
            </div>
        </div>
    </div>
</div>