 <!-- Contact Form Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="contact-form shadow-lg p-4 rounded bg-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="Your full name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" id="email" name="email" class="form-control" required placeholder="you@example.com">
                    <div class="invalid-feedback">Please enter a valid email address.</div>
                </div>

                <div class="mb-3">
                    <label for="reason" class="form-label">Reason for Contact</label>
                    <select id="reason" name="reason" class="form-select">
                        <option>Commission Inquiry</option>
                        <option>Workshop Signup</option>
                        <option>General Question</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea id="message" name="message" rows="5" class="form-control" required placeholder="Share your thoughts..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</div>