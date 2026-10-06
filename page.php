<?php
/**
 * Generic Page Template for WordPress & WooCommerce Content
 *
 * @package Tholi
 */

get_header();
?>

<div class="tholi-page-hero">
    <div class="tholi-container">
        <div class="tholi-breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">হোম</a>
            <span>/</span>
            <strong><?php the_title(); ?></strong>
        </div>
        <h1 class="tholi-page-title"><?php the_title(); ?></h1>
    </div>
</div>

<main class="tholi-inner-content">
    <div class="tholi-container" style="max-width: 960px;">
        <div class="tholi-content-card">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
