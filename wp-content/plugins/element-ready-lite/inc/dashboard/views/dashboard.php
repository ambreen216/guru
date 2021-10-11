<div class="element-ready-admin-dashboard-container wrap">

    <div id="element-ready-adpage-tabs" class="element-ready-adpage-tabs">

        <div class="element-ready-nav-wrapper">
            <div class="element-ready-logo">
                <a href="http://quomodosoft.com/"><img src="<?php echo esc_url(ELEMENT_READY_ROOT_IMG.'main_logo.svg'); ?>" alt="<?php echo esc_attr__('logo','element-ready'); ?>"></a>
            </div>
            <ul>
                <li class="element-ready-dashboard">
                    <a href="#element-ready-adpage-tabs-1">
                        <i class="dashicons dashicons-admin-home"></i>
                        <h3 class="element-ready-title"><?php echo esc_html__('Dashboard','element-ready'); ?> </h3>
                        <span><?php echo esc_html__('General Info','element-ready'); ?></span>
                    </a>
                </li>
                <li class="element-ready-component">
                    <a href="#element-ready-adpage-tabs-2">
                        <i class="dashicons dashicons-editor-alignleft"></i>
                        <h3><?php echo esc_html__('Components','element-ready'); ?></h3>
                        <span><?php echo esc_html__('Element Ready Widgets','element-ready'); ?></span>
                    </a>
                </li>
                <li class="element-ready-modules">
                    <a href="#element-ready-adpage-tabs-4">
                        <i class="dashicons dashicons-id-alt"></i>
                        <h3><?php echo esc_html__('Modules','element-ready'); ?></h3>
                        <span><?php echo esc_html__('Element Ready Features','element-ready'); ?></span>
                    </a>
                </li>
                <li class="element-ready-api-data">
                    <a href="#element-ready-adpage-tabs-5">
                        <i class="dashicons dashicons-list-view"></i>
                        <h3><?php echo esc_html__('Api Data','element-ready'); ?></h3>
                        <span><?php echo esc_html__('Features Api Data','element-ready'); ?></span>
                    </a>
                </li>
            </ul>
            <?php if( !defined( 'ELEMENT_READY_PRO' ) ): ?>
                <div class="element-ready-go-pro-btn">
                    <a target="_blank" href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>">
                        <i class="dashicons dashicons-awards"></i>
                        <h3><?php echo esc_html__('Go Pro','element-ready'); ?></h3>
                    </a>
                </div>
            <?php endif; ?>
        </div>
        <div id="element-ready-adpage-tabs-1" class="element-ready-adpage-tab-content element-ready-dashboard dashboard">
            <div class="quomodo-container-wrapper">
                <div class="quomodo-row-wrapper">
                    <div class="quomodo-col-wrapper">
                        <div class="element-ready-dashboard-topbar">
                            <div class="element-ready-title">
                                <h3 class="title"><i class="dashicons dashicons-admin-home"></i> <?php echo esc_html__('Dashboard','element-ready'); ?> </h3>
                            </div>
                        </div>
                        <div class="element-ready-content">
                            <div class="element-ready-deshboard-wrapper">
                                <div class="quomodo-row">
                                    <div class="quomodo-col-lg-12">
                                        <div class="quomodo-dashboard-thumb">
                                            <img src="<?php echo esc_url(ELEMENT_READY_ROOT_IMG); ?>banner.jpg" alt="<?php echo esc_html__('Dashboard Banner','element-ready'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="quomodo-row justify-content-center">
                                    <div class="quomodo-col-lg-4">
                                        <div class="quomodo-section-title">
                                            <span><?php echo esc_html__('Video Documentation','element-ready'); ?></span>
                                            <h3 class="quomodo-title"><?php echo esc_html__('Enrich Your Addon Experience With Elements Ready','element-ready') ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="quomodo-row justify-content-center">
                                    <div class="quomodo-col-lg-7">
                                        <div class="quomodo-deshboard-play-box-wrapper">
                                            <div class="quomodo-deshboard-play-box">
                                                <iframe width="560" height="460" src="https://www.youtube.com/embed/h0ePGHmUH3c" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                <div class="quomodo-deshboard-play-overlay">
                                                    <div class="quomodo-deshboard-play-btn">
                                                        <a class="elements-ready-video-popup" href="https://www.youtube.com/watch?v=h0ePGHmUH3c?autoplay=1">
                                                            <img src="<?php echo esc_url(ELEMENT_READY_ROOT_IMG); ?>dashboard-play.svg" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quomodo-row  justify-content-center">
                                    <div class="quomodo-col-lg-5">
                                        <div class="quomodo-deshboard-doc">
                                            <h3 class="quomodo-title"><?php echo esc_html__('Easy documentation','element-ready'); ?></h3>
                                            <p><?php echo esc_html__('Easy to use element ready plugins with video tutorial and screenshot instructions'); ?></p>
                                            <a href="<?php echo esc_url(ELEMENT_READY_DEMO_URL.'docs/element-ready'); ?>"><?php echo esc_html__('Get Started','element-ready'); ?></a>
                                            <div class="quomodo-thumb">
                                                <img src="<?php echo esc_url(ELEMENT_READY_ROOT_IMG); ?>qoc-thumb.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quomodo-col-lg-5">
                                        <div class="quomodo-deshboard-doc quomodo-deshboard-feature">
                                            <h3 class="quomodo-title"><?php echo esc_html__('Do you need  any feature','element-ready'); ?></h3>
                                            <p><?php echo esc_html__('The ELement Ready is Exclusive Addon for Elementor. ELement Ready has 70+ widgets , 400+ ready elements, 10+ page and more features','element-ready'); ?> </p>
                                            <a target="_blank" href="<?php echo esc_url(ELEMENT_READY_DEMO_URL.'features-request'); ?>"><?php echo esc_html__('Feature Requested','element-ready'); ?></a>
                                            <div class="quomodo-thumb">
                                                <img src="<?php echo esc_url(ELEMENT_READY_ROOT_IMG); ?>feature-thumb.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quomodo-col-lg-10">
                                        <div class="quomodo-deshboard-doc quomodo-deshboard-support">
                                            <h3 class="quomodo-title"><?php echo esc_html__('Help and support','element-ready'); ?></h3>
                                            <p><?php echo esc_html__( 'Facing any technical issue? Need consultation with an expert? Simply take our live chat support option.', 'element-ready' ) ?></p>
                                            <a target="_blank" href="<?php echo esc_url(ELEMENT_READY_DEMO_URL.'customer'); ?>"><?php echo esc_html__('Get Support','element-ready'); ?></a>
                                            <div class="quomodo-thumb">
                                                <img src="<?php echo esc_url(ELEMENT_READY_ROOT_IMG); ?>support-thumb.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if(!defined('ELEMENT_READY_PRO')): ?>
                                <div class="quomodo-row justify-content-center">
                                    <div class="quomodo-col-lg-10">
                                        <div class="quomodo-deshboard-pro-buy-box">
                                            <div class="quomodo-row justify-content-center">
                                                <div class="quomodo-col-lg-6">
                                                    <div class="quomodo-deshboard-pro-buy-content">
                                                        <h3 class="quomodo-title"><?php echo esc_html__('Fasten your website creation','element-ready'); ?></h3>
                                                        <p><?php echo esc_html__('Whether you are an established business or a startup, ensuring you have a well thought out digital marketing plan.','element-ready'); ?></p>
                                                        <a target="_blank" href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>pricing/"><?php echo esc_html__('Buy Pro','element-ready'); ?></a>
                                                        <ul>
                                                            <li><a target="_blank" href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>"><img src="<?php echo esc_url(ELEMENT_READY_ROOT_IMG); ?>elements-link-1.svg" alt=""> <?php echo esc_html('www.elementsready.com'); ?></a></li>
                                                            <li><a target="_blank" href="<?php echo esc_url('wordpress.org/plugins/element-ready-lite'); ?>"><img src="<?php echo esc_url(ELEMENT_READY_ROOT_IMG); ?>elements-link-2.svg" alt=""> <?php echo esc_html('wordpress.org/plugins/element-ready-lite'); ?></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="element-ready-adpage-tabs-2" class="element-ready-adpage-tab-content element-ready-components components">
            <form id="element-ready-admin-component-form" class="element-ready-components-action quomodo-component-data" action="<?php echo admin_url('admin-post.php') ?>" method="post">
                <div class="quomodo-container-wrapper">
                    <div class="quomodo-row-wrapper">
                        <div class="element-ready-component-form-wrapper components">
                            <div class="element-ready-components-topbar">
                                <div class="element-ready-title">
                                    <h3 class="title"><i class="dashicons dashicons-editor-alignleft"></i> <?php echo esc_html__( 'components','element-ready' ) ?></h3>
                                </div>
                                <div class="element-ready-savechanges">
                                    <div class="element-ready-admin-search">
                                        <input placeholder="<?php echo esc_attr__( 'Search here', 'element-ready' ) ?>" class="quomodo_text" id="element-ready-widgets-search" type="search">
                                    </div>
                                    <div class="element-ready-check-all">
                                        <div class="quomodo_switch_common element-ready-common">
                                            <div class="quomodo_sm_switch element-ready-enable-all-switch">
                                                <strong>
                                                    <?php echo esc_html__('Enable All','element-ready'); ?>  
                                                </strong>
                                                <input  name="element-ready-components[all-enable]"  onchange="this.form.submit()" class="quomodo_switch" id="quomodo-components-all-enable" type="checkbox">
                                                <label for="quomodo-components-<?php echo esc_attr__('all-enable'); ?>"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="element-ready-check-all">
                                        <div class="quomodo_switch_common element-ready-common">
                                            <div class="quomodo_sm_switch element-ready-enable-all-switch" id="quomodo-components-all-disable">
                                                <strong>
                                                    <?php echo esc_html__('Disable All','element-ready'); ?>  
                                                </strong>
                                               
                                                <label for="quomodo-components-<?php echo esc_attr__('all-disable'); ?>"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="element-ready-admin-button">
                                        <button type="submit" class="element-ready-component-submit button element-ready-submit-btn">
                                            <i class="dashicons dashicons-yes"></i>
                                            <?php echo esc_html__('Save Change','element-ready'); ?>
                                         </button>
                                    </div>

                                </div>
                            </div>
                            <div class="quomodo-row element-ready-component-row">
                                <?php $components_settings = $this->components(); ?>
                                <?php if( is_array( $components_settings ) ): ?>
                                <?php foreach($components_settings as $item_key => $item): ?>
                                <div class="element-ready-col quomodo-col-xl-3 quomodo-col-lg-4 quomodo-col-md-6">
                                    <div class="quomodo_switch_common element-ready-common <?php echo esc_attr($item['is_pro']?'element-ready-pro element-ready-dash-modal-open-btn':''); ?>">
                                   
                                        <div class="quomodo_sm_switch">
                                            <?php if(isset($item['demo_link']) && $item['demo_link'] !=''): ?>
                                            <a target="_blank" href="<?php echo esc_url($item['demo_link']); ?>" class="element-ready-data-tooltip"><?php echo esc_html__('view demo','element-ready'); ?></a>
                                            <?php endif; ?>
                                            <strong><?php echo esc_html($item['lavel']); ?>
                                                <?php if($item['is_pro']): ?>
                                                    <span> <?php echo esc_html__( 'PRO', 'element-ready' ) ?> </span>
                                                <?php endif; ?>    
                                            </strong>
                                            <input <?php echo esc_attr($item['is_pro']?'readonly disabled':''); ?> <?php echo esc_attr($item['default']==1?'checked':''); ?> name="element-ready-components[<?php echo esc_attr($item_key); ?>]" class="quomodo_switch <?php echo esc_attr($item_key); ?>" id="quomodo-components-<?php echo esc_attr($item_key); ?>" type="checkbox">
                                            <label for="quomodo-components-<?php echo esc_attr($item_key); ?>"></label>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <input type="hidden" name="action" value="element_ready_components_options">
                        <?php echo wp_nonce_field('element-ready-components', '_element_ready_components'); ?>
                    </div>
                </div> <!-- container end -->
            </form>
        </div>
        <div id="element-ready-adpage-tabs-4" class="element-ready-adpage-tab-content element-ready-modules modules">
            <form class="element-ready-modules-action quomodo-modules-data" action="<?php echo admin_url('admin-post.php') ?>" method="post">
                <div class="quomodo-container-wrapper">
                    <div class="quomodo-row-wrapper">
                        <div class="element-ready-modules-form-wrapper modules">
                            <div class="element-ready-components-topbar">
                                <div class="element-ready-title">
                                    <h3 class="title"><i class="dashicons dashicons-id-alt"></i> <?php echo esc_html__( 'Modules', 'element-ready' ) ?> </h3>
                                </div>
                                <div class="element-ready-savechanges">
                                   
                                    <div class="element-ready-admin-search">
                                        <input placeholder="<?php echo esc_attr__( 'Search here', 'element-ready' ) ?>" class="quomodo_text" id="element-ready-modules-search" type="search">
                                    </div>
                                    <div class="element-ready-check-all">
                                        <div class="quomodo_switch_common element-ready-common">
                                            <div class="quomodo_sm_switch element-ready-enable-all-switch">
                                                <strong>
                                                       <?php echo esc_html__('Enable All','element-ready'); ?>  
                                                </strong>
                                                <input  name="element-ready-modules[all-enable]"  onchange="this.form.submit()" class="quomodo_switch" id="element-ready-modules-all-enable" type="checkbox">
                                                <label for="element-ready-modules-all-enable"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="element-ready-admin-button">
                                        <button type="submit" class="element-ready-component-submit button element-ready-submit-btn">
                                            <i class="dashicons dashicons-yes"></i>
                                            <?php echo esc_html__('Save Change','element-ready'); ?>
                                         </button>
                                    </div>
                                </div>
                            </div>
                            <div class="quomodo-row element-ready-modules-row">
                                <?php $modules_settings = $this->modules(); ?>
                                <?php if( is_array( $modules_settings ) ): ?>
                                    <?php foreach($modules_settings as $item_key => $item): ?>
                                        <div class="element-ready-col quomodo-col-xl-3 quomodo-col-lg-4 quomodo-col-md-6">
                                            <div class="quomodo_switch_common element-ready-common <?php echo esc_attr($item['is_pro']?'element-ready-pro element-ready-dash-modal-open-btn':''); ?>">
                                                <div class="quomodo_sm_switch">
                                                    <?php if(isset($item['demo_link']) && $item['demo_link'] !=''): ?>
                                                        <a href="<?php echo esc_url($item['demo_link']); ?>" class="element-ready-data-tooltip"><?php echo esc_html__('view demo','element-ready'); ?></a>
                                                    <?php endif; ?>
                                                    <strong>
                                                        <?php echo esc_html($item['lavel']); ?>
                                                        <?php if($item['is_pro']): ?>
                                                            <span> <?php echo esc_html__( 'PRO', 'element-ready' ) ?> </span>
                                                        <?php endif; ?>
                                                    </strong>
                                                    
                                                    <input <?php echo esc_attr($item['is_pro']?'readonly disabled':''); ?> <?php echo esc_attr($item['default']==1?'checked':''); ?> name="element-ready-modules[<?php echo esc_attr($item_key); ?>]" class="quomodo_switch <?php echo esc_attr($item_key); ?>" id="quomodo-modules-<?php echo esc_attr($item_key); ?>" type="checkbox">
                                                    <label for="quomodo-modules-<?php echo esc_attr($item_key); ?>"></label>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <input type="hidden" name="action" value="element_ready_modules_options">
                        <?php echo wp_nonce_field('element-ready-modules', '_element_ready_modules'); ?>
                    </div>
                </div> <!-- container end -->
            </form>
        </div>
        <div id="element-ready-adpage-tabs-5" class="element-ready-adpage-tab-content element-ready-api-data api-data">

            <form class="element-ready-api-data-action quomodo-api-data" action="<?php echo admin_url('admin-post.php') ?>" method="post">
                <div class="quomodo-container-wrapper">
                    <div class="quomodo-row-wrapper">
                        <div class="element-ready-api-data-form-wrapper api-data">
                            <div class="element-ready-components-topbar">
                                <div class="element-ready-title">
                                    <h3 class="title"><i class="dashicons dashicons-list-view"></i> <?php echo esc_html__('Api data','element-ready'); ?></h3>
                                </div>
                                <div class="element-ready-savechanges">
                                    <button type="submit" class="element-ready-component-submit button element-ready-submit-btn"><i class="dashicons dashicons-yes"></i> <?php echo esc_html__('Save Change','element-ready'); ?></button>
                                </div>
                            </div>
                            <div class="quomodo-row">
                                <?php $user_data_settings = $this->api_data(); ?>
                                <?php if( is_array( $user_data_settings ) ): ?>
                                <?php foreach($user_data_settings as $item_key => $item): ?>
                                    <div class="element-ready-col quomodo-col-md-6">
                                        <div class="element-ready-data">
                                          
                                            <strong><?php echo esc_html($item['lavel']); ?></strong>
                                            <?php if(isset($item['demo_link']) && $item['demo_link'] !=''): ?>
                                                <a target="_blank" href="<?php echo esc_url($item['demo_link']); ?>" class="element-ready-data-tooltip"><?php echo esc_html__('view doc','element-ready'); ?></a>
                                            <?php endif; ?>
                                            <input value="<?php echo esc_attr($item['default']); ?>" name="element-ready-api-data[<?php echo esc_attr($item_key); ?>]" class="quomodo_text <?php echo esc_attr($item_key); ?>" id="quomodo-api-data-<?php echo esc_attr($item_key); ?>" type="<?php echo esc_attr($item['type']); ?>">
                                            <label for="quomodo-api-data-<?php echo esc_attr($item_key); ?>"></label>
                                          
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <input type="hidden" name="action" value="element_ready_api_data_options">
                        <?php echo wp_nonce_field('element-ready-api-data', '_element_ready_api_data'); ?>
                    </div>
                </div> <!-- container end -->
            </form>

        </div>
    </div>

</div>

<div id="element-ready-modal-body" class="element-ready-modal">
    <div class="element-ready-modal-content">
        <div class="element-ready-modal-body">
            <span class="close element-ready-modal-close">&times;</span>
            <div class="element-ready-content">
                <a class="element-ready-modal-link" href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>"> <?php echo esc_html__('GO PRO','element-ready'); ?> </a>
                <img class="element-ready-modal-img" src="<?php echo esc_url(ELEMENT_READY_ROOT_IMG.'main_logo.svg'); ?>" alt="<?php echo esc_attr__('GO PRO','element-ready'); ?>">
                <div class="element-ready-modal-text">
                    <p> <?php echo esc_html__( 'To get this feature please purchase the PRO version.
VALUE you will get with the Pro', 'element-ready' ); ?> </p>
                    <ul>

                        <li><a href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>"><?php echo esc_html__( 'Cross Domain Copy Paste', 'element-ready' ); ?></a></li>
                        <li><a href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>"><?php echo esc_html__( 'Live Copy', 'element-ready' ); ?></a></li>
                        <li><a href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>"><?php echo esc_html__( 'Unlimited Ready section', 'element-ready' ); ?></a></li>
                        <li><a href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>"><?php echo esc_html__( 'Conditional Content', 'element-ready' ); ?></a></li>
                        <li><a href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>"><?php echo esc_html__( 'Sticky Section', 'element-ready' ); ?></a></li>
                        <li><a href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>"><?php echo esc_html__( 'Header Footer', 'element-ready' ); ?></a></li>
                        <li><a href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>"><?php echo esc_html__( 'Mega Menu Builder', 'element-ready' ); ?></a></li>
                        <li><a href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>"><?php echo esc_html__( 'Assets Handling', 'element-ready' ); ?></a></li>
                        <li><a href="<?php echo esc_url(ELEMENT_READY_DEMO_URL); ?>"><?php echo esc_html__( 'Many more..............', 'element-ready' ); ?></a></li>

                  
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


