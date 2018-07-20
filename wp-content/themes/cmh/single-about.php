<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();
get_template_part('template-part/banner','banner');
 ?>


            <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();
 
                echo '<h1>';
                the_title();
                echo '<h5>';
                the_content();

                // If comments are open or we have at least one comment, load up the comment template.
                

            endwhile; // End of the loop.
            ?>


<?php get_footer();?>
