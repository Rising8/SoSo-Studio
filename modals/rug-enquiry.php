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
          <!-- Hidden source page -->
          <input type="hidden" id="source-page" name="source_page">

          <div class="mb-3">
            <label for="rug-name" class="form-label">Rug Name</label>
            <input type="text" id="rug-name" name="rug_name" class="form-control" readonly>
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Your Name <span class="text-danger">*</span></label>
            <input type="text" id="name" name="name" class="form-control" pattern="[A-Za-z\s]+" required placeholder="Your full name">
            <div class="invalid-feedback">Please enter your name.</div>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Your Email <span class="text-danger">*</span></label>
            <input type="email" id="email" name="email" class="form-control" required placeholder="you@example.com">
            <div class="invalid-feedback">Please enter a valid email address.</div>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="tel" id="phone" name="phone" class="form-control" pattern="^\+?\d{7,15}$" placeholder="Optional phone number">
            <div class="invalid-feedback">Please enter your phone number.</div>
          </div>

          <div class="mb-3">
            <label for="quantity" class="form-label">Quantity / Size</label>
            <input type="number" id="quantity" name="quantity" class="form-control" min="1" placeholder="Optional quantity">
          </div>

          <div class="mb-4">
            <label for="message" class="form-label">Your Message</label>
            <textarea id="message" name="message" class="form-control" placeholder="Ask us anything about this rug..."></textarea>
          </div>

          <button type="submit" class="btn btn-primary w-100">Send Enquiry</button>
        </form>
      </div>
    </div>
  </div>
</div>