<?php
function custom_plugin_assets(){
    // CSS
    wp_enqueue_style('customcss', PLUGIN_URL.'/custom-plugin/assets/css/style.css', array(), PLUGIN_VERSION );
    // JS
    wp_enqueue_script('cpl_script', PLUGIN_URL.'/custom-plugin/assets/js/script.js', array(), PLUGIN_VERSION, true );
    wp_enqueue_script('customjs', PLUGIN_URL.'/custom-plugin/assets/js/custom.js', array(), PLUGIN_VERSION, true );

    //LOCALIZE SCRIPT
    wp_localize_script('cpl_script','ajaxurl',admin_url('admin-ajax.php'));
}
add_action("init", "custom_plugin_assets");
?>