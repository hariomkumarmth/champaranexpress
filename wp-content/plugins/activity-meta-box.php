<?php
/*
Plugin Name: Activity Custom Meta Boxes
Plugin URI: http://localhost/itt
Description: Create Meta Boxes for Activity posts.
Version: 0.1
Author: kuljeet singh
Author URI: http://www.wpbeginner.com/
License: GPL v2 or higher
License URI: License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

add_action( 'add_meta_boxes', 'cd_meta_box_add' );

function cd_meta_box_add(){
	add_meta_box( 'custom-field-id', 'Activity Details', 'cd_meta_box_cb', 'fredomfighter_post', 'normal', 'high' );
}

function cd_meta_box_cb($post){
	$values = get_post_custom( $post->ID );
	$sonof = isset( $values['sonof'] ) ? esc_attr( $values['sonof'][0] ) :'';
	$village = isset( $values['vill'] ) ? esc_attr( $values['vill'][0] ) :'';
	$post = isset( $values['Post'] ) ? esc_attr( $values['Post'][0] ) :'';
	$ps = isset( $values['PS'] ) ? esc_attr( $values['PS'][0] ) :'';
	$mohalla = isset( $values['Moh'] ) ? esc_attr( $values['Moh'][0] ) :'';
	
?>
    <label for="sonof">Son Of</label>
    	<input type="text" name="sonof" id="sonof" value="<?php echo $sonof; ?>" /><br />
    <label for="vill">Village</label>
    	<input type="text" name="vill" id="vill" value="<?php echo $village; ?>" /><br />
    <label for="Post">Post</label>
    	<input type="text" name="Post" id="Post" value="<?php echo $post; ?>" /><br />
	<label for="PS">P.S</label>
    	<input type="text" name="PS" id="PS" value="<?php echo $ps; ?>" /><br />
    <label for="Moh">Mohalla</label>
    	<input type="text" name="Moh" id="Moh" value="<?php echo $mohalla; ?>" /><br />

 <?php
}

add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id ){
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	
	/*// if our nonce isn't there, or we can't verify it, bail
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;*/
	
	if( !current_user_can( 'edit_post' ) ) return;
	
	$allowed = array( 
		'a' => array(
			'href' => array()
		)
	);
	
	if( isset( $_POST['sonof'] ) )
		update_post_meta( $post_id, 'sonof', wp_kses( $_POST['sonof'], $allowed ) );
	if( isset( $_POST['vill'] ) )
		update_post_meta( $post_id, 'vill', wp_kses( $_POST['vill'], $allowed ) );
	if( isset( $_POST['Post'] ) )
		update_post_meta( $post_id, 'Post', wp_kses( $_POST['Post'], $allowed ) );

	if( isset( $_POST['PS'] ) )
		update_post_meta( $post_id, 'PS', wp_kses( $_POST['PS'], $allowed ) );
	if( isset( $_POST['Moh'] ) )
		update_post_meta( $post_id, 'Moh', wp_kses( $_POST['Moh'], $allowed ) );
	
		
}
?>