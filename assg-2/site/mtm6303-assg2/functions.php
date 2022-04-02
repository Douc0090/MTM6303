<?php
/**
 * mtm6303-assg2 functions
 *
 * Displays all of the <header> section>.
 *
 * @package WordPress
 * @subpackage mtm6303_assg2
 * @since 1.0
 */ 

function mtm6303assg2_setup() {
    register_nav_menus( array(
        'top'    => __( 'Top Menu', 'mtm6303assg2' ),
        'social' => __( 'Social Links Menu', 'mtm6303assg2'),
    ) );
}

add_action( 'after_setup_theme', 'mtm6303assg2_setup' );
