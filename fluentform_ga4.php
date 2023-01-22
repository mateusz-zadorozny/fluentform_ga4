<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://mpress.cc
 * @since             1.0.0
 * @package           Fluentform_ga4
 *
 * @wordpress-plugin
 * Plugin Name:       GA4 Fluentform events
 * Plugin URI:        https://mpress.cc
 * Description:       Simple plugin that allows you to send GA4 custom events from the Fluent Forms.
 * Version:           1.0.0
 * Author:            Mateusz Zadorożny
 * Author URI:        https://mpress.cc
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       fluentform_ga4
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
define( 'FLUENTFORM_GA4_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-fluentform_ga4-activator.php
 */
function activate_fluentform_ga4() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fluentform_ga4-activator.php';
	Fluentform_ga4_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-fluentform_ga4-deactivator.php
 */
function deactivate_fluentform_ga4() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-fluentform_ga4-deactivator.php';
	Fluentform_ga4_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_fluentform_ga4' );
register_deactivation_hook( __FILE__, 'deactivate_fluentform_ga4' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-fluentform_ga4.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_fluentform_ga4() {

	$plugin = new Fluentform_ga4();
	$plugin->run();

}
run_fluentform_ga4();
