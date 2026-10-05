<?php
/**
 * Main index template file for Tholi theme
 *
 * @package Tholi
 */

get_header();

if (have_posts()) :
    get_template_part('front-page');
endif;

get_footer();
