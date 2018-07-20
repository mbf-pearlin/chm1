<?php
/* Featured Image */
add_theme_support('post-thumbnails');

add_theme_support( 'menus' );

function wpb_custom_new_menu() {
  register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

if (!defined('TMPL_URL')) {
    define('TMPL_URL', get_template_directory_uri());
}

function pietergoosen_theme_setup() {
  register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer' => 'Footer menu' 
  ) );
 }

add_action( 'after_setup_theme', 'pietergoosen_theme_setup' );

 function contactform_add_scripts() {
        // Register the style for the Contact form
        wp_register_style( 'contactform-style',  get_stylesheet_directory_uri(). '/css/contactform.css');
        wp_enqueue_style( 'contactform-style' );

        wp_register_script( 'jquery-validate-script', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js' ,array( 'jquery'));
        wp_enqueue_script( 'jquery-validate-script' );

        wp_register_script( 'contactform-script', get_stylesheet_directory_uri() . '/js/contactform.js' ,array( 'jquery','jquery-validate-script'));
        wp_enqueue_script( 'contactform-script' );

    }


 //Add CSS and other scripts for the Contact form.
 add_action('wp_enqueue_scripts', 'contactform_add_scripts');
 function handleContactForm() {
   
    if($this->isFormSubmitted() && $this->isNonceSet()) {
        if($this->isFormValid()) {
            $this->sendContactForm();
        } else {
            $this->displayContactForm();
        }
    } else {
        $this->displayContactForm();
    }

   }

    
require get_parent_theme_file_path( '/inc/cpt.php' );
require get_parent_theme_file_path( '/inc/metabox.php' );
require get_parent_theme_file_path( '/inc/additional_functions.php' );
require get_parent_theme_file_path( '/inc/shortcodes.php' );
require get_parent_theme_file_path( '/inc/contact_list.php' );
require get_parent_theme_file_path( '/inc/booking_list.php' );
/**
 * Implement Site Settings
 */
require get_parent_theme_file_path( '/inc/site_settings.php' );







  ?>