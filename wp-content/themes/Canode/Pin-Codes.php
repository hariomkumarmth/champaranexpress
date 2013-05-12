<?php 
/*
  Template Name:india Pin Code

*/
global $wpdb;  
  $table='std_code';
?>
<?php global $theme; get_header(); ?>

    <div id="main">
    
        <?php $theme->hook('main_before'); ?>

        <div id="content">
            
            <?php $theme->hook('content_before'); ?>
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                    /**
                     * Find the post formatting for the pages in the post-page.php file
                     */
                    get_template_part('post', 'page');


                    endwhile;
				endif; 
                    ?>


            <div class="pincode" style="margin-top:100px;">
				<form  method="POST" name="pnrForm" >
					<label ><center><strong>Enter the Pin Code / Locality below </strong></center></label>
					<div style="margin-top:10px;">
						<span style=" display: inline-block; width:65px;">Pin Code : </span> 
						<input  class = "validateNumber" id="txtpincode" name="txtpincode" size="20" type="text" value="" required="true" maxlength="10" data-dojo-type="dijit/form/ValidationTextBox"
			                data-dojo-props="regExp:'\\d{10}',
			                invalidMessage:'Invalid Number'">
						<input type="submit"  class="css3button" name="submit" value="Find City"></td>
					</div>
				</form>
				<div style="margin-top:10px;"></div>
				<center><b>(or)</b></center>
				<div style="margin-top:10px;"></div>
			            	
       			<form name="frmPincode" id="frmPincode" action="<?php echo site_url() ?>/pin-codes" method="post">     
	            	<span style="display: inline-block;  width:65px;">Office Name  : </span> 
	          		<input  class = "validateNumber" id="txtcity" name="txtcity" size="20" type="text" value="" required="true" maxlength="10" data-dojo-type="dijit/form/ValidationTextBox"  >
		          	<input type="submit" class="css3button" name="submit" value="Find Pin Code" />
	    	    </form>
	    	    <div style="margin-top:10px;"></div>
	    	     Type office Name or Pincode. Ex..Motihari or 845401
	</div>
	<div style="margin-top:10px;"></div>
<?php  if(!isset($_REQUEST['submit'])) { ?>
<hr />
Pin Codes Detais of Bihar
<div style="margin-top:10px;"></div>
<?php 
$column_json = '{ "pincode_code" :	 "Pin code",
	 						  "pincode_area" :   "Office Name", 
	 						  "pincode_city_name"   :   "District",
	 						  "pincode_state_name" :	 "State",
	 						}';
	 		$node_id = 'grid';
	 		global $wpdb;
			$results=$wpdb->get_results("SELECT  `pincode_code`, `pincode_area`, `pincode_city_name`, `pincode_state_name` FROM `pin_code` WHERE `pincode_city_name`= 'east champaran' "); 
			$json=json_encode($results);
			create_dojo_grid($column_json, $json, $node_id);?>
			<div id='grid'> </div>
	<?php
}
?>
<?php 
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['submit']=='Find City'){
			if(!empty($_REQUEST['txtpincode'])){ ?>
				<hr />
				<strong>
				Detais of <?php echo $_REQUEST['txtpincode']; ?></strong>
				<div style="margin-top:10px;"></div>
				<?php 

				$pincode=$_REQUEST['txtpincode'];
				$column_json = '{ "pincode_code" :	 "Pin code",
	 						  "pincode_area" :   "Office Name", 
	 						  "pincode_city_name"   :   "District",
	 						  "pincode_state_name" :	 "State",
	 						}';
	 		$node_id = 'grid';
	 		global $wpdb;
			$results=$wpdb->get_results("SELECT  `pincode_code`, `pincode_area`, `pincode_city_name`, `pincode_state_name` FROM `pin_code` WHERE `pincode_code`='".$pincode."'");
			if($results){
			$json=json_encode($results);

			create_dojo_grid($column_json, $json, $node_id);?>
			<div id='grid'> </div>
				<?php
			}
			else{
				echo "nahi mila";
			}
			
			}
			else{
				echo "fill";
			}
		}
		if($_REQUEST['submit']=='Find Pin Code'){
			if(!empty($_REQUEST['txtcity'])){
				$first3char=substr($_REQUEST['txtcity'],0,4);
				$cityname=$_REQUEST['txtcity'];
				$result=$wpdb->get_row("SELECT  `pincode_code`, `pincode_area`, `pincode_city_name`, `pincode_state_name` FROM `pin_code` WHERE `pincode_area`='".$cityname."'");
				table($result); 
				?>
				<div style="margin-top:10px;"></div>
				<hr/>
				<strong>
				Similar Result Like <?php echo $_REQUEST['txtcity']; ?></strong>
				<div style="margin-top:10px;"></div>
				<?php
				$results=$wpdb->get_results("SELECT  `pincode_code`, `pincode_area`, `pincode_city_name`, `pincode_state_name` FROM `pin_code` WHERE `pincode_area` like '".$first3char."%' ORDER BY  `pin_code`.`pincode_area` ASC ");
				similar($results);
					?>
				
				<?php
			}
			else{
				echo "fill all";
			}
		}
	}
		?>






<div style="margin-top:10px;"></div>
<?php
	 comments_template('', true); 
	
// }
?>

 <?php $theme->hook('content_after'); ?>
        
        </div><!-- #content -->
    
        <?php get_sidebars(); ?>
        
        <?php $theme->hook('main_after'); ?>
        
    </div><!-- #main -->
    
<?php get_footer(); ?>

<?php function table( $result) {
	
		if($result){
			?>
			<table class="table table-bordered table-hover">
				<tr>
					<th>Pin Code</th>
					<th>Locality</th>
					<th>City / District</th>
					<th>State</th>
				</tr>
				<tr>
					<td><?php echo $result->pincode_code; ?></td>
					<td><?php echo $result->pincode_area; ?></td>
					<td><?php echo $result->pincode_city_name; ?></td>
					<td><?php echo $result->pincode_state_name; ?></td>
				</tr>

			</table>
			<?php

		}
		else {
		?>
				<b> No Result Found.....</b>

		<?php
		}
	}
?>



<?php
function similar($results){ 

	if($results){	
		$column_json = '{ "pincode_code" :	 "Pin Code",
	 						  "pincode_area" :   "Office Name", 
	 						  "pincode_city_name"   :   "District",
	 						  "pincode_state_name" :	 "State",
	 						}';
	 		$node_id = 'grid';
	 		global $wpdb;
			// $results=$wpdb->get_results("SELECT  `pincode_code`, `pincode_area`, `pincode_city_name`, `pincode_state_name` FROM `pin_code` WHERE `pincode_city_name`= 'east champaran' "); 
			$json=json_encode($results);
			create_dojo_grid($column_json, $json, $node_id);?>
			<div id='grid'> </div>
	<?php
	}
	else{
		?>
		<p><b> Similar Results  not  Found. Please try again :)....</b></p>
		<?php
	}
}
?>