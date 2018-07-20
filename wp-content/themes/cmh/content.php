<div class="container">
<section class="treat-assessments section-row">
                            <div class="row">
                                 
                                 
                                 <div class="col-4 navs">
                                    <div class="treat-head">
                                        <h2><?php echo get_option('assessments_title');?> </h2>
                                        <p><?php echo get_option('assessments_sub_title');?> </p>
                                    </div>
                                </div>      
                                

                                <div class="col-4 navs">
                                    <div class="assess-nav first-box">
                                        <h5>Assessments</h5>
                                            <ul class="nav-box">

                                        <?php
                                            global $post;

                                             $args = array(
                                             'numberposts' =>-1,
                                             'post_type' => 'condition',
                                              );
                                             $uses = get_posts($args);
                                             $count=1;
                                             foreach($uses as $post) {
                                                if(($count>=0)&&($count<=6))
                                                {

                                           
                                               setup_postdata($post);
                                              ?>
                                           

                                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                          <?php  
                                   
                                        }
                                         $count++;

                                       } wp_reset_postdata();
                                        ?>     
                                        </ul>
                                    </div>
                                </div>   
                               
                                
                                <div class="col-4 navs">
                                    <div class="assess-nav second-box">

                                            <ul class="nav-box ">
                                          <?php
                                            
                                             $args = array(
                                             'numberposts' =>-1,
                                             'post_type' => 'condition',
                                              );
                                             $uses = get_posts($args);
                                             $count=1;
                                             foreach($uses as $post) {
                                                if(($count>=6)&&($count<=10))
                                                {

                                           
                                               setup_postdata($post);
                                              ?>
                                           

                                            <li><a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
                                          <?php  
                                   
                                        }
                                         $count++;

                                       } wp_reset_postdata();
                                        ?>
                                            </ul>
                                        
                                    </div>
                                </div>
                               <?php echo get_post_meta(get_the_ID(),'my_meta_box_text',true);?>
                            </div>
                        </section>