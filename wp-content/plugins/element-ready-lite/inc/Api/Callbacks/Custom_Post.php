<?php 
namespace Element_Ready\Api\Callbacks;

abstract Class Custom_Post{

    public function init( $type, $singular_label, $plural_label, $settings = array() ){
        
        $default_settings = array(

            'labels' => array(
                'name'               => esc_html__($plural_label, 'element-ready'),
                'singular_name'      => esc_html__($singular_label, 'element-ready'),
                'add_new_item'       => esc_html__('Add New '.$singular_label, 'element-ready'),
                'edit_item'          => esc_html__('Edit '.$singular_label, 'element-ready'),
                'new_item'           => esc_html__('New '.$singular_label, 'element-ready'),
                'view_item'          => esc_html__('View '.$singular_label, 'element-ready'),
                'search_items'       => esc_html__('Search '.$plural_label, 'element-ready'),
                'not_found'          => esc_html__('No '.$plural_label.' found', 'element-ready'),
                'not_found_in_trash' => esc_html__('No '.$plural_label.' found in trash', 'element-ready'),
                'parent_item_colon'  => esc_html__('Parent '.$singular_label, 'element-ready'),
                'menu_name'          => esc_html__($plural_label,'element-ready')
            ),

            'public'        => true,
            'has_archive'   => true,
            'menu_icon'     => '',
            'menu_position' => 20,
            'supports'      => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'rewrite' => array(
                'slug' => sanitize_title_with_dashes($plural_label)
            )
        );

        $this->posts[$type] = array_merge($default_settings, $settings);
    }

    public function register_custom_post(){

        foreach($this->posts as $key => $value) {
            register_post_type($key, $value);
            flush_rewrite_rules( false );
        }

    }
}
