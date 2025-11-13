<!-- Rug Enquiry Modal -->
<div class="modal fade" id="rugEnquireModal" tabindex="-1" aria-labelledby="rugEnquireModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rugEnquireModalLabel">Enquire About This Rug</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="rug-enquire-form shadow-lg pt-4 px-4 pb-3 rounded bg-body">
                    <form id="rugEnquiryForm" action="https://formspree.io/f/xnnlnvne" method="POST" novalidate>
                        <input type="hidden" id="source-page" name="source-page">

                        <!-- Rug Name -->
                        <div class="mb-3">
                            <label for="rug-name" class="form-label">Rug Name</label>
                            <input 
                                type="text" 
                                id="rug-name" 
                                name="rug-name" 
                                class="form-control" 
                                value="Auto-filled rug name" 
                                readonly
                            >
                        </div>

                        <!-- Your Name -->
                        <div class="mb-3">
                            <label for="enquiry-form-name" class="form-label">
                                Your Name <span class="text-danger"></span>
                            </label>
                            <input 
                                type="text" 
                                id="enquiry-form-name" 
                                name="enquiry-form-name" 
                                class="form-control" 
                                placeholder="Your full name"
                                required
                            >
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>

                        <!-- Your Email -->
                        <div class="mb-3">
                            <label for="enquiry-form-email" class="form-label">
                                Your Email <span class="text-danger"></span>
                            </label>
                            <input 
                                type="email" 
                                id="enquiry-form-email" 
                                name="enquiry-form-email" 
                                class="form-control" 
                                placeholder="you@example.com"
                                required
                            >
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label for="enquiry-form-phone" class="form-label">Phone Number</label>
                            <input 
                                type="text" 
                                id="enquiry-form-phone" 
                                name="enquiry-form-phone" 
                                class="form-control" 
                                placeholder="Optional phone number"
                            >
                            <div class="invalid-feedback">Please enter a valid phone number.</div>
                        </div>

                        <!-- Quantity -->
                        <div class="mb-3">
                            <label for="enquiry-form-quantity" class="form-label">Quantity</label>
                            <input 
                                type="number" 
                                id="enquiry-form-quantity" 
                                name="enquiry-form-quantity" 
                                class="form-control" 
                                min="1" 
                                placeholder="Optional quantity"
                            >
                        </div>

                        <!-- Message -->
                        <div class="mb-4">
                            <label for="enquiry-form-message" class="form-label">Your Message</label>
                            <textarea 
                                id="enquiry-form-message" 
                                name="enquiry-form-message" 
                                class="form-control" 
                                rows="4" 
                                placeholder="Ask us anything about this rug..."
                            ></textarea>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="submit-form btn w-100">
                            Send Enquiry
                        </button>
                    </form>

                    <!-- Success message -->
                    <div id="rugEnquirySuccess" class="alert alert-success mt-3 text-center" style="display: none;">
                        <h5>Thanks!</h5>
                        <p>Your enquiry was sent successfully.</p>
                        <button class="btn mt-2" data-bs-dismiss="modal">Go Back</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>