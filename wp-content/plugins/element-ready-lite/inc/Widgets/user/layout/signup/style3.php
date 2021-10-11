<?php
       
   
    if( isset( $_SESSION[ 'element_ready_quomodo_reg_msg' ] ) ){
    
        $errors = $_SESSION["element_ready_quomodo_reg_msg"];      
    }else{
        
        if( isset( $_SESSION[ 'element_ready_quomodo_reg_msg_success' ] ) ) {

            echo '<h3 class="success">'.$_SESSION[ 'element_ready_quomodo_reg_msg_success' ].'</h3>'; 
        }
    }

           

?>

<?php if( isset($errors) && count( $errors) ): ?>

<ul class="errors">

    <?php foreach($errors as $error): ?>
        <li> <?php echo wp_kses_post($error); ?> </li>
    <?php endforeach; ?>
    
</ul>

<?php 

unset($_SESSION['element_ready_quomodo_reg_msg']); 
unset($_SESSION['element_ready_quomodo_reg_msg_success']); 
endif; 
?>

<form method="post" class="register form-register element-ready-register-form">
    <?php if($settings['custom_redirect'] == 'yes'): ?>
            <input type="hidden" name="er_redirect" value="<?php echo esc_url($settings['login_redirect_url']); ?>" />
         <?php endif; ?>
      <div class="quomodo-row">       
            <div class="quomodo-col-sm-6">                               
            <div class="input-box er-username">
                    <?php if($settings['custom_lebel'] == 'yes' ): ?>
                        <label for="username"> <?php echo esc_html($settings['signup_username_label']); ?> </label>
                    <?php endif; ?>
                    <?php \Elementor\Icons_Manager::render_icon( $settings['signup_username_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <input type="text" name="username" required placeholder="<?php echo esc_attr($settings['signup_username_placeholder']); ?>" class="input-text">
            </div>
            </div>
            <div class="quomodo-col-sm-6">  
            <div class="input-box er-pass">
                    <?php if($settings['custom_lebel'] == 'yes' ): ?>
                        <label for="username"> <?php echo esc_html($settings['signup_password_label']); ?> </label>
                    <?php endif; ?>
                    <?php \Elementor\Icons_Manager::render_icon( $settings['signup_password_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <input type="password" name="password" required class="input-text" placeholder="<?php echo esc_attr($settings['signup_password_placeholder']); ?>">
            </div>
           
            </div>
    </div>
    <div class="quomodo-row">  
        <div class="quomodo-col-sm-12">       
            <div class="input-box er-email">
                    <?php if($settings['custom_lebel'] == 'yes' ): ?>
                        <label for="username"> <?php echo esc_html($settings['signup_email_label']); ?> </label>
                    <?php endif; ?>
                    <?php \Elementor\Icons_Manager::render_icon( $settings['signup_email_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                <input type="email" name="email" required placeholder="<?php echo esc_attr($settings['signup_email_placeholder']); ?>" class="input-text">
            </div>
        </div>
    </div>
    <div class="quomodo-row">  
        <div class="quomodo-col-sm-12">    
        
            <?php if($settings['signup_show_name'] =='yes'): ?>
                <div class="input-box er-name">
                    <?php if($settings['custom_lebel'] == 'yes' ): ?>
                        <label for="username"> <?php echo esc_html($settings['signup_name_label']); ?> </label>
                    <?php endif; ?>
                    <?php \Elementor\Icons_Manager::render_icon( $settings['signup_name_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                    <input type="text" required name="name" placeholder="<?php echo esc_attr($settings['signup_name_placeholder']); ?>" class="input-text">
                </div>
            <?php else: ?>
                <input type="hidden" name="name" value="<?php echo esc_attr__('no name','element-ready'); ?>">
            <?php endif; ?> 
          
        </div>
    </div>

    <?php if($settings['checkbox_show'] == 'yes'): ?>
        <div class="input-box form-checkbox element-ready-modal-checkbox er-terms">
            <label>
                <input name="terms" type="checkbox" class="input-checkbox">
                <span>
                    <?php echo str_replace( ['{','}'],['<span>','</span>'], $settings['term_text'] ); ?>
                </span>
            </label>
        </div>
    <?php endif; ?>

    <input type="hidden" name="element_ready_quomodo_registration_form" />
    <?php wp_nonce_field('element_ready_quomodo_registration_action'); ?>
    <div class="input-box">
        <button class="main-btn element-ready-user-signup-btn"> 
        
        <?php echo esc_attr($settings['signup_submit_text']); ?>
        <?php \Elementor\Icons_Manager::render_icon( $settings['signup_submit_icon'], [ 'aria-hidden' => 'true' ] ); ?>
         </button>
   
    </div>

</form>