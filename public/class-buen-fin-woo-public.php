<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://racmanuel.dev
 * @since      1.0.0
 *
 * @package    Buen_Fin_Woo
 * @subpackage Buen_Fin_Woo/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Buen_Fin_Woo
 * @subpackage Buen_Fin_Woo/public
 * @author     Manuel Ramirez Coronel <ra_cm@outlook.com>
 */
class Buen_Fin_Woo_Public
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
     * @param      string    $plugin_name       The name of the plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;

    }

    /**
     * Register the stylesheets for the public-facing side of the site.
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

        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/buen-fin-woo-public.css', array(), $this->version, 'all');

    }

    /**
     * Register the JavaScript for the public-facing side of the site.
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

        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/buen-fin-woo-public.js', array('jquery'), $this->version, false);

    }

    /**
     * Function to Show a MSI
     **/
    public function buen_fin_woo_get_and_set_prices()
    {
        $product = wc_get_product(get_the_ID());

        //Get the Price
        $original_price = $product->get_price();
        //Get the Type
        $product_type = $product->get_type();

        /**
         * Get the WooCommerce Options
         */
        $TITLE_OPTION = get_option( 'buen_fin_woo_title' );
        $MSIR3_OPTION = get_option( 'buen_fin_woo_3_msi' );
        $MSIR6_OPTION = get_option( 'buen_fin_woo_6_msi' );
        $MSIR9_OPTION = get_option( 'buen_fin_woo_9_msi' );
        $MSIR12_OPTION = get_option('buen_fin_woo_12_msi' );
        $CURRENCY = get_woocommerce_currency();
        $SYMBOL_CURRENCY = get_woocommerce_currency_symbol();
        $TERMS_OPTION = get_option( 'buen_fin_woo_terms' );
        $ROUND_OPTION = get_option( 'buen_fin_woo_round' );

        //3 MSI
        if ($MSIR3_OPTION == 'yes'){
            if($ROUND_OPTION == 'yes'){
                $price = $original_price / 3;
                $MSI3 = round($price, 2);
            }else{
                $MSI3 = $original_price / 3;
            }
        }
        
        //6 MSI
        if ($MSIR6_OPTION == 'yes'){
            if($ROUND_OPTION == 'yes'){
                $price = $original_price / 6;
                $MSI6 = round($price, 2);
            }else{
                $MSI6 = $original_price / 6;
            }
        }


        //9 MSI
        if ($MSIR9_OPTION == 'yes'){
            if($ROUND_OPTION == 'yes'){
                $price = $original_price / 9;
                $MSI9 = round($price, 2);
            }else{
                $MSI9 = $original_price / 9;
            }
        }


        //12 MSI
        if ($MSIR12_OPTION == 'yes'){
            if($ROUND_OPTION == 'yes'){
                $price = $original_price / 12;
                $MSI12 = round($price, 2);
            }else{
                $MSI12 = $original_price / 12;
            }
        }


        // Get the Image
        $image = plugin_dir_url(__FILE__) . 'img/logo_buen_fin_banner_princ.png';
        
		//Print the Result
		ob_start();
			include_once( 'partials/'.$this->plugin_name.'-public-display.php' );
		echo ob_get_clean();
    }

}
