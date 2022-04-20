<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage mtm6303-final
 * @since 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<?php the_post_thumbnail( array(1920, 775,) );?>

		
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="section-container background-color-container white-text-container">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12"></div>
                        <div class="text-center">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                            <?php the_post_thumbnail( array(1000, 200,) );?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php //twentyseventeen_edit_link( get_the_ID() ); ?>
    </header><!-- .entry-header -->
    <div class="entry-content-page tm-mb-6">
    
        <?php
			the_content();
        ?>


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
