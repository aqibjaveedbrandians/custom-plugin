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

// echo plugins_url();
// echo "<br/>";
// echo plugin_dir_path(__FILE__);die;

define("PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
define("PLUGIN_URL", plugins_url());
function add_my_custom_menu(){
	add_menu_page(
				"customplugin", //Page Title  
				"Custom Plugin", //Menu Title
				"manage_options", //Admin Level
				"custom-plugin", //Page Slug
				"add_page_func", //Callback Function
				"dashicons-superhero-alt", //Icon Url
				11 //Position
				);
	add_submenu_page(
				"custom-plugin", //Parrent Slug 
				"Add Page", //Page Title
				"Add Page", //Menu Title
				"manage_options", //Admin Level
				"custom-plugin", //Page Slug
				"add_page_func", //Callback Function
				);
	add_submenu_page(
				"custom-plugin", //Parrent Slug 
				"All Pages", //Page Title
				"All Pages", //Menu Title
				"manage_options", //Admin Level
				"all-pages", //Page Slug
				"all_pages_func", //Callback Function
				);	
}
add_action("admin_menu", "add_my_custom_menu");
function add_page_func(){
	include_once PLUGIN_DIR_PATH."/views/add-page.php";
}
function all_pages_func(){
	include_once PLUGIN_DIR_PATH."/views/all-page.php";
}