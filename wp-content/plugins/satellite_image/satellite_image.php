<?php
/*
Plugin Name: Satellite Images
Plugin URI: ###
Description: Pull the satellite images.
Version: 1.0.0
Author: Abhishek Pratap Singh
Author URI: ###
License: GPL2
*/

define('STD_URL', plugins_url('', __FILE__));
define('STD_PATH', plugin_dir_path(__FILE__));
define('STD_REL_PATH', dirname(plugin_basename(__FILE__)) . '/');

function tt_add_menu_image(){
    add_menu_page('Satellite Image', 'Satellite Image', 'activate_plugins', 'property_image', 'pullImage');
    // add_submenu_page('registration', 'Confirmation Mail Setup', 'Confirmation Mail Setup', 'manage_options', 'registration/setting', 'syi_render_mail_page');
   
} 

add_action('admin_menu', 'tt_add_menu_image');

function pullImage(){
	
	include ( STD_PATH . 'pull_image.php' );
}

if(isset($_GET['proAction'])) {
	include ( STD_PATH . 'generate_image.php' );
}
