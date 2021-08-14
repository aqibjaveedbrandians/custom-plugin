<?php
function custom_plugin_tables(){
	global $table_prefix, $wpdb;
	$table_slug = $table_prefix . 'custom_plugin';
	require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
	if($wpdb->get_var("SHOW TABLES LIKE '$table_slug'") != $table_slug ){
		$sql_query_to_create_table = "CREATE TABLE `$table_slug` (";
 		$sql_query_to_create_table .= "`id` int(11) NOT NULL,";
 		$sql_query_to_create_table .= "`name` varchar(150) NOT NULL,";
 		$sql_query_to_create_table .= "`email` varchar(150) NOT NULL,";
 		$sql_query_to_create_table .= "`phone` varchar(150) NOT NULL,";
 		$sql_query_to_create_table .= "`created_at` timestamp NOT NULL DEFAULT current_timestamp()";
		$sql_query_to_create_table .= ") ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		// Include Upgrade Script
		require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
		dbDelta($sql_query_to_create_table);
	}
}
register_activation_hook(__FILE__, "custom_plugin_tables");
?>