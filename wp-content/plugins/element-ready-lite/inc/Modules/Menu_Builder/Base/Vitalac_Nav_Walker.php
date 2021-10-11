<?php
namespace Element_Ready\Modules\Menu_Builder\Base;

class Vitalac_Nav_Walker extends \Walker_Nav_Menu
{
    public $q_menu_Settings;
     // get menu setting
    public $elementor_settings = []; 
    public $elementor_default = [
        'menu_before_drop_icon'       => '',
        'menu_drop_icon'              => '',
        'mega_menu_content'           => '',
        'menu_list_item_cls'          => '',
        'sub_menu_ul_cls'             => '',
        'mega_menu_cls'               => '',
        'mega_menu_drop_icon'         => '',
        'submenu_menu_drop_icon'      => '',
        'first_li_menu_pointer'       => '',
        'first_li_menu_hover_pointer' => '',
       
    ]; 
    function __construct($settings = []) {

        if( is_array($settings) ){
           $this->elementor_settings = wp_parse_args($settings);
        }
      
    }
    public function get_item_meta($item_id){
        
        $is_mega_menu                     = get_post_meta( $item_id, 'element_ready_mega_menu_post_item_mega_menu_enable', true );
        $is_off_canvas                    = false;
        $is_mobile_menu                   = false;
        $content_id                       = get_post_meta( $item_id, 'element_ready_mega_menu_post_item_mega_content_id', true );
        $submenu_content_type             = false;
        $megamenu_width_type              = false;
        $vertical_megamenu_position       = false;
 
       
        $default = [

            "menu_id"                    => null,
            "is_mobile_mega_menu"        => $is_mobile_menu,
            "is_mega_menu"               => $is_mega_menu,
            "is_off_canvas"              => $is_off_canvas,
            "submenu_content_type"       => $submenu_content_type,
            "megamenu_width_type"        => $megamenu_width_type,
            "vertical_megamenu_position" => $vertical_megamenu_position,
            "content_id"                 => $content_id,
        
        ];

        return $default;
    }

    public function is_megamenu($menu_slug){
        
        $menu_slug = ( ( (gettype($menu_slug) == 'object') && (isset($menu_slug->slug)) ) ? $menu_slug->slug : $menu_slug );
        $active = get_option( 'element_ready_mega_menu_options_enable_menu'.$menu_slug);
        $return = 0;

        if('on' == $active){
            $return = 1; 
        }
     
        return $return;
    }

    public function is_megamenu_item($item_meta, $menu){
       
        if( $this->is_megamenu($menu) && $item_meta['is_mega_menu'] == 'yes' && class_exists( 'Elementor\Plugin' ) ){
            return true;
        }
        return false;
    }

    /**
     * Starts the list before the elements are added.
     *
     * @see Walker::start_lvl()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $sub_menu_cls = 'element-ready-dropdown element-ready-submenu-section ';
        $sub_menu_cls .= $this->elementor_settings['sub_menu_ul_cls'];
        $output .= "\n$indent<ul class=\" $sub_menu_cls\">\n";
    }
    /**
     * Ends the list of after the elements are added.
     *
     * @see Walker::end_lvl()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
    /**
     * Start the element output.
     *
     * @see Walker::start_el()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Menu item data object.
     * @param int    $depth  Depth of menu item. Used for padding.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     * @param int    $id     Current item ID.
     */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;


        if ($depth === 0) {

            $item_meta = $this->get_item_meta($item->ID);
            if($item_meta['is_mega_menu'] == 'yes' && class_exists( 'Elementor\Plugin' ) ){
                $classes[] = 'element-ready-mega-menu-item';
            }

            if(isset($this->elementor_settings['first_li_menu_pointer']) && $this->elementor_settings['first_li_menu_pointer'] !=''){
                $classes[] = $this->elementor_settings['first_li_menu_pointer'];
            }
            if(isset($this->elementor_settings['first_li_menu_hover_pointer']) && $this->elementor_settings['first_li_menu_hover_pointer'] !=''){
                $classes[] = $this->elementor_settings['first_li_menu_hover_pointer'];
            }
           
        }


        /**
         * Filter the CSS class(es) applied to a menu item's list item element.
         *
         * @since 3.0.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         * @param array  $classes The CSS classes that are applied to the menu item's `<li>` element.
         * @param object $item    The current menu item.
         * @param array  $args    An array of {@see wp_nav_menu()} arguments.
         * @param int    $depth   Depth of menu item. Used for padding.
         */
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
        // New
        $class_names .= ' nav-item';
        $item_meta = $this->get_item_meta($item->ID);
      
        $is_megamenu_item = $this->is_megamenu_item($item_meta, $args->menu);
      
        if (in_array('menu-item-has-children', $classes) || $is_megamenu_item == true) {
            $class_names .= ' element-ready-dropdown-has '.$item_meta['vertical_megamenu_position'].' element-ready-dropdown-menu-'.$item_meta['megamenu_width_type'].'';
        }

        if ($is_megamenu_item == true) {
            $class_names .= ' element-ready-has-megamenu mg-menu';
        }

        if (in_array('current-menu-item', $classes)) {
            $class_names .= ' active';
        }


        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
        // New
        
        $data_attr = '';
       
        //
        $output .= $indent . '<li' . $id . $class_names . $data_attr . '>';
        $atts = array();
        $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
        $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
        $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
        $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

        $submenu_indicator = '';


       
        // New
        if ($depth === 0) {
            $atts['class'] = 'element-ready-menu-nav-link ';
         }
        if ($depth === 0 && in_array('menu-item-has-children', $classes)) {
            $atts['class']   .= ' element-ready-menu-dropdown-toggle';
        }
       
        if ($depth > 0) {
            $manual_class = array_values($classes)[0] .' '. 'dropdown-item element-ready-dropdown-item';
            $atts ['class']= $manual_class;
        }
        if (in_array('current-menu-item', $item->classes)) {
            $atts['class'] .= ' active';
        }

      
        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }
        $item_output = $args->before;
        // New

        //
        $item_output .= '<a'. $attributes .'>';

        if ($depth === 0 && in_array('menu-item-has-children', $classes)) {
            
            if( isset( $this->elementor_settings['menu_before_drop_icon'] ) && $this->elementor_settings['menu_before_drop_icon'] !=''){
                $class_b_icon = $this->elementor_settings['menu_before_drop_icon'];
                $item_output .= sprintf('<i class="%1$s"></i>',$class_b_icon);
            }    
           
        }

        /** This filter is documented in wp-includes/post-template.php */
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        if( $this->is_megamenu($args->menu) == 1 && $is_megamenu_item){
            
            // add menu icon & style
            if( isset($this->elementor_settings['mega_menu_drop_icon']) && $this->elementor_settings['mega_menu_drop_icon'] !=''){
                if ($depth === 0) {
                    $mclass_icon = $this->elementor_settings['mega_menu_drop_icon'];
                    $item_output .= sprintf('<i class="%1$s"></i>',$mclass_icon);
                }
                
            }
        }

        if( isset($this->elementor_settings['menu_drop_icon']) ){
            if ($depth === 0 && in_array('menu-item-has-children', $classes)) {
                $class_icon = $this->elementor_settings['menu_drop_icon'];
                $item_output .= sprintf('<i class="%1$s"></i>',$class_icon);
            }
        } 

        if( isset($this->elementor_settings['submenu_menu_drop_icon']) ){
            if ($depth > 0 && in_array('menu-item-has-children', $classes)) {
                $class_icon = $this->elementor_settings['submenu_menu_drop_icon'];
                $item_output .= sprintf('<i class="%1$s"></i>',$class_icon);
            }
        } 
       

         // badge
         if(get_post_meta($item->ID,'_element_ready_menu_item_badge',true) !=''){

            $badge_color = get_post_meta($item->ID,'_element_ready_menu_item_badge_color',true);
            $badge_bgcolor = get_post_meta($item->ID,'_element_ready_menu_item_badge_bgcolor',true);
            $badge_bgcolor_s = '';
            $badge_color_s = '';
            if($badge_bgcolor == '#000000'){
                $badge_bgcolor = '';  
            }
            if($badge_color == '#000000'){
                $badge_color = '';  
            }
            if($badge_color !=''){
                $badge_color_s = "color:{$badge_color}";
            }
            if($badge_bgcolor !=''){
                $badge_bgcolor_s = ";background-color:{$badge_bgcolor}";
            }
            $badge_style  = "style={$badge_color_s}{$badge_bgcolor_s}";
            $item_output .= sprintf('<span class="badge badge-manu" %2$s> %1$s </span>',
            get_post_meta($item->ID,'_element_ready_menu_item_badge',true),
            $badge_style
        );  
        }
        // end badge
        
        $item_output .=  '</a>';
        $item_output .= $args->after;
        /**
         * Filter a menu item's starting output.
         *
         * The menu item's starting output only includes `$args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         *
         * @since 3.0.0
         *
         * @param string $item_output The menu item's starting HTML output.
         * @param object $item        Menu item data object.
         * @param int    $depth       Depth of menu item. Used for padding.
         * @param array  $args        An array of {@see wp_nav_menu()} arguments.
         */
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    /**
     * Ends the element output, if needed.
     *
     * @see Walker::end_el()
     *
     * @since 3.0.0
     *
     * @param string $output Passed by reference. Used to append additional content.
     * @param object $item   Page data object. Not used.
     * @param int    $depth  Depth of page. Not Used.
     * @param array  $args   An array of arguments. @see wp_nav_menu()
     */
    public function end_el( &$output, $item, $depth = 0, $args = array() ) {
       
       
        if ($depth === 0) {
            
            $output .= $this->element_content($item);
            $output .= "</li>\n";
        }
    }

    public function element_content($item){

        $content = '';
        if($this->elementor_settings['mega_menu_content'] == 'yes'){
            $item_meta = $this->get_item_meta($item->ID);
               
            if($item_meta['is_mega_menu'] == 'yes' && class_exists( 'Elementor\Plugin' ) ){
                $builder_post_title = 'dynamic-content-megamenu-menu-item' . $item->ID;
                $builder_post = get_page_by_title($builder_post_title, OBJECT, 'element_ready_content');
               
                $mega_menu_cls  = 'mega-menu element-ready-megamenu-section '.$this->elementor_settings['mega_menu_cls'];
                $content .= sprintf('<div class="%s">',$mega_menu_cls);
                if( $item_meta['content_id'] !='' ){
                    $elementor = \Elementor\Plugin::instance();
                    $content .= $elementor->frontend->get_builder_content_for_display( $item_meta['content_id'] );
                }else{
                    $content .= esc_html__('No content found', 'element-ready');
                }

                $content .= '</div>';
            } // end if
        }
      
      return $content;
    }
}
