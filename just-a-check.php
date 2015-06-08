<?php
/**
 * @package Just a Check
 * @version 0.1
 */
/*
Plugin Name: Just a Check
Plugin URI: #
Description: This is just a test plugin I'm coding to check some updates
Author: Fabio Quinzi and Michele Falconi
Version: 0.1
Author URI: #
*/

add_action('admin_menu', 'justacheck_admin_actions');

function justacheck_admin_actions() {
	add_options_page('Just a Check', 'Just a Check', 'manage_options', __FILE__, 'justacheckplugin_admin');
}

function justacheckplugin_admin(){
?>
<div class="wrap">
<h4>This plugin, hopefully, will show if someone stole content from your posts</h4>
<table class="widefat">
	<thead>
		<tr>
			<th>Post Title</th>
			<th>Post ID</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>Post Title</th>
			<th>Post ID</th>
		</tr>
	</tfoot>
	<tbody>

	<?php
		global $wpdb;

		$mypoststoscan = $wpdb->get_results(
				"
				SELECT ID, post_title
				FROM $wpdb->posts
				WHERE post_status = 'publish'
				AND post_type='post'
				"
			);
	?>
	<?php
		foreach ($mypoststoscan as $myposttoscan)
	{
	?>
	<tr>
	<?php
		echo "<td>".$myposttoscan->post_title."</td>";
		echo "<td>".$myposttoscan->ID."</td>";
	?>
	</tr>
	<?php
	}
	?>
	</tbody>
</table>
</div>
<?php
}
?>
