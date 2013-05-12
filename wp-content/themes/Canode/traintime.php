<?php 
/*
  Template Name:train time table

*/
?>
<?php global $theme; get_header(); ?>

    <div id="main">
    
        <?php $theme->hook('main_before'); ?>

        <div id="content">
            
            <?php $theme->hook('content_before'); ?>

<div class="header-right">
    <div class="menu-primary-container">
    	<ul id="menu-top-nav" class="menus menu-primary sub-menu sf-js-enabled">
    		<li  class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-191"><a href="<?php echo site_url() ?>/indian-railways/?action=pnrstatus" style=" color: black";> Get PNR Status</a></li>
			<li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-14"><a href="<?php echo site_url() ?>/indian-railways/?action=findtrainbet" style=" color: black";>Train Between Important Stations</a></li>
			<li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-16"><a href="<?php echo site_url() ?>/indian-railways/?action=findtrainbet" style=" color: black";>Seat Availability</a></li>
			<li  class="menu-item menu-item-type-post_type menu-item-object-page menu-item-188"><a href="<?php echo site_url() ?>/indian-railways/?action=findtrainbet" style=" color: black";>Fare Enquiry</a></li>
		</ul>
	</div>
</div>

<div class="form-2" style="margin-top:100px;">
	<form  method="POST" name="pnrForm" >
		<label ><center>Enter the 10-digit PNR number below</center></label>
		<div style="margin-left: 70px;margin-top:10px;">
	<input  class = "validateNumber" id="txtpnrno" name="pnr_no" size="20" type="text" value="" required="true" maxlength="10" data-dojo-type="dijit/form/ValidationTextBox"
                data-dojo-props="regExp:'\\d{10}',
                invalidMessage:'Invalid Number'"></div>
     <div style="margin-left: 70px;margin-top:10px;">
		<input type="submit"  class="css3button" name="submit" value="Get PNR Status"></td>
		</div>
	</form>
</div>
<?php
if(isset($_POST['submit'])){	
	if(!empty($_POST['pnr_no'])){
		$pnr=$_POST['pnr_no'];
		$url = 'http://pnrapi.alagu.net/api/v1.0/pnr/'.$pnr;
		$content = file_get_contents($url);
		$json = json_decode($content, true);
		// print_r($json);

	?>	
	<?php 
		if($json['status']=="OK" && $json['data']){
			?>
			<div style="margin-top:20px;"></div>
				<b><center>Passenger Current Status Enquiry </center></b>
				<p><center>You Queried For : PNR Number : <?php echo $pnr ?>  </center></p>
				<table style="border-collapse: collapse;" width="98%">
					<tbody>
						<tr style="margin: 3px; border: 1px solid #aaaaaa;">
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><strong>Train Number</strong></td>
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><strong>Train Name</strong></td>
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><strong>Travel Date</strong></td>
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><strong>From</strong></td>
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><strong>To</strong></td>
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><strong>Boarding Point</strong></td>
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><strong>Class</strong></td>
						</tr>
					</tbody>
		<?php
				foreach ($json as  $data) {
					if( ! is_string($data) ){
					?>
						<tr style="margin: 3px; border: 1px solid #aaaaaa; font-size: 11px;">
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><?php echo $data['train_number']; ?></td>
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><?php echo $data['train_name']; ?></td>
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><?php echo $data['travel_date']['date']; ?></td>
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><?php echo $data['from']['code']; ?></td>
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><?php echo $data['to']['code']; ?></td>
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><?php echo $data['board']['code']; ?></td>
							<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><?php echo $data['class']; ?></td>
						</tr>
					<?php
					}
				}
				?>
			</table>
			<div style="margin-top:20px;" ></div>
			<?php
				$passenger=$data['passenger'];
				$chart_prepared=$data['chart_prepared'];
				if($chart_prepared==true){
					$chart_prepared_status='CHART PREPARED';
				}
				else{
					$chart_prepared_status='CHART NOT PREPARED';
				}
				?>
				<table style="border-collapse: collapse;" width="98%">
					<tbody>
						<tr style="margin: 3px; border: 1px solid #aaaaaa;">
						<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><strong>S. NO.</strong></td>
						<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><strong>Booking Status</strong></td>
						<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><strong>Current Status</strong></td>
					</tr>
				<?php
				$i=1;
				foreach ($passenger as $val) {
					if( is_string($val) )
						continue;
					?>
					<tr style="margin: 3px; border: 1px solid #aaaaaa; font-size: 11px;">
						<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><?php echo $i; ?></td>
						<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><?php echo $val['seat_number']; ?></td>
						<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><?php echo $val['status'];?> </td>
					</tr>
					<?php
					$i++;
				}
			?>
			<tr style="margin: 3px; border: 1px solid #aaaaaa;">
			<td style="margin: 3px; border: 1px solid #aaaaaa;" align="center"><strong>Charting Status</strong></td>
			<td style="margin: 3px; border: 1px solid #aaaaaa; font-size: 11px;" colspan="3" align="center"><?php echo $chart_prepared_status; ?></td>
			</tr>
			</tbody>
			</table>

			<div style="margin-top:20px;"></div>
			<table style="border-collapse: collapse;" width="98%">
				<caption class="Enq_heading">LEGENDS</caption>
				<tbody>
					<tr>
						<th >Symbol</th>
						<th >Description</th>
					</tr>
					<tr>
						<td>CAN / MOD</td>
						<td>Cancelled or Modified Passenger</td>
					</tr>
					<tr>
						<td>CNF / Confirmed</td>
						<td>Confirmed (Coach/Berth number will be available after chart preparation)</td>
					</tr>
					<tr>
						<td>RAC</td>
						<td>Reservation Against Cancellation</td>
					</tr>
					<tr>
						<td>WL #</td>
						<td>Waiting List Number</td>
					</tr>
					<tr>
						<td>RLWL</td>
						<td>Remote Location Wait List</td>
					</tr>
					<tr>
						<td>GNWL</td>
						<td>General Wait List</td>
					</tr>
					<tr>
						<td>PQWL</td>
						<td>Pooled Quota Wait List</td>
					</tr>
					<tr>
						<td>REGRET/WL</td>
						<td>No More Booking Permitted</td>
					</tr>
					<tr>
						<td>RELEASED</td>
						<td>Ticket Not Cancelled but Alternative Accommodation Provided</td>
					</tr>
					<tr>
						<td>R# #</td>
						<td>RAC Coach Number Berth Number</td>
					</tr>
				</tbody>
			</table>
			<?php

		}
		else
		{
			echo "nahi mila";
		}
	}
	else
		echo "Please write a valied pnr";
}

?>
<div style="margin-top:20px;"></div>
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














































<?php 

// $url='http://erail.in/rail/getTrains.aspx?Station_From=bmki&Station_To=ndls&DataSource=0&Language=0';
// $content = file_get_contents($url);
// print_r($content);
// $a=json_encode($content);
// echo $a;
// $json = json_decode_nice($content, true);
// print_r($json);
// $b=preg_replace("\^\d+\~[A-Za-z0-9 ]+" , "-", $json);
// // $b=preg_replace('\^\d+\~[A-Za-z0-9 ]+',$content);
// print_r($b);
// re_train_item=re.compile(r'\^\d+\~[A-Za-z0-9 ]+')
// 	re_train_name=re.compile(r'~[A-Za-z0-9 ]+')
// 	re_train_number=re.compile(r'\^\d+')
// 	trains={}
// 
// print_r($json);
?>
