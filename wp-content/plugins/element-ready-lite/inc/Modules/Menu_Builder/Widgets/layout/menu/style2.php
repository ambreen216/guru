
   <?php if($settings['header_logo_enable'] == 'yes'): ?> 
    <div class="h4-header main-section element-ready-style2">
        <?php if($settings['main_section_container_disable'] =='yes'): ?>
        <div class="<?php echo esc_attr($settings['main_container_fluid_enable'] == 'yes'?'container-fluid':'container') ?>">
            <?php endif; ?>
            <div class="row align-items-center">
                        <?php if($settings['header_logo_enable'] == 'yes'): ?>
                            <?php
                                    $this->add_render_attribute(
                                        'header_logo_warapper',
                                        [
                                            'class' => 'link',
                                            'href' =>  esc_url($settings['header_website_link']['url']), 
                                            'target' => $settings['header_website_link']['is_external'] == 'on'?'_blank':'self',
                                            'rel' => $settings['header_website_link']['nofollow'] == 'on'?'nofollow':''
                                        ]
                                    );
                                    
                            ?>
                <div class="col-lg-2 col-sm-3 col-6">
                    <div class="logo">
                        
                        <?php echo  $settings['header_logo_type'] == 'text'?'<h1 class="logo-title">':''; ?> 
                            <a <?php echo $this->get_render_attribute_string( 'header_logo_warapper' ); ?>>
                                <?php if( $settings['header_logo_type'] == 'logo' ): ?>

                                        <?php if( $settings['header_logo']['url'] !='' ): ?>
                                            <img src="<?php echo esc_url($settings['header_logo']['url']); ?>" alt="<?php echo esc_attr__('logo','element-ready'); ?>"/>
                                        <?php endif; ?>
                                    <?php elseif( $settings['header_logo_type'] == 'svg' ): ?>
                                        <?php \Elementor\Icons_Manager::render_icon( $settings['header_svg_logo'], [ 'aria-hidden' => 'true' ] ); ?>
                                    <?php elseif( $settings['header_logo_type'] == 'text' ): ?>
                                        <?php echo esc_html($settings['header_text_logo']); ?>
                                    <?php endif; ?>
                            
                            </a>
                        <?php echo  $settings['header_logo_type'] == 'text'?'</h1>':''; ?> 

                    </div>
                    
                </div>
                <?php endif; ?> 
                <div class="<?php echo esc_attr($settings['header_logo_enable'] == 'yes')?'col-lg-10 col-sm-9 col-6':'col-lg-12' ?> ">
                    <div class="main-menu stellarnav light right desktop main-menu-style-2 d-flex align-items-center" id="h4_menu">
                        <?php if( $settings['style2_reverse_menu'] !='yes' ): ?>
                            <?php 
                                wp_nav_menu($args);
                            ?>
                        <?php endif; ?>
                        <div class="h4-menu-bar d-none d-lg-block">
                            <span class="h4-menu-show" id="h4_menu_show" style="display: block;">
                                <i id="h4ms_first" class="first fa fa-align-justify" style=""></i>
                            </span>
                        </div>
                        <?php if( $settings['style2_reverse_menu'] =='yes' ): ?>
                            <?php 
                                wp_nav_menu($args);
                            ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php if($settings['main_section_container_disable'] =='yes'): ?>
            </div>
        <?php endif; ?>
    </div>
    <?php else: ?>
        <div class="main-menu main-section stellarnav main-menu-style-2 light right desktop d-flex align-items-center" id="h4_menu">
            <?php if( $settings['style2_reverse_menu'] !='yes' ): ?>
                <?php 
                    wp_nav_menu($args);
                ?>
            <?php endif; ?>
            <div class="h4-menu-bar d-none d-lg-block">
                <span class="h4-menu-show element-ready-hamburger" id="h4_menu_show" style="display: block;">
                    <?php if( $settings['mobile_menu_icon']['library'] !='' ): ?>
                        <?php \Elementor\Icons_Manager::render_icon( $settings['mobile_menu_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    <?php else: ?>   
                        <i id="h4ms_first" class="first fa fa-align-justify" style=""></i>
                    <?php endif; ?>
                    
                </span>
            </div>
            <?php if( $settings['style2_reverse_menu'] =='yes' ): ?>
                <?php 
                    wp_nav_menu($args);
                ?>
            <?php endif; ?>
        </div>
   <?php endif; ?>

  

