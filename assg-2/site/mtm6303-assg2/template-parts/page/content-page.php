<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage mtm6303_assg2
 * @since 1.0
 */

?> 

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php /** twentyseventeen_edit_link( get_the_ID() ); */ ?>

	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'mtm6303-assg2' ),
				'after'  => '</div>',
			) );
		?>

        


	</div><!-- .entry-content -->
</article><!-- #post-## -->
