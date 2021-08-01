<?php 
/* PLUGIN MENU */

function add_my_custom_menu(){
	add_menu_page(
				"customplugin", //Page Title  
				"Custom Plugin", //Menu Title
				"manage_options", //Admin Level
				"custom-plugin", //Page Slug
				"add_page_func", //Callback Function
				"dashicons-superhero-alt", //Icon Url
				2 //Position
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
?>