<?php

/**
 * Template Name : Programme template
 *
 *
 *
 * @see
 * @package TTRPG games management
 * @author  abramie
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Get header.
get_header();

/*
 * Render display menu shortcode
 */
//echo do_shortcode( '[brm_restaurant_menu]' );
the_content();
echo "This is a template from the plugin ! It shows the programme ";
// Get footer.
get_footer();