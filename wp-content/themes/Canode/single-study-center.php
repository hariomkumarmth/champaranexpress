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
    $newinformations=$post_meta_data['wpcf-newbatchstarttime'];
    $downloadsmaterials=$post_meta_data['wpcf-downloadsmaterials'];
    $permalink = get_permalink( $post_id ); 
?>

<?php global $theme; get_header(); ?>
    <div id="main">
        <?php $theme->hook('main_before'); ?>
        <div id="content">
       <div <?php post_class('post post-single clearfix'); ?> id="post-<?php the_ID(); ?>">
        <div class="postmeta-primary">
        <span class="meta_date">
            <a href="<?php echo $permalink;?>/?action=newinformation" >New Information</a> </span>
        <span class="meta_date">
            <a href="<?php echo $permalink;?>/?action=gallery" >Gallery</a> 
        </span>
        <span class="meta_date">
             <a href="<?php echo $permalink;?>/?action=downloadmaterials"> Download Materials </a>
        </span>
        <span class="meta_date">
             <a href="<?php echo $permalink;?>/?action=map"> Address </a>
        </span>
          &nbsp; <span class="meta_categories"><?php the_category(', '); ?></span>
    
                <?php //if(comments_open( get_the_ID() ))  {
                    ?> 
                    &nbsp; <span class="meta_comments"><?php //comments_popup_link( __( 'No comments', 'themater' ), __( '1 Comment', 'themater' ), __( '% Comments', 'themater' ) ); ?></span><?php
                // }
                
                if(is_user_logged_in())  {
                    ?> &nbsp; <span class="meta_edit"><?php //edit_post_link(); ?></span><?php
                } ?> 
        </div>
        
        <h2 class="title"><?php the_title(); ?></h2>

        <div class="entry clearfix">
            
            <?php
            if(!$_REQUEST['action']){
                if(has_post_thumbnail())  {
                    the_post_thumbnail(
                        array($theme->get_option('featured_image_width_single'), $theme->get_option('featured_image_height_single')),
                        array("class" => $theme->get_option('featured_image_position_single') . " featured_image")
                    );
                }
           
            ?>
            <?php echo $post->post_content;  } ?> 
            <?php if($_REQUEST['action']=='newinformation'){
                    foreach ($newinformations as $newinformation) {
                      echo $newinformation;
                    }
                   } ?>
             <?php if($_REQUEST['action']=='downloadmaterials'){ ?>
                <ul>
                <?php
                    foreach ($downloadsmaterials as $downloadsmaterial) { 
                            $a=explode('/', $downloadsmaterial);      
                ?>
                     <li>
                       <a href="<?php echo $downloadsmaterial ?>"><?php echo $a[8]; ?> </a>
                     </li>
                      <?php 
                    }
               ?>
                </ul>
               <?php
            }
 ?>
 <?php if($_REQUEST['action']=='gallery'){
            $image = get_images_src('medium', false, $post_id);
            foreach ($image as $key => $value) {
                $a=$value[0];
?>
                <div  style="width:150px; height:150px;border:1px solid gray;float:left;margin-left:5px;margin-top:5px;">
                   <a href="<?php echo $a; ?>"><img src="<?php echo $a;?>" style="height:150px;width:150px;"></a>
                </div>
<?php
            }
        }
?>
<?php if($_REQUEST['action']=='map'){ ?>
         <p><?php echo $post_meta_data['wpcf-address'][0];?></p>
         <p><?php echo $post_meta_data['wpcf-city-town-state'][0];?> </p><p>
         <?php $mobno=$post_meta_data['wpcf-mobile-number'];
               foreach ($mobno as $mobno) {  ?>
              <?php echo $mobno.',';?> <?php } ?>
              <p><?php $email= $post_meta_data['wpcf-email-id']; foreach ($email as $email) {  ?>
                                  <?php echo $email.',';?> <?php } ?></p>
                                   <?php 
                $myrows = $wpdb->get_row( "SELECT mapid FROM wp_mappress_posts where postid =".$post->ID ); 
                if (!empty($myrows)) {
                    foreach ($myrows as $key ) {                    
                        echo do_shortcode('[mappress mapid='.$key.']');
                    }
                }
                else{
                    echo 'Sorry, There is no maps.';
                }
             }        
        ?>
        <?php             
            wp_link_pages( array( 'before' => '<p><strong>' . __( 'Pages:', 'themater' ) . '</strong>', 'after' => '</p>' ) );
        ?>
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


					