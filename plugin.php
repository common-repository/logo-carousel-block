<?php
/*
 * Plugin Name:  Logo Carousel Block
 * Plugin URI: https://wordpress.org/plugins/carousel-block
 * Description: A Gutenberg carousel Block Plugin.
 * Author: WPDevSquad
 * Author URI: https://themeroots.com/
 * Version: 1.0.0
 * License: GPL2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package CGB
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
