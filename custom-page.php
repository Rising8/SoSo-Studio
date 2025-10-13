<?php
/**
 * Template Name: Custom Page
 */
get_header(); ?>

<div class="custom-wrapper mt-4 pb-5 pt-2">
    <div class="px-5">
        <div class="row">
            <!-- Left -->
            <div class="col-md-2">
                <div class="d-flex justify-content-center gap-2 py-2">
                    <button class="btn btn-outline-secondary" id="undo-btn">
                        <i class="fa-solid fa-arrow-rotate-left"></i>
                    </button>
                    <button class="btn btn-outline-secondary" id="redo-btn">
                        <i class="fa-solid fa-arrow-rotate-right"></i>
                    </button>
                </div>

                <div class="d-flex flex-column gap-2 align-items-center">
                    <button class="btn-actions btn btn-outline-danger" id="delete-object">
                    <i class="fa-solid fa-trash me-1"></i>
                    </button>

                    <button class="btn btn-outline-secondary" id="reset-canvas">
                    <i class="fa-solid fa-undo me-1"></i>Canvas
                    </button>

                    <button class="btn btn-outline-primary" id="download-design">
                    <i class="fa-solid fa-download me-1"></i>Download
                    </button>

                    <button class="btn btn-primary" id="send-to-commission">
                    <i class="fa-solid fa-paper-plane me-1"></i>Commission
                    </button>
                </div>
            </div>

            <!-- Middle -->
            <div class="col-md-8">
                <!-- Canvas Area -->
                <div class="canvas-wrapper d-flex justify-content-center">
                    <canvas id="custom-canvas"></canvas>
                </div>

                <!-- Preview / Canvas -->
                <div class="custom-design d-flex justify-content-center">
                    <!-- Tool Content -->
                    <div class="tab-content pt-3 " id="custom-tools-tabContent">
                        <!-- Change Canvas Shape -->
                        <div class="tab-pane fade show active" id="tool-change-shapes" role="tabpanel">
                            <div class="d-flex flex-wrap gap-2">
                                <button class="shape-option shape-rectangle" data-shape="rectangle"></button>
                                <button class="shape-option shape-circle" data-shape="circle"></button>
                                <button class="shape-option shape-oval" data-shape="oval"></button>
                                <button class="shape-option shape-triangle" data-shape="triangle"></button>
                                <button class="shape-option shape-pentagon" data-shape="pentagon"></button>
                                <button class="shape-option shape-hexagon" data-shape="hexagon"></button>
                                <button class="shape-option shape-star" data-shape="star"></button>
                                <button class="shape-option shape-trapezoid" data-shape="trapezoid"></button>
                                <button class="shape-option shape-diamond" data-shape="diamond"></button>
                            </div>
                        </div>

                        <!-- Upload -->
                        <div class="tab-pane fade" id="tool-upload" role="tabpanel">
                            <input type="file" id="upload-file" multiple class="form-control">
                        </div>

                       <!-- Add Text -->
                        <div class="tab-pane fade" id="tool-text" role="tabpanel">
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <input type="text" placeholder="Enter text..." class="form-control w-auto">

                                <div class="d-flex align-items-center gap-2">
                                    <label class="mb-0">Font Size</label>
                                    <input type="number" class="form-control w-auto" value="24" style="max-width: 80px;">
                                </div>

                                <div class="d-flex align-items-center gap-2">
                                    <label class="mb-0">Color</label>
                                    <input type="color" class="form-control form-control-color">
                                </div>
                            </div>
                        </div>

                       <!-- Draw -->
                        <div class="tab-pane fade" id="tool-draw" role="tabpanel">
                            <div class="d-flex align-items-center gap-3 flex-wrap">
                                <!-- Toggle Draw Mode -->
                                <div class="form-check form-switch">
                                    <label class="form-check-label" for="toggle-draw"></label>
                                    <input class="form-check-input" type="checkbox" id="toggle-draw">
                                </div>

                                <!-- Brush Color -->
                                <div class="d-flex align-items-center gap-2">
                                    <label class="mb-0">Brush Color</label>
                                    <input type="color" id="brush-color" class="form-control form-control-color" value="#000000">
                                </div>

                                <!-- Brush Size -->
                                <div class="d-flex align-items-center gap-2">
                                    <label class="mb-0">Brush Size</label>
                                    <input type="number" id="brush-size" class="form-control w-auto" value="5" min="1" max="50" style="max-width: 80px;">
                                </div>
                            </div>
                        </div>

                        <!-- Background -->
                        <div class="tab-pane fade" id="tool-color" role="tabpanel">
                            <input type="color" class="form-control form-control-color mb-2" value="#f9f4fc">
                        </div>      
                    </div>  
                </div>
            </div>

            <!-- Right -->
            <!-- Top Actions -->
            <div class="col-12 col-md-2 order-first order-md-0 mb-3 mb-md-0">

                <!-- Toggle Button -->
                <button class="btn rug-tips-button mt-4" type="button" data-bs-toggle="collapse" data-bs-target="#rugTips" aria-expanded="false" aria-controls="rugTips">
                    💡 Custom Rug Tips
                </button>

                <!-- Collapsible Tips -->
                <div class="collapse mt-2" id="rugTips">
                    <div class="alert custom-rug-tips">
                        <ul class="mb-0 small">
                            <li>Design your rug using the tools.</li>
                            <li>When you’re happy with it, click <strong>Download</strong> to save your design.</li>
                            <li>Or, submit it directly through the <strong><a href="<?php echo esc_url( home_url( '/commission-form' ) ); ?>" class="custom-commission-link">Commission Form</a></strong> if you’d like us to make it for you.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Toolbox / Navigation -->
        <div class="col-12 custom-toolbox">
            <!-- Canvas Size Display -->
            <div class="edit-shape-size col-12 mt-2 px-2">
                <label for="shape-size" class="form-label small mb-1">Canvas Size</label>
                <input type="range" id="shape-size" min="10" max="100" value="90" class="form-range" style="height: 6px;">
            </div>

            <div class="nav nav-pills d-flex justify-content-md-center flex-nowrap flex-md-wrap gap-2" id="custom-tools-tab" role="tablist">
                <button class="nav-link active" id="tab-change-shapes" data-bs-toggle="pill" data-bs-target="#tool-change-shapes" type="button" role="tab">
                    <i class="fa-solid fa-shapes me-2"></i>Change Canvas Shape
                </button>
                <button class="nav-link" id="tab-upload" data-bs-toggle="pill" data-bs-target="#tool-upload" type="button" role="tab">
                    <i class="fa-solid fa-cloud-arrow-up me-2"></i>Upload Image
                </button>
                <button class="nav-link" id="tab-text" data-bs-toggle="pill" data-bs-target="#tool-text" type="button" role="tab">
                    <i class="fa-solid fa-font me-2"></i>Add Text
                </button>
                <button class="nav-link" id="tab-draw" data-bs-toggle="pill" data-bs-target="#tool-draw" type="button" role="tab">
                    <i class="fa-solid fa-pen-nib me-2"></i>Drawing Mode
                </button>
                <button class="nav-link" id="tab-color" data-bs-toggle="pill" data-bs-target="#tool-color" type="button" role="tab">
                    <i class="fa-solid fa-palette me-2"></i>Background
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Script to link to commission page (used for custom-page.js -> send to commission function) -->
<script>
    const commissionPageURL = "<?php echo home_url('/commission-form'); ?>";
</script>

<?php get_footer(); ?>
