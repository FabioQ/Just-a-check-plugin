<?php
/**
 * @package Just a Check
 * @version 0.1
 */
/*
Plugin Name: Just a Check
Plugin URI: http://fabioquinzi.com/plugins/just-a-check/
Description: This is just a test plugin I'm coding to check some updates
Author: Fabio Quinzi
Version: 0.1
Author URI: http://fabioquinzi.com/
*/

add_action('admin_menu', 'justacheck_admin_actions');

function justacheck_admin_actions() {
	add_options_page('Just a Check', 'Just a Check', 'manage_options', __FILE__, 'justacheckplugin_admin');
}

function justacheckplugin_admin(){

}

?>
