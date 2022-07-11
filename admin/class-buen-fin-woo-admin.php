<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://racmanuel.dev
 * @since      1.0.0
 *
 * @package    Buen_Fin_Woo
 * @subpackage Buen_Fin_Woo/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Buen_Fin_Woo
 * @subpackage Buen_Fin_Woo/admin
 * @author     Manuel Ramirez Coronel <ra_cm@outlook.com>
 */
class Buen_Fin_Woo_Admin
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Buen_Fin_Woo_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Buen_Fin_Woo_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/buen-fin-woo-admin.css', array(), $this->version, 'all');

    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Buen_Fin_Woo_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Buen_Fin_Woo_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/buen-fin-woo-admin.js', array('jquery'), $this->version, false);

    }

    public function buen_fin_woo_add_section($sections)
    {

        $sections['buen_fin_woo'] = __('Buen Fin', $this->plugin_name);
        return $sections;

    }

    /**
     * Add settings to the specific section we created before
     */

    public function buen_fin_woo_all_settings($settings)
    {
        /**
         * Check the current section is what we want
         **/
		$current_section = (isset($_GET['section']) && !empty($_GET['section']))? $_GET['section']:'';
        if ($current_section == 'buen_fin_woo') {
            $settings_buen_fin_woo = array();
            // Add Title to the Settings
            $settings_buen_fin_woo[] = array('name' => __('Buen Fin', $this->plugin_name), 'type' => 'title', 'desc' => __('Selecciona los meses sin intereses a mostrar en la pagina de producto o dejalos vacios para solamente mostrar el titulo.', $this->plugin_name), 'id' => 'buen-fin-woo');
            
			// Title in Front-End
			$settings_buen_fin_woo[] = array(
				'name'     => __( 'Titulo', $this->plugin_name ),
				'desc_tip' => __( 'Titulo a mostrar antes de los Meses Sin Intereses.', $this->plugin_name ),
				'id'       => 'buen_fin_woo_title',
				'type'     => 'text',
				'value'    => '¡Aprovecha los precios del Buen Fin + MSI!'
			);
			
			// Checkbox for Show MSI
            $settings_buen_fin_woo[] = array(
                'name' => __('3 Meses Sin Intereses', $this->plugin_name),
                'id' => 'buen_fin_woo_3_msi',
                'type' => 'checkbox',
                'desc' => __('Mostrar', $this->plugin_name),
            );
			$settings_buen_fin_woo[] = array(
				'name' => __('6 Meses Sin Intereses', $this->plugin_name),
                'id' => 'buen_fin_woo_6_msi',
                'type' => 'checkbox',
                'desc' => __('Mostrar', $this->plugin_name),
            );
			$settings_buen_fin_woo[] = array(
				'name' => __('9 Meses Sin Intereses', $this->plugin_name),
                'id' => 'buen_fin_woo_9_msi',
                'type' => 'checkbox',
                'desc' => __('Mostrar', $this->plugin_name),
            );
			$settings_buen_fin_woo[] = array(
				'name' => __('12 Meses Sin Intereses', $this->plugin_name),
                'id' => 'buen_fin_woo_12_msi',
                'type' => 'checkbox',
                'desc' => __('Mostrar', $this->plugin_name),
            );

			// Title in Front-End
			$settings_buen_fin_woo[] = array(
				'name'     => __( 'Terminos y Condiciones', $this->plugin_name ),
				'desc_tip' => __( 'Inserta algun termino o condicion que quieras que sea visible.', $this->plugin_name ),
				'id'       => 'buen_fin_woo_terms',
				'type'     => 'text'
			);
            
            /**
             * Round WooCommerce MSI
             */
			$settings_buen_fin_woo[] = array(
				'name' => __('Redondear', $this->plugin_name),
                'id' => 'buen_fin_woo_round',
                'type' => 'checkbox',
                'desc' => __('Activar', $this->plugin_name),
            );

            $settings_buen_fin_woo[] = array('type' => 'sectionend', 'id' => 'buen-fin-woo');

            return $settings_buen_fin_woo;
            /**
             * If not, return the standard settings
             **/
        } else {
            return $settings;
        }
    }
}
