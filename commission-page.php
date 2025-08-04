<?php
/**
 * Template Name: Commission Page
 */
get_header(); ?>

<div class="commission-wrapper">
    <!-- Commission Page - Hero Section -->
    <div class="commission-content-1">
        <div class="commission-hero-bg p-5 text-center rounded-3">
            <h1 class="text-body-emphasis fs-3 fs-md-2 fs-lg-1">Commission Request Form</h1>
            <p class="col-lg-8 mx-auto text-muted fs-6 fs-md-5 fs-lg-4">
                Have a design, color, or mood in mind? We’ll help you turn it into a rug that’s truly yours. Whether it’s a rough sketch or just an idea
                Fill out the form below to get started. 
            </p>
        </div>
    </div>

    <!-- Commission Page - How It Works and Form -->
    <!-- Will be possibly changed into two different sections later -->
    <div class="commission-content-2 pb-5">
        <div class="container">
            <div class="row">
                <!-- Column 1: How It Works -->
                <div class="col-md-4 px-5">                            
                    <h4 class="text-body-emphasis fs-3 fs-md-2 fs-lg-1 px-2">How It Works</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="d-flex"> 
                                <i class="fa-solid fa-1 px-2"></i>
                                <p>Choose How You Want to Order</p>
                            </div> 
                            <p>Fill out the Commission Form if you have a rug idea in mind but don’t want to design it yourself. Or, Design Your Own Rug using our Custom page with click this link below</p>  
                            <a href="<?php echo site_url('/custom'); ?>" class="btn btn-outline-secondary btn-lg rounded-pill px-5 fs-6 fs-md-5">Custom Rug</a>
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex"> 
                                <i class="fa-solid fa-2 px-2"></i>
                                <p> Submit Your Request</p>
                            </div> 
                            <p>If you chose the form, simply complete the fields and send it our way. If you chose the custom page, design your rug and click Submit when you’re done.</p>   
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex"> 
                                <i class="fa-solid fa-3 px-2"></i>
                                <p> We’ll Review and Get in Touch</p>
                            </div> 
                            <p>Our team will review your request or design and email you to confirm the details, pricing, and timeline.</p>   
                        </li>
                        <li class="list-group-item">
                            <div class="d-flex"> 
                                <i class="fa-solid fa-4 px-2"></i>
                                <p> Production Begins</p>
                            </div> 
                            <p>Once everything is confirmed, we’ll start making your rug and keep you updated throughout the process!</p>   
                        </li>
                    </ul>
                </div>
                            
                <!-- Column 2: Full Form -->
                <div class="col-md-8 d-flex flex-column justify-content-between">
                    <div class="custom-section mb-4">
                        <div class="form-section">
                            <div class="container commission-form p-5 border rounded-2">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Your Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="you@example.com" required>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-5">
                                        <label for="" class="form-label">Rug Size</label>
                                        <select class="form-select" id="country" required>
                                            <!-- Values must be changed later -->
                                            <option value="">Choose...</option>
                                            <option value="US">Small (100x100)</option>
                                            <option value="US">Medium (100x100)</option>
                                            <option value="US">Big (100x100)</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a correct size
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="exampleFormControlInput1" class="form-label">Custom</label>
                                        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Custom (60x70)">
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-5 pt-2">
                                        <label for="" class="form-label">Texture</label>
                                        <select class="form-select" id="country" required>
                                            <!-- Options must be changed later -->
                                            <option value="">Choose...</option>
                                            <option value="US">Flatwave</option>
                                            <option value="US">Shag</option>
                                            <option value="US">Tufted </option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid style
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-5 pt-2">
                                        <label for="exampleFormControlInput1" class="form-label">Budget Range</label>
                                        <!-- Prices may be changed later -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
                                            <label class="form-check-label" for="radioDefault1">$50 - $100</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                                            <label class="form-check-label" for="radioDefault1">$100 - $200</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
                                            <label class="form-check-label" for="radioDefault1">$200 above</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4 pt-2">
                                        <label for="exampleFormControlInput1" class="form-label">Where will the rug be used?</label>
                                        <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Bathroom">
                                    </div>
                                </div>
                                <div class="col-md-5 pt-2">
                                    <label for="exampleFormControlInput1" class="form-label">Colour</label>
                                    <input type="name" class="form-control" id="exampleFormControlInput1">
                                </div>
                                <div class="col-md-5 pt-2">
                                    <label for="formFile" class="form-label">Drop File</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3 pt-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Notes</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Let us know what's on your mind..."></textarea>
                                </div>                    
                            </div>
                        </div>                                       
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>