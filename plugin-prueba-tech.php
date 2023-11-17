<?php
/**
 * Plugin Name:       Plugin Prueba Tech
 * Description:       Bloque de prueba técnica usando el comando npx @wordpress/create-block@latest
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Angélica
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       plugin-prueba-tech
 *
 * @package           create-block
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function plugin_prueba_tech_plugin_prueba_tech_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'plugin_prueba_tech_plugin_prueba_tech_block_init' );
