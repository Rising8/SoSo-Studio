 <!-- Contact Form Modal -->

<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="contactModalLabel">Have a problem?</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <!-- EMAIL -->
            <div class="mb-4">
                <label for="modal-email" class="form-label">Email address:</label>
                <input type="email" class="form-control" id="modal-email" required placeholder="e.g. mario@example.com">
                <div class="invalid-feedback">Please enter a valid email address.</div>
            </div>

            <!-- SUBJECT -->
            <div class="mb-4">
                <label for="subject" class="form-label">What is your question about?</label>
                <select id="subject" name="subject" class="form-select">
                    <option>Commission Inquiry</option>
                    <option>Workshop Signup</option>
                    <option>General Question</option>
                    <option>Other</option>
                </select>
            </div>

            <div class="mb-2">
                <label for="query" class="form-label">Please contact us using the box below.</label>
                <div class="form-floating">
                  <textarea name="query" id="query" class="form-control"></textarea>
                  <label for="query">Your query...</label>
                </div>
            </div>

        </div>

        <a href="?php echo site_url(); ?>" class="modal-footer">
            <button type="submit" class="btn btn-primary w-50">Submit</button>
        </a>
    </div>
</div>
</div>