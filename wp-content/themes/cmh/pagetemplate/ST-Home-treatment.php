<?php
/*
Template Name: treatment
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
                            <li>Treatment</li>
                        </ul>
                    </div>
                    <h1>Treatment</h1>
                    <div class="intro"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-content tailor-made">
        <div class="container">
            <div class="row conditions-row">
                <div class="col-8">
                 <?php
               $args = array(
               'numberposts' =>-1,
               'post_type' => 'treatment',
              
               );
               $uses = get_posts($args);
               foreach($uses as $post) {
               setup_postdata($post); ?>
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
              <?php } wp_reset_postdata(); ?>
        </div>
    </div>
</div>
            
<?php get_footer(); ?>

