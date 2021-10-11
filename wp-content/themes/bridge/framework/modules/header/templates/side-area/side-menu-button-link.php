<?php if($enable_side_area == "yes" && $enable_popup_menu == 'no'){ ?>
	<a class="side_menu_button_link <?php echo esc_attr( $header_button_size ); ?>" href="javascript:void(0)">
		<?php echo bridge_qode_get_side_menu_icon_html(); ?>
	</a>
<?php } ?>