<?php
/*
Template Name: resources
*/
?>
<?php get_header(); ?>

<div class="landing-element">
    <div id="condition-banner" class="intro-banner">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="bread-crumb" xmlns:v="http://rdf.data-vocabulary.org/#">
                        <ul class="clearfix">
                            <li><a href="https://www.cmhclinic.co.uk/" rel="v:url" property="v:title">Home</a></li>
                            <li>Resources</li>
                        </ul>
                    </div>
                    <h1>Resources</h1>
                    <div class="intro"></div>
                </div>
            </div>
        </div>
    </div>
                  <?php
               $args = array(
               'numberposts' =>-1,
               'post_type' => 'resources',
              
               );
               $uses = get_posts($args);
               foreach($uses as $post) {
               setup_postdata($post); ?>
                    
                    <?php the_content();?>
                <?php } wp_reset_postdata(); ?>
               
</div>
   <?php get_footer(); ?> 