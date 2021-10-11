<div id="element-ready-mega-menu-item-settings" class="modal element-ready-mega-menu-item-settings">

  <!-- Modal content -->
  <div class="modal-content">
    <h3 class="menu-name element-ready-menu-popup-title"> <?php echo esc_html__('Menu settings','element-ready'); ?>  </h3>
    <span class="close">&times;</span>
    <hr/> 
    <div class="element-ready-mega-menu-item">
        <div class="switch_common">

           <div class="sm_switch">
                <h5><strong><?php esc_html_e( "Is Mega Menu?", 'element-ready' ); ?></strong></h5>
                <input class="switch alignright pull-right-input is-mega-menu" id="element-ready-mega-menu-item-is-mega-menu" type="checkbox">
                <label for="element-ready-mega-menu-item-is-mega-menu"></label>
            </div>
           
        </div>

        <div class="element-ready-mega-menu-elementor-editor-link">
            <a href="#" class="button button-primary button-large qelementor-edit-link"> <?php echo esc_html__( 'Edit Content', 'element-ready' ) ?> </a>
        </div>
        
        <div class="element-ready-mega-menu-update">
                <span class='element-ready-mega-menu-update-spinner'>
                    <img src="<?php echo esc_url(ELEMENT_READY_MEGA_MENU_MODULE_URL.'/assets/ajax-loader.gif'); ?>" alt="loader" />
                </span>
            <button class="button button-primary button-large element-ready-setting-update"> <?php echo esc_html__( 'Save', 'element-ready' ) ?> </button>
        </div>
    </div> 
  
    
  </div>

</div>