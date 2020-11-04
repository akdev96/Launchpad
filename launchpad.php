<?php
/**
 * Plugin Name: LauchPad
 * Plugin URI: https://nextuslabs.com/wordpress/plugins/launchpad
 * Description: Launch your websites dramatically. Impress your clients with the lanchpad.
 * Version: 1.0
 * Author: Dilan Fernando
 * Author URI: https://we.nextuslabs.com/founder
 */
 
add_action( 'action', 'launch' );

function launch ( $content ) {
    return $content .= '<p>Website Lauching in</p>';
}
