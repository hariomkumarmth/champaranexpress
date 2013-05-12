<?php
/*
Plugin Name: Include Dojo
Plugin URI: http://www.rcorp.co.in
Version: 1.0
Author: Abhineet Verma
Description: Includes Dojo
*/

 function include_dojo(){
		wp_deregister_script( 'Dojo' );
	    wp_register_script( 'Dojo', '/wp-content/plugins/dojo/dojo/dojo.js');
	    wp_enqueue_script( 'Dojo' );
		
		// wp_deregister_style( 'tundra' );
		// wp_register_style( 'tundra', '/wp-content/plugins/dojo/dijit/themes/tundra/tundra.css');
 	// 	wp_enqueue_style( 'tundra' );
 		
 		
	}
add_action( 'init', 'include_dojo', 1 );

/*add_action('admin_menu', 'register_dojo_page');

function register_dojo_page() {
   add_menu_page('custom menu title', 'custom menu', 'registration_as', 'Dojo/student_registeration_module.php', '',   plugins_url('india.png'), 6);
}*/


?>