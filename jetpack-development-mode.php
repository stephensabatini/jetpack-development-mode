<?php
/**
 * Plugin Name: Jetpack Development Mode
 * Plugin URI: https://github.com/stephensabatini/jetpack-development-mode
 * Description: A WordPress plugin to activate Jetpack Development Mode. Allows you to use features that do not require a connection to WordPress.com servers can be activated on a localhost WordPress installation for testing.
 * Version: 1.0.0
 * Author: Stephen Sabatini <info@stephensabatini.com>
 * Author URI: https://stephensabatini.com
 * License: MIT
 * License URI: LICENSE.md
 *
 * @package JetpackDevelopmentMode
 */

/**
 * If it's not already loaded include this to have access to the `is_plugin_active` function.
 */
require_once ABSPATH . 'wp-admin/includes/plugin.php';

if ( is_plugin_active( 'jetpack/jetpack.php' ) ) {

	/**
	 * Enable Development Mode
	 *
	 * @see https://jetpack.com/support/development-mode/
	 */
	add_filter( 'jetpack_development_mode', '__return_true' );

}
