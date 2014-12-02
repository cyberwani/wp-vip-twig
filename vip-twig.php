<?php
/**
 * Plugin Name: VIP Twig
 * Description: Configuration of Twig for use on WordPress VIP and other similar environments where on-the-fly template compilation on production is not possible.
 * Version: 0.1
 * Author:  Weston Ruter, XWP
 * Author URI: https://xwp.co/
 * License: GPLv2+
 * Text Domain: vip-twig
 * Domain Path: /languages
 */

if ( version_compare( phpversion(), '5.3', '>=' ) ) {
	require __DIR__ . '/php/class-plugin.php';
	$class_name = '\VIP_Twig\Plugin';
	$GLOBALS['vip_twig_plugin'] = new $class_name();
} else {
	function vip_twig_php_version_error() {
		printf( '<div class="error"><p>%s</p></div>', esc_html__( 'VIP Twig error: Your version of PHP is too old to run this plugin. You must be running PHP 5.3 or higher.', 'vip-twig' ) );
	}
	add_action( 'admin_notices', 'vip_twig_php_version_error' );
}
