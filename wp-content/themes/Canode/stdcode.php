<?php 
/*
  Template Name:india std code

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
    		<form name="frmPincode" id="frmPincode" action="<?php echo site_url() ?>/std-code?action=findcity" method="post">     			
    			<label ><center><strong>Enter the STD Code / City below </strong></center></label>
				<div style="margin-top:10px;">
				<span style=" display: inline-block; width:80px;">STD Code : </span> 
				<input  class = "validateNumber" id="txtstdcode" name="txtstdcode" size="20" type="text" value="" required="true" maxlength="10" data-dojo-type="dijit/form/ValidationTextBox"
	                data-dojo-props="regExp:'\\d{10}',
	                invalidMessage:'Invalid Number'">
				<input type="submit"  class="css3button" name="submit" value="Find City"></td>
			</form>
		</div>
		<div style="margin-top:10px;"></div>
		<center><b>(or)</b></center>
		<div style="margin-top:10px;"></div>
        	 <form name="frmPincode" id="frmPincode" action="<?php echo site_url() ?>/std-code/" method="post">     
        	 	<span style="display: inline-block;  width:80px;">City Name : </span> 
  				<input  class = "validateNumber" id="txtcity" name="txtcity" size="20" type="text" value="" required="true" maxlength="10" data-dojo-type="dijit/form/ValidationTextBox"  >
      			<input type="submit" class="css3button" name="submit" value="Find STD Code" />
    		</form>
    		<div style="margin-top:10px;"></div>
     		Type  Stdcode or City Name. Ex..06252 or motihari.
		</div>
		<div style="margin-top:10px;"></div>
 	<?php  if(!isset($_REQUEST['submit'])) { ?>
<hr />
<strong>
	Std Code of City in Bihar
</strong>

<div style="margin-top:10px;"></div>
<?php 
$column_json = '{ "stdcode_code" :	 "StdCode",
				  "stdcode_city_name"   :   "City Name",
	 				"stdcode_state_name" :	 "State",
	 						}';
	 		$node_id = 'grid';
	 		global $wpdb;
			$stdcodes=$wpdb->get_results("SELECT * FROM `std_code` WHERE `stdcode_state_name` ='bihar' "); 
			$json=json_encode($stdcodes);
			create_dojo_grid($column_json, $json, $node_id);?>
			<div id='grid'> </div>
	<?php } ?>
<?php 
	if(isset($_REQUEST['submit'])){
		if($_REQUEST['submit']=='Find City'){
			if(!empty($_REQUEST['txtstdcode'])){
				$first3char=substr($_REQUEST['txtstdcode'],0,3);
				$stdcode=$_REQUEST['txtstdcode'];
				?>
				<strong>
					Result of   <?php echo $_REQUEST['txtstdcode']; ?>
				</strong>
				<div style="margin-top:10px;"></div>
				<?php
				$result=$wpdb->get_row("SELECT `stdcode_code`, `stdcode_city_name`, `stdcode_state_name` FROM `std_code` WHERE  `stdcode_code` ='".$stdcode."'");
				// print_r($results)
				table($result);
			}
			else{
				echo "fill";
			}
		}
		if($_REQUEST['submit']=='Find STD Code'){
			if(!empty($_REQUEST['txtcity'])){
				$first3char=substr($_REQUEST['txtcity'],0,3);
				$cityname=$_REQUEST['txtcity'];
				?>
				<strong>
					Result of   <?php echo $_REQUEST['txtcity']; ?>
				</strong>
				<div style="margin-top:10px;"></div>
				
				<?php
				$result=$wpdb->get_row("SELECT `stdcode_code`, `stdcode_city_name`, `stdcode_state_name` FROM `std_code` WHERE  `stdcode_city_name` ='".$cityname."'");
				table($result); 
				?>
				<hr/>
				<strong>
					Similar Result Like <?php echo $_REQUEST['txtcity']; ?>
				</strong>
				<div style="margin-top:10px;"></div>
				<?php
				$results=$wpdb->get_results("SELECT `stdcode_code`, `stdcode_city_name`, `stdcode_state_name` FROM `std_code` WHERE  `stdcode_city_name` like '".$first3char."%'");
				similar($results);
					?>
				
				<?php
			}
			else{
				echo "fill all";
			}
		}
		?>
 <?php if((!empty($_REQUEST['txtstdcode']))|| !empty($_REQUEST['txtstdcode'])){
			
			?>
			<hr/>
			<strong>
				Similar Result Like <?php echo $_REQUEST['txtstdcode']; ?>
			</strong>
			<div style="margin-top:10px;"></div>
			
			<?php
			$results=$wpdb->get_results("SELECT `stdcode_code`, `stdcode_city_name`, `stdcode_state_name` FROM `std_code` WHERE  `stdcode_code` like '".$first3char."%'");
			similar($results);
		}

	}

?>
<div style="margin-top:10px;"></div>
<?php comments_template('', true); ?>

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
					<th>State</th>
					<th>City Name</th>
					<th>Std Code</th>
				</tr>
				<tr>
					<td><?php echo $result->stdcode_state_name; ?></td>
					<td><?php echo $result->stdcode_city_name; ?></td>
					<td><?php echo $result->stdcode_code; ?></td>
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

	if($results){	?>
		<table class="table table-bordered table-hover">
		<tr>
			<th>State</th>
			<th>City Name</th>
			<th>Std Code</th>
		</tr>
		<?php
		foreach ($results as $result) {
	?>
			<tr>
				<td><?php echo $result->stdcode_state_name; ?></td>
				<td><?php echo $result->stdcode_city_name; ?></td>
				<td><?php echo $result->stdcode_code; ?></td>
			</tr>

			<?php
		}
		?>
	</table>		
 
<?php
	}
	else{
		?>
		<p><b> Similar Results also not  Found. Please try again :)....</b></p>
		<?php
	}
}
?>