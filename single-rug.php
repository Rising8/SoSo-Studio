<?php get_header(); ?>

<div class="single-rug container py-5">
    <a href="<?php echo site_url('/gallery'); ?>" class="btn btn-outline-primary mb-4">&larr; Back to Gallery</a>

    <div class="single-rug-content row g-5 align-items-start">
        <div class="col-md-6">
            <?php 
            $top_image = get_field('top_image');
            $bottom_images = array_filter([
                get_field('bottom_image_1'),
                get_field('bottom_image_2'),
                get_field('bottom_image_3')
            ]);

            $bottom_count = count($bottom_images);

            // CASE 1: Only top image
            if ($top_image && $bottom_count === 0) : ?>
                <div class="single-full-image mb-4">
                    <?php echo wp_get_attachment_image($top_image['ID'], 'large', false, ['class' => 'img-fluid rounded shadow w-100']); ?>
                </div>
            <?php 
            // CASE 2: Top + one bottom image 
            elseif ($top_image && $bottom_count === 1) : ?>
                <div class="top-image mb-3">
                    <?php echo wp_get_attachment_image($top_image['ID'], 'large', false, ['class' => 'img-fluid rounded shadow w-100']); ?>
                </div>
                <div class="bottom-single-image">
                    <?php echo wp_get_attachment_image($bottom_images[0]['ID'], 'large', false, ['class' => 'img-fluid rounded shadow w-100']); ?>
                </div>
            <?php 
            // CASE 3: Top + two bottom images
            elseif ($top_image && $bottom_count === 2) : ?>
                <div class="top-image mb-3">
                    <?php echo wp_get_attachment_image($top_image['ID'], 'large', false, ['class' => 'img-fluid rounded shadow w-100']); ?>
                </div>
                <div class="bottom-two-images d-flex gap-3">
                    <?php foreach ($bottom_images as $image) : ?>
                        <div class="flex-fill">
                            <img 
                                src="<?php echo esc_url($image['sizes']['medium']); ?>" 
                                class="img-fluid rounded shadow w-100 zoomable-image" 
                                data-full="<?php echo esc_url($image['url']); ?>" 
                                alt="Rug Image">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php 
            // CASE 4: Top + three bottom images
            elseif ($top_image && $bottom_count === 3) : ?>
                <div class="top-image mb-3">
                    <?php echo wp_get_attachment_image($top_image['ID'], 'large', false, ['class' => 'img-fluid rounded shadow w-100']); ?>
                </div>
                <div class="bottom-three-images d-flex gap-3 flex-wrap justify-content-center">
                    <?php foreach ($bottom_images as $image) : ?>
                        <div class="flex-fill" style="flex: 1 1 calc(33.333% - 1rem); max-width: calc(33.333% - 1rem);">
                            <img 
                                src="<?php echo esc_url($image['sizes']['medium']); ?>" 
                                class="img-fluid rounded shadow w-100 zoomable-image" 
                                data-full="<?php echo esc_url($image['url']); ?>" 
                                alt="Rug Image">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php 
            // Fallback: if top image missing, use featured image
            elseif (has_post_thumbnail()) :
                the_post_thumbnail('large', ['class' => 'img-fluid rounded shadow w-100']);
            endif;
            ?>
        </div>

        <div class="col-md-6">
            <h1><?php the_title(); ?></h1>

            <div class="fs-5 text-muted mb-4">
                <?php the_content(); ?>
            </div>

            <ul class="meta-details list-unstyled">
                <li><strong>Details:</strong> <?php the_field('details'); ?></li>
                <li><strong>Size:</strong> <?php the_field('size'); ?></li>
                <li><strong>Material:</strong> <?php the_field('material'); ?></li>
                <li><strong>Origin:</strong> <?php the_field('origin'); ?></li>
                <li><strong>Care:</strong> <?php the_field('care'); ?></li>
            </ul>

            <div class="cta-box mt-5">
                <h3 class="mb-2">Love this rug?</h3>
                <p class="mb-3">Contact us to reserve or ask questions — we'll reply within 24 hours!</p>
                <a href="#" 
                    class="btn btn-primary px-4 py-2 rounded-pill cta-hover" 
                    data-bs-toggle="modal" 
                    data-bs-target="#rugEnquireModal"
                    data-rug-name="<?php echo esc_attr(get_the_title()); ?>">
                    Enquire About This Rug
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<!-- Image Zoom Modal -->
<div class="modal fade" id="imageZoomModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-body p-0">
                <img src="" class="img-fluid w-100" id="zoomedImage" alt="Zoomed Image">
            </div>
        </div>
    </div>
</div>
