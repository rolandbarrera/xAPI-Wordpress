<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://Thirdstring.com
 * @since             1.0.0
 * @package           xapi-lrs
 *
 * @wordpress-plugin
 * Plugin Name:       xAPI LRS Plugin
 * Plugin URI:        http://Thirdstring.com
 * Description:       Simple Wordpress plugin that sends an xAPI statement to an LRS (Learning Record Store) with the verb of your choice.	
 * Version:           1.0.0
 * Author:            Roland Barrera
 * Author URI:        http://Thirdstring.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       xapi-lrs
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

global $xapi_lrs_root;
$xapi_lrs_root = plugins_url( '/', __FILE__ );


include 'include/actions.php';
include 'include/helpers.php';

/**
 * The code that runs during plugin activation.
 */
function activate_xapi_lrs() {
	xapi_setup_options();
}
/**
 * The code that runs during plugin deactivation.
 */
function deactivate_xapi_lrs() {

}

register_activation_hook( __FILE__, 'activate_xapi_lrs' );
register_deactivation_hook( __FILE__, 'deactivate_xapi_lrs' );


/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */


function run_xapi_lrs() {

}

run_xapi_lrs();