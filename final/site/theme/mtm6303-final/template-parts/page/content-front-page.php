<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage mtm6303-final
 * @since 1.0
 */

?>

<?php //the_ID(); ?>

<div data-image-src="<?php echo get_stylesheet_directory_uri()?>/image/header-<?php echo get_the_ID(); ?>-bg.jpg">
		</div>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="section-container background-color-container white-text-container">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="text-center">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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
    </div><!-- .entry-content -->
</article><!-- #post-## -->