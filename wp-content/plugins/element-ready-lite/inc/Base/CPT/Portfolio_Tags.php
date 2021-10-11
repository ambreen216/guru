<?php

/**
 * @package  Element Ready
 */
namespace Element_Ready\Base\CPT;
use Element_Ready\Api\Callbacks\Custom_Taxonomy;
class Portfolio_Tags extends Custom_Taxonomy
{
    public $name         = '';
    public $menu         = 'portfolio_tags';
    public $textdomain   = '';
    public $posts        = array();
    public $public_quary = false;
    public $slug         = 'portfolio_tags';
    public $search       = true;

	public function register() {
        $this->name = esc_html__('Portfolio Tags','element-ready');
    	add_action( 'init', array( $this, 'create_taxonomy' ) );
    }
    
    public function create_taxonomy(){
        $this->init('portfolio_tags', esc_html__('Portfolio Tags','element-ready'), esc_html__('Portfolio Tags','element-ready'), 'portfolio');
       $this->register_taxonomy();
    }
}