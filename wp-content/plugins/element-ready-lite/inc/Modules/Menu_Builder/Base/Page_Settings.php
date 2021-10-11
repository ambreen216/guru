<?php 
namespace Element_Ready\Modules\Menu_Builder\Base;
use Element_Ready\Base\BaseController;

/**
*  Settings Options
*/
class Page_Settings extends BaseController
{
	public function register() {
        // admin
       
       
        add_action( 'wp_nav_menu_item_custom_fields' ,[$this,'add_custom_fields'],10, 2);
        add_action( 'wp_update_nav_menu_item', [$this,'_nav_update'], 10, 2 );
    }
  
   

    function _nav_update( $menu_id, $menu_item_db_id ) {
       
        
        // Verify this came from our screen and with proper authorization.
        if ( ! isset( $_POST['_element_ready_custom_menu_meta_nonce'] ) || ! wp_verify_nonce( $_POST['_element_ready_custom_menu_meta_nonce'], 'element_ready_custom_menu_meta' ) ) {
            return $menu_id;
        }
         //badge text    
        if ( isset( $_POST['_element_ready_menu_item_badge'][$menu_item_db_id]  ) ) {
            $sanitized_data = sanitize_text_field( $_POST['_element_ready_menu_item_badge'][$menu_item_db_id] );
            
            update_post_meta( $menu_item_db_id, '_element_ready_menu_item_badge', $sanitized_data );
        } else {

            delete_post_meta( $menu_item_db_id, '_element_ready_menu_item_badge' );
        }
        //color 
        if ( isset( $_POST['_element_ready_menu_item_badge_color'][$menu_item_db_id]  ) ) {
            $sanitized_data = sanitize_text_field( $_POST['_element_ready_menu_item_badge_color'][$menu_item_db_id] );
           
            update_post_meta( $menu_item_db_id, '_element_ready_menu_item_badge_color', $sanitized_data );
        } else {

            delete_post_meta( $menu_item_db_id, '_element_ready_menu_item_badge_color' );
        }
        //bgcolor
        if ( isset( $_POST['_element_ready_menu_item_badge_bgcolor'][$menu_item_db_id]  ) ) {
            $sanitized_data = sanitize_text_field( $_POST['_element_ready_menu_item_badge_bgcolor'][$menu_item_db_id] );
           
            update_post_meta( $menu_item_db_id, '_element_ready_menu_item_badge_bgcolor', $sanitized_data );
        } else {

            delete_post_meta( $menu_item_db_id, '_element_ready_menu_item_badge_bgcolor' );
        }
        // image
        if ( isset( $_POST['_element_ready_menu_item_image'][$menu_item_db_id]  ) ) {
            $sanitized_data = sanitize_text_field( $_POST['_element_ready_menu_item_image'][$menu_item_db_id] );
            
            update_post_meta( $menu_item_db_id, '_element_ready_menu_item_image', $sanitized_data );
        } else {

            delete_post_meta( $menu_item_db_id, '_element_ready_menu_item_image' );
        }
    }

    public function add_custom_fields( $item_id, $item ){

        wp_nonce_field( 'element_ready_custom_menu_meta', '_element_ready_custom_menu_meta_nonce' );

	    $menu_item_badge         = get_post_meta( $item_id, '_element_ready_menu_item_badge', true );
	    $menu_item_badge_color   = get_post_meta( $item_id, '_element_ready_menu_item_badge_color', true );
        
	    $menu_item_badge_bgcolor = get_post_meta( $item_id, '_element_ready_menu_item_badge_bgcolor', true );
	    $menu_item_badge_img     = get_post_meta( $item_id, '_element_ready_menu_item_image', true );
        $url = wp_get_attachment_url(get_post_meta($item_id,'_element_ready_menu_item_image',true));

        if (filter_var($url, FILTER_VALIDATE_URL) === FALSE) {
            $url = '#';
        }

        if($menu_item_badge_color == ''){
          $menu_item_badge_color = 'inherit';  
        }

        if($menu_item_badge_bgcolor == ''){
            $menu_item_badge_bgcolor = 'inherit';  
        }

        ?>

        <div class="description description-wide element-ready-fields-area" style="margin: 5px 0;">
                <span class="element-ready-menu-lebel"><?php _e( "Menu Badge", 'element-ready' ); ?></span>
                <br />
                <input type="hidden" class="nav-menu-id" value="<?php echo esc_attr($item_id) ;?>" />

                <div class="logged-input-badge">
                    <input class="element-ready-cfl-item" type="text" name="_element_ready_menu_item_badge[<?php echo $item_id ;?>]" id="element-ready-custom-menu-meta-for-<?php echo $item_id ;?>" value="<?php echo esc_attr( $menu_item_badge ); ?>" />
                    <span class="dashicons dashicons-no element-ready-nfl-close"></span> 
                </div>
                <span class="element-ready-menu-lebel"><?php _e( "Badge color", 'element-ready' ); ?></span>
                <br />
                <div class="logged-input-badge-color">
                    <input class="element-ready-cfl-item" type="color" name="_element_ready_menu_item_badge_color[<?php echo $item_id ;?>]" id="element-ready-custom-menu-meta-for-<?php echo $item_id ;?>" value="<?php echo esc_attr( $menu_item_badge_color ); ?>" />
                    <span class="dashicons dashicons-no element-ready-nfl-close"></span> 
                </div>
                <span class="element-ready-menu-lebel"><?php _e( "Badge background", 'element-ready' ); ?></span>
                <br />
                <div class="logged-input-badge-bgcolor">
                    <input class="element-ready-cfl-item" type="color" name="_element_ready_menu_item_badge_bgcolor[<?php echo $item_id ;?>]" id="element-ready-custom-menu-meta-for-<?php echo $item_id ;?>" value="<?php echo esc_attr( $menu_item_badge_bgcolor ); ?>" />
                    <span class="dashicons dashicons-no element-ready-nfl-close"></span> 
                </div>

                <span class="element-ready-menu-lebel"><?php _e( "Image", 'element-ready' ); ?></span>
                <br />
                <div class="logged-input-badge-img">
                    <a href="#" class="er_upload_image_button button button-secondary"><?php echo esc_html__('Upload Image','element-ready'); ?></a>
                    <input class="element-ready-cfl-item" type="hidden" name="_element_ready_menu_item_image[<?php echo $item_id ;?>]" id="element-ready-custom-menu-meta-for-<?php echo $item_id ;?>" value="<?php echo esc_attr( $menu_item_badge_img ); ?>" />
                    <span class="dashicons dashicons-no element-ready-nfl-close"></span> 
                    <img src="<?php echo $url; ?>" class="element-ready-menu-img" alt="<?php echo esc_attr__('Mega menu Image','element-ready'); ?>" />
                </div>

            </div>

    <?php

    }



  
}