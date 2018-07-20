<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,width=device-width" name="viewport">
        <title>CMH - Child Mental Health Clinic</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <style>
            body{
                background-color: #fff;
            }  
            .render-blk{ opacity:0; }
        </style>
        <script>
            var cssArr = ['<?php echo get_bloginfo('template_url'); ?>/css/app.css'];
            for(var i = 0; i < cssArr.length; i++) {
                var link = document.createElement('link');
                link.setAttribute('rel', 'stylesheet');
                link.setAttribute('type', 'text/css');
                link.setAttribute('href', cssArr[i]);
                document.getElementsByTagName('head')[0].appendChild(link);
            }
        </script>
        <noscript>
            <style media="screen">
                .render-blk{ opacity: 1; }  
            </style>
        </noscript>
    </head>
    <?php wp_head();?>
    <body>

        <!-- render-blk Start -->
            <div class="render-blk">

                <!-- header start here -->
                    <header>
                        <div class="container">
                            <div class="menu-blk">  
                                <div class="row">
                                    <a href="<?php echo home_url(); ?>" class="col-3 logo"><img src="<?php echo get_option('site_logo');?>" alt="logo" title="child Mental health clinic"/></a>
                                    <div class="col-9">
                                        <nav>
                                            <div class="nav-menubar">
                                                <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_bloginfo('template_url'); ?>/img/logo.png" alt="logo" title="child Mental health clinic"/></a>
                                                <a href="mailto:admin@cmhclinic.co.uk"><i class="la la-envelope"></i>admin@cmhclinic.co.uk</a>
                                                <a href="tel:01420 540255"><i class="la la-phone"></i><?php echo get_option('ss_hours');?></a>
                                            </div>
                                            <?php
                                               wp_nav_menu( array( 
                                                                  'theme_location' => 'my-custom-menu', 
                                                                  'container_class' => 'custom-menu-class' ) ); 
                                               ?>

                                        </nav>
                                    </div>  
                                    <div class="contact-menu">
                                        <ul>
                                            <li><a href="mailto:admin@cmhclinic.co.uk"><i class="la la-envelope"></i></a></li>
                                            <li><a href="tel:01420 540255"><i class="la la-phone"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="menu-toggle">
                                    <div class="hamburger"></div>
                                        <div class="hamburger"></div>
                                        <div class="hamburger"></div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="social-content">
                                    <ul>
                                        <li><a href="mailto:admin@cmhclinic.co.uk">admin@cmhclinic.co.uk</a></li>                                       
                                    </ul>
                                </div>
                                <div class="social-content-phone">
                                    <ul>
                                        <li><a href="tel:01420 540255" class="phone-icon"><i class="la la-phone"></i><?php echo get_option('ss_hours');?></a></li>
                                    </ul>
                                </div>
                             </div>
                        </div>
                    </header>
                <!-- header end here -->
                

               