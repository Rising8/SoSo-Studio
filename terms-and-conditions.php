<?php
/**
 * Template Name: Terms and Conditions Page
 */
get_header();

// Hero ACF fields
$tandc_hero_image = get_field('tandc_hero_image');
$tandc_hero_title = get_field('tandc_hero_title');
$tandc_hero_lead  = get_field('tandc_hero_lead');

// CTA ACF fields
$tandc_cta_image  = get_field('tandc_cta_image');
$tandc_cta_title  = get_field('tandc_cta_title');
$tandc_cta_lead   = get_field('tandc_cta_lead');
?>

<!-- Hero -->
<!-- if a hero image exists -->
<?php if ($tandc_hero_image): ?>
<section class="tandc-hero" style="background-image:url('<?php echo esc_url(is_array($tandc_hero_image) ? $tandc_hero_image['url'] : $tandc_hero_image); ?>');">
    <div class="tandc-hero__inner">
        <h1 class="tandc-hero__title"><?php echo esc_html($tandc_hero_title); ?></h1>
        <p class="tandc-hero__lead"><?php echo esc_html($tandc_hero_lead); ?></p>
    </div>
</section>
<?php endif; ?>

<!-- Main Content -->
<div class="tandc-wrapper">
    <div class="tandc-content container py-3">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                $content = apply_filters('the_content', get_the_content());
                
                // Split by <h2> to create sections
                $sections = preg_split('/(<h2.*?>.*?<\/h2>)/i', $content, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
                
                // create h2 element and paragraph element, it will display for each terms and condition section
                $section_buffer = '';
                foreach ($sections as $part) {
                    if (strpos($part, '<h2') !== false) {
                        if ($section_buffer) echo '<div class="tandc-section">' . $section_buffer . '</div>';
                        $section_buffer = $part;
                    } else {
                        $section_buffer .= $part;
                    }
                }
                if ($section_buffer) echo '<div class="tandc-section">' . $section_buffer . '</div>';              
            endwhile;
        else :
            echo '<p>No Terms & Conditions content has been added yet. Please edit this page in WordPress.</p>';
        endif;
        ?>
    </div>
</div>

<!-- CTA -->
<!-- if a cta bottom image exists -->
<?php if ($tandc_cta_image): ?>
<section class="tandc-cta" style="background-image:url('<?php echo esc_url(is_array($tandc_cta_image) ? $tandc_cta_image['url'] : $tandc_cta_image); ?>');">
    <div class="tandc-cta__inner container">
        <h2 class="tandc-cta__title"><?php echo esc_html($tandc_cta_title); ?></h2>
        <p class="tandc-cta__lead"><?php echo esc_html($tandc_cta_lead); ?></p>

        <div class="tandc-cta__actions">
            <a
                href="#"
                class="btn index-rug-button rounded-pill px-4 py-2 fw-semibold"
                data-bs-toggle="modal"
                data-bs-target="#contactModal"
                aria-label="Open contact form modal">
                Let’s Talk
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
