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

<?php //echo get_the_ID(); 


?>



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



    </div><!-- .entry-content -->
    <div class="col-md-4 col-md-offset-0">
                        

                        <h3>Head Office</h3>
                        <!-- This would need to be added via Contact Us Sidebar  -->
                        <div>
                            <p>1385 Woodroffe Ave<br/>Nepean, ON K2G</p>
                        </div>
                        

                        <div class="mapouter">
                          <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                              src="https://maps.google.com/maps?q=Algonquin%20college%20Campus&t=&z=13&ie=UTF8&iwloc=&output=embed"
                              frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                          </div>
                        </div>
                    
                        <div>
                            <h3>Employment</h3>
                        </div>
                        <div>
                            <p>To apply for a job with our team, please feel free to send us your Linkedin profile link
                                ou CV to : employment@mybusiness.com</p>
                        </div>
</article><!-- #post-## -->

<br>
<br>
<br>