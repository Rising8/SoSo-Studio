<?php
/**
 * Template Name: FAQ Page
 */
get_header();

function sosofaq_display_dynamic_faq_tabs() {
    ob_start();
    $categories = get_terms(array(
        'taxonomy' => 'faq_category',
        'hide_empty' => false,
        'orderby' => 'name',
        'order' => 'ASC'
    ));

    if (!empty($categories) && !is_wp_error($categories)) {
        echo '<div class="container">';
        echo '<ul class="nav faq-nav-pills justify-content-center mb-4" id="faqTabs" role="tablist">';
        $tab_index = 0;
        foreach ($categories as $cat) {
            $active_class = $tab_index === 0 ? 'active' : '';
            echo '<li class="nav-item">';
            echo '<button class="nav-link rounded-pill ' . esc_attr($active_class) . '" data-bs-toggle="pill" data-bs-target="#tab-' . esc_attr($cat->slug) . '">' . esc_html($cat->name) . '</button>';
            echo '</li>';
            $tab_index++;
        }
        echo '</ul>';

        echo '<div class="tab-content">';
        $tab_index = 0;
        foreach ($categories as $cat) {
            $active_class = $tab_index === 0 ? 'show active' : '';
            echo '<div class="tab-pane fade ' . esc_attr($active_class) . '" id="tab-' . esc_attr($cat->slug) . '">';
            echo '<div class="accordion" id="accordion-' . esc_attr($cat->slug) . '">';
            $faqs = new WP_Query(array(
                'post_type' => 'faq',
                'posts_per_page' => -1,
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'faq_category',
                        'field'    => 'slug',
                        'terms'    => $cat->slug,
                    ),
                ),
            ));
            while ($faqs->have_posts()) : $faqs->the_post();
                $faq_id = get_the_ID();
                $question = get_the_title();
                $answer = apply_filters('the_content', get_the_content());

                $dynamic_links = array(
                    '{commission_link}' => site_url('/commission'),
                );
                $answer = str_replace(array_keys($dynamic_links), array_values($dynamic_links), $answer);

                $collapse_id = $cat->slug . '-faq-' . $faq_id;
                ?>
                <div class="accordion-item mb-3 border-0 shadow-sm">
                    <h2 class="accordion-header">
                        <button class="accordion-button faq-accordion-btn collapsed" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#<?php echo esc_attr($collapse_id); ?>">
                            <?php echo esc_html($question); ?>
                        </button>
                    </h2>
                    <div id="<?php echo esc_attr($collapse_id); ?>" class="accordion-collapse collapse"
                         data-bs-parent="#accordion-<?php echo esc_attr($cat->slug); ?>">
                        <div class="accordion-body"><?php echo $answer; ?></div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            echo '</div></div>';
            $tab_index++;
        }
        echo '</div></div>';
    } else {
        echo '<p class="text-center">No FAQs found.</p>';
    }
    return ob_get_clean();
}
?>

<div class="faq-wrapper py-5">
    <div class="faq-content-1">
        <div class="container">
            <div class="text-center mb-4">
                <h1 class="display-5 text-body-emphasis text-center pb-2 d-block mx-auto">Frequently Asked Questions</h1>
                <p class="lead text-muted text-center d-block mx-auto">Answers to your most common curiosities, rug related or not.</p>
            </div>

            <?php echo sosofaq_display_dynamic_faq_tabs(); ?>
        </div>
    </div>

    <div class="faq-content-2">
        <div class="faq-contact-section text-center pt-5">
            <h2 class="mb-3">Need More Help?</h2>
            <p class="lead text-muted">Contact us for a personalised rug consultation or more advanced cleaning needs.</p>
            <a href="#" data-bs-toggle="modal" data-bs-target="#contactModal" class="btn btn-outline-secondary mt-2 px-3 rounded-pill">Contact Us</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>