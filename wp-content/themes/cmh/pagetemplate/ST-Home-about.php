<?php
/*
Template Name: about
*/
?>
    <?php get_header(); ?>
        <!-- reciepes block -->
        <div class="landing-element">
            <div id="condition-banner" class="intro-banner">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <div class="bread-crumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                                <ul class="clearfix">
                                    <li><a href="https://www.cmhclinic.co.uk/" rel="v:url" property="v:title">Home</a></li>
                                    <li>About</li>
                                </ul>
                            </div>
                            <h1>About</h1>
                            <div class="intro">

                            </div>
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
                    <?php echo wpautop(the_content());?>
                </div>
            </div>
        </div>
       <?php       

            endwhile; // End of the loop.
            ?>
        <!--  End of recipe section -->
        <?php get_footer(); ?>