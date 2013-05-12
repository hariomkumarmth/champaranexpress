<?php
/*
 Plugin Name: Upload Image for Gallery
 Plugin URI: http://www.rcorp.co.in
 Description: uploadImageforGallery
 Version: 1.0
 Author: Ramanan Corporation
 License: GPL
 */

add_action('admin_menu', 'uploadImageforGallery');
function uploadImageforGallery(){
	add_menu_page( "Upload Image", 'Upload Image for Gallery', 1, 'upload_gallery_image', 'uploadImage');
}



function uploadImage(){
	global $wpdb;
	$upload_dir = wp_upload_dir();
	$filelocation= $upload_dir['basedir'].'/image-for-gallery/';
	$table='gallery_image_details';
	if(isset($_REQUEST['action']) && ($_REQUEST['action']=='upload'))	{
		
		if (isset($_REQUEST['image_submit']) && ($_REQUEST['image_submit']=='submit')) {
			$image_name=$_REQUEST['image_name'];
			$file_name=$_FILES['file_name']['name'];
		 	$tmp_name=$_FILES['file_name']['tmp_name'];
		 	$file_size=$_FILES['file_name']['size'];
		 	$file_type=$_FILES['file_name']['type'];
		 	$extension=strtolower(substr($file_name, strpos($file_name,'.')+1));

		 	$max_size=2097152;
			if(!empty($file_name) && (!empty($image_name)))	{
		  	if(($extension=='jpg' || $extension=='jpeg' || $extension=='gif' ) && ($file_type=="image/gif" || $file_type=='image/jpeg' || $file_type=='image/jpg') &&($file_size<=$max_size)) {		
				$uploadfilelocation=$filelocation;
				$newfile_name=$image_name.'.jpg';
				$check_image=$wpdb->get_col("SELECT `original_name` FROM `gallery_image_details` ");
				//echo $check_image
				if(move_uploaded_file($tmp_name, $uploadfilelocation.$newfile_name)) {
					$location=bloginfo('siteurl').'/wp-content/uploads/image-for-gallery/'.$newfile_name;
					$data=array('image_name'=>$newfile_name,'image_location'=>$location,'original_name'=>$file_name);
					$wpdb->insert($table,$data) or die(mysql_error());
					echo "<p><b>please wait file_name is going to be inserted....</b></p>";
				    echo '<script>location ="'.admin_url().'admin.php?page=upload_gallery_image"</script>';	 
			     }
			    else {
			       echo '<table class="widefat" style="color:red;"><th>Your file is not uploaded.</th></table>';
		        }
			}

			else {
			  echo '<table class="widefat" style="color:red;"><th>Invalid file format. Please upload jpg or jpeg file format only.</th></table>';
			}
		}
		else {
			echo '<table class="widefat" style="color:red;"><th>Please choose a file. Choose a File and Image Name  is a necessary field.</th></table>';
		}
	}


?>	
<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST" enctype="multipart/form-data">
	<table class="widefat">
	
		<tr>
			<td>Image Name</td>
			<td><input type="text" name ="image_name" size="28"></td>
		</tr>
		<tr>
			<td>Choose Image </td>
			<td><input type="file" name ="file_name" ></td>
		</tr>
		
		<tr>
			<td><input type="submit" name="image_submit" value="submit"></td>
		</tr>
	</table>
</form>
<?php
}
	if(isset($_REQUEST['action']) && ($_REQUEST['action']==download)) {
	$file_name_file=$_REQUEST['file_name'];
	readfile($filelocation.$file_name_file);
}
if (!isset($_REQUEST['action'])) {
?>
	<table class="widefat">
		<thead>
			<tr>
				<th>Number</th>
				<th>Image Upload Date</th>
				<th>Image Name</th>
				<th>Delete</th>
			</tr>
		</thead>
<?php
			
		$results=$wpdb->get_results("SELECT * FROM `gallery_image_details` where `is_delete`=0");
		foreach ($results as $result) 	{
			$image_name=$result->image_name;
?>
		<tr>
			<td><?php echo $result->image_no;?></td>
			<td><?php echo $result->image_upload_date; ?></td>
			 <td ><?php echo'<a href="'.home_url().'/wp-content/uploads/image-for-gallery/'. $image_name.'" target="_blank">'.$image_name.'</a>'; ?> </td>
			<td><input type="button" class="button" value="Delete" name="button" onClick="document.location='<?php echo admin_url();?>admin.php?page=upload_gallery_image&action=delete&file_name=<?php echo $result->image_name  ;?>'"></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<a href="<?php echo admin_url(); ?>admin.php?page=upload_gallery_image&action=upload"><b>Add Upload Image</b></a>
<?php
}

if(isset($_REQUEST['action']) && ($_REQUEST['action']==delete)) {
	$delete_file_name=$_REQUEST['file_name'];
	$wpdb->update($table, array('is_delete' => '1'),array('image_name' => $delete_file_name));
	echo "Please wait.. This image is going to be  deleted.";
	echo '<script>location ="'.admin_url().'admin.php?page=upload_gallery_image"</script>';
}


}

 