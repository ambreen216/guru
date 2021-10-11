<?php if($show_ordering_filter == 'yes'){ ?>
<div class="qode-pl-ordering-outer">
    <h6><?php esc_html_e('Filter','bridge'); ?></h6>
    <div class="qode-pl-ordering">
        <div>
            <h5><?php esc_html_e('Sort By','bridge'); ?></h5>
            <ul>
                <?php print bridge_qode_get_module_part( $ordering_filter_list ); ?>
            </ul>
        </div>
        <div>
            <h5><?php esc_html_e('Price Range','bridge'); ?></h5>
            <ul class="qode-pl-ordering-price">
                <?php print bridge_qode_get_module_part( $pricing_filter_list ); ?>
            </ul>
        </div>
    </div>
</div>
<?php } ?>