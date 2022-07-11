<?php

/**
 * Fired during plugin activation
 *
 * @link       https://racmanuel.dev
 * @since      1.0.0
 *
 * @package    Buen_Fin_Woo
 * @subpackage Buen_Fin_Woo/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Buen_Fin_Woo
 * @subpackage Buen_Fin_Woo/includes
 * @author     Manuel Ramirez Coronel <ra_cm@outlook.com>
 */
class Buen_Fin_Woo_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		add_option( 'buen_fin_woo_title' , '¡Aprovecha los precios del Buen Fin + MSI!' );
        add_option( 'buen_fin_woo_3_msi' , 'yes');
        add_option( 'buen_fin_woo_6_msi' , 'yes' );
        add_option( 'buen_fin_woo_9_msi' , 'yes');
        add_option(	'buen_fin_woo_12_msi', 'yes' );
        add_option( 'buen_fin_woo_terms' , 'yes' );
        add_option( 'buen_fin_woo_round' , 'yes' );
	}

}
