		<?php
/*
Template Name: Custom Post Display Page
 */

?>
<?php   
global $post;
$post_id = $post->ID;
$post_detail = get_post( $post_id);
$author_id=$post_detail->post_author;
$post_meta_data = get_post_meta($post_id);

$educationals=$post_meta_data['wpcf-educational-institute'];
$theaters=$post_meta_data['wpcf-theaters'];
$banks=$post_meta_data['wpcf-banks'];
$hospitals=$post_meta_data['wpcf-hotels'];
$hotels=$post_meta_data['wpcf-hospitals'];
?>
<?php global $theme; get_header(); ?>

    <div id="main">
    
        <?php $theme->hook('main_before'); ?>

        <div id="content">
   <div <?php post_class('post post-single clearfix'); ?> id="post-<?php the_ID(); ?>">
        
        <div class="postmeta-primary">
        	<a href="#">sdfsajdfka</a>
    
          <!--  <span class="meta_date"><?php echo get_the_date(); ?></span>
           &nbsp; <span class="meta_categories"><?php the_category(', '); ?></span> -->
             <?php 
             // if(comments_open( get_the_ID() ))  {
             //        ?> &nbsp; <span class="meta_comments"><?php comments_popup_link( __( 'No comments', 'themater' ), __( '1 Comment', 'themater' ), __( '% Comments', 'themater' ) ); ?></span><?php
             //    }
                
             //    if(is_user_logged_in())  {
             //        ?> &nbsp; <span class="meta_edit"><?php edit_post_link(); ?></span><?php
             //    } ?> 
        </div>
        
        <h2 class="title"><?php the_title(); ?></h2>

        <div class="entry clearfix">
            
            <?php
                if(has_post_thumbnail())  {
                    the_post_thumbnail(
                        array($theme->get_option('featured_image_width_single'), $theme->get_option('featured_image_height_single')),
                        array("class" => $theme->get_option('featured_image_position_single') . " featured_image")
                    );
                }
            ?>
            <?php echo $post->post_content; ?> 
            <?php
                
                wp_link_pages( array( 'before' => '<p><strong>' . __( 'Pages:', 'themater' ) . '</strong>', 'after' => '</p>' ) );
            ?>
    
        </div>
       
	<div class="pincode" style="margin-top:30px;">
				<label >Educational Institute in <?php echo $post->post_title ?></label>
				<div style="margin-top:10px;"></div>
		<?php	if($educationals){
					foreach ($educationals as $key => $educational) {	?>
						<ul>
							<li><a href="#"><?php echo $educational ?></a></li></ul>
			<?php
					} ?>
<?php			}
				else
					echo " Information Comming soon...";

?>	
	</div>
	<div class="pincode" style="margin-top:30px;">
		<label >Banks in  <?php echo $post->post_title; ?></label>
			<div style="margin-top:10px;"></div>
		<?php	if($banks){
					foreach ($banks as $key => $bank) {
		?>
		<ul>
			<li>
				<a href="<?php echo $post->guid; ?>"><?php echo $bank ?></a>
			</li>
		</ul>
<?php
					}
				}
				else
					echo "Information Comming Soon..";

?>		
	</div>
	<div class="pincode" style="margin-top:30px;">
		<label >Hospitals in <?php echo $post->post_title;  ?></center>
			<div style="margin-top:10px;"></div>
		<?php
			if ($hospitals) {
				foreach ($hospitals as $key => $hospital) {
		?>
				<ul>
					<li>
						<a href="#"><?php echo $hospital ?></a>
					</li>
				</ul>
<?php
				}
			}
			else
				echo "Information Comming Soon..";
		?>
	</div>
	<div class="pincode" style="margin-top:30px;">
		<label >Hotels in <?php echo $post->post_title;  ?></label>
			<div style="margin-top:10px;"></div>
		<?php if($hotels){
				foreach ($hotels as $key => $hotel) {
		?>
					<ul>
						<li>
							<a href="#"><?php echo $hotel ?></a>
						</li>
					</ul>
<?php
				}
			}
			else
				echo "Information Comming Soon..";
		?>
	</div>
	<div class="pincode" style="margin-top:30px;">
		<label >Theaters in <?php echo $post->post_title;  ?></label>
			<div style="margin-top:10px;"></div>
			<?php if($theaters){
				foreach ($theaters as $key => $theater) {
		?>
					<ul>
						<li>
							<a href="#"><?php echo $theater ?></a>
						</li>
					</ul>
<?php
				}
			}
			else
				echo "Information Comming Soon..";
		?>
	</div>
	
</div>
	<?php 
        if(comments_open( get_the_ID() ))  {
            comments_template('', true); 
        }
    ?>

		 <?php $theme->hook('content_after'); ?>
        
        </div><!-- #content -->
    
        <?php get_sidebars(); ?>
        
        <?php $theme->hook('main_after'); ?>
        
    </div><!-- #main -->
    
<?php get_footer(); ?>


					