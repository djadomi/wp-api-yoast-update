<?php
/*
Plugin Name: WP API Yoast Update
Plugin URI: https://github.com/yourusername/wp-api-yoast-update
Description: Updates Yoast SEO fields for posts via WP API.
Version: 1.0.0
Author: Your Name
Author URI: https://yourwebsite.com
GitHub Plugin URI: https://github.com/djadomi/wp-api-yoast-update
GitHub Branch: main
Text Domain: wp-api-yoast-update
Domain Path: /languages
*/

defined( 'ABSPATH' ) || exit;

// Include plugin class files
require_once plugin_dir_path( __FILE__ ) . 'includes/class-yoast-api-update.php';

// Initialize plugin
function wp_api_yoast_update_init() {
	$yoast_api_update = new WP_API_Yoast_Update();
	$yoast_api_update->init_hooks();
}
add_action( 'plugins_loaded', 'wp_api_yoast_update_init' );
