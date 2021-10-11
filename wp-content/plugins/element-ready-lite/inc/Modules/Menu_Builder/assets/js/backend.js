jQuery(document).ready(function ($) {
    "use strict";
    /*mega menu option */
    // activate
    $('.element-ready-mega-menu-settings-save').on('click',function(){

        $('.element-ready-mega-menu-spinner').show('slow');

        let menu_id                = $('#element-ready-mega-metabox-input-menu-id').val();
        let menu_activation_status = $('#element-ready-mega-menu-metabox-input-is-enabled').is(':checked');
       
        $.ajax({
            url: mege_menu_obj.ajax_url,
            type: 'POST',
            data: {
                action           : 'element_ready_mega_menu_activation_option',
                menu_id          : menu_id,
                activation_status: menu_activation_status,
                nonce            : mege_menu_obj.nonce
            },
        })
        .done(function (data) {
           
            $('.element-ready-mega-menu-spinner').hide('slow');
            location.reload();

        })
        .fail(function () {

            $('.element-ready-mega-menu-spinner').hide('slow');

        });

    }); 

  
    // append
    let current_menu_id = $('.manage-menus #select-menu-to-edit option:selected').val();
   
    $.ajax({
        url: mege_menu_obj.ajax_url,
        type: 'POST',
        data: {
            action           : 'element_ready_mega_menu_activation_check',
            menu_id          : current_menu_id,
            menu_cur_id      : mege_menu_obj.menu_id,
        },
    })
    .done(function (data) {
       
        if(data.success){
            $('.menu-item-handle .item-title').append('<a data-target="#element_ready_mega_menu_popup_modal" href="#" class="element_ready_mega_menu_menu_container">'+ mege_menu_obj.mega_menu_title+ '</a>') 
        }
    })

   
    // open popUp
    
     $( ".item-title" ).on( "click", ".element_ready_mega_menu_menu_container", function(e) {
        e.preventDefault();

        let $popup_container = $('.element-ready-mega-menu-item-settings');
        let $item_container  = $(this).parents('.menu-item');
        let item_id          = $item_container.attr('id').replace(/\D/g,'');
        let title_text       = $item_container.find('.menu-item-title').text();
       
        $popup_container.find('.element-ready-menu-popup-title').html( title_text );
        $popup_container.find('.element-ready-setting-update').attr('id',item_id);
        
        
        $.ajax({
            url: mege_menu_obj.ajax_url,
            type: 'POST',
            data: {
                action           : 'element_ready_mega_menu_current_item_id_data',
                menu_item_id     : item_id,
            },
        })
        .done(function (data) {

            if(data.success){
              
               $popup_container.find('.is-mega-menu').prop('checked', data.data.mega_menu_enable);
               $popup_container.find('.is-offcanvas').prop('checked', Boolean(data.data.enable_offcanvas));
               $popup_container.find('.is-mobile-mega-menu').prop('checked', Boolean(data.data.enable_mobile_menu));
               $popup_container.find('.qelementor-edit-link').attr('href', data.data.edit_url);
               $popup_container.find('#element_ready_megamenu_width_type_'+data.data.width_type).prop('checked', data.data.width_type);
               
            }
            
        });

        $('#element-ready-mega-menu-item-settings').show();
      });

      $( "body" ).on( "click", "#element-ready-mega-menu-item-settings .close", function(e) {
        $('#element-ready-mega-menu-item-settings').hide();
      });

      
      $( "body" ).on( "click", ".element-ready-mega-menu-update .element-ready-setting-update", function(e) {

        let $popup_container    = $(this).parents('.element-ready-mega-menu-item-settings');
        let is_mega_menu        = $popup_container.find('.is-mega-menu').is(":checked");
        let is_off_canvas       = $popup_container.find('.is-offcanvas').is(":checked");
        let is_mobile_mega_menu = $popup_container.find('.is-mobile-mega-menu').is(":checked");
        let width_type          = 'default';

        if ($("input[id='element_ready_megamenu_width_type_default']:checked").val()) {
            width_type = 'default';
        }

        if ($("input[id='element_ready_megamenu_width_type_full']:checked").val()) {
            width_type = 'full';
        }

        if ($("input[id='element_ready_megamenu_width_type_custom']:checked").val()) {
            width_type = 'custom';
        }


        $('.element-ready-mega-menu-update-spinner').show('slow');
        $.ajax({
            url: mege_menu_obj.ajax_url,
            type: 'POST',
            data: {
                action             : 'element_ready_mega_menu_current_item_settings_update',
                item_id            : $(this).attr('id'),
                is_mega_menu       : is_mega_menu,
                is_off_canvas      : is_off_canvas,
                is_mobile_mega_menu: is_mobile_mega_menu,
                width_type: width_type
              
            },
        })
        .done(function (data) {
          
            if(data.success){
                $('.element-ready-mega-menu-update-spinner').hide('slow'); 
            }else{
                alert('Settings Update Fail');
                $('.element-ready-mega-menu-update-spinner').hide('slow');
            }
           
        })

      });
     
      var element_ready_popup = '<div id="element-ready-ele-mega-menu-item-settings" class="modal element-ready-ele-mega-menu-item-settings"> ';
      element_ready_popup += '<div class="modal-editor-content">';
      element_ready_popup += '<h3 class="menu-name element-ready-ele-menu-popup-title"></h3>';
      element_ready_popup += '<iframe src="#" frameborder="0" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:94;width:94%;position:absolute;top:3%;left:3%;right:3%;bottom:3%" height="100%" width="99%"></iframe>';
      element_ready_popup += '<span class="close">&times;</span></div></div>';
      element_ready_popup += '</div>';
      
      $( "body" ).prepend( element_ready_popup );
     
      // popup mega menu 
      
      $('.element-ready-mega-menu-elementor-editor-link .qelementor-edit-link').on('click',function(e){
        e.preventDefault();
       
        var url = $(this).attr('href');  
        
        $('#element-ready-ele-mega-menu-item-settings').show();
       
        $('#element-ready-ele-mega-menu-item-settings iframe').attr('src', url);
      });

      $( "body" ).on( "click", "#element-ready-ele-mega-menu-item-settings .close", function(e) {

        $('#element-ready-ele-mega-menu-item-settings').hide();
      });
      
      // menu option
      $('.element-ready-nfl-close').on('click',function(){
      
        $(this).prev('.element-ready-cfl-item').val('');
        $(this).siblings('.element-ready-menu-img').attr('src','#');
        
      });

      // uplaod menu item image
      $('body').on('click', '.er_upload_image_button', function(e){
        e.preventDefault();
  
        var button = $(this),
        er_uploader = wp.media({
            title: 'Menu item image',
            library : {
                uploadedTo : wp.media.view.settings.post.id,
                type : 'image'
            },
            button: {
                text: 'Use this image'
            },
            multiple: false
        }).on('select', function() {
            var attachment = er_uploader.state().get('selection').first().toJSON();
            button.next('input').val((attachment.id));
            button.siblings('.element-ready-menu-img').attr('src',attachment.url);
           
        })
        .open();
    });

    $.each($('input.element-ready-cfl-item[type="color"]'), function( index ) {
        
         if( $(this).val() == '#000000' ){
            $(this).val('#0000');
         }

    });
     

});
