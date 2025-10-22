<?php
/**
 * Template Name: Cookie Statement Page
 */
get_header();

// Hero ACF fields
$cookie_hero_image = get_field('cookie_hero_image');
$cookie_hero_title = get_field('cookie_hero_title');
$cookie_hero_lead  = get_field('cookie_hero_lead');
?>

<!-- Hero -->
<?php if ($cookie_hero_image): ?>
<section class="cookie-hero" style="background-image:url('<?php echo esc_url(is_array($cookie_hero_image) ? $cookie_hero_image['url'] : $cookie_hero_image); ?>');">
  <div class="cookie-hero__inner">
    <h1 class="cookie-hero__title"><?php echo esc_html($cookie_hero_title); ?></h1>
    <p class="cookie-hero__lead"><?php echo esc_html($cookie_hero_lead); ?></p>
  </div>
</section>
<?php endif; ?>

<!-- Main Content -->
<div class="cookie-wrapper">
  <div class="cookie-content container py-3">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
        $content = apply_filters('the_content', get_the_content());

        // Split into sections using <h2> tags
        $sections = preg_split('/(<h2.*?>.*?<\/h2>)/i', $content, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);

        $section_buffer = '';
        foreach ($sections as $part) {
          if (strpos($part, '<h2') !== false) {
            if ($section_buffer) echo '<div class="cookie-section">' . $section_buffer . '</div>';
            $section_buffer = $part;
          } else {
            $section_buffer .= $part;
          }
        }
        if ($section_buffer) echo '<div class="cookie-section">' . $section_buffer . '</div>';
      endwhile;
    else :
      echo '<p>No Cookie Statement content has been added yet. Please edit this page in WordPress.</p>';
    endif;
    ?>
  </div>
</div>

<?php get_footer(); ?>
