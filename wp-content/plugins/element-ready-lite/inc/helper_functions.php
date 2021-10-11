<?php
/*-------------------------------
	CUSTOM IMAGE SIZE
--------------------------------*/
add_image_size( 'element_ready_grid_big_thumb', 570, 330 );
add_image_size( 'element_ready_grid_small_thumb', 270, 180 );

/*------------------------------
	CUSTOM FONTS CONTROLS
-------------------------------*/
class Element_Ready_Custom_Functions{

    public function __construct() {
		add_action( 'elementor/controls/controls_registered', [ $this, 'add_custom_font' ] );  
	}
	
	public function add_custom_font( $controls_registry ){

	    $new_fonts = array(        
	        "Gilroy" => "googlefonts"
	    );

	    // For Elementor 1.7.10 and newer
	    $fonts = $controls_registry->get_control( 'font' )->get_settings( 'options' );
	    $fonts = array_merge($fonts,$new_fonts);

	    // Register here the custom font families
	    $controls_registry->get_control( 'font' )->set_settings( 'options', $fonts );  
	}
}
new Element_Ready_Custom_Functions();

if ( !function_exists('element_ready_single_page_title') ) {
    function element_ready_single_page_title(){ ?>
        <div class="barner-area white">
            <div class="barner-area-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">                        
                        <div class="page-title">
                            <h1>
                                <?php                                    
                                    wp_title( $sep = ' ');
                                 ?>
                            </h1>
                        </div>
                        <?php if( function_exists( 'bcn_display' ) ): ?>
                            <div class="breadcumb">
                                <?php bcn_display(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
}

if( !function_exists( 'element_ready_render_icons' ) ){
    
    function element_ready_render_icons( $content = array(), $class = '' ){

        if ( !is_array( $content ) ) {
            return false;
        }
    
        if ( is_array( $content['value'] ) ) {
            $svg_icon = $content['value']['url'];
        }else{
            $font_icon = $content['value'];
        }
    
        if( !is_array( $content['value'] ) && $font_icon ){
            if($class){
                return '<i class="'.$class.' '.esc_attr( $font_icon ).'"></i>';
            }else{
                return '<i class="'.esc_attr( $font_icon ).'"></i>';
            }
        }
    
        if ( $content['library'] == 'svg' ) {
            try{
                $url_basename = basename( $svg_icon ); 
                $svg_ext      = explode( '.',$url_basename )[1];
    
                $svg_file     = wp_remote_get( $svg_icon );
                $svg_file     = wp_remote_retrieve_body($svg_file );
                $find_string  = '<svg';
                $position     = strpos( $svg_file, $find_string );
                $svg_file_new = substr( $svg_file, $position );
                return $svg_file_new;
            }catch(\Exception $e) {
                return false;
            }
        }
    }
}



/*-----------------------------
    EDD REVIEW FUNCTIONALITY
-------------------------------*/
if ( class_exists( 'EDD_Reviews' ) ) {
    /*-----------------------------------------
        Remove default edd review from content
    ------------------------------------------*/
    function element_ready_remove_review() {
        $edd_reviews = edd_reviews();
        remove_filter( 'the_content', array( $edd_reviews, 'load_frontend' ) );
    }
    add_action( 'template_redirect', 'element_ready_remove_review' );
}

/*------------------------------
    WOOCOMMERCE FUNCTIONALITY
-------------------------------*/
if ( class_exists( 'WooCommerce' ) ) {
    
    add_action( 'after_setup_theme', 'element_ready_woocommerce_setup' );
    function element_ready_woocommerce_setup() {

        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
        add_theme_support( 'woocommerce', array(
            'thumbnail_image_width' => 500,
        ));
    }

    /*---------------------------------------
        ADD EXTRA METABOX TAB TO WOOCOMMERCE
    ----------------------------------------*/
    if( !function_exists('element_ready_add_wc_extra_metabox_tab')){
        function element_ready_add_wc_extra_metabox_tab($tabs){
            $element_ready_tab = array(
                'label'    => esc_html__( 'Product Badge', 'element-ready' ),
                'target'   => 'element_ready_product_data',
                'class'    => '',
                'priority' => 80,
            );
            $tabs[] = $element_ready_tab;
            return $tabs;
        }
        add_filter( 'woocommerce_product_data_tabs', 'element_ready_add_wc_extra_metabox_tab' );
    }

    // add metabox to general tab
    if( !function_exists('element_ready_add_metabox_to_general_tab')){
        function element_ready_add_metabox_to_general_tab(){
            echo '<div id="element_ready_product_data" class="panel woocommerce_options_panel hidden">';
                woocommerce_wp_text_input( array(
                    'id'          => '_saleflash_text',
                    'label'       => esc_html__( 'Custom Product Badge Text', 'element-ready' ),
                    'placeholder' => esc_html__( 'New', 'element-ready' ),
                    'description' => esc_html__( 'Enter your prefered SaleFlash text. Ex: New / Free etc', 'element-ready' ),
                ) );
            echo '</div>';
        }
        add_action( 'woocommerce_product_data_panels', 'element_ready_add_metabox_to_general_tab' );
    }

    // Update data
    if( !function_exists('element_ready_save_metabox_of_general_tab') ){
        function element_ready_save_metabox_of_general_tab( $post_id ){
            $saleflash_text = wp_kses_post( stripslashes( $_POST['_saleflash_text'] ) );
            update_post_meta( $post_id, '_saleflash_text', $saleflash_text);
        }
        add_action( 'woocommerce_process_product_meta', 'element_ready_save_metabox_of_general_tab');
    }

    /*--------------------------------
        CUSTOM PRODUCT BADGE
    --------------------------------*/
    function element_ready_custom_product_badge( $show = 'yes' ){
        global $product;
        $custom_saleflash_text = get_post_meta( get_the_ID(), '_saleflash_text', true );
        if( $show == 'yes' ){
            if( !empty( $custom_saleflash_text ) && $product->is_in_stock() ){
                if( $product->is_featured() ){
                    echo '<span class="quomodo-product-label quomodo-product-label-left hot">' . esc_html( $custom_saleflash_text ) . '</span>';
                }else{
                    echo '<span class="quomodo-product-label quomodo-product-label-left">' . esc_html( $custom_saleflash_text ) . '</span>';
                }
            }
        }
    }

    /*--------------------------------
         SALE FLASH
    ---------------------------------*/
    function element_ready_sale_flash( $offertype = 'default' ){
        global $product;
        if( $product->is_on_sale() && $product->is_in_stock() ){
            if( $offertype !='default' && $product->get_regular_price() > 0 ){
                $_off_percent  = ( 1 - round( $product->get_price() / $product->get_regular_price(), 2 ))*100;
                $_off_price    = round($product->get_regular_price() - $product->get_price(), 0);
                $_price_symbol = get_woocommerce_currency_symbol();
                $symbol_pos    = get_option('woocommerce_currency_pos', 'left');
                $price_display = '';
                switch( $symbol_pos ){
                    case 'left':
                        $price_display = '-'.$_price_symbol.$_off_price;
                    break;
                    case 'right':
                        $price_display = '-'.$_off_price.$_price_symbol;
                    break;
                    case 'left_space':
                        $price_display = '-'.$_price_symbol.' '.$_off_price;
                    break;
                    default: /* right_space */
                        $price_display = '-'.$_off_price.' '.$_price_symbol;
                    break;
                }
                if( $offertype == 'number' ){
                    echo '<span class="quomodo-product-label quomodo-product-label-right">'.$price_display.'</span>';
                }elseif( $offertype == 'percent'){
                    echo '<span class="quomodo-product-label quomodo-product-label-right">'.$_off_percent.'%</span>';
                }else{ echo ' '; }

            }else{
                echo '<span class="quomodo-product-label quomodo-product-label-right">'.esc_html__( 'Sale!', 'element-ready' ).'</span>';
            }
        }else{
            $out_of_stock      = get_post_meta( get_the_ID(), '_stock_status', true );
            $out_of_stock_text = apply_filters( 'element_ready_shop_out_of_stock_text', __( 'Out of stock', 'element-ready' ) );
            if ( 'outofstock' === $out_of_stock ) {
                echo '<span class="quomodo-stockout quomodo-product-label quomodo-product-label-right">'.esc_html( $out_of_stock_text ).'</span>';
            }
        }
    }

    /*------------------------------------
        WOOCOMMERCE DEFAULT RESULT COUNT
    --------------------------------------*/
    function element_ready_product_result_count( $total, $perpage, $paged ){
        wc_set_loop_prop( 'total', $total );
        wc_set_loop_prop( 'per_page', $perpage );
        wc_set_loop_prop( 'current_page', $paged );
        $geargs = array(
            'total'    => wc_get_loop_prop( 'total' ),
            'per_page' => wc_get_loop_prop( 'per_page' ),
            'current'  => wc_get_loop_prop( 'current_page' ),
        );
        wc_get_template( 'loop/result-count.php', $geargs );
    }

    /*-------------------------------------
        WOOCOMMERCE DEFAULT PRODUCT SHORTING
    ---------------------------------------*/
    function element_ready_product_shorting( $getorderby ){
        ?>
        <div class="element-ready-custom-sorting">
            <form class="woocommerce-ordering" method="get">
                <select name="orderby" class="orderby">
                    <?php
                        $catalog_orderby = apply_filters( 'woocommerce_catalog_orderby', array(
                            'menu_order' => esc_html__( 'Default sorting', 'element-ready' ),
                            'popularity' => esc_html__( 'Sort by popularity', 'element-ready' ),
                            'rating'     => esc_html__( 'Sort by average rating', 'element-ready' ),
                            'date'       => esc_html__( 'Sort by latest', 'element-ready' ),
                            'price'      => esc_html__( 'Sort by price: low to high', 'element-ready' ),
                            'price-desc' => esc_html__( 'Sort by price: high to low', 'element-ready' ),
                        ) );
                        foreach ( $catalog_orderby as $id => $name ){
                            echo '<option value="' . esc_attr( $id ) . '" ' . selected( $getorderby, $id, false ) . '>' . esc_attr( $name ) . '</option>';
                        }
                    ?>
                </select>
                <?php
                    // Keep query string vars intact
                    foreach ( $_GET as $key => $val ) {
                        if ( 'orderby' === $key || 'submit' === $key )
                            continue;
                        if ( is_array( $val ) ) {
                            foreach( $val as $innerVal ) {
                                echo '<input type="hidden" name="' . esc_attr( $key ) . '[]" value="' . esc_attr( $innerVal ) . '" />';
                            }
                        } else {
                            echo '<input type="hidden" name="' . esc_attr( $key ) . '" value="' . esc_attr( $val ) . '" />';
                        }
                    }
                ?>
            </form>
        </div>
        <?php
    }

    /*------------------------------
        CUSTOM PAGE PAGINATION
    -------------------------------*/
    function element_ready_custom_pagination( $totalpage ){

        echo '<div class="quomodo-row woocommerce"><div class="quomodo-col-xs-12"><nav class="woocommerce-pagination">';
            echo paginate_links( apply_filters(
                    'woocommerce_pagination_args', array(
                        'base'      => esc_url( str_replace( 999999999, '%#%', remove_query_arg( 'add-to-cart', get_pagenum_link( 999999999, false ) ) ) ), 
                        'format'    => '', 
                        'current'   => max( 1, get_query_var( 'paged' ) ), 
                        'total'     => $totalpage, 
                        'prev_text' => '&larr;', 
                        'next_text' => '&rarr;', 
                        'type'      => 'list', 
                        'end_size'  => 3, 
                        'mid_size'  => 3 
                    )
                )       
            );
        echo '</div></div></div>';
    }

    /*------------------------------
        CHANGE PRODUCT PER PAGE
    --------------------------------*/

    /*-----------------------------------------
        ADD TO CART BUTTON
    -----------------------------------------*/
    function element_ready_woocommerce_addcart(){

        echo '<div class="element__ready__add__to__cart">';
            woocommerce_template_loop_add_to_cart();
        echo '</div>';
    }

    /* --------------------------------------
        WOOCOMMERCE REVIEW COUNT
    ----------------------------------------*/
    function element_ready_woocommerce_review_count( $settings ){
        global $product;

        if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) {
            return;
        }

        if( 'yes' != $settings['show_rating'] ){
            return;
        }

        $rating_count   = $product->get_rating_count();
        $review_count   = $product->get_review_count();
        $average        = $product->get_average_rating();
        $avarage_rating = sprintf(__( 'Rated %s out of 5', 'element-ready' ), $average );
        $rating_html    = wc_get_rating_html( $average, $rating_count );

        if ( comments_open() && $rating_count >= 0  ) :
            

                if( 'multiple_star' == $settings['rating_type'] ) :
                    
                    echo '<div class="product__item__review">';
                        if ( $average ){
                            echo '<div class="total__star__rating"><span class="rated__stars" style="width:'.( ( $average / 5 ) * 100 ) . '%"></span></div>';
                        }else{
                            echo '<div class="total__star__rating"></div>';
                        }
                        echo '<span class="total__review__count">('. esc_html( $review_count ) .')</span>';
                    echo '</div>';

                elseif( 'single_star' == $settings['rating_type'] ) :
                    $single_review_star_icon = $average ? '<span class="single__star__icon__rated"></span>' : '<span class="single__star__icon"></span>';
                    $single_total_review     = '<span class="total__review__count">('. esc_html( $review_count ) .')</span>';
                    echo '<div class="product__item__review"> '. $single_review_star_icon . $single_total_review .'</div>';
                endif;
        endif;
    }

}

/*------------------------------------------
    PRODUCT QUICKVIEW BUTTON
-------------------------------------------*/
/**
* [yith_quick_view product_id="30" type="button" label="Quick View"]
* Usages: Compare button shortcode [yith_compare_button] From "YITH WooCommerce Quickview" plugins.
* Plugins URL: https://wordpress.org/plugins/yith-woocommerce-quickview/
* File Path: https://docs.yithemes.com/yith-woocommerce-quick-view/premium-version-settings/shortcode/
* The Function "element_ready_woocommerce_compare_button" Depends on YITH WooCommerce Compare plugins. If YITH WooCommerce Compare is installed and actived, then it will work.
*/
function element_ready_quick_view_button( $product_id = 0, $label = '', $return = false ) {

    if( !class_exists('YITH_WCQV_Frontend') ){
        return;
    }
    global $product;

    if( ! $product_id ){
        $product instanceof WC_Product && $product_id = yit_get_prop( $product, 'id', true );
    }
    $show_quick_view_button = apply_filters( 'yith_wcqv_show_quick_view_button', true, $product_id );
    if( !$show_quick_view_button ) return;

    $button = '';
    if( $product_id ) {
        // get label
        $label  = $label ? $label : esc_html__( 'Quick View', 'element-ready' );
        $button = '<div class="element__ready__quickview__button"><a title="'.esc_attr__( 'Quick View', 'element-ready' ).'" href="#" class="button yith-wcqv-button" data-product_id="' . $product_id . '"><i class="ti ti-zoom-in"></i>' . $label . '</a></div>';
        $button = apply_filters('yith_add_quick_view_button_html', $button, $label, $product);
    }
    if( $return ) {
        return $button;
    }
    echo $button;
}
remove_action( 'woocommerce_after_shop_loop_item', 'yith_add_quick_view_button', 15 );
remove_action( 'yith_wcwl_table_after_product_name', 'yith_add_quick_view_button', 15 );

/*------------------------------------------
    PRODUCT WISHLIST BUTTON
-------------------------------------------*/
/**
* Usages: "element_ready_add_to_wishlist_button()" function is used  to modify the wishlist button from "YITH WooCommerce Wishlist" plugins.
* Plugins URL: https://wordpress.org/plugins/yith-woocommerce-wishlist/
* File Path: yith-woocommerce-wishlist/templates/add-to-wishlist.php
* The below Function depends on YITH WooCommerce Wishlist plugins. If YITH WooCommerce Wishlist is installed and actived, then it will work.
*/

function element_ready_add_to_wishlist_button( $normalicon = '<i class="fa fa-heart-o"></i>', $addedicon = '<i class="fa fa-heart"></i>', $tooltip = 'no' ) {
    global $product, $yith_wcwl;

    if ( ! class_exists( 'YITH_WCWL' ) || empty(get_option( 'yith_wcwl_wishlist_page_id' ))) return;

    $url          = YITH_WCWL()->get_wishlist_url();
    $product_type = $product->get_type();
    $exists       = $yith_wcwl->is_product_in_wishlist( $product->get_id() );
    $classes      = 'class="add_to_wishlist"';
    $add          = get_option( 'yith_wcwl_add_to_wishlist_text' );
    $browse       = get_option( 'yith_wcwl_browse_wishlist_text' );
    $added        = get_option( 'yith_wcwl_product_added_text' );

    $output = '';
    $output  .= '<div class="'.( $tooltip == 'yes' ? '' : 'tooltip_no' ).' wishlist button-default yith-wcwl-add-to-wishlist add-to-wishlist-' . esc_attr( $product->get_id() ) . '">';
        $output .= '<div class="yith-wcwl-add-button';
            $output .= $exists ? ' hide" style="display:none;"' : ' show"';
            $output .= '><a href="' . esc_url( htmlspecialchars( YITH_WCWL()->get_wishlist_url() ) ) . '" data-product-id="' . esc_attr( $product->get_id() ) . '" data-product-type="' . esc_attr( $product_type ) . '" ' . $classes . ' >'.$normalicon.'<span class="element__ready__product__action__tooltip">'.esc_html( $add ).'</span></a>';
            $output .= '<i class="fa fa-spinner fa-pulse ajax-loading" style="visibility:hidden"></i>';
        $output .= '</div>';

        $output .= '<div class="yith-wcwl-wishlistaddedbrowse show" style="display:block;"><a class="" href="' . esc_url( $url ) . '">'.$addedicon.'<span class="element__ready__product__action__tooltip">'.esc_html( $browse ).'</span></a></div>';
        $output .= '<div class="yith-wcwl-wishlistexistsbrowse ' . ( $exists ? 'show' : 'hide' ) . '" style="display:' . ( $exists ? 'block' : 'none' ) . '"><a href="' . esc_url( $url ) . '" class="">'.$addedicon.'<span class="element__ready__product__action__tooltip">'.esc_html( $added ).'</span></a></div>';
    $output .= '</div>';
    echo $output;
}

/*------------------------------------------
    PRODUCT COMPARE BUTTON
-------------------------------------------*/
/**
* Usages: Compare button shortcode [yith_compare_button] From "YITH WooCommerce Compare" plugins.
* Plugins URL: https://wordpress.org/plugins/yith-woocommerce-compare/
* File Path: yith-woocommerce-compare/includes/class.yith-woocompare-frontend.php
* The Function "element_ready_woocommerce_compare_button" Depends on YITH WooCommerce Compare plugins. If YITH WooCommerce Compare is installed and actived, then it will work.
*/
function element_ready_woocommerce_compare_button( $buttonstyle = 1 ){

    if( !class_exists('YITH_Woocompare') ) return;
    global $product;
    $product_id = $product->get_id();
    $comp_link  = site_url() . '?action=yith-woocompare-add-product';
    $comp_link  = add_query_arg('id', $product_id, $comp_link);

    if( $buttonstyle == 1 ){
        echo do_shortcode('[yith_compare_button]');
    }else{
        echo '<a href="'. esc_url( $comp_link ) .'" class="element__ready__compare__button woocommerce product compare-button" data-product_id="'. esc_attr( $product_id ) .'" rel="nofollow"><i class="ti ti-reload"></i>'.esc_html__( 'Compare', 'element-ready' ).'</a>';
    }
}


/*--------------------------------------------------
    EDD DOWNLOAD DROPDOWN CATEGORY
--------------------------------------------------*/
function element_ready_get_terms_dropdown($taxonomies, $args){

    $myterms = get_terms( $taxonomies, $args );
    $output  = "<div class='download__search__cats '><select name='download_cats'>";
    $output .= "<option value='all'>" . esc_html__("All Categories", 'element-ready') . "</option>";
    foreach ($myterms as $term) {
        $term_name = $term->name;
        $slug      = $term->slug;
        $output   .= "<option value='" . $slug . "'>" . $term_name . "</option>";
    }
    $output .= "</select></div>";
    return $output;
}


/*----------------------------
	CONTACT FORM 7 RETURN ARRAY
-------------------------------*/
function element_ready_get_contact_forms_seven_list(){

	$forms_list = array();
	$forms_args = array( 'posts_per_page' => -1, 'post_type'=> 'wpcf7_contact_form' );
	$forms      = get_posts( $forms_args );

    if( $forms ){
        foreach ( $forms as $form ){
            $forms_list[$form->ID] = $form->post_title;
        }
    }else{
        $forms_list[ esc_html__( 'No contact form found', 'element-ready' ) ] = 0;
    }
    return $forms_list;
}

/*---------------------------
	WP FORMS RETURN ARRAY
-----------------------------*/
function element_ready_get_wpforms_forms_list(){

	$forms_list = array();
	$forms_args = array( 'posts_per_page' => -1, 'post_type'=> 'wpforms' );
	$forms      = get_posts( $forms_args );
    if( $forms ){
        foreach ( $forms as $form ){
            $forms_list[$form->ID] = $form->post_title;
        }
    }else{
        $forms_list[ __( 'Form not found', 'element-ready' ) ] = 0;
    }
    return $forms_list;
}

/*---------------------------
	WE FORM RETURN ARRAY
-----------------------------*/
function element_ready_get_we_forms_list() {

    $forms = [];
    if ( class_exists( 'WeForms' ) ) {
        $_forms = get_posts( [
			'post_type'      => 'wpuf_contact_form',
			'post_status'    => 'publish',
			'posts_per_page' => -1,
			'orderby'        => 'title',
			'order'          => 'ASC',
        ] );

        if ( ! empty( $_forms ) ) {
            $forms = wp_list_pluck( $_forms, 'post_title', 'ID' );
        }
    }
    return $forms;
}

/*---------------------------
	NINJA FORM RETURN ARRAY
-----------------------------*/
function element_ready_get_ninja_forms_list() {

    $form_list = array();
    if ( class_exists( 'Ninja_Forms' ) ) {
        $ninja_forms  = Ninja_Forms()->form()->get_forms();
        if ( ! empty( $ninja_forms ) && ! is_wp_error( $ninja_forms ) ) {
            $form_list = ['0' => esc_html__( 'Select Form', 'element-ready' )];
            foreach ( $ninja_forms as $form ) {   
                $form_list[ $form->get_id() ] = $form->get_setting( 'title' );
            }
        }
    } else {
        $form_list = ['0' => esc_html__( 'Form Not Found.', 'element-ready' ) ];
    }
    return $form_list;
}

/*---------------------------
	CALDERA FORM RETURN ARRAY
-----------------------------*/
function element_ready_get_caldera_forms_list() {

    if ( class_exists( 'Caldera_Forms' ) ) {
		$caldera_forms = Caldera_Forms_Forms::get_forms( true, true );
		$form_list     = ['0' => esc_html__( 'Select Form', 'element-ready' )];
		$form          = array();
        if ( ! empty( $caldera_forms ) && ! is_wp_error( $caldera_forms ) ) {
            foreach ( $caldera_forms as $form ) {
                if ( isset($form['ID']) and isset($form['name'])) {
                    $form_list[$form['ID']] = $form['name'];
                }   
            }
        }
    }else{
        $form_list = ['0' => esc_html__( 'Form Not Found!', 'element-ready' ) ];
    }
    return $form_list;
}

/*---------------------------
	GRAVITY FORM RETURN ARRAY
----------------------------*/
function element_ready_get_gravity_forms_list() {
    if ( class_exists( 'GFForms' ) ) {
		$gravity_forms = \RGFormsModel::get_forms( null, 'title' );
		$form_list     = ['0' => esc_html__( 'Select Form', 'element-ready' )];
        if ( ! empty( $gravity_forms ) && ! is_wp_error( $gravity_forms ) ) {
            foreach ( $gravity_forms as $form ) {   
                $form_list[ $form->id ] = $form->title;
            }
        }
    }else{
        $form_list = ['0' => esc_html__( 'Form Not Found!', 'element-ready' ) ];
    }
    return $form_list;
}

/*----------------------------
    FLUENT FORM LIST ARRAY
------------------------------*/
function element_ready_fluent_form_list(){
    if( function_exists( 'wpFluent' ) ){

        $fluent_forms = wpFluent()->table('fluentform_forms')->select(['id', 'title'])->orderBy('id', 'DESC')->get();
        $form_list    = ['0' => esc_html__( 'Select Form', 'element-ready' )];

        if ($fluent_forms) {
            $form_list[0] = esc_html__('Select a Fluent Form', 'element-ready');
            foreach ($fluent_forms as $form) {
                $form_list[$form->id] = $form->title .' ('.$form->id.')';
            }
        } else {
            $form_list[0] = esc_html__('Create a Form First', 'element-ready');
        }
    }else{
        $form_list = ['0' => esc_html__( 'Form Not Found!', 'element-ready' ) ];
    }
    return $form_list;
}

if(!function_exists('element_ready_heading_camelize')){
    function element_ready_heading_camelize($input, $separator = '_')
    {
        return str_replace($separator, '', ucwords($input, $separator));
    }
}

if(!function_exists('element_ready_get_post_category')) {
    function element_ready_get_post_category($tax = 'category') {

        static $list = [];
        if( !count( $list ) ) {
         
            $categories = get_terms( $tax, array(
                    'orderby'       => 'name', 
                    'order'         => 'DESC',
                    'hide_empty'    => false,
                    'number'        => 200
            
            ) );
        
            foreach( $categories as $category ) {
            $list[$category->term_id] = $category->name;
            }
        }
       
        return $list;
    }
}

if( !function_exists('element_ready_get_post_tags') ){

    function element_ready_get_post_tags($tax = 'post_tag') {
   
        static $list = [];

        if( !count( $list ) ) {
           $categories = get_terms( $tax, array(
              'orderby'       => 'name', 
              'order'         => 'DESC',
              'hide_empty'    => false,
              'number'        => 300
             
          ) );
     
          foreach( $categories as $category ) {
             $list[$category->term_id] = $category->name;
          }
          
        }
      
        return $list;
    }
 }

 if(!function_exists('element_ready_get_post_author')){

    function element_ready_get_post_author(){
        static $list = [];

        if( !count( $list ) ) {
           $authors = get_users(
                array( 
                    'fields' => array( 'display_name','ID' ) ) 
            );
     
          foreach( $authors as $author ) {
             $list[$author->ID] = $author->display_name;
          }
          
        }
      
        return $list;
    }

 }

 if(!function_exists('element_ready_get_posts')) {

    function element_ready_get_posts(){
        static $list = [];

        if( !count( $list ) ) {
           $posts = get_posts(
                [
                'numberposts' => -1,
                'post_status' => 'publish'
                ]
            );
     
          foreach( $posts as $post ) {
             $list[$post->ID] = $post->post_title;
          }
          
        }
      
        return $list;
    }

 }

 function element_ready_current_theme_supported_post_format(){
   
    static $list = [];

    if( !count( $list ) ) {

        $post_formats = get_theme_support( 'post-formats' );
        
        if(isset($post_formats[0])) {
            $post_formats = $post_formats[0];
        }else{
            return $list;
        }
        
        foreach( $post_formats as $format ) {
            $list['post-format-'.$format] = $format;
        }
      
    }
   
    return $list;
   
 }

 /* elementor Slider control  */

 function element_ready_widgets_slider_controls_setttings($settings){
    
    $return_controls = [];

    $slider_controls = [
        'slider_items',
        'slider_items_tablet',
        'slider_items_mobile',
        'slider_autoplay',
        'slider_autoplay_hover_pause',
        'slider_autoplay_timeout',
        'slider_smart_speed',
        'slider_dot_nav_show',
        'slider_nav_show',
        'slider_margin',
        'slider_loop'
    ];   
    
    
    foreach($settings as $key=> $item){

       if(in_array($key,$slider_controls) ){
           
          $return_controls[$key] = $item;
       } 
      
    }
    
   return $return_controls;
 }
  // get all user created menu list
 function element_ready_get_all_menus(){

    $list = [];

    $menus = wp_get_nav_menus(); 
    
    foreach($menus as $menu){
        $list[$menu->slug] = $menu->name;
    }

    $list['empty'] = esc_html__('Empty','element-ready');

    return $list;
 }

 /**
 * 
 *
 * get widgets class list
 *
 * @since 1.0
 * @return array
 */
if(!function_exists('element_ready_widgets_class_list')):
    function element_ready_widgets_class_list($dir){
       $classes = [];
        foreach (glob("$dir/*.php") as $filename) {

            if(!is_null(basename( $filename))){
                $classes[] = strtok( basename($filename),'.') ;
            }
           
        }
        return $classes;
    }
endif;


if(!function_exists('element_ready_social_share_list')):
    function element_ready_social_share_list(){
    
       $data = array(
          ''              => '---',
          'facebook'      => esc_html__('Facebook', 'element-ready'),
          'twitter'       => esc_html__('twitter', 'element-ready'),
          'linkedin'      => esc_html__('linkedin', 'element-ready'),
          'pinterest'     => esc_html__('pinterest ', 'element-ready'),
          'digg'          => esc_html__('digg', 'element-ready'),
          'tumblr'        => esc_html__('tumblr', 'element-ready'),
          'blogger'       => esc_html__('blogger', 'element-ready'),
          'reddit'        => esc_html__('reddit', 'element-ready'),
          'delicious'     => esc_html__('delicious', 'element-ready'),
          'flipboard'     => esc_html__('flipboard', 'element-ready'),
          'vkontakte'     => esc_html__('vkontakte', 'element-ready'),
          'odnoklassniki' => esc_html__('odnoklassniki', 'element-ready'),
          'moimir'        => esc_html__('moimir', 'element-ready'),
          'livejournal'   => esc_html__('livejournal', 'element-ready'),
          'blogger'       => esc_html__('blogger', 'element-ready'),
          'evernote'      => esc_html__('evernote', 'element-ready'),
          'flipboard'     => esc_html__('flipboard', 'element-ready'),
          'mix'           => esc_html__('mix', 'element-ready'),
          'meneame'       => esc_html__('meneame ', 'element-ready'),
          'pocket'        => esc_html__('pocket ', 'element-ready'),
          'surfingbird'   => esc_html__('surfingbird ', 'element-ready'),
          'liveinternet'  => esc_html__('liveinternet ', 'element-ready'),
          'buffer'        => esc_html__('buffer ', 'element-ready'),
          'instapaper'    => esc_html__('instapaper ', 'element-ready'),
          'xing'          => esc_html__('xing ', 'element-ready'),
          'wordpres'      => esc_html__('wordpres ', 'element-ready'),
          'baidu'         => esc_html__('baidu ', 'element-ready'),
          'renren'        => esc_html__('renren ', 'element-ready'),
          'weibo'         => esc_html__('weibo ', 'element-ready'),
         
       );
    
       return $data;
    }
    endif;

    if ( ! function_exists( 'element_ready_get_post_meta_keys' ) ) :

        function element_ready_get_post_meta_keys( $post_type, $sample_size = 20 ) {
    
            $meta_keys = array();
            $posts     = get_posts( array( 'post_type' => $post_type, 'limit' => $sample_size ) );
       
            foreach ( $posts as $key => $post ) {
                $post_meta_keys = get_post_custom_keys( $post->ID );
                $meta_keys      = array_merge( $meta_keys, $post_meta_keys );
            }
    
            return array_values( array_unique( $meta_keys ) );
    
        }
    
    endif;

    if(!function_exists('element_ready_wc_free_products')){
        function element_ready_wc_free_products($free=true){

            $productsResults = [
                '' => esc_html__('Need woocommerce plugin','element-ready')
            ];

            if ( !class_exists( 'WooCommerce' ) ) {
                return $productsResults;
            }
            
            global $woocommerce;
            //$is_free = apply_filters( 'element_ready_wc_free', $free );
            $products = new WP_Query([
               'post_type' => 'product',
               'posts_per_page' => -1,
            ]);
        
            
        
            if ( $products->have_posts() ) :
    
                    while ( $products->have_posts() ) : $products->the_post();
                        $product = wc_get_product( get_the_ID() );
                        if( $free ){
                            if ( '' === $product->get_price() || 0 == $product->get_price() ):
                                $productsResults[get_the_id()] = get_the_title();
                           endif;
                        }else{
                            $productsResults[get_the_id()] = get_the_title();   
                        }
                    endwhile; 
                    wp_reset_postdata();
    
            endif;
            
            return $productsResults;
           
        }
           
    }

    
function element_ready_array_flatten(array $array) {
    
    $return = array();
    array_walk_recursive($array, function($a) use (&$return) { $return[] = $a; });
    return $return;
}

if(!function_exists('element_ready_camelize')){

    function element_ready_camelize($input, $separator = '_')
    {
        return str_replace($separator, '', ucwords($input, $separator));
    }
}

function element_ready_errors(){
    static $wp_error; // Will hold global variable safely
    return isset($wp_error) ? $wp_error : ($wp_error = new WP_Error(null, null, null));
}



 if(!function_exists('element_ready_get_post_author')){

    function element_ready_get_post_author(){
        static $list = [];

        if( !count( $list ) ) {
           $authors = get_users(
                array( 
                    'fields' => array( 'display_name','ID' ) ) 
            );
     
          foreach( $authors as $author ) {
             $list[$author->ID] = $author->display_name;
          }
          
        }
      
        return $list;
    }

 }

 if(!function_exists('element_ready_get_posts')) {

    function element_ready_get_posts($post_type = 'post'){
        $list = [];

        if( !count( $list ) ) {
           $posts = get_posts(
                [
                'numberposts' => -1,
                'post_status' => 'publish',
                'post_type' => $post_type
                ]
            );
     
          foreach( $posts as $post ) {
             $list[$post->ID] = $post->post_title;
          }
          
        }
      
        return $list;
    }

 }


  // get all user created menu list
  if(!function_exists('element_ready_get_all_menus')) {

    function element_ready_get_all_menus(){

        $list = [];
        $menus = wp_get_nav_menus(); 
        
        foreach($menus as $menu){
            $list[$menu->slug] = $menu->name;
        }
        $list['empty'] = esc_html__('Empty','element-ready');
        return $list;

    }
 }
 if(!function_exists('element_ready_html_tag_validate')) {

    function element_ready_html_tag_validate($option ='',$option2 = ''){
        
        if($option ==''){
            return false;
        }

        $option_tag = false;
        $option_tag2 = $option2;
        
        $option_tag  = str_replace(['<','>','</'],[''],$option);
    
        if($option2 == ''){
            $option_tag2 = '</'.$option_tag.'>';
        }
    
        return ['start'=>$option,'end'=>$option_tag2];

    }
}

 
    /*
     * Elementor Templates List
     * return array
     */
    if(!function_exists('element_ready_elementor_template')) {

        function element_ready_elementor_template() {

            $templates = \Elementor\Plugin::instance()->templates_manager->get_source( 'local' )->get_items();
            $types     = array();
            static $template_lists = [];
            if(!empty($template_lists)){
                return $template_lists;
            }
            if ( empty( $templates ) ) {
                $template_lists = [ '0' => esc_html__( 'Do not Saved Templates.', 'element-ready' ) ];
            } else {
                $template_lists = [ '0' => esc_html__( 'Select Template', 'element-ready' ) ];
                foreach ( $templates as $template ) {
                    $template_lists[ $template['template_id'] ] = $template['title'] . ' (' . $template['type'] . ')';
                }
            }
            return $template_lists;
        }
   }
   if(!function_exists('element_ready_is_blog')) {

        function element_ready_is_blog(){

            if(is_front_page() && get_option( 'show_on_front' ) == 'posts'){
                return true;
            }

            if(is_home() && get_option( 'show_on_front' ) == 'page'){
                return true;
            }

            return false;
        }
    }

    if(!function_exists('element_ready_category_option_tree')) {

        function element_ready_category_option_tree( array &$elements, $parentId = 0 )
        {
            $branch = array();
            foreach ( $elements as &$element )
            {
            
                if ( $element->menu_item_parent == $parentId )
                {
                    $children = element_ready_category_option_tree( $elements, $element->ID );
                    if ( $children )
                        $element->wpse_children = $children;

                    $branch[$element->ID] = $element;
                    unset( $element );
                }
            }
            return $branch;
        }
    }
    if(!function_exists('element_ready_category_nav_menu_2_tree')) {

        function element_ready_category_nav_menu_2_tree( $menu_id )
        {
            $items = wp_get_nav_menu_items( $menu_id );
            return  $items ? element_ready_category_option_tree( $items, 0 ) : null;
        }
    }

    if(!function_exists('element_ready_elementor_page_meta_settings')) {

        function element_ready_elementor_page_meta_settings($key =false){
        
            if( !is_page() ){

            return false;
            }

            if( !$key ){
                
                return false;
            }
        
            // Get the page settings manager
            $page_settings_manager = \Elementor\Core\Settings\Manager::get_settings_managers( 'page' );
            // Get the settings model for current post
            $page_settings_model = $page_settings_manager->get_model( get_the_ID());

            // Retrieve the color we added before
            $settings_data = $page_settings_model->get_settings( $key );
        
            return $settings_data; 
        }
    }

    if(!function_exists('element_ready_wc_download_link')){

        function element_ready_wc_download_link($id , $free = '') {
           
            // woocommerce product page
            if( is_product() ){

                $product = wc_get_product( get_the_id() );
               
                if( $product->get_downloadable() && $free == 'yes' && ('' === $product->get_price() || 0 == $product->get_price()) ) {
                
                    return esc_url(element_ready_product_download_url($product,$free));      
                }else{
                    
                    return esc_url(element_ready_product_download_url($product,$free));
                }
            }
          
            // post page
            
            $product = wc_get_product( $id );
            
            if( is_object($product) && $free == 'yes' && $product->get_downloadable() && ('' === $product->get_price() || 0 == $product->get_price()) ) {
             
                return esc_url(element_ready_product_download_url($product,$free));         
            }else{

                return esc_url(element_ready_product_download_url($product,$free));
            }
           
           return '#';
        }
    }

    function element_ready_product_download_url( $product, $free='' ){
        
      
        if(!is_object($product)){
            return esc_url('#');    
        }

        $_thedownlaod = $product->get_downloads();
       
        if( !$product->get_downloadable() ){
            return esc_url('#');
        }
      
        foreach($_thedownlaod as $download):
                                                                         
             $link = add_query_arg(
                array(
                    'product_id'    => esc_attr($product->get_id()),
                    'downloadtype' => $free=='yes'?'free':'pro',
                    'download_id'   => esc_attr($download->get_id()),
                ),
                $product->get_permalink()
            );
           
            break;
        endforeach; 

        return $link;
    }
    
    if(!function_exists('element_ready_get_learnpress_category')) {

        function element_ready_get_learnpress_category($tax = 'category',$return_all = false) {

            $list = [];
            if ( ! class_exists( 'LearnPress' ) ) {
                return $list;
             }
            if( !count( $list ) ) {
            
                $categories = get_terms( $tax, array(
                        'orderby'       => 'name', 
                        'order'         => 'DESC',
                        'hide_empty'    => false,
                        'number'        => 400
                
                ) );
                if($return_all){
                    
                    return $categories;
                }

                if(is_array($categories)){

                    foreach( $categories as $category ) {
                        $list[$category->term_id] = $category->name;
                     }
                }
                
            }
        
            return $list;
        }

    }

    function element_ready_lp_course_cageory_by_id( $post_id=null,$single=true ){
        if ( ! class_exists( 'LearnPress' ) ) {
            return '';
         }
        $terms = get_the_terms( $post_id, 'course_category' );
        $cat = '';
        $cat_with_link = '';
                    
        if(is_array($terms)):
    
            foreach($terms as $tkey=>$term):
                
                $cat.= $term->slug.' ';
                
                $cat_with_link .= sprintf("<a class='c-cate element-ready-grid-course-c-cat' href='%s'>%s</a>",get_category_link($term->term_id),$term->name);
                
                if($single){
                    break;
                }
    
                if($tkey==1)  {
                    break;
                }
    
            endforeach;
    
        endif; 
         return $cat_with_link;
    }

    add_action( 'admin_init', 'element_ready_ninja_form_display_enqueue_scripts' );
    function element_ready_ninja_form_display_enqueue_scripts(){

        if( wp_doing_ajax() ){
            add_action( 'nf_display_enqueue_scripts', function(){
                global $wp_scripts, $wp_styles;
                $wp_scripts->do_items();
                $wp_styles->do_items();
            });
        }
    }

    if(!function_exists('element_ready_social_share_list')):
        function element_ready_social_share_list(){
        
           $data = array(
                ''              => '---',
                'facebook'      => esc_html__('Facebook', 'bisy'),
                'twitter'       => esc_html__('twitter', 'bisy'),
                'linkedin'      => esc_html__('linkedin', 'bisy'),
                'pinterest'     => esc_html__('pinterest ', 'bisy'),
                'digg'          => esc_html__('digg', 'bisy'),
                'tumblr'        => esc_html__('tumblr', 'bisy'),
                'blogger'       => esc_html__('blogger', 'bisy'),
                'reddit'        => esc_html__('reddit', 'bisy'),
                'delicious'     => esc_html__('delicious', 'bisy'),
                'flipboard'     => esc_html__('flipboard', 'bisy'),
                'vkontakte'     => esc_html__('vkontakte', 'bisy'),
                'odnoklassniki' => esc_html__('odnoklassniki', 'bisy'),
                'moimir'        => esc_html__('moimir', 'bisy'),
                'livejournal'   => esc_html__('livejournal', 'bisy'),
                'blogger'       => esc_html__('blogger', 'bisy'),
                'evernote'      => esc_html__('evernote', 'bisy'),
                'flipboard'     => esc_html__('flipboard', 'bisy'),
                'mix'           => esc_html__('mix', 'bisy'),
                'meneame'       => esc_html__('meneame ', 'bisy'),
                'pocket'        => esc_html__('pocket ', 'bisy'),
                'surfingbird'   => esc_html__('surfingbird ', 'bisy'),
                'liveinternet'  => esc_html__('liveinternet ', 'bisy'),
                'buffer'        => esc_html__('buffer ', 'bisy'),
                'instapaper'    => esc_html__('instapaper ', 'bisy'),
                'xing'          => esc_html__('xing ', 'bisy'),
                'wordpres'      => esc_html__('wordpres ', 'bisy'),
                'baidu'         => esc_html__('baidu ', 'bisy'),
                'renren'        => esc_html__('renren ', 'bisy'),
                'weibo'         => esc_html__('weibo ', 'bisy'),
           );
        
           return $data;
        }

    endif;
 
    if(!function_exists('element_ready_get_modules_option')):

        function element_ready_get_modules_option($key = false){
            
            $option = get_option('element_ready_modules');
        
            if($option == false){
                return false;
            }
            
            return isset($option[$key]) ? $option[$key] == 'on'?true:false:false;
        } 

    endif;
    
    function element_ready_get_components_option($key = false){
        
        $option = get_option('element_ready_components');
       
        if($option == false){
            return false;
        }
        
        return isset($option[$key]) ? $option[$key] == 'on'?true:false:false;
    }

    function element_ready_get_api_option($key = false){
        static $option;
        
        $option = get_option('element_ready_api_data');
       
        if($option == false){
            return '';
        }
        
        return isset($option[$key]) ? $option[$key] :'';
    }

    function element_ready_get_hf_option($key = false){
        
        $option = get_option('element_ready_hf_options');
       
        if($option == false){
            return false;
        }
        
        return isset($option[$key]) ? $option[$key] == 'on'?true:$option[$key]:false;
    }

    if(!function_exists('element_ready_menu_camelize')){
        function element_ready_menu_camelize($input, $separator = '_')
        {
            return str_replace($separator, '', ucwords($input, $separator));
        }
    }

    function element_ready_get_dir_list($path = 'Widgets'){

        $widgets_modules = [];
        $dir_path        = ELEMENT_READY_DIR_PATH."/inc/".$path;
        $dir             = new \DirectoryIterator($dir_path);
         
         foreach ($dir as $fileinfo) {
             if ($fileinfo->isDir() && !$fileinfo->isDot()) {
                 $widgets_modules[$fileinfo->getFilename()] = $fileinfo->getFilename();
                
             }
         }

         return $widgets_modules;
    }

    function element_ready_components_permission($dir = []){

        $return_comp      = [];
        $active_modules   = [];
        $active_component = [];

        $_modules = [
           
            'give'        => 'give',
            'learnpress'  => 'learnpress',
            'timeline'    => 'timeline',
            'weather'     => 'weather',
            'woocommerce' => 'woocommerce',
            'wpdefault'   => 'wpdefault'
        ];

        foreach($_modules as $mod_key => $mod_item){

            if(element_ready_get_modules_option($mod_key)){
                
                $active_modules[] = $mod_key;
            }
          
        }
        
        
        foreach($dir as $key=> $item){

             if(in_array($key,$_modules)){

                if(in_array($key,$active_modules)){
                   
                    $return_comp[$key] = $item;
                }  
               
             }else{

                $return_comp[$key] = $item;
             }
           
        }
      return $return_comp;
    }

    if( !function_exists('element_ready_sort_widget_display') ){

        function element_ready_sort_widget_display( $return_arr ) {

            if(did_action('element_ready_pro_init')){

                foreach($return_arr as $k=> $val_arr){

                    $temp_val = [];  
   
                    foreach($val_arr as $r=> $val){ 
                        if($r=='is_pro'){
                           $temp_val[$r] = 0; 
                        }else{
                           $temp_val[$r] = $val;  
                        }
   
                    }
   
                    $return_arr[$k] = $temp_val;
               }

               return $return_arr;
            }
           
       
            $free = array_filter($return_arr, function ($var) {
                return ($var['is_pro'] == 0);
            });
            
            $pro = array_filter($return_arr, function ($var) {
                return ($var['is_pro'] == 1);
            });

            return array_merge($free,$pro);
           
        }
    }
   
    if( !function_exists('element_ready_locate_template') ){

        function element_ready_locate_template( $template_name, $dir_path = '' ) {

            $path = $dir_path.'/'.$template_name.'.php';
            $template_path = "element-ready/widgets/{$dir_path}".'/'."{$template_name}.php";
            
            $file_path_abs = [
                'element_ready'      => ELEMENT_READY_DIR_PATH.'inc/Widgets/'.$path,
            ];
            
            $located = $file_path_abs['element_ready'];
            // Look in yourtheme/stylename.php and yourtheme/element-ready/widgets/module-name/layouts/stylename.php
            try{
    
                if ( file_exists( get_stylesheet_directory() . '/' . $template_path ) ) {
         
                    return get_stylesheet_directory() . '/' . $template_path;
                 
                 } elseif ( file_exists($file_path_abs['element_ready']) ){
                     return $file_path_abs['element_ready'];
                 }
                
            } catch (Exception $e) {
                return $file_path_abs['element_ready'];
            }
           
            return $located;
        }

    }

    add_filter( 'upload_mimes', 'element_ready_custom_mime_types' );
    function element_ready_custom_mime_types( $mimes ) {

        $mimes['svg'] = 'image/svg+xml';
        $mimes['json'] = 'application/json'; 
        return $mimes;
    }

    function element_ready_get_editable_roles($slug=false) {

        global $wp_roles;
        $all_roles = $wp_roles->roles;
        $editable_roles = apply_filters('editable_roles', $all_roles);
        // return only roles array 
        if($slug){ 
            
            $role_list = [];
            foreach($editable_roles as $key => $item){
                $role_list[$key] = $item['name'];
            }
            return $role_list;
        } 
        return $editable_roles;
    }

    function element_ready_get_current_user_role() {
	
        if( is_user_logged_in() ) { // check if there is a logged in user 
            
            $user = wp_get_current_user(); // getting & setting the current user 
            $roles = ( array ) $user->roles; // obtaining the role 
               return $roles; // return the role for the current user 
            } else {
               return array(); // if there is no logged in user return empty array  
        }
    }

    function element_ready_get_page_templates(){

        $templates = wp_get_theme()->get_page_templates();
        $return_data = [];
        foreach ( $templates as $template_name => $template_filename ) {
           
            $return_data[$template_name] = $template_filename;
        }

        return $return_data;
    }

    
    function element_ready_get_post_templates(){
        
        $templates     = wp_get_theme()->get_post_templates();
        $return_data   = [];
        $return_data[-1]['label']   = esc_html__('--------','element-ready');
        $return_data[-1]['options'] = [
            '-1' => esc_html__('None','element-ready')
        ];

        foreach($templates as $post_type => $template){
            
            $template_option = [];  

            foreach($template as $key => $item_name){
                
                $template_option[$key] = $item_name;
            }

            foreach( element_ready_get_page_templates() as $p_key => $page_nem){
                $template_option[$p_key] = $page_nem;
            }
           
            $slug = str_replace(' ','-',$post_type);
            $return_data[$slug]['label']   = $post_type;
            $return_data[$slug]['options'] = $template_option;

        }
 
        return $return_data;
    }

    function element_ready_google_fonts_url( $font_families	 = []) {
        // ['DM Sans:400,400i,500,500i,700,700i']
      
        $fonts_url		 = '';
        if ( $font_families ) { 

            $query_args = array(
                'family' => urlencode( implode( '|', $font_families ) )
            );
    
            $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }else{

            $font_families = ['DM Sans:400,400i,500,500i,700,700i'];
            $query_args = array(
                'family' => urlencode( $font_families )
            );
    
            $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' ); 
        }
       
        $url = esc_url_raw( $fonts_url );
        wp_enqueue_style( 'element-ready-pro-google-fonts-'.uniqid() , $url , null, ELEMENT_READY_PRO );	
    }

    if( !function_exists('element_ready_get_fb_share_count') ):

        function element_ready_get_fb_share_count( $post_id = null ){
           
           $cache_key    = 'binduz_fb_share_' . $post_id;
           $url          = get_permalink( $post_id );
           $access_token = element_ready_get_fb_secret_key();
          
           $api_url      = 'https://graph.facebook.com/v3.0/?id=' . urlencode( $url ) . '&fields=engagement&access_token=' . $access_token;
           $json_return  = wp_remote_get( $api_url );
           $responseBody = wp_remote_retrieve_body( $json_return );
           $result       = json_decode( $responseBody );
          
           if ( is_object( $result ) && ! is_wp_error( $result ) ) {
              
              if(isset($result->engagement)){
                 
                 $fb_share = $result->engagement;
                 
                 if(isset($fb_share->share_count)){
                    return $fb_share->share_count;
                 }
              }   
            
           }
     
           return 0;
           
        }
     
     endif;
     
     // get facebook api key
     function element_ready_get_fb_secret_key(){
     
        $secret_code  = element_ready_get_api_option( 'facebook_secret_code' );
        $facebook_app_id  = element_ready_get_api_option( 'facebook_app_id' );
      
        if( isset($facebook_app_id) && isset($secret_code) ){
          if($facebook_app_id !='' && $secret_code !=''){
             return $facebook_app_id.'|'.$secret_code;
          } 
        }
        // 3190052791219248|8604c5a80339a8db79877944e852227b
        return '3190052791219248|8604c5a80339a8db79877944e852227b';
     }

    
