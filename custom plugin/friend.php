<?php
/**
 * Plugin Name: Custom
 * Description: Custom Plugin
 * Plugin URI: https://example.com/
 * Author: XYZ
 * Version: 1.0.0
 * Author URI: https://example.com/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

register_activation_hook(__FILE__,'custom_activate');
register_deactivation_hook(__FILE__,'custom_deactivate');
register_uninstall_hook(__FILE__, 'custom_delete');



function custom_activate(){
	
	include(plugin_dir_path( __FILE__ ).'tables/create_table.php' );
	// add_option('stripe', '');
	// add_option('stripe_publish_key', '');
	// add_option('stripe_serect_key', '');
	// add_option('avalible_slot', '');
	
}
function custom_deactivate(){
	// delete_option('stripe', '');
	// delete_option('stripe_publish_key', '');
	// delete_option('stripe_serect_key', '');
	// delete_option('avalible_slot', '');
}
function custom_delete(){
	include(plugin_dir_path( __FILE__ ).'tables/delete_table.php' );
}

function createMyMenus() {
    // add_menu_page("DashBoard", "DashBoard", 0, "custom", "page_content","dashicons-businessman", 59);
    // add_submenu_page("custom", "Setting", "Setting", 0, "setting", "setting_page_content");
}

function page_content(){
	// include(plugin_dir_path( __FILE__ ).'views/calender.php' );

}


function setting_page_content(){
	// include(plugin_dir_path( __FILE__ ).'views/setting.php' );
}
// add_action("admin_menu", "createMyMenus");



add_shortcode('calendar_system', 'form');

function form(){

	// echo '
	// <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	// <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	// <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>';

	include(plugin_dir_path( __FILE__ ).'includes/calendar.php' );
	
	// include(plugin_dir_path( __FILE__ ).'includes/three_month.php' );
	// include(plugin_dir_path( __FILE__ ).'includes/six_month.php' );
}

