<?php
/*
Template Name: conditions
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
                                    <li>Conditions</li>
                                </ul>
                            </div>
                            <h1>Conditions</h1>
                            <div class="intro"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="render-blk" style="opacity: 1;">
                <section class="condition-block sub-content">
                    <div class="container">
                        <div class="row">

                            <?php
               $args = array(
               'numberposts' =>-1,
               'post_type' => 'condition',
                'orderby' => 'menu_order',
                'order' => 'ASC',
               );
               $uses = get_posts($args);
               foreach($uses as $post) {
               setup_postdata($post); ?>
                                <div class="col-4 cont-box">
                                    <div class="condition-section cont-card-1">

                                        <h4> <?php the_title();?></h4>
                                        <p>
                                            <?php the_excerpt(); ?>
                                        </p>
                                        <a href="<?php the_permalink(); ?>">Learn More</a>
                                    </div>
                                </div>
                                <?php } wp_reset_postdata(); ?>
                        </div>
                    </div>

            </div>

        </div>
        </section>
        </div>
        </div>
        <?php get_footer(); ?>