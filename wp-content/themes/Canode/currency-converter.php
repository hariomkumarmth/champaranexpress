<?php 
/*
  Template Name:india std code

*/
global $wpdb;  
  
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
                    <div class="form-2" style="margin-top:100px;">
                        <form  method="POST" name="pnrForm" >
                          <label ><center>Enter US Dollar </center></label>
                          <div style="margin-left: 70px;margin-top:10px;">
                          <input  class = "validateNumber" id="uscurrency" name="uscurrency" size="20" type="text" value="" required="true" maxlength="10" data-dojo-type="dijit/form/ValidationTextBox"
                                data-dojo-props="regExp:'\\d{10}',
                                invalidMessage:'Invalid Number'"></div>
                          <div style="margin-left: 100px;margin-top:10px;">
                           <input type="submit"  class="css3button" name="currency_submit" value="Submit">
                          </div>
                      </form>
                  </div>
            <?php if(isset($_POST['currency_submit'])){ 
                    if(!empty($_POST['uscurrency'])){
                        $uscurrency=$_POST['uscurrency'];
                        $url = 'http://www.google.com/ig/calculator?hl=en&q='.$uscurrency.'USD=?INR';
                        $content = file_get_contents($url);
                        $a=explode(':',$content);
                         $b= $a[2];
                         $b=explode(',',$b);
                         ?>
                         
                         <?php
                         echo '<div class="form-2" style="color:red;text-align:center;">'.$uscurrency.'  Dollar='.$b[0].'</div>';
                    }
                    else
                    {
                      echo "please enter a number";
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
