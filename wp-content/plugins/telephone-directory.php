<?php
/*
 Plugin Name: Telephone directory for motihari
 Plugin URI: http://www.rcorp.co.in
 Description: Telephone directory for motihari
 Version: 1.0
 Author: Ramanan Corporation
 License: GPL
 */

add_action('admin_menu', 'telephoneDirectory');
function telephoneDirectory(){
	add_menu_page( "Add Contect Number", 'Add Contect Number', 1, 'addcontectnumber', 'addContectNumber');
}

function addContectNumber(){
	global $wpdb;
	if(isset($_REQUEST['action']))	{
		$s_no=$_REQUEST['no'];
		$details=$wpdb->get_row("SELECT * FROM `add_contect_no` WHERE `s_no`=".$s_no);
	?>
	<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
		<table class="widefat">
		
			<tr>
				<td>contect Number for</td>
				<td>
					<select name="contect_number_for">
						<option value="govt_offices">Govt. Offices</option>
						<option value="hotels_restaurants">Hotels and Restaurants</option>
						<option value="others">Others</option>
						
					</select>
				</td>
			</tr>
			<tr>
				<td>Person Name </td>
				<td><input type="text" value="<?php echo $details->contect_name; ?>"name ="contect_name" size="28"></td>
			</tr>
			<tr>
				<td>Contect Number </td>
				<td><input type="text" value="<?php echo $details->contect_number ; ?>" name ="contect_number" size="28"></td>
			</tr>
			<?php if($_REQUEST['action']=='add') {?>
			<tr>
				<td><input type="submit" value="Add Contect Number" name="submit"></td>
			</tr>
			<?php 
					}
					else{
			?>
			<tr>
				<input type="hidden" name="no" value="<?php echo $_REQUEST['no']; ?>">
				<td><input type="submit" value="Update Contect Number" name="submit"></td>
			</tr>

			<?php
					}
			?>
		</table>
	</form>
<?php
if($_REQUEST['submit']){
	$contect_number_for=$_REQUEST['contect_number_for'];
	$contect_name=$_REQUEST['contect_name'];
	$contect_number=$_REQUEST['contect_number'];
	$table_name='add_contect_no';
	if(!empty($contect_number) && !empty($contect_number) && !empty($contect_number_for)){
		
		$data= array('contect_name' =>$contect_name ,
						'contect_number'=>$contect_number,
						'contect_number_for'=>$contect_number_for);
		if($_REQUEST['submit']=='Add Contect Number'){
			$wpdb->insert($table_name,$data) or die(mysql_error());
			echo "Successfully inserted";
		}
		if($_REQUEST['submit']=='Update Contect Number'){
			$no=$_REQUEST['no'];
			$wpdb->update($table_name,$data,array('s_no' =>$no));
			echo "Successfully update";
//			echo '<script>Location:"'.admin_url().'admin.php?page=addcontectnumber&action=edit&no='.$result->s_no;.'"</script>'

		}


	}
	else
		echo "Please fill all  data";
}
}
if(!$_REQUEST['action']){

	global $wpdb;
	?>
	<a href="<?php echo admin_url(); ?>admin.php?page=addcontectnumber&action=add"><b>Add Contect Number</b></a> 	 	
<table class="widefat">
	<tr>
		<th>Sno </th>
		<th>Contect number for</th>
		<th>Contect Name</th>
		<th>Contect Number</th>
	</tr>

<?php
	$results=$wpdb->get_results("SELECT * FROM `add_contect_no` ");
	foreach ($results as $result) {
?>
		<tr>
			<td> <?php 	echo $result->s_no; ?></td>
			<td><?php echo $result->contect_number_for; ?></td>
			<td><?php echo  $result->contect_name; ?></td>
			<td><a href="<?php echo admin_url(); ?>admin.php?page=addcontectnumber&action=edit&no=<?php echo $result->s_no; ?>"><?php echo $result->contect_number; ?></a> </td>
			
		</tr>
	<?php 
	}

}
?>
</table>



	<?php









}
?>
