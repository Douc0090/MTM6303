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
 * @subpackage mtm6303_assg2
 * @since 1.0
 */

?>
<body>

<!-- the header -->
<?php 
/*
no idea why get header wouldnt work
*/
	// get_header(); 
?>

<?php

/* 
this was breaking everytime
*/

//     while ( have_posts() ) : the_post();

//         get_template_part( 'template-parts/page/content', 'page' );

//         if (comments_open() || get_comments_number() ) : comments_template();
// endif;

// endwhile;
?>
 

<div class="">
    <div class="container">
        <div class="row">

            <div class="col-xs-12">
               <img class="img-responsive" src="./assets/images/page.jpg">
            </div>
        </div>
    </div>
</div>

<div class="section-container">
    <div class="container">
        <div class="row">
               <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div class="text-center">
                    <h1>Type something</h1>
                     </div>   
                        <p class="section-container-spacer">Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                            non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                            Turpis egestas pretium aenean pharetra magna ac. Id cursus metus aliquam eleifend mi. Odio tempor
                            orci dapibus ultrices in iaculis. Lacus luctus accumsan tortor posuere ac ut consequat semper.
                            Tincidunt ornare massa eget egestas purus viverra accumsan. Odio euismod lacinia at quis. Sit
                            amet nulla facilisi morbi. At varius vel pharetra vel turpis nunc eget lorem dolor. Feugiat vivamus
                            at augue eget. Feugiat nisl pretium fusce id velit ut. Venenatis tellus in metus vulputate eu
                            scelerisque felis imperdiet. Ut placerat orci nulla pellentesque. Laoreet suspendisse interdum
                            consectetur libero id.
                        </p>
               </div>
            </div>
        </div>
    </div>
</div>
</body>