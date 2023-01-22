<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://mpress.cc
 * @since      1.0.0
 *
 * @package    Fluentform_ga4
 * @subpackage Fluentform_ga4/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Fluentform_ga4
 * @subpackage Fluentform_ga4/includes
 * @author     Mateusz Zadorożny <mateusz@zadorozny.rocks>
 */
class Fluentform_ga4_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'fluentform_ga4',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
