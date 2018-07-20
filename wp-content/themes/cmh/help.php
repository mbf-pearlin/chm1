<!-- Resources section end -->
                        <section class="resources-details section-row">
                            <div class="row">
                                <div class="col-8 center-block">
                                    <h2><?php echo get_option('resource_title');?></h2>
                                </div>
                            </div>
                            <div class="resource-tab">
                                <!-- tabs start -->
                                    <div class="tabs">
                                        <ul class="tabs-links">
                                        <?php
                                        $args = array(
                                        'numberposts' =>5,
                                        'post_type' => 'help',
                                        'orderby' => 'menu_order',
                                        'order' => 'ASC', 
                                         );
                                          $uses = get_posts($args);
                                          $a=1;
                                         foreach($uses as $post) {
                                         $active_class = ($a == 1) ? 'active' : '';
               
                                         setup_postdata($post); 
                                      
                                          ?>
                                           <li class="<?php echo $active_class; ?>"><a href="#tab<?php echo $post->ID; ?>"><?php the_title(); ?></a></li>
                                           <?php $a++; } wp_reset_postdata(); ?>
                                          </ul>

                                        <div class="tabs-content accordion-row help-tab">

                                        <?php
                                         $args = array(
                                                      'numberposts' =>5,
                                                      'post_type' => 'help',
                                                      'orderby' => 'menu_order',
                                                      'order' => 'ASC', 
                                                      );
                                        $uses = get_posts($args);
                                         $a=1;
                                          foreach($uses as $post) {
                                          $active_class = ($a == 1) ? 'active' : '';
               
                                          setup_postdata($post); 
                                                               
                                          ?>
                                            <div id="tab<?php echo $post->ID; ?>" class="tab <?php echo $active_class; ?> tab-content accordion-row-blk">
                                          
                                                  <h6><?php the_title(); ?></h6>
                                                <div class="mobile-tabContent">
                                                    <div class="row">
                                                        <div class= "col-9 content-details align-self-center">
                                                        <?php wpautop(the_content()); ?>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $a++; } wp_reset_postdata(); ?>
                                        </div>
                                    </div>
                                <!-- tabs end -->
                            </div>
                        </section>
                    <!-- Resources section end -->
                    </div>