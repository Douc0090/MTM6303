<?php
/**
 * Front Page Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage mtm6303-final
 * @since 1.0
 */

echo "test";


?>

<link href="<?php echo get_stylesheet_directory_uri();?>/css/main.a3f694c0.css" rel="stylesheet">

<?php 
get_header();
?>


<div class="white-text-container background-image-container" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; background-size: 1920px 720px;">';

    <div class="opacity"></div>
    <div class="container">
        <div class="row">
           
            <div class="col-md-6">
                <h1>Posuere lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Adipiscing commodo elit at imperdiet dui accumsan sit. Ipsum dolor sit
                    amet consectetur adipiscing elit. </p>
                 <a href="<?php echo get_stylesheet_directory_uri();?>/about.html" title="" class="btn btn-lg btn-primary">About Us</a>
            </div>

        </div>
    </div>
</div>

<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
     </div>
 </div>



<?php 
get_footer();
?>