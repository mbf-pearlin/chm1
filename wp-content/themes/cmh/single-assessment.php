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
//get_template_part('template-part/banner','banner');
 ?>


<div class="landing-element">
    <div id="condition-banner" class="intro-banner">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="bread-crumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                        <ul class="clearfix">
                            <li><a href="https://www.cmhclinic.co.uk/" rel="v:url" property="v:title">Home</a></li>
                            <li>Book an Appointment</li>
                        </ul>
                    </div>
                    <h1>Book an Appointment</h1>
                    <div class="intro"></div>
                </div>
            </div>
        </div>
    </div>
     <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();

?>

    <div class="contactinfo-section tailor-made">
        <div class="container">
            <div class="row contact-detail conditions-row">
                <div class="col-8 form-section contact">
                    <div class="contact-us">
                        <div class="contuct-details"></div>
                        <?php the_content(); ?>
                        <div class="contuct-details"></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php       

            endwhile; // End of the loop.
            ?>
<?php get_footer();