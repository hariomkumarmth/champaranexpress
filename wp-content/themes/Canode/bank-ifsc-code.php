<?php 
/*
  Template Name:Bank ifsc code

*/
  ?>
<?php global $theme; get_header(); ?>

    <div id="main">
    	<a name="top"></a>
    
        <?php $theme->hook('main_before'); ?>

        <div id="content">
            
            <?php $theme->hook('content_before'); ?>

<div class="header-right">
    <div class="menu-primary-container">
    	<ul id="menu-top-nav" class="menus menu-primary sub-menu sf-js-enabled">
    		<li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-191"><a href="<?php echo site_url() ?>/bank-ifsc-micr-codes" style=" color: black";> Search By IFSC Code</a></li>
			<li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14"><a href="<?php echo site_url() ?>/bank-ifsc-micr-codes/?action=searchbymicrcode" style=" color: black";>Search By MICR Code</a></li>
			<li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a href="<?php echo site_url() ?>/bank-ifsc-micr-codes/?action=searchbybankname" style=" color: black";>Search By Bank Name</a></li>
			<li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a href="<?php echo site_url() ?>/indian-railways/?action=findtrainbet" style=" color: black";>Search By Branch Name</a></li>
		</ul>
	</div>
</div>

<?php if(!isset($_REQUEST['action'])){ ?>
	<div class="form-2" style="margin-top:100px;">
		<form name="frmBank-IFSC Codes-Finder" id="frmBank-IFSC-Codes-Finder" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">     
			<label ><center>Enter 11 Character IFSC Code :</center></label>
			<div style="margin-left: 70px;margin-top:10px;">
		<input  class = "validateNumber" id="txtifsccode" name="txtifsccode" size="20" type="text" value="" required="true" maxlength="11" data-dojo-type="dijit/form/ValidationTextBox"
	                data-dojo-props="regExp:'\\d{11}',
	                invalidMessage:'Invalid Number'"></div>
	     <div style="margin-left: 70px;margin-top:10px;">
			<input type="submit"  class="css3button" name="submit" value="Get Bank Name"></td>
			</div>
		</form>
	</div>
	<?php
		if($_REQUEST['submit']=='Get Bank Name'){
			if(!empty($_REQUEST['txtifsccode'])){
				$txtifsccode=$_REQUEST['txtifsccode'];
				$result=$wpdb->get_row("SELECT  `BANK`, `IFSC_CODE`, `MICR_CODE`, `BRANCH_NAME`, `ADDRESS`, `CONTACT`, `CITY`, `DISTRICT`, `STATE` FROM `Bank_details` WHERE `IFSC_CODE` ='".$txtifsccode."'");
				echo "<div style='margin-top:10px;'></div><hr/> <div style='margin-top:10px;font-weight: bold;'><center> ~: IFSC code ".$txtifsccode ." Details :~ </center></div>";
				ifsccode($result);
			}
			else{
				echo "Fill The Require Fields";
			}
		}
	}
?>
<?php 
if($_REQUEST['action'] && 'searchbymicrcode'==$_REQUEST['action']){
	?>
		<div class="form-2" style="margin-top:100px;">
		<form name="frmBank-MICR Codes-Finder" id="frmBank-MICR-Codes-Finder" action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">     
			<label ><center>Enter 9 Characters MICR Code. :</center></label>
			<div style="margin-left: 70px;margin-top:10px;">
		<input  class = "validateNumber" id="txtmicrcode" name="txtmicrcode" size="20" type="text" value="" required="true" maxlength="9" data-dojo-type="dijit/form/ValidationTextBox"
	                data-dojo-props="regExp:'\\d{9}',
	                invalidMessage:'Invalid Number'"></div>
	     <div style="margin-left: 70px;margin-top:10px;">
			<input type="submit"  class="css3button" name="submit" value="Get Bank Name"></td>
			</div>
		</form>
	</div>
	<?php
		if($_REQUEST['submit']=='Get Bank Name'){
			if(!empty($_REQUEST['txtmicrcode'])){
				$txtmicrcode=$_REQUEST['txtmicrcode'];
				$result=$wpdb->get_row("SELECT  `BANK`, `IFSC_CODE`, `MICR_CODE`, `BRANCH_NAME`, `ADDRESS`, `CONTACT`, `CITY`, `DISTRICT`, `STATE` FROM `Bank_details` WHERE `MICR_CODE` ='".$txtmicrcode."'");
				echo "<div style='margin-top:10px;'></div><hr/> <div style='margin-top:10px;font-weight: bold;'><center> ~: MICR Code ".$txtmicrcode ." Details :~  </center></div>";
				ifsccode($result);
			}
			else{
				echo "Fill The Require Fields";
			}
		}
}
?>
<?php 
if($_REQUEST['action'] && 'searchbybankname'==$_REQUEST['action']){
	echo "string";
	?>
	<div class="form-2" style="margin-top:100px;">
		<table class="table table-bordered table-hover">
			<tr>
				<th>S.No</th>
				<th>Bank Name</th>
			</tr>
			<?php $banknames=$wpdb->get_results("SELECT * FROM `bank_name` ");
			// print_r($banknames);
			$i=1;$b=20;
			foreach ($banknames as $bankname) {
				?>
				<tr> 
					<td><?php echo $bankname->bank_id ?></td>
					<td><a href="<?php echo site_url() ?>/bank-ifsc-micr-codes/?action=searchbybankname&bankid=<?php echo $bankname->bank_id ;?>"  style="cursor: pointer;"><?php echo $bankname->bank_name ?></td>
				</tr>
				<?php
				$i++;
				if($i==$b){
				$b=$b+20;
					?>
					<tr>
						<td style="margin: 3px; border: 1px solid #aaaaaa; font-size: 11px;" colspan="4" align="center"><a href="#top" style="color:red;float:right;" >TOP OF PAGE</a>
						</td>
						
					</tr>

				<?php
				}



				
			}
			?>
		</table>
	</div>		
	<?php
}

	?>



 		     
	    
	
<?php  
?>
<!-- <a href="#top" style="color:red;float:right;" >TOP OF PAGE</a> -->

<?php 
		if($_REQUEST['submit']=='Find Bank'){
			if(!empty($_REQUEST['txtifsccode'])){
				$txtifsccode=$_REQUEST['txtifsccode'];
				$result=$wpdb->get_row("SELECT  `BANK`, `IFSC_CODE`, `MICR_CODE`, `BRANCH_NAME`, `ADDRESS`, `CONTACT`, `CITY`, `DISTRICT`, `STATE` FROM `Bank_details` WHERE `IFSC_CODE` ='".$txtifsccode."'");
				echo "<div style='margin-top:10px;'></div><hr/> <div style='margin-top:108px;font-weight: bold;'> IFSC code ".$txtifsccode ." Details :~ </div>";
				ifsccode($result);
			}
			else{
				echo "fill the require fields";
			}
		}

		if($_REQUEST['submit1']=='Find Bank'){
			if(!empty($_REQUEST['txtmicrcode'])){
				$txtmicrcode=$_REQUEST['txtmicrcode'];
				$result=$wpdb->get_row("SELECT  `BANK`, `IFSC_CODE`, `MICR_CODE`, `BRANCH_NAME`, `ADDRESS`, `CONTACT`, `CITY`, `DISTRICT`, `STATE` FROM `Bank_details` WHERE `MICR_CODE` ='".$txtmicrcode."'");
				echo "<hr/>  MICR Code ".$txtmicrcode ." Details :~ ";
				ifsccode($result);

			}
			else{
				echo "fill the require fields";
			}
		}
	
		?>

 
<div style='margin-top:10px;'><hr> </div>
<div style='margin-top:10px;'>
<?php comments_template('', true); ?>
</div>
</div>
</div>
</div>
</div>

<?php include('sidebar2.php'); ?>
<?php include('sidebar3.php'); ?>
<?php get_footer(); ?>

<?php 
function ifsccode($result){
	
	 
	if($result){
		global $wpdb; 
	?>
	<div style="margin-top:10px;">
		<table class="table table-bordered table-hover">
			<?php $bankname=$wpdb->get_row("SELECT * FROM `bank_name` WHERE `bank_id`= ".$result->BANK); ?>
			<tr>
				<th>Bank Name</th><td><?php echo $bankname->bank_name; ?></td>
			</tr>
			<tr>
				<th>Branch Name</th><td><?php echo $result->BRANCH_NAME; ?></td>
			</tr>
			<tr>
				<th>Address</th><td><?php echo $result->ADDRESS; ?></td>
			</tr>
			<tr>
				<th>Contact Details</th><td><?php echo $result->CONTACT; ?></td>
			</tr>
			<tr>
				<th>City</th><td><?php echo $result->CITY; ?></td>
			</tr>
			<tr>
				<th>District</th><td><?php echo $result->DISTRICT; ?></td>
			</tr>
			<tr>
				<th>State</th><td><?php echo $result->STATE; ?></td>
			</tr>	
		</table>
	</div>		
				<?php
	}
	else {
	echo "No result found try another";
	}
					
}

?>
<p id="back-top" style="display: block;">
		<a href="#top"><span></span>Top</a>
	</p>