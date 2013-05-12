<?php
/*
  Template Name:Sub div/Blocks

*/
$taxonomy = 'SubdivBlock_categories';
global $theme; get_header(); ?>
	<div id="main">
        <?php $theme->hook('main_before'); ?>
	    <div id="content">
   			<div <?php post_class('post post-single clearfix'); ?> id="post-<?php the_ID(); ?>">
               <div class="postmeta-primary">
					<h2 class="content-heading">Sub Division/Block</h2>
					<hr />
					<?php 

					if(!$_REQUEST['subdiv/block-type']){
						$args = array('taxonomy' => 'SubdivBlock_categories',
								  	  'hide_empty' => 0,
								  	  'order' => 'ASC',
								  	  'parent' => 0);
						// print_r($args);
						$categories = get_categories($args);
						// print_r($categories);
						foreach ($categories as $key => $value) {

					?>
					
						<ul>
							<li><a href="<?php echo $_SERVER['REQUEST_URI'].'?subdiv/block-type='.$value->slug;?>"> <?php echo $value->name;?> </a>
							</li>
					</ul>
					<?php
						}
					}
					if($_REQUEST['subdiv/block-type']){
						$interest_category_post = array();
						$interest_category_post = $_REQUEST['subdiv/block-type'];
						$args = array('post_type' => 'subdivblocks_post',
									  'numberposts' => -1,
							  		  'posts_per_page' => 10,
							  		  'paged'=> $paged,
							 		);

						if(!empty($interest_category_post[0])){
							$tax_query = array(array('taxonomy' => $taxonomy,
											 'field' => 'slug',
											 'terms' => $interest_category_post
											)
									  );	
							$args['tax_query'] = $tax_query;
						}	
						$posts = new WP_Query($args);
						foreach ($posts->posts as $key => $post){
					?><div class="insidepostheader">
			<div style="float:left;"><h2><a href="<?php the_permalink() ?>" rel="bookmark"  class="title" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></h2></div>
						<div style="float:right;margin-top:10px;">	<span style="float:right;"><?php comments_popup_link('0', '1', '%'); ?></span></div> </div>
				        	<div class="entry clearfix">    
	            		<?php
	            	    	if(has_post_thumbnail())  {
	                    	?><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(
	                        array($theme->get_option('featured_image_width'), $theme->get_option('featured_image_height')),
	                        array("class" => $theme->get_option('featured_image_position') . " featured_image")
	                		    ); ?></a>
	                    	<?php  
	                		}
							
	            ?> <?php echo $post->post_content; ?> 
			        <?php if($theme->display('read_more')) { ?>
			      		  <div class="readmore">
			            	<a href="<?php the_permalink(); ?>#more-<?php the_ID(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themater' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php $theme->option('read_more'); ?></a>
			        	</div>
			        <?php } ?>
			          
		        
    			</div>
						
					<?php			
					 	}
					 }
					
	 
    ?>
</div>
</div>
		 <?php $theme->hook('content_after'); ?>
        
        </div><!-- #content -->
    
        <?php get_sidebars(); ?>
        
        <?php $theme->hook('main_after'); ?>
        
    </div><!-- #main -->
    
<?php get_footer(); ?>


					