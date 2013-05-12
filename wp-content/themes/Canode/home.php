<?php global $theme; get_header(); ?>

    <div id="main">
    
        <?php $theme->hook('main_before'); ?>

        <div id="content">
        
            <?php $theme->hook('content_before'); ?>
            
            <?php 
                $args='category_name=Home';
                        query_posts( $args );
                while (have_posts()) : the_post();
                    /**
                     * The default post formatting from the post.php template file will be used.
                     * If you want to customize the post formatting for your homepage:
                     * 
                     *   - Create a new file: post-homepage.php
                     *   - Copy/Paste the content of post.php to post-homepage.php
                     *   - Edit and customize the post-homepage.php file for your needs.
                     * 
                     * Learn more about the get_template_part() function: http://codex.wordpress.org/Function_Reference/get_template_part
                     */

                    get_template_part('post', 'homepage');
                    
                endwhile;
                
                // else :
                //     get_template_part('post', 'noresults');
                // endif; 
                
                get_template_part('navigation');
            ?>
            
            <?php $theme->hook('content_after'); ?>
        
        </div><!-- #content -->
    
        <?php get_sidebars(); ?>
        
        <?php $theme->hook('main_after'); ?>
        
    </div><!-- #main -->
    <?php
    $current_month = date('M');
    // echo $current_month;
                        $args='category_name=birthday';
                       $a= query_posts( $args );
                       // echo "<pre>";
                       // print_r($a);
                       // echo "</pre>";

                        ?>
   <div style="width: 940px;">
         <h4 style="text-align:center; margin:10px 0 -10px; padding:0;">Happy Birthday to You </h4>
        <div class="shadow-upper"><img src="<?php bloginfo('template_directory'); ?>/images/shadow-upper.png" alt="divider"/>
        </div>
          <ul id="scroller">
<?php        while ( have_posts() ) : the_post(); 
            $dob=get_post_meta(get_the_ID(), 'date-of-birthday', true);
            $dob= mysql2date('M j', $dob) ;
                $birthdaymonth=mysql2date('M',$dob);
                if($birthdaymonth==$current_month){                                                 
                ?>
      
<li><a href="<?php the_permalink() ?>">
    <div style="height: 110px; background: green;  width: 110px;   text-align: center;">
<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(110,110)); } ?></a>

</div>
   <div style=" height: 20px;  background: green;  width: 110px;  margin-top: 10px;  text-align: center;"> <?php echo $dob; ?></div> </li>
               <!--  <li><img src="<?php bloginfo('template_directory'); ?>/images/client1.png" alt="makemytrip"></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/client2.png" alt="makemytrip"></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/client4.png" alt="makemytrip"></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/images/client5.png" alt="makemytrip"></li>
                 <li><img src="<?php bloginfo('template_directory'); ?>/images/client6.png" alt="makemytrip"></li> -->
                  <?php  } endwhile;
                        wp_reset_query();
                        
                        ?>
            </ul>
            
        </div>
         <div class="sixteen columns">
        <div class="shadow-upper"><img src="<?php bloginfo('template_directory'); ?>/images/shadow-upper.png" alt="divider"/>
        </div></div>
        <div class="clear"></div>
    
<?php get_footer(); ?>