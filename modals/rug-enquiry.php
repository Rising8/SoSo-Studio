<!-- Rug Enquiry Modal -->
<div class="modal fade" id="rugEnquireModal" tabindex="-1" aria-labelledby="rugEnquireModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rugEnquireModalLabel">Enquire About This Rug</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="rug-enquire-form shadow-lg p-4 rounded bg-body">
                <div class="mb-3">
                    <label for="rug-name" class="form-label">Rug Name</label>
                    <input type="text" id="rug-name" name="rug_name" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" id="name" name="name" class="form-control" required placeholder="Your full name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" id="email" name="email" class="form-control" required placeholder="you@example.com">
                </div>
                <div class="mb-4">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea id="message" name="message" rows="5" class="form-control" placeholder="Ask us anything about this rug..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Send Enquiry</button>
                </form>
            </div>
        </div>
    </div>
</div>