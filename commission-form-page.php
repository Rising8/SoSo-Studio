  <?php
/**
 * Template Name: Commission Form
 */

get_header(); ?>

<!-- Commission Page - Commission Form Section --> 
<div class="commission-form-content-1">
    <section class="commission-form-section pb-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <h2 class="fs-3 fs-md-2 fs-lg-1 mb-4 text-center">Commission Request Form</h2>                 
                    <form class="shadow p-4 rounded commission-form rounded-4 border">
                        <div class="row g-3">
                            <p class="required-note">* Required fields</p>
                            <!-- Name -->
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="name" class="form-control" pattern="[A-Za-z\s]+" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" id="email" name="email" class="form-control" required>
                                <div class="invalid-feedback">Please enter a valid email address.</div>
                            </div>
                            <!-- Phone -->
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
                                <input type="tel" id="phone" name="phone" class="form-control" pattern="^\+?\d{7,15}$" required>
                                <div class="invalid-feedback">Please enter your phone number.</div>
                            </div>
                            <!-- Texture -->
                            <div class="col-md-6">
                                <label for="texture" class="form-label">
                                    Texture <span class="text-danger">*</span>
                                    <a href="<?php echo site_url('/gallery#gallery-categories-section'); ?>" target="_blank" class="texture-help-icon ms-2 text-decoration-none" title="View texture examples">
                                        <i class="bi bi-question-circle-fill" style="font-size: 1rem;"></i>
                                    </a>
                                </label>
                                <select id="texture" name="texture" class="form-select" required>
                                    <option value="">Choose...</option>
                                    <option value="Flatwave">Flatwave</option>
                                    <option value="Shag">Shag</option>
                                    <option value="Tufted">Tufted</option>
                                </select>
                                <div class="invalid-feedback">Please select a texture.</div>
                            </div>
                            <!-- Rug Size -->
                            <div class="col-md-6">
                                <label for="rug-size" class="form-label">Rug Size <span class="text-danger">*</span></label>
                                <select id="rug-size" name="rug-size" class="form-select" required>
                                    <option value="">Choose...</option>
                                    <option value="Tiny">Tiny (40cmx40cm)</option>
                                    <option value="So-So">So-So (80cmx80cm)</option>
                                    <option value="Big">Big (180cmx180cm)</option>
                                    <option value="Custom">Something Different</option>
                                </select>
                                <div class="invalid-feedback">Please select a rug size.</div>
                            </div>
                            <!-- Custom Rug Size -->
                            <div class="col-md-6" id="custom-rug-size-desc-container" style="display:none;">
                                <label for="custom-rug-desc-size" class="form-label">
                                    Custom Size (Width x Height in cm) <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <input type="number" id="custom-rug-width" name="custom-rug-width" class="form-control" placeholder="Width" min="1">
                                    <span class="input-group-text">x</span>
                                    <input type="number" id="custom-rug-height" name="custom-rug-height" class="form-control" placeholder="Height" min="1">
                                    <span class="input-group-text">cm</span>
                                </div>
                                <div class="invalid-feedback">Please provide both width and height.</div>
                            </div>                         
                            <!-- Budget -->
                            <div class="col-md-6">
                                <label for="budget" class="form-label">Budget Range</label>
                                <input type="text" id="budget" name="budget" class="form-control">
                            </div>
                            <!-- Usage -->
                            <div class="col-md-6">
                                <label for="usage" class="form-label">Where will the rug be used?</label>
                                <input type="text" id="usage" name="usage" class="form-control">
                            </div>
                            <!-- Colors -->
                            <div class="col-md-6">
                                <label for="colors" class="form-label">Preferred Colors</label>
                                <input type="text" id="colors" name="colors" class="form-control">
                            </div>
                            <!-- Reference File -->
                            <div class="col-12">
                                <label for="reference" class="form-label">Upload Reference Image</label>
                                <input type="file" id="reference" name="reference" class="form-control">
                            </div>
                            <!-- Notes -->
                            <div class="col-12">
                                <label for="notes" class="form-label">Additional Notes</label>
                                <textarea id="notes" name="notes" rows="4" class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary w-100 mt-4">Submit Commission</button>

                        <!-- Tips -->
                        <div class="alert alert-info mt-4">
                            <strong>Commissioning Tips:</strong>
                            <ul class="mb-0 small">
                                <li>Use high-contrast colors for better clarity.</li>
                                <li>Include a sketch, reference photo, or moodboard.</li>
                                <li>Tell us where it’ll live — hallway, wall, lounge?</li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>