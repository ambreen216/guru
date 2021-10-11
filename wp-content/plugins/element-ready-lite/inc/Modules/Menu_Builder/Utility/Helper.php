<?php

/*
 Elementor Mega menu Edit Link
*/
function element_ready_mega_menu_el_edit_link($post_id = 0){
  return add_query_arg( [ 'post' => $post_id, 'action' => 'elementor' ], admin_url( 'post.php' ) );
}

add_filter( 'woocommerce_add_to_cart_fragments', 'element_ready_woocommerce_header_add_to_cart_fragment' );
/*
 Woocommerce Cart fragemnt
*/
function element_ready_woocommerce_header_add_to_cart_fragment( $fragments ) {
  
	ob_start();
	?>
	<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a> 
	<?php
	
	$fragments['a.cart-contents'] = ob_get_clean();
	
	return $fragments;
}

add_filter( 'woocommerce_add_to_cart_fragments', 'element_ready_menu_woocommerce_header_add_to_cart_fragment' );

function element_ready_menu_woocommerce_header_add_to_cart_fragment( $fragments ) {
	
  ob_start();
  
	?>
      <div class="cart-area element-ready-cart-content">
        <a class="cart-btn" href="<?php echo wc_get_cart_url(); ?>">
          <i class="fa fa-shopping-basket"></i>
          <span><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a>
        <div class="product-price clearfix">
          <span class="price"><span><span><?php echo get_woocommerce_currency_symbol(); ?></span><?php echo WC()->cart->total ?> </span></span>
        </div>
      </div>
  <?php
  
	$fragments['.element-ready-cart-content'] = ob_get_clean();
	
	return $fragments;
}
/*
  Menu Tags Validate
*/
function element_ready_menu_html_tag_validate($option ='',$option2 = ''){
    
    if($option ==''){
        return false;
    }

    $option_tag  = false;
    $option_tag2 = $option2;
    $option_tag  = str_replace(['<','>','</'],[''],$option);
    if($option2 == ''){
        $option_tag2 = '</'.$option_tag.'>';
    }
    return ['start'=>$option,'end'=>$option_tag2];

 }

 

