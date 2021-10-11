<?php 

Class Element_Ready_Page {
  
    private static $instance = null;
  
    // The constructor is private
    // to prevent initiation with outer code.
    private function __construct(){
     
        add_action( 'admin_enqueue_scripts' , [ $this,'add_admin_scripts'] );
        add_action( 'admin_menu' , [ $this,'dashboard_menu_page'] );
        add_action( 'network_admin_menu' , [ $this,'dashboard_menu_page'] );
        add_action( 'admin_post_element_ready_components_options' , [ $this,'element_ready_components_options'] ); 
        add_action( 'admin_post_element_ready_modules_options' , [ $this,'element_ready_modules_options'] ); 
        add_action( 'admin_post_element_ready_api_data_options' , [ $this,'element_ready_api_data'] ); 
    }

    public function add_admin_scripts($handle){
      
      
        if( $handle == 'toplevel_page_'.ELEMENT_READY_SETTING_PATH ) {
          
            wp_enqueue_script('jquery-ui-tabs');
            wp_enqueue_style( 'element-ready-grid', ELEMENT_READY_ROOT_CSS .'grid.css' );
            wp_enqueue_style( 'magnific-popup', ELEMENT_READY_ROOT_CSS .'magnific-popup.css' );
            wp_enqueue_style( 'element-ready-admin', ELEMENT_READY_ROOT_CSS .'admin.css' );
            wp_enqueue_script( 'magnific-popup', ELEMENT_READY_ROOT_JS .'jquery.magnific-popup.min.js' ,array('jquery'), ELEMENT_READY_VERSION, true );
            wp_enqueue_script( 'element-ready-admin', ELEMENT_READY_ROOT_JS .'admin'.ELEMENT_READY_SCRIPT_VAR.'js' ,array('jquery','jquery-ui-tabs','magnific-popup'), ELEMENT_READY_VERSION, true );
           
           
            wp_localize_script( 'element-ready-admin', 'element_ready_obj',[
               'active' =>  isset($_GET['tabs'])?$_GET['tabs']:0,
            ] );
        }
    }
    

    function element_ready_api_data(){

       

        if ( !isset($_POST['_element_ready_api_data']) || !wp_verify_nonce($_POST['_element_ready_api_data'], 'element-ready-api-data')) {
            wp_redirect($_SERVER["HTTP_REFERER"]);
        }
       
        if( !isset($_POST['element-ready-api-data']) ){
            wp_redirect($_SERVER["HTTP_REFERER"]); 
        }
      
        // Save
        $validate_options = $this->validate_options($_POST['element-ready-api-data']);
        update_option('element_ready_api_data',$validate_options);
       
        if ( wp_doing_ajax() ){
            wp_die();
        }else{

            $url        = $_SERVER["HTTP_REFERER"];
            $return_url = add_query_arg( array(
                'tabs' => 3,
            ), $url );

            wp_redirect($return_url);
           
        }
    }

    function element_ready_components_options(){
       
        // Verify if the nonce is valid
        if ( !isset($_POST['_element_ready_components']) || !wp_verify_nonce($_POST['_element_ready_components'], 'element-ready-components')) {
            wp_redirect($_SERVER["HTTP_REFERER"]);
        }
       
        if( !isset($_POST['element-ready-components']) ){
            wp_redirect($_SERVER["HTTP_REFERER"]); 
        }
            
        // Save
        if( isset($_POST['element-ready-components']['all-enable']) ){
            
            $validate_options = $this->validate_all_options( $this->components(true),true );
           
        }else{
            $validate_options = $this->validate_options( $_POST['element-ready-components'] );
        }
       
        update_option('element_ready_components',$validate_options);
       
        if ( wp_doing_ajax() ){
            
            wp_die();
        }else{

            $url        = $_SERVER["HTTP_REFERER"];
            $return_url = add_query_arg( array(
                'tabs' => 1,
            ), $url );
            wp_redirect($return_url);
        }
        
    } 
    
    function element_ready_modules_options(){
       
        // Verify if the nonce is valid
        if ( !isset($_POST['_element_ready_modules']) || !wp_verify_nonce($_POST['_element_ready_modules'], 'element-ready-modules')) {
            wp_redirect($_SERVER["HTTP_REFERER"]);
        }
       
        if( !isset($_POST['element-ready-modules']) ){
            wp_redirect($_SERVER["HTTP_REFERER"]); 
        }
       
        if( !isset($_POST['element-ready-modules'])) {
            wp_redirect($_SERVER["HTTP_REFERER"]);  
        }
    
        // Save
        if( isset($_POST['element-ready-modules']['all-enable']) ){
            $validate_options = $this->validate_all_options($this->modules(true),true);
        }else{
           
            $validate_options = $this->validate_options($_POST['element-ready-modules']);
        }
        update_option('element_ready_modules',$validate_options);
       
        if ( wp_doing_ajax() ){
            wp_die();
        }else{
           
            $url = $_SERVER["HTTP_REFERER"];
            $return_url = add_query_arg( array(
                'tabs' => 2,
            ), $url );
          
            wp_redirect($return_url);
        }
    }
    
    public function validate_options($options = [], $all=false){
        
        if(!is_array($options)){
            return $options;
        }
       
        $return_options = [];
        
        foreach( $options as $key => $value ){

            if($all){
                
                if( isset($value['is_pro']) && $value['is_pro'] == 1){
                   
                    $return_options[$key] = 'on'; 
                }else{
                    $return_options[$key] = ''; 
                }
                 
            }else{
                $return_options[$key] = sanitize_text_field($value); 
            }
           
        }

        return $return_options;
    }

    public function validate_all_options($options = [], $all = false){
        
        if(!is_array($options)){
            return $options;
        }
               
        foreach( $options as $key => $value ){

            if( $all ){
                
                if( isset($value['is_pro']) && $value['is_pro'] == 1){
                    unset($options[$key]); 
                }else{
                    $options[$key] = 'on'; 
                }
                 
            }else{
                $options[$key] = 'on'; 
            }
           
        }

        return $options;
    }

    public function get_transform_options($options = [], $key = false){

        if( !is_array($options) || $key == false ){
            return $options;
        }

        $db_option      = get_option( $key );
       
        $return_options = $options;

        foreach( $options as $key => $value ){

            if( isset($db_option[$key]) ){
                $return_options[$key]['default'] = 1; 
            }else{
                $return_options[$key]['default'] = 0;    
            }  
        
        }

        return $return_options; 
    }

    public function get_transform_inputs_options($options = [], $key = false){

        if( !is_array($options) || $key == false ){
            return $options;
        }

        $db_option  = get_option( $key );

        $return_options = $options;
        
        foreach( $options as $key => $value ){

            if( isset($db_option[$key]) ){
                $return_options[$key]['default'] = $db_option[$key]; 
            }else{
                $return_options[$key]['default'] = '';    
            }

        }
        return $return_options; 
    }

    public function components( $all = false ){
        include( dirname(__FILE__) . '/controls/Components.php' );
       
        if($all){
           
            return $return_arr;
        }
      
        $return_arr = $this->get_transform_options($return_arr,'element_ready_components');
       
        return $return_arr;
    }

    public function modules( $all = false ){
        include( dirname(__FILE__) . '/controls/Modules.php' ); 
      
        if($all){
        
            return $return_arr;
        } 
    
        $return_arr = $this->get_transform_options($return_arr,'element_ready_modules');
        
        return $return_arr;
    }

    public function api_data(){
        include( dirname(__FILE__) . '/controls/Api.php' );
     
        $return_arr = $this->get_transform_inputs_options($return_arr,'element_ready_api_data');
        return $return_arr;
    }

    // The object is created from within the class itself
    // only if the class has no instance.
    public static function getInstance(){
        if (self::$instance == null){
            self::$instance = new Element_Ready_Page();
        }
        return self::$instance;
    }

    public function dashboard_menu_page_content(){
       
        require_once( __DIR__ . '/views/dashboard.php' );
    }

    function dashboard_menu_page() {

        add_menu_page( 
            esc_html__( 'Element Ready' , 'element-ready' ),
            esc_html__('Element Ready' , 'element-ready'),
            'manage_options',
            ELEMENT_READY_SETTING_PATH,
            [$this,'dashboard_menu_page_content'],
            ELEMENT_READY_ROOT_IMG . 'icon.png',
            4
        ); 

        if ( !is_plugin_active( 'element-ready-pro/index.php' ) ) {
            add_submenu_page(
                ELEMENT_READY_SETTING_PATH,
                esc_html__( 'Go Pro', 'element-ready' ),
                esc_html__( 'Go Pro 🔥', 'element-ready' ),
                'manage_options',
                ELEMENT_READY_DEMO_URL,
                '',
                100
            );
        } 
    
    }

    public function _submenu_order($_ord){
      
        global $submenu;
       
        foreach($submenu as $slug => $menu){
            
            if(ELEMENT_READY_SETTING_PATH == $slug){
               
                $arr = array();

                 $arr[] = $submenu[$slug][0]; 
                 $arr[] = $submenu[$slug][2]; 
                 $arr[] = $submenu[$slug][3]; 
                 if(isset($submenu[$slug][4])){
                    $arr[] = $submenu[$slug][4];  
                 }
                 if(isset($submenu[$slug][5])){
                    $arr[] = $submenu[$slug][5];  
                 }
                 if(isset($submenu[$slug][6])){
                    $arr[] = $submenu[$slug][6];  
                 }
                 if(isset($submenu[$slug][7])){
                    $arr[] = $submenu[$slug][7];  
                 }
                 $arr[] = $submenu[$slug][1]; 
              
                // // // Remove the originals
                 unset($submenu[$slug][0]);
                 unset($submenu[$slug][1]);
                 unset($submenu[$slug][2]);
                 unset($submenu[$slug][3]);
                 if(isset($submenu[$slug][4])){
                    unset($submenu[$slug][4]);
                 }
                 if(isset($submenu[$slug][5])){
                    unset($submenu[$slug][5]);
                 }
                 if(isset($submenu[$slug][6])){
                    unset($submenu[$slug][6]);
                 }
                 if(isset($submenu[$slug][7])){
                    unset($submenu[$slug][7]);
                 }
                // // // Add newly items to the list
                 $submenu[$slug] += $arr;
            }
        }
    
        return $_ord;
    }

}

Element_Ready_Page::getInstance();