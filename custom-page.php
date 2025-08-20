<?php
/**
 * Template Name: Custom Page
 */
get_header(); ?>

<div class="custom-wrapper py-5">
    <div class="container">
        <div class="row">
            <!-- Left Toolbox / Navigation -->
            <div class="col-md-3 custom-toolbox">
                <div class="nav flex-column nav-pills" id="custom-tools-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active mb-2" id="tab-upload" data-bs-toggle="pill" data-bs-target="#tool-upload" type="button" role="tab">
                        <i class="fa-solid fa-cloud-arrow-up me-2"></i>Upload Image
                    </button>
                    <button class="nav-link mb-2" id="tab-text" data-bs-toggle="pill" data-bs-target="#tool-text" type="button" role="tab">
                        <i class="fa-solid fa-font me-2"></i>Add Text
                    </button>
                    <button class="nav-link mb-2" id="tab-shapes" data-bs-toggle="pill" data-bs-target="#tool-shapes" type="button" role="tab">
                        <i class="fa-solid fa-shapes me-2"></i>Add Shapes
                    </button>
                    <button class="nav-link mb-2" id="tab-draw" data-bs-toggle="pill" data-bs-target="#tool-draw" type="button" role="tab">
                        <i class="fa-solid fa-pen-nib me-2"></i>Drawing Mode
                    </button>
                    <button class="nav-link mb-2" id="tab-color" data-bs-toggle="pill" data-bs-target="#tool-color" type="button" role="tab">
                        <i class="fa-solid fa-palette me-2"></i>Change Background Colour
                    </button>
                    <button class="nav-link mb-2" id="tab-ai" data-bs-toggle="pill" data-bs-target="#tool-ai" type="button" role="tab">
                        <i class="fa-solid fa-robot me-2"></i>AI Search
                    </button>
                </div>
            </div>

            <!-- Preview / Canvas -->
            <div class="col-md-9">
                <div class="canvas-wrapper">
                    <!-- Top Actions -->
                    <div class="d-flex justify-content-end mb-3">
                        <button class="btn btn-outline-danger me-2" id="delete-object"><i class="fa-solid fa-trash me-1"></i>Delete Selected</button>
                        <button class="btn btn-outline-secondary me-2" id="reset-canvas"><i class="fa-solid fa-undo me-1"></i>Reset Canvas</button>
                        <button class="btn btn-outline-secondary me-2" id="undo-btn"><i class="fa-solid fa-arrow-rotate-left me-1"></i>Undo</button>
                        <button class="btn btn-outline-secondary me-2" id="redo-btn"><i class="fa-solid fa-arrow-rotate-right me-1"></i>Redo</button>
                        <button class="btn btn-outline-primary me-2" id="download-design"><i class="fa-solid fa-download me-1"></i>Download</button>
                        <button class="btn btn-primary" id="send-to-commission"><i class="fa-solid fa-paper-plane me-1"></i>Send to Commission</button>
                    </div>

                    <!-- Canvas Area -->
                    <canvas id="custom-canvas"></canvas>
                    <p class="text-center text-muted mt-2">Your design preview will appear above</p>
                </div>

                <!-- Tool Content -->
                <div class="tab-content mt-3" id="custom-tools-tabContent">
                    <!-- Upload -->
                    <div class="tab-pane fade show active" id="tool-upload" role="tabpanel">
                        <p>Drag & drop or upload images here</p>
                        <input type="file" id="upload-file" multiple class="form-control">
                    </div>
                    <!-- Add Text -->
                    <div class="tab-pane fade" id="tool-text" role="tabpanel">
                        <p>Add text to your design</p>
                        <input type="text" placeholder="Enter text..." class="form-control mb-2">
                        <label>Font Size</label>
                        <input type="number" class="form-control mb-2" value="24">
                        <label>Color</label>
                        <input type="color" class="form-control form-control-color mb-2" value="#4b0082">
                    </div>
                    <!-- Add Shapes -->
                    <div class="tab-pane fade" id="tool-shapes" role="tabpanel">
                        <p>Add a shape</p>
                        <!-- Shape Color Picker -->
                        <div class="mb-2">
                            <label for="shape-color">Shape Color</label>
                            <input type="color" id="shape-color" class="form-control form-control-color mb-2" value="#4b0082">
                        </div>
                        <button class="shape-btn btn btn-outline-primary mb-2" id="add-rect">Rectangle</button>
                        <button class="shape-btn btn btn-outline-primary mb-2" id="add-circle">Circle</button>
                        <button class="shape-btn btn btn-outline-primary mb-2" id="add-triangle">Triangle</button>                        
                    </div>
                    <!-- Draw -->
                    <div class="tab-pane fade" id="tool-draw" role="tabpanel">
                        <p>Freehand drawing mode</p>
                        <button class="btn btn-outline-secondary mb-2" id="toggle-draw">Enable Draw Mode</button>
                        <div class="mt-2">
                            <label>Brush Color</label>
                            <input type="color" id="brush-color" class="form-control form-control-color mb-2" value="#000000">
                            <label>Brush Size</label>
                            <input type="number" id="brush-size" class="form-control mb-2" value="5" min="1" max="50">
                        </div>
                    </div>
                    <!-- Colors -->
                    <div class="tab-pane fade" id="tool-color" role="tabpanel">
                        <p>Change background color</p>
                        <input type="color" class="form-control form-control-color mb-2" value="#f9f4fc">
                    </div>
                    <!-- AI Search -->
                    <div class="tab-pane fade" id="tool-ai" role="tabpanel">
                        <p>Search for designs via AI</p>
                        <input type="text" placeholder="Enter prompt..." class="form-control mb-2">
                        <button class="btn btn-outline-secondary mb-2">Search</button>
                        <div class="mt-2 d-flex flex-wrap">
                            <img src="#" alt="AI result" class="img-thumbnail m-1" style="width:80px; height:80px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script to link to commission page (used for custom-page.js) -->
<script>
  const commissionPageURL = "<?php echo home_url('/commission'); ?>";
</script>

<?php get_footer(); ?>
