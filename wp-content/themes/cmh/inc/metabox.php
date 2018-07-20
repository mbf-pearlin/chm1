<?php
add_action( 'add_meta_boxes', 'cd_meta_box_add' );


function cd_meta_box_add()
{
    add_meta_box( 'my-meta-box-id', 'meta box', 'cd_meta_box_cb', array('condition','assessment','treatment') ,'normal', 'high' );
}
function cd_meta_box_cb()
{
    // $post is already set, and contains an object: the WordPress post
    global $post;
    $values = get_post_custom( $post->ID );
    $txt = get_post_meta($post->ID,'my_meta_box_text');
    $text = isset( $txt[0] ) ? $txt[0] : '';
    
    
     
    // We'll use this nonce field later on when saving.
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
    ?>
    <p>
        <label for="my_meta_box_text"></label>
        <input type="text" name="my_meta_box_text" id="my_meta_box_text" value="<?php echo $text; ?>" />
    </p>
   
     
    
    <?php    
}
?>
<?php
    add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id )
{

    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post' ) ) return;
     
    // now we can actually save the data
    $allowed = array( 
        'a' => array( // on allow a tags
            'href' => array() // and those anchors can only have href attribute
        )
    );
     
    // Make sure your data is set before trying to save it
    if( isset( $_POST['my_meta_box_text'] ) )
        update_post_meta( $post_id, 'my_meta_box_text',  $_POST['my_meta_box_text'] ) ;          


}
?>