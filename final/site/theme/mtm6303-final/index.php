<?php
/**
 * Main template file
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



?>

<link href="<?php echo get_stylesheet_directory_uri();?>/css/main.a3f694c0.css" rel="stylesheet">

<?php 
get_header();
?>



<div class="section-container background-color-container white-text-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                <h1><?php single_post_title();?></h1>
              </div>
            </div>
        </div>
     </div>
 </div>


<?php 
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wpb_all_query->have_posts() ) : ?>
  <div class="container">
    <div class="row">
<ul>
 
    <!-- the loop -->
    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
    <div class="col-md-6">
<br>

        <h3 class="nav"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
<br>
        <?php the_post_thumbnail( array(500, 500,) );?>
        <p><?php the_excerpt();?></p>
<br>
        </div>
    <?php endwhile; ?>
    <!-- end of the loop -->
 
</ul>
</div>
</div>

    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<div class="entry-content-page tm-mb-6">
 <?php 
 			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/post/content');

				endwhile;
      endif;
 ?>
 </div>


<?php 
get_footer();
?>