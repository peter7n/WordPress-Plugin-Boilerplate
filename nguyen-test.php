<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Nguyen_Test
 *
 * @wordpress-plugin
 * Plugin Name:       Nguyen Test Plugin
 * Plugin URI:        http://example.com/nguyen-test-uri/
 * Description:       Test plugin that displays a table of customers/users.
 * Version:           1.0.0
 * Author:            Peter Nguyen
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       nguyen-test
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-nguyen-test-activator.php
 */
function activate_nguyen_test() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nguyen-test-activator.php';
	Nguyen_Test_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-nguyen-test-deactivator.php
 */
function deactivate_nguyen_test() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-nguyen-test-deactivator.php';
	Nguyen_Test_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_nguyen_test' );
register_deactivation_hook( __FILE__, 'deactivate_nguyen_test' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-nguyen-test.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_nguyen_test() {

	$plugin = new Nguyen_Test();
	$plugin->run();

}
run_nguyen_test();
