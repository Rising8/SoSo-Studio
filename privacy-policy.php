<?php
/**
 * Template Name: Privacy Policy Page
 */
get_header();

// Hero ACF fields
$privacy_hero_image = get_field('privacy_hero_image');
$privacy_hero_title = get_field('privacy_hero_title');
$privacy_hero_lead  = get_field('privacy_hero_lead');
?>

<!-- Hero -->
<?php if ($privacy_hero_image): ?>
<section class="privacy-hero" style="background-image:url('<?php echo esc_url(is_array($privacy_hero_image) ? $privacy_hero_image['url'] : $privacy_hero_image); ?>');">
    <div class="privacy-hero__inner">
        <h1 class="privacy-hero__title"><?php echo esc_html($privacy_hero_title); ?></h1>
        <p class="privacy-hero__lead"><?php echo esc_html($privacy_hero_lead); ?></p>
    </div>
</section>
<?php endif; ?>

<!-- Main Content -->
<div class="privacy-wrapper">
    <div class="privacy-content container py-3">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                $content = apply_filters('the_content', get_the_content());
                
                // Split by <h2> for clear section layout
                $sections = preg_split('/(<h2.*?>.*?<\/h2>)/i', $content, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
                
                $section_buffer = '';
                foreach ($sections as $part) {
                    if (strpos($part, '<h2') !== false) {
                        if ($section_buffer) echo '<div class="privacy-section">' . $section_buffer . '</div>';
                        $section_buffer = $part;
                    } else {
                        $section_buffer .= $part;
                    }
                }
                if ($section_buffer) echo '<div class="privacy-section">' . $section_buffer . '</div>';              
            endwhile;
        else :
            echo '<p>No Privacy Policy content has been added yet. Please edit this page in WordPress.</p>';
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
