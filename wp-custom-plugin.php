<?php
/*
Plugin Name:Custom Plugin
Plugin URI:http://localhost/plugin-dev/
Description:My Custom Plugin
Author: Aqib Javeed
Author URI:http://localhost/plugin-dev/
Text Domain: custom-plugin
Version: 1.0
*/

// PLUGIN URL OR PLUGIN DIR PATH

defined( 'ABSPATH' );
define("PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
define("PLUGIN_URL", plugins_url());
define("PLUGIN_VERSION", "1.0");

// PlUGIN INCLUDE

include_once PLUGIN_DIR_PATH."/include/custom-css-js.php";
include_once PLUGIN_DIR_PATH."/include/plugin-menu.php";
include_once PLUGIN_DIR_PATH."/include/files-view.php";

//PLUGIN DATABASE TABLE CREATE HOOK

function custom_plugin_table_create(){
		global $table_prefix, $wpdb;
		$table_slug = $table_prefix . 'custom_plugin';
		require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
	    if ($wpdb->get_var("SHOW TABLES LIKE '".$table_slug."'") != $table_slug) {
			$sql_query_to_create_table = "CREATE TABLE `$table_slug` (";
			$sql_query_to_create_table .= "`id` int(11) NOT NULL AUTO_INCREMENT,";
			$sql_query_to_create_table .= "`name` varchar(150) NOT NULL,";
			$sql_query_to_create_table .= "`email` varchar(150) NOT NULL,";
			$sql_query_to_create_table .= "`phone` varchar(150) NOT NULL,";
			$sql_query_to_create_table .= "`created_at` timestamp NOT NULL DEFAULT current_timestamp(),";
			$sql_query_to_create_table .= "PRIMARY KEY (`id`)";
			$sql_query_to_create_table .= ") ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
			// INCLUDE UPGRADE SCRIPT
			dbDelta($sql_query_to_create_table);
	    }
}
register_activation_hook(__FILE__, "custom_plugin_table_create");

//PLUGIN DATABASE TABLE DROP HOOK

function custom_plugin_table_drop(){
	    global $table_prefix, $wpdb;
		$table_slug = $table_prefix . 'custom_plugin';
		$wpdb->query("DROP table IF Exists $table_slug");

		
		//CUSTOM PAGE DELETE
		$the_post_id = get_option("custom_plugin_page_id");
		if (!empty($the_post_id)) {
			wp_delete_post($the_post_id, true);
		}
}
register_deactivation_hook(__FILE__, "custom_plugin_table_drop");

//PLUGIN DATABASE TABLE NOT DROP WITHOUT DELETE PLUHIN

// function custom_plugin_table_drop(){
// 	    global $table_prefix, $wpdb;
// 		$table_slug = $table_prefix . 'custom_plugin';
// 		$wpdb->query("DROP table IF Exists $table_slug");
// }
// register_uninstall_hook(__FILE__, "custom_plugin_table_drop");

//CREATE PAGE PLUGIN ACTIVATE

function create_page(){

	$page = array();
	$page['post_title'] = "Custom Plugin Page";
	$page['post_content'] = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
	$page['post_status'] = "Publish";
	$page['post_slug'] = "custom_plugin_page";
	$page['post_type'] = "page";

	$post_id = wp_insert_post($page);

	add_option("custom_plugin_page_id",$post_id);

}
register_activation_hook(__FILE__, "create_page");

?>