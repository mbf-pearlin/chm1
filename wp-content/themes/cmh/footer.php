<!-- footer start -->
                    <footer class="clearfix">   
                        <div class="container footer">
                            <div>
                                <ul class="footer-nav">
                                    <li><a href="#" title=<?php echo get_option('footer_content'); ?> ></a></li>
                                    
                                </ul>   
                            </div>
                            <div class="copyright">&copy;<?php echo get_option('footer_copy');?>
                            
                            </div>
                        </div>
                    </footer>
                <!-- footer End -->

            </div>
        <!-- render-blk end -->
        
        <!-- Swiper JS  Start-->
            
              <script src="<?php echo get_bloginfo('template_url'); ?>/js/app.js"></script>   
              <script src="<?php echo get_bloginfo('template_url'); ?>/js/wow.js"></script>   
             <script src="<?php echo get_bloginfo('template_url'); ?>/js/custom.js"></script>
            <script src="<?php echo get_bloginfo('template_url'); ?>/js/swiper.min.js"></script>
            <script src="<?php echo get_bloginfo('template_url'); ?>/js/nprogress.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <!-- Swiper JS  End-->
    </body>
    <?php wp_footer(); ?>
</html>