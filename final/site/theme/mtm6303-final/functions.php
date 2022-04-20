<?php
/**
 * mtm6303-final functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage mtm6303-final
 * @since 1.0
 */

 /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mtm6303final_setup() {

    add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'mtm6303-final-featured-image', 1920, 775, true );

    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'mtm6303final' ),
		'social' => __( 'Social Links Menu', 'mtm6303final' ),
	) );
}

function mtm6303_getnav()
{
    $nav_items_return = [];
    // global $wp_query;
    // $post_id = $wp_query->post->ID;
    // print_r($post_id);
    $theme_location = "top";


    $theme_location = get_nav_menu_locations();

    $menu_obj = get_term($theme_location[$theme_location], 'nav_menu');

    $menu_name = $menu_obj->name;
    $nav_items =  wp_get_nav_menu_items($menu_name);
    foreach($nav_items as $nav_item_id => $nav_item) {
        if($nav_item->post_status == "publish") {
           $nav_items_return[$nav_item_id]["ID"] = $nav_item->ID;
           $nav_items_return[$nav_item_id]["url"] = $nav_item->url;
           $nav_items_return[$nav_item_id]["title"] = $nav_item->title;
           $nav_items_return[$nav_item_id]->classes = $nav_item->classes;

        }
    
    }
    // print_r($nav_items_return);
    return $nav_items_return;
    // print_r(wp_get_nav_menu_items($menu_name));
}


add_action( 'after_setup_theme', 'mtm6303final_setup' );

// wp_nav_menu( array $args = array()