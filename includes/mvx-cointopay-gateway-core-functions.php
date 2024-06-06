<?php

if (!function_exists('cointopay_mvx_woocommerce_inactive_notice')) {

    function cointopay_mvx_woocommerce_inactive_notice() {
        ?>
        <div id="message" class="error">
            <p><?php printf(__('%sMVX Cointopay Gateway is inactive.%s The %sWooCommerce plugin%s must be active for the MVX Cointopay Gateway to work. Please %sinstall & activate WooCommerce%s', 'mvx-cointopay-gateway'), '<strong>', '</strong>', '<a target="_blank" href="http://wordpress.org/extend/plugins/woocommerce/">', '</a>', '<a href="' . admin_url('plugins.php') . '">', '&nbsp;&raquo;</a>'); ?></p>
        </div>
        <?php
    }
}

if (!function_exists('others_cointopay_mvx_plugin_inactive_notice')) {
	function others_cointopay_mvx_plugin_inactive_notice() {
        ?>
        <div id="message" class="error">
            <p><?php printf(__('%sMVX Cointopay Gateway is inactive. %s Please deactivate others cointopay plugin to bypass conflict', 'mvx-cointopay-gateway'), '<strong>', '</strong>'); ?></p>
        </div>
        <?php
    }
}