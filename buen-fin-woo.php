<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://racmanuel.dev
 * @since             1.0.0
 * @package           Buen_Fin_Woo
 *
 * @wordpress-plugin
 * Plugin Name:       Buen Fin
 * Plugin URI:        https://racmanuel.dev
 * Description:       Plugin para mostrar el precio de los productos a 3, 6, 9, 12 Meses sin Intereses en la pagina individual de productos de WooCommerce, antes del boton de añadir al carrito. Hecho para tiendas de comercio electronico en el Buen Fin en México.
 * Version:           1.0.0
 * Author:            Manuel Ramirez Coronel
 * Author URI:        https://racmanuel.dev
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       buen-fin-woo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BUEN_FIN_WOO_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-buen-fin-woo-activator.php
 */
function activate_buen_fin_woo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-buen-fin-woo-activator.php';
	Buen_Fin_Woo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-buen-fin-woo-deactivator.php
 */
function deactivate_buen_fin_woo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-buen-fin-woo-deactivator.php';
	Buen_Fin_Woo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_buen_fin_woo' );
register_deactivation_hook( __FILE__, 'deactivate_buen_fin_woo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-buen-fin-woo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_buen_fin_woo() {

	$plugin = new Buen_Fin_Woo();
	$plugin->run();

}
run_buen_fin_woo();
