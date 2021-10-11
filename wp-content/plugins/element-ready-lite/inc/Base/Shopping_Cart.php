<?php 
namespace Element_Ready\Base;
use Element_Ready\Base\BaseController;

/**
*  Ajax Request
*/
class Shopping_Cart extends BaseController
{
	public function register() {
 
        add_action( 'wp_ajax_element_ready_wc_cart_item_remove', [$this,'item_remove'] );
        add_action( 'wp_ajax_nopriv_element_ready_wc_cart_item_remove', [$this,'item_remove'] );
        // product add to cart
        add_action( 'wp_ajax_element_ready_wc_cart_item_add', [$this,'wc_add_cart_item'] );
        add_action( 'wp_ajax_nopriv_element_ready_wc_cart_item_add', [$this,'wc_add_cart_item'] );
        
	}
	
	function item_remove() {

     
        $cart_item_key = sanitize_key($_REQUEST['cart_product_key']);
        
        if(!isset($_REQUEST['cart_product_key'])){
            echo WC()->cart->total;
            return;
        }
       
        WC()->cart->remove_cart_item($cart_item_key);
            echo WC()->cart->total;
        wp_die();
        
    }
    
    function wc_add_cart_item(){
        $return_data = null;

        if(isset($_REQUEST['product_id'])){
             
            try{

                $product_id     = sanitize_text_field($_REQUEST['product_id']);
                $quantity       = sanitize_text_field(isset($_REQUEST['product_quantity'])?$_REQUEST['product_quantity']:1);
                $cart_item_key  = WC()->cart->add_to_cart( $product_id, $quantity );
                $return_data    = $this->get_cart_item_array();

                wp_send_json_success($return_data);
             } catch(Exception $e) {

                wp_send_json_error(esc_html__('Server Error','element-ready'));
            }
              
        }
     
        wp_die();
    }

    function get_cart_item_array(){
       
        $return_data = [];
        
        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ):

            $product = $cart_item['data'];
            $_data   = [];
            $_data['item_key']   = $cart_item_key;
            $_data['quantity']   = esc_html__('Qty: ','element-ready'). $cart_item['quantity'];
            $_data['image_url']  = wp_get_attachment_url( $product->get_image_id() );
            $_data['name']       = $product->get_name( $cart_item );
            $_data['price']      = WC()->cart->get_product_price( $product );
            $_data['link']       = $product->get_permalink( $cart_item );
            $return_data[]       = $_data;

        endforeach;

        $return_data['cart_total'] = WC()->cart->total;
        return $return_data;
    }
    
    
	
}