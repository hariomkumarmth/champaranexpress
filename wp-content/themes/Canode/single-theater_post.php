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
?>
<?php global $theme; get_header(); ?>

    <div id="main">
    
        <?php $theme->hook('main_before'); ?>

        <div id="content">
   <div <?php post_class('post post-single clearfix'); ?> id="post-<?php the_ID(); ?>">
        
        <div class="postmeta-primary">
    
            <span class="meta_date"><?php echo get_the_date(); ?></span>
           &nbsp; <span class="meta_categories"><?php the_category(', '); ?></span>
    
                <?php if(comments_open( get_the_ID() ))  {
                    ?> &nbsp; <span class="meta_comments"><?php comments_popup_link( __( 'No comments', 'themater' ), __( '1 Comment', 'themater' ), __( '% Comments', 'themater' ) ); ?></span><?php
                }
                
                if(is_user_logged_in())  {
                    ?> &nbsp; <span class="meta_edit"><?php edit_post_link(); ?></span><?php
                } ?> 
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
        
        <div style="clear:both;"></div>
            <div class="entry clearfix">    
                
           <h2>Current movie</h2>
				<!-- <span class="comm"><?php comments_popup_link('0', '1', '%'); ?></span> -->
				
			
				<a href="<?php echo $post_meta_data['wpcf-current-movies-image'][0]?>"><img src="<?php echo $post_meta_data['wpcf-current-movies-image'][0]?> " style="height:250px;width:455px;" class="alignleft featured_image wp-post-image" alt=""></a>
                <div style="float: left;">
				<ul>
                    <li>stars:<?php echo $post_meta_data['wpcf-current-movie-stars'][0]?> </li>
					<li>Director:<?php echo $post_meta_data['wpcf-current-movie-director'][0]?> </li>
					<li>Singer:<?php echo $post_meta_data['wpcf-current-movie-singer'][0]?> </li>
				</ul>
            </div>
            </div>
		<div style="clear:both;"></div>
			<div class="entry clearfix">
				<h2>Upcoming movie</h2>
					<!-- <span class="comm"><?php comments_popup_link('0', '1', '%'); ?></span> -->
					
		
					<a href="<?php echo $post_meta_data['wpcf-upcoming-movie-name'][0]?>"><img src="<?php echo $post_meta_data['wpcf-upcoming-movie-name'][0]?> " style="height:250px;width:455px;" class="alignleft featured_image wp-post-image" alt=""></a>
					 <div style="float: left;">
                    <ul>
						<li>Upcoming movies stars:<?php echo $post_meta_data['wpcf-upcoming-movie-stars'][0]?> </li>
						<li>Upcoming movies Director:<?php echo $post_meta_data['wpcf-upcoming-movie-singer'][0]?> </li>
						<li>Upcoming movies Singer:<?php echo $post_meta_data['wpcf-upcoming-movie-director'][0]?> </li>
					</ul>
		</div>
        </div>
    
    </div><!-- Post ID <?php the_ID(); ?> -->
    
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


					