<?php
/**
 * Plugin Name: ND Alerts
 * Plugin URI:
 * Description: WordPress plugin to manage and deliver alert messages to the front end a website. Requires developer setup.
 * Version:     0.1.0
 * Author:      Nick Davis
 * Author URI:  http://nickdavis.co
 * Text Domain: nd-alerts
 * Domain Path: /languages
 *
 * @package PluginScaffold
 */

// Useful global constants
define( 'ND_ALERTS_VERSION', '0.1.0' );
define( 'ND_ALERTS_URL', plugin_dir_url( __FILE__ ) );
define( 'ND_ALERTS_PATH', dirname( __FILE__ ) . '/' );
define( 'ND_ALERTS_INC', ND_ALERTS_PATH . 'includes/' );

// Autoload
$autoloader = __DIR__ . '/vendor/autoload.php';
if ( is_readable( $autoloader ) ) {
	require_once $autoloader;
}

// Include files
require_once ND_ALERTS_INC . 'functions/core.php';


// Activation/Deactivation
register_activation_hook( __FILE__, '\NickDavis\Alerts\Core\activate' );
register_deactivation_hook( __FILE__, '\NickDavis\Alerts\Core\deactivate' );

// Bootstrap
NickDavis\Alerts\Core\setup();
