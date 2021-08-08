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

define("PLUGIN_DIR_PATH", plugin_dir_path(__FILE__));
define("PLUGIN_URL", plugins_url());
define("PLUGIN_VERSION", "1.0");

// PlUGIN INCLUDE

include_once PLUGIN_DIR_PATH."/include/db.php";
include_once PLUGIN_DIR_PATH."/include/custom-css-js.php";
include_once PLUGIN_DIR_PATH."/include/plugin-menu.php";
include_once PLUGIN_DIR_PATH."/include/files-view.php";

?>