<?php
/*
Template Name:Homepage
*/
get_header();
 
   
get_template_part('template-part/banner','banner');
get_template_part('About-Us','About-Us');
get_template_part('testimonial','testimonial');
get_template_part('content','content');
get_template_part('help','help');


get_footer();
?>