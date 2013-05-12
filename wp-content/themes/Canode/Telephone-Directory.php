<?php

/*
 Template Name:Telephone Directory
 */

get_header(); 
?>
<div class="page-wrapper">
	<div class="row">
		<div class="span3">
			<?php get_sidebar(); ?>
		</div>
		<div class="span9">
			<div id="primary">
				<div id="content" role="main">
					<h2 class="content-heading">Importent Contect Number</h2>
					<hr />
					<h4 align="center"><strong>Government Number</strong></h4>
					<table class="table table-bordered table-hover">
					<tr>
						<th>Contect Name</th>
						<th>Contect Number</th>
					</tr>

				<?php
					$results=$wpdb->get_results("SELECT * FROM `add_contect_no` WHERE contect_number_for='govt_offices'");
					foreach ($results as $result) {
?>
					<tr>
						<td><?php echo  $result->contect_name; ?></td>
						<td><?php echo $result->contect_number; ?> </td>
						
					</tr>
	<?php 
					}
						?>
					</table>
					<h4 align="center"><strong>Resturent and Hotel Number </strong></h4>
					<table class="table table-bordered table-hover">
					<tr>
						<th>Contect Name</th>
						<th>Contect Number</th>
					</tr>

				<?php
					$results=$wpdb->get_results("SELECT * FROM `add_contect_no` WHERE contect_number_for='hotels_restaurants'");
					foreach ($results as $result) {
?>
					<tr>
						<td><?php echo  $result->contect_name; ?></td>
						<td><?php echo $result->contect_number; ?> </td>
						
					</tr>
	<?php 
					}
						?>
					</table>
					
					<h4 align="center"><strong>Mislenious </strong></h4>
					<table class="table table-bordered table-hover">
					<tr>
						<th>Contect Name</th>
						<th>Contect Number</th>
					</tr>

				<?php
					$results=$wpdb->get_results("SELECT * FROM `add_contect_no` WHERE contect_number_for='others'");
					foreach ($results as $result) {
?>
					<tr>
						<td><?php echo  $result->contect_name; ?></td>
						<td><?php echo $result->contect_number; ?> </td>
						
					</tr>
	<?php 
					}
						?>
					</table>
						



				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>