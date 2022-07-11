<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://racmanuel.dev
 * @since      1.0.0
 *
 * @package    Buen_Fin_Woo
 * @subpackage Buen_Fin_Woo/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Buen_Fin_Woo
 * @subpackage Buen_Fin_Woo/includes
 * @author     Manuel Ramirez Coronel <ra_cm@outlook.com>
 */
class Buen_Fin_Woo_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'buen-fin-woo',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
