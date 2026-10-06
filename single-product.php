<?php
/**
 * Single Product Template for WooCommerce & Standalone
 *
 * @package Tholi
 */

get_header();
?>

<div class="tholi-page-hero" style="padding: 40px 0;">
    <div class="tholi-container">
        <div class="tholi-breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">হোম</a>
            <span>/</span>
            <a href="<?php echo esc_url(home_url('/shop/')); ?>">কালেকশন</a>
            <span>/</span>
            <strong id="single-crumb-title"><?php the_title(); ?></strong>
        </div>
    </div>
</div>

<main class="tholi-inner-content">
    <div class="tholi-container">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                if (function_exists('woocommerce_content')) {
                    woocommerce_content();
                } else {
                    // Fallback to Tholi dynamic hero showcase
                    get_template_part('template-parts/hero');
                    get_template_part('template-parts/features');
                    get_template_part('template-parts/capacity');
                    get_template_part('template-parts/checkout-form');
                    get_template_part('template-parts/reviews');
                }
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
