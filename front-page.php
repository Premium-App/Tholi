<?php
/**
 * The front page template file for Tholi theme
 *
 * @package Tholi
 */

get_header();
?>

<main id="primary" class="tholi-main-site">
    
    <!-- 1. Hero Section with dynamic switcher -->
    <?php get_template_part('template-parts/hero'); ?>

    <!-- 2. Flagship Product Showcase -->
    <?php get_template_part('template-parts/showcase'); ?>

    <!-- 3. Interactive Combo Deal Builder -->
    <?php get_template_part('template-parts/combo-builder'); ?>

    <!-- 4. Features & Comparison Table -->
    <?php get_template_part('template-parts/features'); ?>

    <!-- 4.1 What Fits Inside & Logistics Guarantee -->
    <?php get_template_part('template-parts/capacity'); ?>

    <!-- 5. 1-Step Instant Cash on Delivery Checkout Form -->
    <?php get_template_part('template-parts/checkout-form'); ?>

    <!-- 6. Customer Reviews & Social Proof -->
    <?php get_template_part('template-parts/reviews'); ?>

    <!-- 7. FAQ Accordion Section -->
    <?php get_template_part('template-parts/faq'); ?>

    <!-- 8. Order Success Modal Receipt -->
    <?php get_template_part('template-parts/order-modal'); ?>

    <!-- 9. Live Order Tracking Modal & Lightbox -->
    <?php get_template_part('template-parts/tracking-modal'); ?>

</main>

<?php
get_footer();
