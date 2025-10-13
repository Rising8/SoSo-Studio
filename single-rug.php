<?php get_header(); ?>

<div class="single-rug container py-5">
    <a href="<?php echo site_url('/gallery'); ?>" class="btn btn-outline-primary mb-4">&larr; Back to Gallery</a>

    <div class="row g-5 align-items-start">
        <div class="col-md-6">
            <?php 
            // Get ACF fields for images
            $top_image = get_field('top_image');
            $bottom_images = [
                get_field('bottom_image_1'),
                get_field('bottom_image_2'),
                get_field('bottom_image_3')
            ];

            // Check if all bottom images exist
            $all_bottom_exist = !in_array(null, $bottom_images, true);

            // Case 1: If all 3 bottom images exist, then split layout
            if ($all_bottom_exist && $top_image) : ?>
                <div class="top-image mb-4">
                    <?php echo wp_get_attachment_image($top_image['ID'], 'large', false, ['class' => 'img-fluid rounded shadow w-100']); ?>
                </div>

                <div class="bottom-images d-flex gap-3 flex-wrap justify-content-center">
                    <?php foreach ($bottom_images as $image) : ?>
                        <div class="flex-fill" style="flex: 1 1 calc(33.333% - 1rem); max-width: calc(33.333% - 1rem);">
                            <?php echo wp_get_attachment_image($image['ID'], 'medium', false, ['class' => 'img-fluid rounded shadow w-100']); ?>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php 
            // Case 2: If not all bottom images exist and just show one big top image 
            elseif ($top_image) :
                echo wp_get_attachment_image($top_image['ID'], 'large', false, ['class' => 'img-fluid rounded shadow w-100']);
            
            // Fallback to featured image if ACF field missing
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
