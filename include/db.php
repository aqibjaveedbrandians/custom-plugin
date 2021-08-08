<?php
function custom_plugin_tables(){
	global $table_prefix, $wpdb;
	$table_name = "custom_plugin";
	$table_slug = $table_prefix . "$table_name";
	require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
	if(count($wpdb->get_var("SHOW TABLES LIKE '$table_slug'")) == 0 ){
		$sql_query_to_create_table = "CREATE TABLE `".$table_slug."` (
									 `id` int(11) NOT NULL,
									 `name` varchar(150) NOT NULL,
									 `email` varchar(150) NOT NULL,
									 `phone` varchar(150) NOT NULL,
									 `created_at` timestamp NOT NULL DEFAULT current_timestamp()
									) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		dbDelta($sql_query_to_create_table);
	}
}
register_activation_hook(__FILE__, "custom_plugin_tables");
?>