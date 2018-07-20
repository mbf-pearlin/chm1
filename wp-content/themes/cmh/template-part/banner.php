<section class="banner-section">
       <div class="swiper-container home-banner">
           <div class="swiper-wrapper">

                        <?php
               $args = array(
               'numberposts' =>-1,
               'post_type' => 'banner',
               );
               $uses = get_posts($args);
               foreach($uses as $post) {
               // print_r($uses);
               setup_postdata($post); ?>
                          <div class="swiper-slide">
                      <?php 
                     if ( has_post_thumbnail() ) { ?>
                                <img class="mobile-img" src="<?php the_post_thumbnail_url('full');?>" alt="banner3">
                                <img class="desktop-img" src="<?php the_post_thumbnail_url('full');?>" alt="banner1">
                       <?php                        }
                  ?>
                            <div class="hero-banner-desc-left">
                                <div class="container banner-info">
                                    <div class="hero-banner-content">
                                        <h1><?php the_title(); ?></h1>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                          </div>
                                           <?php } wp_reset_postdata(); ?> 

                         
                 </div>
               <div class="swiper-pagination"></div>
                      </div>    
                    </section>





