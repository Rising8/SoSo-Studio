<?php
/**
 * Template Name: Custom Page
 */
get_header();


?>



<div class="custom-wrapper">
   <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
      <!-- Commission Page - Hero Section -->
    <div class="commission-content-1">
        <section class="commission-hero py-5 text-center">
            <div class="container">
                <h1 class="landing-heading display-5 text-body-emphasis text-center d-block mx-auto">Request from Your Idea</h1>
                <p class="lead text-muted">Upload a sketch or reference, pick a shape & feeling, then submit your commission.</p>
            </div>
        </section>
    </div>

        <?php
      $insp = get_stylesheet_directory_uri() . '/assets/img/custom-page/inspiration.png';
    ?>
    <div class="text-center mb-4">
      <img src="<?php echo esc_url($insp); ?>"
          alt="Give Us Your Inspiration"
          class="img-fluid w-100 rounded-4 shadow-sm">
    </div>
    <!-- Commission Page - How It Works Section -->
    <div class="commission-content-2">
        <section class="hiw-section pb-5 bg-white">
            <div class="container">
                <h2 class="fs-3 fs-md-2 fs-lg-1 mb-4 text-center">How It Works</h2>
                <div class="row g-4">
                    <?php
                    $steps = [
                        ['Design', 'Click below to use our design partner tool or skip this step.', 'https://www.customink.com/ndx/#/welcomeBack', 'Open Design Tool'],
                        ['Fill Out The Form', 'Tell us what you envision you can upload your design or reference.', '', ''],
                        ['Submit', 'We’ll review your request and be in touch for confirmation.', '', ''],
                        ['Production Begins', 'After confirmation and deposit, your rug enters creation phase!', '', '']
                    ];
                    foreach ($steps as $index => $step) :
                    ?>
                        <div class="col-md-3 d-flex">
                            <div class="hiw-step-box w-100 h-100 d-flex flex-column align-items-center text-center p-4 rounded shadow-sm">
                                <h4 class="text-body-emphasis">Step <?= $index + 1 ?>: <?= $step[0] ?></h4>
                                <p class="text-body-secondary"><?= $step[1] ?></p>
                                <?php if (!empty($step[2])) : ?>
                                    <a href="<?= $step[2] ?>" target="_blank" class="btn design-tool-btn mt-2"><?= $step[3] ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </div>
  <!-- Step 0 -->
  <div class="step-card">
    <div class="step-title">0. Sketch your idea</div>
    <p class="note-small mb-2">No sketch yet? Open Canva Draw in a new tab, export PNG, then upload below.</p>
    <a class="btn btn-outline-primary" href="https://www.canva.com/draw/" target="_blank" rel="noopener">Sketch your idea (opens Canva Draw)</a>
  </div>

  <!-- Step 1 -->
  <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
    <?php wp_nonce_field('soso_custom_submit', 'soso_custom_nonce'); ?>

    <div class="step-card">
      <div class="step-title">1. Upload image</div>
      <div id="dropArea" class="upload-drop mb-3">
        <div class="mb-2">Drop image here or</div>
        <label class="btn btn-secondary">
          Choose file <input type="file" name="idea_image" id="idea_image" accept="image/png,image/jpeg,image/webp" hidden>
        </label>
      </div>
      <div class="preview-box" id="previewBox"><img id="previewImg" src="" alt="Preview"></div>
    </div>


<!-- Step 2 -->
<div class="step-card">
  <div class="step-title">2. Choose your shape</div>

  <div class="shape-grid">

    <!-- Rectangle -->
    <input type="radio" class="shape-radio" name="shape" id="shape-rect" value="rectangle" required>
    <label class="shape-item" for="shape-rect">
      <i class="ti ti-rectangle"></i>
      <span class="shape-label">Rectangle</span>
    </label>

    <!-- Circle -->
    <input type="radio" class="shape-radio" name="shape" id="shape-circle" value="circle" required>
    <label class="shape-item" for="shape-circle">
      <i class="ti ti-circle"></i>
      <span class="shape-label">Circle</span>
    </label>

    <!-- Arch -->
    <input type="radio" class="shape-radio" name="shape" id="shape-arch" value="arch" required>
    <label class="shape-item" for="shape-arch">
      <i class="ti ti-rainbow"></i>
      <span class="shape-label">Arch</span>
    </label>

    <!-- Oval -->
    <input type="radio" class="shape-radio" name="shape" id="shape-oval" value="oval" required>
    <label class="shape-item" for="shape-oval">
      <i class="ti ti-oval"></i>
      <span class="shape-label">Oval</span>
    </label>

    <!-- Star -->
    <input type="radio" class="shape-radio" name="shape" id="shape-star" value="star" required>
    <label class="shape-item" for="shape-star">
      <i class="ti ti-star"></i>
      <span class="shape-label">Star</span>
    </label>

    <!-- Animal -->
    <input type="radio" class="shape-radio" name="shape" id="shape-animal" value="animal" required>
    <label class="shape-item" for="shape-animal">
      <i class="ti ti-paw"></i>
      <span class="shape-label">Animal</span>
    </label>

    <!-- Triangle -->
    <input type="radio" class="shape-radio" name="shape" id="shape-triangle" value="triangle" required>
    <label class="shape-item" for="shape-triangle">
      <i class="ti ti-triangle"></i>
      <span class="shape-label">Triangle</span>
    </label>

    <!-- Unique -->
    <input type="radio" class="shape-radio" name="shape" id="shape-unique" value="unique" required>
    <label class="shape-item" for="shape-unique">
      <i class="ti ti-help-circle"></i>
      <span class="shape-label">Unique</span>
    </label>

  </div>
</div>

    <!-- Step 3 -->
    <div class="step-card">
      <div class="step-title">3. Choose your feeling</div>
      <div class="feel-grid" id="feelGrid">
        <button type="button" class="feel-btn" data-feeling="CUTE">CUTE</button>
        <button type="button" class="feel-btn" data-feeling="COOL">COOL</button>
        <button type="button" class="feel-btn" data-feeling="MODERN">MODERN</button>
        <button type="button" class="feel-btn" data-feeling="COLORFUL">COLORFUL</button>
      </div>
      <input type="hidden" name="feeling" id="feelingInput" required>
      <div class="invalid-feedback d-block" id="feelError" style="display:none">Please pick a feeling.</div>
    </div>

<!-- Step 4 -->
<div class="step-card">
  <div class="row g-3">
    <div class="col-md-6">
      <label class="form-label">Your Name</label>
      <input type="text" class="form-control" name="your_name" required>
    </div>
    <div class="col-md-6">
      <label class="form-label">Your Email</label>
      <input type="email" class="form-control" name="your_email" required>
    </div>
  </div>
  <p class="note-small mt-2">We’ll reply within 48 hours.</p>

  <div class="text-end mt-4">
    <button type="submit" class="btn btn-primary w-100 btn-cta px-4">
      Submit Commission
    </button>
  </div>
</div>

    <?php if ($notice) echo $notice; ?>
  </form>
</div>
</div>
</div>



<?php get_footer(); ?>