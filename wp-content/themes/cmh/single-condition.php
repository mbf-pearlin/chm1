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

  


                    <div class="bread-crumb" typeof="BreadcrumbList" vocab="http://schema.org/">
                    <?php if(function_exists('bcn_display'))
                      {
                         //bcn_display();
                       }?>

                        <ul class="clearfix">
                        
                            <li><a href="https://www.cmhclinic.co.uk/" rel="v:url" property="v:title">Home</a></li>
                            <li><a rel="v:url" property="v:title" href="https://www.cmhclinic.co.uk/conditions/">Conditions</a></li>
                            <li><?php the_title();?></li>
                        </ul>

                    </div>
                    <h1><?php the_title();?></h1>
                    <div class="intro"></div>
                </div>
            </div>
        </div>
    </div>
    
    <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();

?>

    <div class="sub-content tailor-made">
        <div class="container">
            <div class="row conditions-row">
                <div class="col-8">
                    <?php the_content();?>
                </div>
                <div class="col-4">
                    <div class="right-block">
                        <div class="right-content">

                           <?php echo get_post_meta(get_the_ID(),'my_meta_box_text',true);?>
                          
                        </div> 
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
?>