<?php get_header(); ?>

<div class="single-rug container py-5">
    <a href="<?php echo site_url('/gallery'); ?>" class="btn btn-outline-primary mb-4">&larr; Back to Gallery</a>

    <div class="row g-5 align-items-start">
        <div class="col-md-6">
            <?php 
            if (has_post_thumbnail()) {
                the_post_thumbnail('large', ['class' => 'img-fluid rounded shadow']);
            }
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
                <a href="<?php echo site_url('/contact'); ?>" class="btn btn-primary px-4 py-2 rounded-pill cta-hover">Enquire About This Rug</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
